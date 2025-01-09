<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Online Learning Platform')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="/" class="text-2xl font-bold text-pink-500">TechPrep</a>
                    <div class="hidden md:flex md:ml-10 md:space-x-8">
                        <a href="/courses" class="text-gray-700 hover:text-pink-500 px-3 py-2 rounded-md text-sm font-medium">Courses</a>
                        <a href="/tutors" class="text-gray-700 hover:text-pink-500 px-3 py-2 rounded-md text-sm font-medium">Tutors</a>
                        <a href="/pricing" class="text-gray-700 hover:text-pink-500 px-3 py-2 rounded-md text-sm font-medium">Pricing</a>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="/login" class="text-gray-700 hover:text-pink-500 text-sm font-medium">Log in</a>
                    <a href="/register" class="bg-pink-500 text-white hover:bg-pink-600 px-4 py-2 rounded-md text-sm font-medium">Sign up</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-100 border-t border-gray-200 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h3 class="text-sm font-semibold text-gray-900 uppercase mb-4">About</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-600 hover:text-pink-500">Company</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-pink-500">Careers</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-pink-500">Blog</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-900 uppercase mb-4">Support</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-600 hover:text-pink-500">Help Center</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-pink-500">Safety Center</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-pink-500">Community</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-900 uppercase mb-4">Legal</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-600 hover:text-pink-500">Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-pink-500">Terms of Service</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-pink-500">Cookie Policy</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-900 uppercase mb-4">Connect</h3>
                    <div class="flex space-x-6">
                        <a href="#" class="text-gray-400 hover:text-pink-500">
                            <span class="sr-only">Twitter</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-pink-500">
                            <span class="sr-only">LinkedIn</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M16 8a6 6 0 11-12 0 6 6 0 0112 0zm-4.25 10a6.5 6.5 0 110-13 6.5 6.5 0 010 13zm2.5 1a6.5 6.5 0 110-13 6.5 6.5 0 010 13z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-200 pt-8">
                <p class="text-sm text-gray-500 text-center">© 2024 TechPrep. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
