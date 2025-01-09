<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level Up Your Dev Game with AI 🚀</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <!-- Hero Section -->
    <header class="bg-gradient-to-r from-purple-600 to-blue-500 text-white relative overflow-hidden">
        <!-- Fun geometric shapes in background -->
        <div class="absolute inset-0 overflow-hidden">
            <!-- Big circles -->
            <div class="absolute -top-24 -right-24 w-96 h-96 bg-white opacity-10 rounded-full blur-xl"></div>
            <div class="absolute top-1/2 -left-48 w-96 h-96 bg-white opacity-10 rounded-full blur-xl"></div>

            <!-- Small geometric shapes -->
            <div class="absolute top-20 right-20 w-24 h-24 bg-white opacity-20 rounded-lg transform rotate-45"></div>
            <div class="absolute bottom-32 right-1/3 w-20 h-20 bg-white opacity-10 transform rotate-12">
                <div class="w-full h-full border-4 border-white rounded-lg"></div>
            </div>

            <!-- Dotted pattern -->
            <div class="absolute inset-0 grid grid-cols-8 gap-8 opacity-10">
                <div class="w-2 h-2 bg-white rounded-full"></div>
                <div class="w-2 h-2 bg-white rounded-full"></div>
                <div class="w-2 h-2 bg-white rounded-full"></div>
                <div class="w-2 h-2 bg-white rounded-full"></div>
                <div class="w-2 h-2 bg-white rounded-full"></div>
                <div class="w-2 h-2 bg-white rounded-full"></div>
            </div>

            <!-- Animated floating elements -->
            <div class="absolute top-1/4 left-1/4 w-12 h-12 opacity-20">
                <div class="w-full h-full border-2 border-white rounded-full animate-pulse"></div>
            </div>
            <div class="absolute bottom-1/4 right-1/4 w-8 h-8 opacity-20">
                <div class="w-full h-full border-2 border-white transform rotate-45 animate-bounce"></div>
            </div>
        </div>

        <div class="container mx-auto px-6 py-24 relative">
            <div class="max-w-4xl mx-auto text-center">
                <span class="bg-yellow-400 text-gray-900 px-4 py-1 rounded-full text-sm font-medium mb-6 inline-block">
                    👋 Hey there, future AI wizard!
                </span>
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    Build Awesome Stuff Faster with AI 🤖✨
                </h1>
                <p class="text-xl md:text-2xl mb-8">
                    No more boring coding sessions! Learn how to pair up with AI to build
                    cooler apps in half the time. It's like having a super-smart coding buddy!
                </p>

                <!-- Email signup with emoji -->
                <form action="#" method="POST" class="max-w-md mx-auto">
                    @csrf
                    <div class="flex gap-2">
                        <input
                            type="email"
                            name="email"
                            placeholder="Drop your email here! 📧"
                            class="flex-1 px-4 py-3 rounded-lg text-gray-900"
                            required
                        >
                        <button
                            type="submit"
                            class="bg-green-500 hover:bg-green-600 text-white px-6 py-3 rounded-lg font-semibold transform hover:scale-105 transition"
                        >
                            Count me in! 🎉
                        </button>
                    </div>
                </form>

                <!-- Social proof -->
                <div class="mt-8 text-sm opacity-90">
                    Already helping {{ $studentCount ?? '1,000+' }} devs level up their coding game! 🎮
                </div>
            </div>
        </div>
    </header>

    <!-- What's Inside Section -->
    <section class="py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-16">
                What's Inside This Awesome Course? 🎁
            </h2>
            <div class="grid md:grid-cols-3 gap-12">
                <!-- Card 1 -->
                <div class="bg-white rounded-xl p-6 shadow-lg transform hover:scale-105 transition">
                    <div class="text-4xl mb-4">🎯</div>
                    <h3 class="text-xl font-semibold mb-4">No Boring Theory Stuff</h3>
                    <p class="text-gray-600">
                        Jump straight into building cool things! We'll show you how to use AI
                        to tackle real projects, not just hello world examples.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-xl p-6 shadow-lg transform hover:scale-105 transition">
                    <div class="text-4xl mb-4">🚀</div>
                    <h3 class="text-xl font-semibold mb-4">Speed Run Your Dev Skills</h3>
                    <p class="text-gray-600">
                        Learn the tricks top developers use to write code at lightspeed with
                        AI assistants. It's like unlocking cheat codes for coding!
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-xl p-6 shadow-lg transform hover:scale-105 transition">
                    <div class="text-4xl mb-4">🎮</div>
                    <h3 class="text-xl font-semibold mb-4">Learn By Doing</h3>
                    <p class="text-gray-600">
                        Build your own AI-powered projects that you can actually show off.
                        Your portfolio is gonna look epic!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Course Modules -->
    <section class="bg-gray-100 py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-16">
                Your Learning Adventure Map 🗺️
            </h2>
            <div class="max-w-3xl mx-auto space-y-8">
                <!-- Module 1 -->
                <div class="bg-white rounded-lg p-6 shadow-sm hover:shadow-md transition">
                    <div class="flex items-start">
                        <span class="text-2xl mr-4">🎮</span>
                        <div>
                            <h3 class="text-xl font-semibold mb-4">Getting Started with AI Tools</h3>
                            <ul class="space-y-3">
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Setting up your AI-powered workspace
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Your first AI pair programming session
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Quick wins with AI code completion
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Module 2 -->
                <div class="bg-white rounded-lg p-6 shadow-sm hover:shadow-md transition">
                    <div class="flex items-start">
                        <span class="text-2xl mr-4">🚀</span>
                        <div>
                            <h3 class="text-xl font-semibold mb-4">Supercharge Your Coding</h3>
                            <ul class="space-y-3">
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Advanced AI code generation tricks
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Debugging like a pro with AI
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Automated testing and optimization
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Module 3 -->
                <div class="bg-white rounded-lg p-6 shadow-sm hover:shadow-md transition">
                    <div class="flex items-start">
                        <span class="text-2xl mr-4">🎨</span>
                        <div>
                            <h3 class="text-xl font-semibold mb-4">Building Real Projects</h3>
                            <ul class="space-y-3">
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Creating AI-powered features users love
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Building smart chatbots and assistants
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Launching your AI project portfolio
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fun Facts Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-16">
                Cool Course Facts 😎
            </h2>
            <div class="max-w-3xl mx-auto grid md:grid-cols-2 gap-8">
                <!-- Fact 1 -->
                <div class="flex items-center bg-purple-50 rounded-lg p-6">
                    <span class="text-4xl mr-4">⏱️</span>
                    <div>
                        <h3 class="font-semibold mb-1">Time to Complete</h3>
                        <p class="text-gray-600">
                            About 8 weeks (but go at your own pace - we're chill like that!)
                        </p>
                    </div>
                </div>

                <!-- Fact 2 -->
                <div class="flex items-center bg-blue-50 rounded-lg p-6">
                    <span class="text-4xl mr-4">💪</span>
                    <div>
                        <h3 class="font-semibold mb-1">Skill Level Needed</h3>
                        <p class="text-gray-600">
                            Know the basics? You're good to go! No AI PhD required 😉
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-gradient-to-r from-purple-600 to-blue-500 text-white py-20">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-8">
                Ready to Become an AI-Powered Dev? 🦾
            </h2>
            <p class="text-xl mb-8">
                Join the cool kids who are already building the future!
            </p>
            <a
                href=""
                class="bg-white text-blue-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 inline-flex items-center transform hover:scale-105 transition"
            >
                Let's Do This! 🚀
            </a>

            <!-- Guarantee -->
            <div class="mt-8 max-w-md mx-auto text-sm opacity-90">
                Not sure? No worries! We've got a 30-day money-back guarantee if it's not your jam! 🤝
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-400 py-12">
        <div class="container mx-auto px-6 text-center">
            <p>Made with 💜 by cool developers for cool developers</p>
            <div class="mt-4">
                <a href="#" class="mx-2 hover:text-white inline-flex items-center">
                    <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                    Facebook
                </a>
                <a href="#" class="mx-2 hover:text-white inline-flex items-center">
                    <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                    </svg>
                    Twitter
                </a>
                <a href="#" class="mx-2 hover:text-white inline-flex items-center">
                    <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.017 18.507c-.24.038-.476.07-.716.097a.49.49 0 01-.548-.409.5.5 0 01.405-.575c.218-.024.435-.053.654-.089 3.101-.506 5.406-3.206 5.406-6.414 0-3.578-2.89-6.478-6.455-6.478-3.565 0-6.455 2.9-6.455 6.478 0 3.208 2.305 5.908 5.406 6.414.219.036.436.065.654.089a.5.5 0 01.405.575.49.49 0 01-.548.409 12.63 12.63 0 01-.716-.097C9.868 17.61 7 14.438 7 10.617 7 6.507 9.935 3 13.763 3c3.828 0 6.763 3.507 6.763 7.617 0 3.821-2.868 6.993-5.509 7.89z"/>
                    </svg>
                    LinkedIn
                </a>
                <a href="#" class="mx-2 hover:text-white inline-flex items-center">
                    <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/>
                    </svg>
                    GitHub
                </a>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
