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
        $courses = [];

        switch ($category) {
            case 'all':
                $courses = Course::select(['course_type_id', 'name', 'start_time', 'price', 'link', 'img_path'])->get();
                break;
            case 'latest':
                $courses = Course::select(['course_type_id', 'name', 'start_time', 'price', 'link', 'img_path'])->orderBy('start_time', 'asc')->take(3)->get();
                break;
            case 'child':
                $courses = Course::where('course_type_id', 1)->select(['course_type_id', 'name', 'start_time', 'price', 'link', 'img_path'])->get();
                break;
            case 'diy':
                $courses = Course::where('course_type_id', 2)->select(['course_type_id', 'name', 'start_time', 'price', 'link', 'img_path'])->get();
                break;
            case 'sport':
                $courses = Course::where('course_type_id', 3)->select(['course_type_id', 'name', 'start_time', 'price', 'link', 'img_path'])->get();
                break;
            case 'train':
                $courses = Course::where('course_type_id', 4)->select(['course_type_id', 'name', 'start_time', 'price', 'link', 'img_path'])->get();
                break;
            case 'major':
                $courses = Course::where('course_type_id', 5)->select(['course_type_id', 'name', 'start_time', 'price', 'link', 'img_path'])->get();
                break;
            default:
                break;
        }

        return Inertia::render('Frontend/Course', ['response' => rtFormat($courses) ?? []]);
    }
}
