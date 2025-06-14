<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>EMS - Event Management System</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            primary: {
                                50: '#eef2ff',
                                100: '#e0e7ff',
                                200: '#c7d2fe',
                                300: '#a5b4fc',
                                400: '#818cf8',
                                500: '#6366f1',
                                600: '#4f46e5',
                                700: '#4338ca',
                                800: '#3730a3',
                                900: '#312e81',
                            },
                            secondary: {
                                50: '#f5f3ff',
                                100: '#ede9fe',
                                200: '#ddd6fe',
                                300: '#c4b5fd',
                                400: '#a78bfa',
                                500: '#8b5cf6',
                                600: '#7c3aed',
                                700: '#6d28d9',
                                800: '#5b21b6',
                                900: '#4c1d95',
                            },
                        },
                        fontFamily: {
                            sans: ['Inter', 'sans-serif'],
                        },
                    }
                }
            }
        </script>
        <style>
            body {
                font-family: 'Inter', sans-serif;
                scroll-behavior: smooth;
            }
            .primary-gradient {
                background: linear-gradient(135deg, #4f46e5 0%, #6366f1 100%);
            }
            .secondary-gradient {
                background: linear-gradient(135deg, #4338ca 0%, #4f46e5 100%);
            }
            .feature-gradient {
                background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
            }
            .card-hover {
                transition: all 0.3s ease;
            }
            .card-hover:hover {
                transform: translateY(-8px);
                box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            }
            .nav-link {
                position: relative;
            }
            .nav-link::after {
                content: '';
                position: absolute;
                bottom: -2px;
                left: 0;
                width: 0;
                height: 2px;
                background-color: #4f46e5;
                transition: width 0.3s ease;
            }
            .nav-link:hover::after {
                width: 100%;
            }
            .active-nav::after {
                width: 100%;
            }
            .animate-float {
                animation: float 6s ease-in-out infinite;
            }
            @keyframes float {
                0% { transform: translateY(0px); }
                50% { transform: translateY(-20px); }
                100% { transform: translateY(0px); }
            }
            .blob {
                animation: blob-animation 10s infinite alternate;
                transition: all 1s ease-in-out;
            }
            @keyframes blob-animation {
                0% { border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%; }
                50% { border-radius: 30% 60% 70% 40% / 50% 60% 30% 60%; }
                100% { border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%; }
            }
        </style>
    </head>
    <body class="antialiased bg-gray-50">
        <div class="relative min-h-screen">
            <!-- Navigation -->
            <nav class="bg-white shadow-sm sticky top-0 z-50 backdrop-blur-md bg-opacity-90">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <div class="flex-shrink-0 flex items-center">
                                <span class="text-2xl font-bold primary-gradient text-transparent bg-clip-text">EMS</span>
                            </div>
                            <div class="hidden sm:ml-8 sm:flex sm:space-x-8">
                                <a href="#home" class="nav-link active-nav text-gray-900 inline-flex items-center px-1 pt-1 text-sm font-medium">
                                    <i class="fas fa-home mr-2"></i> Home
                                </a>
                                <a href="#features" class="nav-link text-gray-600 hover:text-gray-900 inline-flex items-center px-1 pt-1 text-sm font-medium">
                                    <i class="fas fa-star mr-2"></i> Features
                                </a>
                                <a href="#how-it-works" class="nav-link text-gray-600 hover:text-gray-900 inline-flex items-center px-1 pt-1 text-sm font-medium">
                                    <i class="fas fa-info-circle mr-2"></i> How It Works
                                </a>
                                <a href="#testimonials" class="nav-link text-gray-600 hover:text-gray-900 inline-flex items-center px-1 pt-1 text-sm font-medium">
                                    <i class="fas fa-comment mr-2"></i> Testimonials
                                </a>
                                <a href="#contact" class="nav-link text-gray-600 hover:text-gray-900 inline-flex items-center px-1 pt-1 text-sm font-medium">
                                    <i class="fas fa-envelope mr-2"></i> Contact
                                </a>
                            </div>
                        </div>
                        <div class="hidden sm:ml-6 sm:flex sm:items-center">
                            <div class="ml-3 relative">
                                <div class="flex space-x-4">
                                    <a href="#" class="text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">
                                        <i class="fas fa-sign-in-alt mr-1"></i> Login
                                    </a>
                                    <a href="#" class="primary-gradient text-white px-5 py-2 rounded-lg text-sm font-medium hover:opacity-90 transition duration-300 shadow-md hover:shadow-lg">
                                        <i class="fas fa-user-plus mr-1"></i> Register
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center sm:hidden">
                            <button class="inline-flex items-center justify-center p-2 rounded-md text-gray-500 hover:text-gray-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary-500">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Hero Section -->
            <section id="home" class="bg-white overflow-hidden border-b relative">
                <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-primary-50 to-secondary-50 opacity-30"></div>
                <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-28 lg:px-8 relative z-10">
                    <div class="lg:grid lg:grid-cols-2 lg:gap-8 items-center">
                        <div>
                            <span class="inline-block py-1 px-3 rounded-full text-primary-600 bg-primary-100 text-sm font-semibold mb-4">Event Management System</span>
                            <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-6xl">
                                <span class="block mb-2">Modern Event</span>
                                <span class="block primary-gradient text-transparent bg-clip-text">Management Platform</span>
                            </h1>
                            <p class="mt-4 text-base text-gray-600 sm:mt-5 sm:text-lg sm:max-w-xl md:mt-5 md:text-xl">
                                Streamline your event planning process with our comprehensive platform. Create, organize, and track events effortlessly with powerful analytics and intuitive tools.
                            </p>
                            <div class="mt-8 sm:flex gap-4">
                                <a href="#" class="w-full sm:w-auto inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-lg text-white primary-gradient hover:opacity-90 md:py-4 md:text-lg transition duration-300 shadow-lg">
                                    <i class="fas fa-rocket mr-2"></i> Get Started
                                </a>
                                <a href="#" class="mt-3 sm:mt-0 w-full sm:w-auto inline-flex items-center justify-center px-6 py-3 border-2 border-primary-600 text-base font-medium rounded-lg text-primary-600 bg-transparent hover:bg-primary-50 md:py-4 md:text-lg transition duration-300">
                                    <i class="fas fa-play-circle mr-2"></i> Watch Demo
                                </a>
                            </div>
                            <div class="mt-8 flex items-center">
                                <div class="flex -space-x-2">
                                    <img src="/api/placeholder/40/40" alt="User" class="w-10 h-10 rounded-full border-2 border-white"/>
                                    <img src="/api/placeholder/40/40" alt="User" class="w-10 h-10 rounded-full border-2 border-white"/>
                                    <img src="/api/placeholder/40/40" alt="User" class="w-10 h-10 rounded-full border-2 border-white"/>
                                </div>
                                <div class="ml-3">
                                    <span class="text-sm font-medium text-gray-900">Join 2,000+ event organizers</span>
                                    <div class="flex items-center">
                                        <div class="flex text-amber-400">
                                            <i class="fas fa-star text-xs"></i>
                                            <i class="fas fa-star text-xs"></i>
                                            <i class="fas fa-star text-xs"></i>
                                            <i class="fas fa-star text-xs"></i>
                                            <i class="fas fa-star-half-alt text-xs"></i>
                                        </div>
                                        <span class="ml-1 text-xs text-gray-500">4.8/5 (350+ reviews)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-12 lg:mt-0 flex justify-center">
                            <div class="w-full max-w-lg relative animate-float">
                                <div class="absolute -top-10 -right-10 w-40 h-40 bg-primary-200 rounded-full opacity-30 blob"></div>
                                <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-secondary-200 rounded-full opacity-30 blob"></div>
                                <div class="relative bg-white p-8 rounded-2xl shadow-xl">
                                    <div class="p-1 mb-6 inline-block bg-primary-100 text-primary-600 rounded-lg">
                                        <i class="fas fa-calendar-check text-lg p-2"></i>
                                    </div>
                                    <h3 class="text-xl font-bold text-gray-800 mb-2">Event Dashboard</h3>
                                    <div class="space-y-4">
                                        <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                                            <div class="w-8 h-8 rounded-md bg-green-100 flex items-center justify-center text-green-600 mr-3">
                                                <i class="fas fa-check"></i>
                                            </div>
                                            <div>
                                                <h4 class="text-sm font-medium text-gray-800">Annual Tech Conference</h4>
                                                <p class="text-xs text-gray-500">May 15-18, 2025</p>
                                            </div>
                                            <div class="ml-auto">
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Live</span>
                                            </div>
                                        </div>
                                        <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                                            <div class="w-8 h-8 rounded-md bg-blue-100 flex items-center justify-center text-blue-600 mr-3">
                                                <i class="fas fa-clock"></i>
                                            </div>
                                            <div>
                                                <h4 class="text-sm font-medium text-gray-800">Product Launch Webinar</h4>
                                                <p class="text-xs text-gray-500">June 5, 2025</p>
                                            </div>
                                            <div class="ml-auto">
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">Planning</span>
                                            </div>
                                        </div>
                                        <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                                            <div class="w-8 h-8 rounded-md bg-amber-100 flex items-center justify-center text-amber-600 mr-3">
                                                <i class="fas fa-users"></i>
                                            </div>
                                            <div>
                                                <h4 class="text-sm font-medium text-gray-800">Team Building Retreat</h4>
                                                <p class="text-xs text-gray-500">July 10-12, 2025</p>
                                            </div>
                                            <div class="ml-auto">
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-800">Upcoming</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-6">
                                        <button class="w-full flex items-center justify-center px-4 py-2 text-sm text-primary-600 border border-primary-200 rounded-lg hover:bg-primary-50 transition duration-300">
                                            <i class="fas fa-plus mr-2"></i> Add New Event
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="absolute bottom-0 left-0 w-full h-16 bg-gradient-to-b from-transparent to-white"></div>
            </section>

            <!-- Features Section -->
            <section id="features" class="py-16 bg-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center max-w-3xl mx-auto">
                        <span class="inline-block py-1 px-3 rounded-full text-primary-600 bg-primary-100 text-sm font-semibold mb-4">Powerful Features</span>
                        <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                            Everything you need for successful events
                        </h2>
                        <p class="mt-4 text-xl text-gray-500">
                            Our comprehensive platform provides all the tools you need to plan, organize, and execute exceptional events.
                        </p>
                    </div>

                    <div class="mt-16 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                        <div class="bg-white rounded-xl shadow-lg p-8 transition duration-300 card-hover border border-gray-100">
                            <div class="w-12 h-12 rounded-xl feature-gradient flex items-center justify-center text-white mb-6">
                                <i class="fas fa-calendar-alt text-lg"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Event Scheduling</h3>
                            <p class="text-gray-600 mb-6">
                                Create and manage multiple events with our intuitive calendar interface. Set dates, times, and locations with ease.
                            </p>
                            <a href="#" class="inline-flex items-center text-primary-600 hover:text-primary-700 font-medium">
                                Learn more <i class="fas fa-arrow-right ml-2 text-sm"></i>
                            </a>
                        </div>

                        <div class="bg-white rounded-xl shadow-lg p-8 transition duration-300 card-hover border border-gray-100">
                            <div class="w-12 h-12 rounded-xl feature-gradient flex items-center justify-center text-white mb-6">
                                <i class="fas fa-users text-lg"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Attendee Management</h3>
                            <p class="text-gray-600 mb-6">
                                Track registrations, send invitations, and manage attendee information with powerful segmentation tools.
                            </p>
                            <a href="#" class="inline-flex items-center text-primary-600 hover:text-primary-700 font-medium">
                                Learn more <i class="fas fa-arrow-right ml-2 text-sm"></i>
                            </a>
                        </div>

                        <div class="bg-white rounded-xl shadow-lg p-8 transition duration-300 card-hover border border-gray-100">
                            <div class="w-12 h-12 rounded-xl feature-gradient flex items-center justify-center text-white mb-6">
                                <i class="fas fa-ticket-alt text-lg"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Ticketing System</h3>
                            <p class="text-gray-600 mb-6">
                                Create multiple ticket types with custom pricing. Generate and distribute digital tickets with QR codes.
                            </p>
                            <a href="#" class="inline-flex items-center text-primary-600 hover:text-primary-700 font-medium">
                                Learn more <i class="fas fa-arrow-right ml-2 text-sm"></i>
                            </a>
                        </div>

                        <div class="bg-white rounded-xl shadow-lg p-8 transition duration-300 card-hover border border-gray-100">
                            <div class="w-12 h-12 rounded-xl feature-gradient flex items-center justify-center text-white mb-6">
                                <i class="fas fa-credit-card text-lg"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Payment Processing</h3>
                            <p class="text-gray-600 mb-6">
                                Accept payments through multiple gateways, with support for international currencies and tax calculations.
                            </p>
                            <a href="#" class="inline-flex items-center text-primary-600 hover:text-primary-700 font-medium">
                                Learn more <i class="fas fa-arrow-right ml-2 text-sm"></i>
                            </a>
                        </div>

                        <div class="bg-white rounded-xl shadow-lg p-8 transition duration-300 card-hover border border-gray-100">
                            <div class="w-12 h-12 rounded-xl feature-gradient flex items-center justify-center text-white mb-6">
                                <i class="fas fa-chart-line text-lg"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Analytics & Insights</h3>
                            <p class="text-gray-600 mb-6">
                                Get comprehensive analytics on ticket sales, attendee engagement, and financial performance with visual reports.
                            </p>
                            <a href="#" class="inline-flex items-center text-primary-600 hover:text-primary-700 font-medium">
                                Learn more <i class="fas fa-arrow-right ml-2 text-sm"></i>
                            </a>
                        </div>

                        <div class="bg-white rounded-xl shadow-lg p-8 transition duration-300 card-hover border border-gray-100">
                            <div class="w-12 h-12 rounded-xl feature-gradient flex items-center justify-center text-white mb-6">
                                <i class="fas fa-bullhorn text-lg"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Marketing Tools</h3>
                            <p class="text-gray-600 mb-6">
                                Promote your events with email campaigns, social media integration, and custom landing pages.
                            </p>
                            <a href="#" class="inline-flex items-center text-primary-600 hover:text-primary-700 font-medium">
                                Learn more <i class="fas fa-arrow-right ml-2 text-sm"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- How It Works Section -->
            <section id="how-it-works" class="py-16 bg-gray-50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center max-w-3xl mx-auto">
                        <span class="inline-block py-1 px-3 rounded-full text-primary-600 bg-primary-100 text-sm font-semibold mb-4">Simple Process</span>
                        <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                            How EMS Works
                        </h2>
                        <p class="mt-4 text-xl text-gray-500">
                            Four simple steps to create and manage successful events
                        </p>
                    </div>

                    <div class="mt-16">
                        <div class="relative">
                            <!-- Connect line -->
                            <div class="hidden lg:block absolute w-full h-0.5 bg-gray-200 top-24 left-0 right-0 z-0"></div>
                            
                            <div class="relative z-10 grid grid-cols-1 gap-12 lg:grid-cols-4">
                                <div class="bg-white rounded-xl shadow-lg p-8 transition duration-300 card-hover border border-gray-100 text-center">
                                    <div class="w-16 h-16 rounded-full primary-gradient flex items-center justify-center text-white text-xl font-bold mx-auto -mt-16 border-4 border-white shadow-md">
                                        1
                                    </div>
                                    <div class="mt-6">
                                        <h3 class="text-xl font-bold text-gray-900 mb-3">Create Event</h3>
                                        <p class="text-gray-600">
                                            Define event details, set up ticket types, and customize your event page
                                        </p>
                                    </div>
                                </div>

                                <div class="bg-white rounded-xl shadow-lg p-8 transition duration-300 card-hover border border-gray-100 text-center">
                                    <div class="w-16 h-16 rounded-full primary-gradient flex items-center justify-center text-white text-xl font-bold mx-auto -mt-16 border-4 border-white shadow-md">
                                        2
                                    </div>
                                    <div class="mt-6">
                                        <h3 class="text-xl font-bold text-gray-900 mb-3">Promote</h3>
                                        <p class="text-gray-600">
                                            Send invitations, share on social media, and use marketing tools
                                        </p>
                                    </div>
                                </div>

                                <div class="bg-white rounded-xl shadow-lg p-8 transition duration-300 card-hover border border-gray-100 text-center">
                                    <div class="w-16 h-16 rounded-full primary-gradient flex items-center justify-center text-white text-xl font-bold mx-auto -mt-16 border-4 border-white shadow-md">
                                        3
                                    </div>
                                    <div class="mt-6">
                                        <h3 class="text-xl font-bold text-gray-900 mb-3">Manage</h3>
                                        <p class="text-gray-600">
                                            Track registrations, process payments, and communicate with attendees
                                        </p>
                                    </div>
                                </div>

                                <div class="bg-white rounded-xl shadow-lg p-8 transition duration-300 card-hover border border-gray-100 text-center">
                                    <div class="w-16 h-16 rounded-full primary-gradient flex items-center justify-center text-white text-xl font-bold mx-auto -mt-16 border-4 border-white shadow-md">
                                        4
                                    </div>
                                    <div class="mt-6">
                                        <h3 class="text-xl font-bold text-gray-900 mb-3">Analyze</h3>
                                        <p class="text-gray-600">
                                            Review insights, measure success, and improve future events
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="text-center mt-12">
                            <a href="#" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-lg text-white primary-gradient hover:opacity-90 transition duration-300 shadow-md">
                                <i class="fas fa-tv mr-2"></i> Watch Platform Demo
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Technology Section -->
            <section class="py-16 bg-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center max-w-3xl mx-auto">
                        <span class="inline-block py-1 px-3 rounded-full text-primary-600 bg-primary-100 text-sm font-semibold mb-4">Powerful Technology</span>
                        <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                            Built with modern technologies
                        </h2>
                        <p class="mt-4 text-xl text-gray-500">
                            Our platform leverages cutting-edge technologies for reliability, security, and performance
                        </p>
                    </div>

                    <div class="mt-16 grid grid-cols-2 gap-8 md:grid-cols-4">
                        <div class="flex flex-col items-center p-6">
                            <div class="h-16 w-16 flex items-center justify-center mb-4">
                                <i class="fab fa-laravel text-red-500 text-4xl"></i>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900">Laravel</h3>
                        </div>
                        <div class="flex flex-col items-center p-6">
                            <div class="h-16 w-16 flex items-center justify-center mb-4">
                                <i class="fas fa-database text-blue-500 text-4xl"></i>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900">MySQL</h3>
                        </div>
                        <div class="flex flex-col items-center p-6">
                            <div class="h-16 w-16 flex items-center justify-center mb-4">
                                <i class="fab fa-js text-yellow-500 text-4xl"></i>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900">JavaScript</h3>
                        </div>
                        <div class="flex flex-col items-center p-6">
                            <div class="h-16 w-16 flex items-center justify-center mb-4">
                                <i class="fab fa-aws text-orange-500 text-4xl"></i>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900">AWS Cloud</h3>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Testimonials Section -->
            <section id="testimonials" class="py-16 bg-gray-50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center max-w-3xl mx-auto">
                        <span class="inline-block py-1 px-3 rounded-full text-primary                <div class="mt-16 grid grid-cols-1 gap-8 md\:grid-cols-2 lg\:grid-cols-3">
                    <div class="bg-white rounded-xl shadow-lg p-8 transition duration-300 card-hover border border-gray-100">
                        <div class="flex items-center mb-4">
                            <img src="/api/placeholder/40/40" alt="User" class="w-12 h-12 rounded-full border-2 border-white"/>
                            <div class="ml-4">
                                <h4 class="text-lg font-semibold text-gray-900">John Doe</h4>
                                <p class="text-sm text-gray-500">Event Organizer</p>
                            </div>
                        </div>
                        <p class="text-gray-600">
                            "EMS has revolutionized the way we manage our events. The platform is intuitive, and the support team is always ready to help."
                        </p>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg p-8 transition duration-300 card-hover border border-gray-100">
                        <div class="flex items-center mb-4">
                            <img src="/api/placeholder/40/40" alt="User" class="w-12 h-12 rounded-full border-2 border-white"/>
                            <div class="ml-4">
                                <h4 class="text-lg font-semibold text-gray-900">Jane Smith</h4>
                                <p class="text-sm text-gray-500">Marketing Manager</p>
                            </div>
                        </div>
                        <p class="text-gray-600">
                            "The marketing tools provided by EMS have significantly increased our event attendance. Highly recommend it!"
                        </p>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg p-8 transition duration-300 card-hover border border-gray-100">
                        <div class="flex items-center mb-4">
                            <img src="/api/placeholder/40/40" alt="User" class="w-12 h-12 rounded-full border-2 border-white"/>
                            <div class="ml-4">
                                <h4 class="text-lg font-semibold text-gray-900">Emily Johnson</h4>
                                <p class="text-sm text-gray-500">Event Planner</p>
                            </div>
                        </div>
                        <p class="text-gray-600">
                            "EMS makes it easy to keep track of all event details in one place. The analytics features are a game-changer."
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm\:px-6 lg\:px-8">
                <div class="text-center max-w-3xl mx-auto">
                    <span class="inline-block py-1 px-3 rounded-full text-primary-600 bg-primary-100 text-sm font-semibold mb-4">Get in Touch</span>
                    <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm\:text-4xl">
                        Contact Us
                    </h2>
                    <p class="mt-4 text-xl text-gray-500">
                        Have questions or need support? Reach out to our team today.
                    </p>
                </div>

                <div class="mt-16 grid grid-cols-1 gap-12 md\:grid-cols-2">
                    <div class="bg-white rounded-xl shadow-lg p-8 transition duration-300 card-hover border border-gray-100">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Contact Information</h3>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <i class="fas fa-map-marker-alt text-primary-600 mr-3"></i>
                                <p class="text-gray-600">123 Event Street, City, Country</p>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-phone-alt text-primary-600 mr-3"></i>
                                <p class="text-gray-600">+1 (123) 456-7890</p>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-envelope text-primary-600 mr-3"></i>
                                <p class="text-gray-600">info@eventmanagement.com</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg p-8 transition duration-300 card-hover border border-gray-100">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Send Us a Message</h3>
                        <form action="#" method="POST">
                            <div class="mb-4">
                                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                <input type="text" id="name" name="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus\:border-primary-500 focus\:ring-primary-500 sm\:text-sm" required>
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" id="email" name="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus\:border-primary-500 focus\:ring-primary-500 sm\:text-sm" required>
                            </div>
                            <div class="mb-4">
                                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                                <textarea id="message" name="message" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus\:border-primary-500 focus\:ring-primary-500 sm\:text-sm" required></textarea>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-lg text-white primary-gradient hover\:opacity-90 transition duration-300 shadow-md">
                                    <i class="fas fa-paper-plane mr-2"></i> Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-gray-800 text-white py-8">
            <div class="max-w-7xl mx-auto px-4 sm\:px-6 lg\:px-8">
                <div class="flex flex-col md\:flex-row md\:justify-between">
                    <div class="flex-1 mb-4 md\:mb-0">
                        <h3 class="text-lg font-bold">EMS</h3>
                        <p class="mt-2 text-gray-400">Streamline your event management with our powerful platform.</p>
                    </div>
                    <div class="flex space-x-6">
                        <a href="#" class="text-gray-400 hover\:text-white">
                            <i class="fab fa-facebook-f text-lg"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover\:text-white">
                            <i class="fab fa-twitter text-lg"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover\:text-white">
                            <i class="fab fa-linkedin-in text-lg"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover\:text-white">
                            <i class="fab fa-instagram text-lg"></i>
                        </a>
                    </div>
                </div>
                <div class="mt-8 border-t border-gray-700 pt-8">
                    <p class="text-sm text-gray-400 text-center">&copy; 2025 EMS. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>
</body>
