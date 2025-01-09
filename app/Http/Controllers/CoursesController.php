<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class CoursesController extends Controller
{
    public array $courses = [
        [
            'id' => 1,
            'title' => 'AI-Powered Web Development',
            'description' => 'Learn to build modern web applications with AI assistance',
            'price' => 199.99,
            'duration' => '8 weeks',
            'level' => 'Intermediate',
            'image' => null,
            'tutor_name' => 'John Doe'
        ],
        [
            'id' => 2,
            'title' => 'Machine Learning Basics',
            'description' => 'Master the fundamentals of machine learning',
            'price' => 299.99,
            'duration' => '12 weeks',
            'level' => 'Beginner',
            'image' => null,
            'tutor_name' => 'John Doe'
        ],
        [
            'id' => 3,
            'title' => 'Advanced AI Applications',
            'description' => 'Build complex AI systems and applications',
            'price' => 399.99,
            'duration' => '10 weeks',
            'level' => 'Advanced',
            'image' => null,
            'tutor_name' => 'John Doe'
        ]
    ];

    public array $categories = [
        [
            'slug' => 'web-development',
            'icon' => '/icons/web-dev.svg',
            'name' => 'Web Development',
            'tutor_count' => 45
        ],
        [
            'slug' => 'mobile-development',
            'icon' => '/icons/mobile-dev.svg',
            'name' => 'Mobile Development',
            'tutor_count' => 32
        ],
        [
            'slug' => 'data-science',
            'icon' => '/icons/data-science.svg',
            'name' => 'Data Science',
            'tutor_count' => 28
        ],
        [
            'slug' => 'ui-ux-design',
            'icon' => '/icons/design.svg',
            'name' => 'UI/UX Design',
            'tutor_count' => 36
        ]
    ];


    public function index()
    {
        $categories = $this->categories;
        $courses = $this->courses;
        return view('bootcamp.home', compact('courses', 'categories'));
    }

    public function getCourses(): array
    {
        return $this->courses;
    }

    public function show($id): JsonResponse
    {
        $course = collect($this->courses)->firstWhere('id', (int)$id);

        if (!$course) {
            return response()->json(['error' => 'Course not found'], 404);
        }

        return response()->json(['course' => $course]);
    }
}
