<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Course;
class CourseController extends Controller
{
    public function show($category)
    {
        $Courses = [];

        switch ($category) {
            case 'all':
                $Course = Course::all();
                break;
            case 'latest':
                $Course = Course::all();
                break;
            case 'child':
                $Course = Course::all();
                break;
            case 'diy':
                $Course = Course::all();
                break;
            case 'sport':
                $Course = Course::all();
                break;
            case 'train':
                $Course = Course::all();
                break;
            case 'major':
                $Course = Course::all();
                break;
            default:
                break;
        }

        return Inertia::render('Frontend/Course', compact('Courses'));
    }
}
