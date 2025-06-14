<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function createEvent(Request $request)
    {
        if (!Auth::check()) {
            return response()->json(['error' => 'Unauthorized. Please log in first.'], 401);
        }

        // Validate request
        $request->validate([
            'event_name' => 'required|string',
            'date' => 'required|date',
            'venue' => 'required|string',
            'description' => 'required|string',
            'status' => 'in:upcoming,ongoing,completed',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048' // Validate image
        ]);

        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
        }

        // Create event
        $event = Event::create([
            'event_name' => $request->event_name,
            'date' => $request->date,
            'venue' => $request->venue,
            'description' => $request->description,
            'status' => $request->status ?? 'upcoming',
            'organizer_id' => Auth::id(),
            'image_path' => $imagePath, // Store image path
        ]);

        return response()->json(['message' => 'Event created successfully!', 'event' => $event], 201);
    }

    public function updateEvent(Request $request, $id)
    {
        $event = Event::where('id', $id)->where('organizer_id', Auth::id())->first();

        if (!$event) {
            return response()->json(['error' => 'Unauthorized or Event not found'], 403);
        }

        $request->validate([
            'event_name' => 'sometimes|string',
            'date' => 'sometimes|date',
            'venue' => 'sometimes|string',
            'description' => 'sometimes|string',
            'status' => 'sometimes|in:upcoming,ongoing,completed',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Handle image update
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($event->image_path) {
                Storage::disk('public')->delete($event->image_path);
            }

            // Upload new image
            $event->image_path = $request->file('image')->store('uploads', 'public');
        }

        $event->update($request->except('image'));

        return response()->json(['message' => 'Event updated successfully!', 'event' => $event]);
    }

    public function deleteEvent($id)
    {
        $event = Event::where('id', $id)->where('organizer_id', Auth::id())->first();

        if (!$event) {
            return response()->json(['error' => 'Unauthorized or Event not found'], 403);
        }

        // Delete image if exists
        if ($event->image_path) {
            Storage::disk('public')->delete($event->image_path);
        }

        $event->delete();

        return response()->json(['message' => 'Event deleted successfully!']);
    }

    public function getAllEvents()
    {
        $events = Event::where('organizer_id', Auth::id())->get();

        // Append full image URL
        $events->transform(function ($event) {
            $event->image_path = $event->image_path ? asset('storage/' . $event->image_path) : null;
            return $event;
        });

        return response()->json(['events' => $events]);
    }

    public function viewEvent()
    {
        $event = Event::where('organizer_id', Auth::id())->latest()->first(); // Get most recent event

        if (!$event) {
            return response()->json(['error' => 'No events found'], 404);
        }

        return response()->json(['event' => $event]);
    }
}
