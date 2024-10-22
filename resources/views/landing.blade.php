<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Landing Page</title>
    <!-- Include Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="antialiased">
    <div class="min-h-screen bg-gray-100 flex flex-col">
        <!-- Header -->
        <header class="bg-white shadow fixed top-0 left-0 right-0 z-50">
            <nav class="container mx-auto px-6 py-3">
                <div class="flex justify-between items-center">
                    <div>
                        <a href="#" class="text-gray-800 text-xl font-bold md:text-2xl">Laravel<span class="text-red-500">App</span></a>
                    </div>
                    <div class="hidden md:flex items-center space-x-4">
                        <a href="#home" class="text-gray-800 hover:text-red-500">Home</a>
                        <a href="#features" class="text-gray-800 hover:text-red-500">Features</a>
                        <a href="#pricing" class="text-gray-800 hover:text-red-500">Pricing</a>
                        <a href="#contact" class="text-gray-800 hover:text-red-500">Contact</a>
                    </div>
                    <div class="md:hidden">
                        <!-- Mobile menu button -->
                        <button id="mobile-menu-button" class="text-gray-800 hover:text-red-500 focus:outline-none">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <!-- Mobile menu -->
                <div id="mobile-menu" class="md:hidden hidden mt-4">
                    <a href="#home" class="block py-2 text-gray-800 hover:text-red-500">Home</a>
                    <a href="#features" class="block py-2 text-gray-800 hover:text-red-500">Features</a>
                    <a href="#pricing" class="block py-2 text-gray-800 hover:text-red-500">Pricing</a>
                    <a href="#contact" class="block py-2 text-gray-800 hover:text-red-500">Contact</a>
                </div>
            </nav>
        </header>

        <!-- Hero Section -->
        <main class="mt-20">
            <div id="home" class="container mx-auto px-6 py-16">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2">
                        <h1 class="text-4xl font-bold text-gray-800 mb-4">
                            Build Amazing Web Applications with Laravel
                        </h1>
                        <p class="text-xl text-gray-600 mb-8">
                            Laravel is the PHP framework for web artisans. Create robust, scalable, and beautiful applications with ease.
                        </p>
                        <div class="flex space-x-4">
                            <a href="#" class="bg-red-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-red-600 transition duration-300">
                                Get Started
                            </a>
                            <a href="#" class="bg-gray-200 text-gray-800 px-6 py-3 rounded-lg font-semibold hover:bg-gray-300 transition duration-300">
                                Learn More
                            </a>
                        </div>
                    </div>
                    <div class="md:w-1/2 mt-10 md:mt-0">
                        <img src="https://laravel.com/img/homepage/vapor.jpg" alt="Laravel Application" class="rounded-lg shadow-xl">
                    </div>
                </div>
            </div>
        </main>

        <!-- Feature Section -->
        <section id="features" class="bg-white py-20">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">
                    Powerful Features for Modern Web Development
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Feature 1 -->
                    <div class="bg-gray-100 rounded-lg p-6 hover:shadow-lg transition duration-300">
                        <div class="text-red-500 mb-4">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Rapid Development</h3>
                        <p class="text-gray-600">
                            Laravel's expressive, elegant syntax lets you focus on creating without losing productivity. Build robust applications quickly and efficiently.
                        </p>
                    </div>
                    <!-- Feature 2 -->
                    <div class="bg-gray-100 rounded-lg p-6 hover:shadow-lg transition duration-300">
                        <div class="text-red-500 mb-4">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Security Out of the Box</h3>
                        <p class="text-gray-600">
                            Laravel provides robust security features including protection against SQL injection, cross-site scripting, and CSRF attacks right out of the box.
                        </p>
                    </div>
                    <!-- Feature 3 -->
                    <div class="bg-gray-100 rounded-lg p-6 hover:shadow-lg transition duration-300">
                        <div class="text-red-500 mb-4">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Database Made Simple</h3>
                        <p class="text-gray-600">
                            Laravel's database ORM, Eloquent, provides a simple ActiveRecord implementation for working with your database. Each database table has a corresponding Model for interaction.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Section -->
        <section id="pricing" class="bg-gray-100 py-20">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">
                    Choose the Perfect Plan for Your Project
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Basic Plan -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col h-full">
                        <div class="p-8 flex-grow">
                            <h3 class="text-2xl font-semibold text-gray-800 mb-2">Basic</h3>
                            <p class="text-gray-600 mb-6">For small projects and startups</p>
                            <div class="text-4xl font-bold text-gray-800 mb-6">$19<span class="text-xl text-gray-600 font-normal">/month</span></div>
                            <ul class="text-sm text-gray-600 mb-6">
                                <li class="mb-2 flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    5 Projects
                                </li>
                                <li class="mb-2 flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    20GB Storage
                                </li>
                                <li class="mb-2 flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    Community Support
                                </li>
                            </ul>
                        </div>
                        <div class="p-4 mt-auto">
                            <button class="w-full bg-red-500 text-white rounded-lg px-4 py-2 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 transition duration-300">
                                Choose Plan
                            </button>
                        </div>
                    </div>
                    <!-- Pro Plan -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col h-full border-2 border-red-500">
                        <div class="p-8 flex-grow">
                            <h3 class="text-2xl font-semibold text-gray-800 mb-2">Pro</h3>
                            <p class="text-gray-600 mb-6">For growing businesses</p>
                            <div class="text-4xl font-bold text-gray-800 mb-6">$49<span class="text-xl text-gray-600 font-normal">/month</span></div>
                            <ul class="text-sm text-gray-600 mb-6">
                                <li class="mb-2 flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    Unlimited Projects
                                </li>
                                <li class="mb-2 flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    100GB Storage
                                </li>
                                <li class="mb-2 flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    Priority Support
                                </li>
                                <li class="mb-2 flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    Advanced Security
                                </li>
                            </ul>
                        </div>
                        <div class="p-4 mt-auto">
                            <button class="w-full bg-red-500 text-white rounded-lg px-4 py-2 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 transition duration-300">
                                Choose Plan
                            </button>
                        </div>
                    </div>
                    <!-- Enterprise Plan -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden flex  flex-col h-full">
                        <div class="p-8 flex-grow">
                            <h3 class="text-2xl font-semibold text-gray-800 mb-2">Enterprise</h3>
                            <p class="text-gray-600 mb-6">For large scale applications</p>
                            <div class="text-4xl font-bold text-gray-800 mb-6">$99<span class="text-xl text-gray-600 font-normal">/month</span></div>
                            <ul class="text-sm text-gray-600 mb-6">
                                <li class="mb-2 flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19  7"></path></svg>
                                    Unlimited Everything
                                </li>
                                <li class="mb-2 flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    24/7 Dedicated Support
                                </li>
                                <li class="mb-2 flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    Custom Integrations
                                </li>
                                <li class="mb-2 flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    Advanced Analytics
                                </li>
                            </ul>
                        </div>
                        <div class="p-4 mt-auto">
                            <button class="w-full bg-red-500 text-white rounded-lg px-4 py-2 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 transition duration-300">
                                Choose Plan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="bg-white py-20">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">
                    Get in Touch
                </h2>
                <div class="max-w-lg mx-auto">
                    <form action="" method="POST" class="grid grid-cols-1 gap-6">
                        @csrf
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" name="name" id="name" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring focus:ring-red-500 focus:ring-opacity-50">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" name="email" id="email" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring focus:ring-red-500 focus:ring-opacity-50">
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                            <textarea name="message" id="message" rows="4" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring focus:ring-red-500 focus:ring-opacity-50"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="w-full bg-red-500 text-white rounded-lg px-4 py-2 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 transition duration-300">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-gray-800 text-white py-12 mt-auto">
            <div class="container mx-auto px-6">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="mb-8 md:mb-0">
                        <h3 class="text-2xl font-bold mb-4">LaravelApp</h3>
                        <p class="text-gray-400">Building amazing web applications with Laravel.</p>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Site Map</h4>
                        <ul class="space-y-2">
                            <li><a href="#home" class="text-gray-400 hover:text-white transition duration-300">Home</a></li>
                            <li><a href="#features" class="text-gray-400 hover:text-white transition duration-300">Features</a></li>
                            <li><a href="#pricing" class="text-gray-400 hover:text-white transition duration-300">Pricing</a></li>
                            <li><a href="#contact" class="text-gray-400 hover:text-white transition duration-300">Contact</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Resources</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Documentation</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">API Reference</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Blog</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Community</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Legal</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Privacy Policy</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Terms of Service</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Cookie Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                    <p>&copy; 2023 LaravelApp. All rights reserved.</p>
                </div>
            </div>
        </footer>

    </div>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });

                // Close mobile menu after clicking a link
                mobileMenu.classList.add('hidden');
            });
        });
    </script>
</body>
</html>
