<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AuthController;

// Auth Routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);

// Protected Routes
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/events/add', [EventController::class, 'createEvent']); // Create event
    Route::get('/events', [EventController::class, 'getAllEvents']); // Get all events
    Route::get('/events/view', [EventController::class, 'viewEvent']); // View latest event
    Route::put('/events/{id}', [EventController::class, 'updateEvent']); // Update event
    Route::delete('/events/{id}', [EventController::class, 'deleteEvent']); // Delete event
});




Route::get('/', function () {
    return view('welcome'); // Yeh Laravel ka default welcome page kholega
});

Route::get('/test', function () {
    return response()->json(["message" => "API is working!"]);
});