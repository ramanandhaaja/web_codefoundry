@extends('bootcamp.layout')

@section('title', 'Find Your Perfect Online Course')

@section('content')
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-pink-400 to-pink-500 text-white">
        <div class="max-w-7xl mx-auto py-20 px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-5xl font-bold">
                Learn Faster With The Best Experts
            </h1>
            <p class="mt-4 text-lg max-w-2xl mx-auto">
                Learn in live 1-on-1 online classes
            </p>
            <div class="mt-8">
                <form action="/search" method="GET" class="flex items-center justify-center">
                    <input type="text" name="query" placeholder="What do you want to learn?"
                        class="w-full max-w-md px-4 py-3 rounded-l-md border-0 focus:ring-2 focus:ring-pink-500 text-gray-900">
                    <button type="submit"
                        class="bg-pink-600 hover:bg-pink-700 text-white px-6 py-3 rounded-r-md text-lg font-medium">
                        Search
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Course Card -->
    <section class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-8">Featured Courses</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($courses as $course)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="aspect-w-16 aspect-h-9 bg-gray-200">
                    <!-- Placeholder course image -->
                    <div class="w-full h-40 bg-gray-200 flex items-center justify-center">
                        <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-2">
                        <!-- Placeholder avatar -->
                        <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center">
                            <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-sm font-medium text-gray-900">{{ $course['tutor_name'] }}</h3>
                            <div class="flex items-center">
                                <svg class="h-4 w-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <span class="ml-1 text-sm text-gray-500">{{ $course['rating'] ?? '0' }} ({{ $course['reviews_count'] ?? '0' }})</span>
                            </div>
                        </div>
                    </div>
                    <h4 class="text-lg font-semibold text-gray-900 mb-2">{{ $course['title'] }}</h4>
                    <p class="text-sm text-gray-600 mb-4">{{ $course['description'] }}</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-gray-900">${{ number_format($course['price'], 2) }}/hr</span>
                        <a href="/courses/{{ $course['id'] }}"
                           class="inline-flex items-center px-4 py-2 bg-pink-500 text-white rounded-md hover:bg-pink-600">
                            Book Trial
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-gray-900 text-center mb-12">
                Popular Categories
            </h2>
            <div class="grid grid-cols-2 gap-6 md:grid-cols-3 lg:grid-cols-4">

                @foreach($categories as $category)
                <a href="/category/{{ $category['slug'] }}" class="group">
                    <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-pink-100 rounded-lg flex items-center justify-center group-hover:bg-pink-200">
                                <img src="{{ $category['icon'] }}" alt="" class="w-6 h-6">
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">{{ $category['name'] }}</h3>
                                <p class="text-sm text-gray-500">{{ $category['tutor_count'] }} tutors</p>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Satisfaction Guarantee Section -->
    <div class="bg-pink-400">
        <div class="max-w-7xl mx-auto py-20 px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4 leading-tight">
                Online classes you'll love.<br>
                Satisfaction guaranteed.
            </h2>
            <p class="text-lg text-white">
                Free tutor replacement if you're not satisfied.
            </p>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="border-b border-gray-200">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 gap-8 md:grid-cols-4">
                <div class="text-center">
                    <div class="text-4xl font-bold text-gray-900 mb-2">50.000+</div>
                    <div class="text-sm text-gray-600">Experienced tutors</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-gray-900 mb-2">300.000+</div>
                    <div class="text-sm text-gray-600">5-star reviews</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-gray-900 mb-2">120+</div>
                    <div class="text-sm text-gray-600">Subjects</div>
                </div>
                <div class="text-center">
                    <div class="flex items-center justify-center">
                        <span class="text-4xl font-bold text-gray-900 mb-2">4,8</span>
                        <span class="flex ml-2 mb-2">
                            @for($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            @endfor
                        </span>
                    </div>
                    <div class="text-sm text-gray-600">on App Store</div>
                </div>
            </div>
        </div>
    </div>




    <!-- CTA Section -->
    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="bg-pink-500 rounded-2xl shadow-xl overflow-hidden">
                <div class="pt-16 pb-12 px-6 sm:pt-20 sm:px-16 lg:py-16 lg:pr-0 xl:py-20 xl:px-20">
                    <div class="lg:self-center">
                        <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                            <span class="block">Ready to start learning?</span>
                            <span class="block">Join our platform today.</span>
                        </h2>
                        <p class="mt-4 text-lg leading-6 text-pink-100">
                            Get started with a free trial lesson and experience the best online learning platform.
                        </p>
                        <a href="/register"
                           class="mt-8 bg-white text-pink-600 hover:text-pink-700 inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md hover:bg-pink-50">
                            Sign up for free
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
