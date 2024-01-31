<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Course;

class CourseController extends Controller
{

    public function get_course($input){
        $courses = [];
        $courses = Course::where('course_type_id', $input)->select(['course_type_id', 'name', 'start_time', 'price', 'link', 'img_path'])->get();
        return Inertia::render('Frontend/Course', ['response' => rtFormat($courses) ?? []]);
    }
    public function all()
    {
        $courses = [];
        $courses = Course::select(['course_type_id', 'name', 'start_time', 'price', 'link', 'img_path'])->get();
        return Inertia::render('Frontend/Course', ['response' => rtFormat($courses) ?? []]);
    }

    public function latest()
    {
        $courses = [];
        $courses = Course::select(['course_type_id', 'name', 'start_time', 'price', 'link', 'img_path'])->orderBy('start_time', 'asc')->take(3)->get();
        return Inertia::render('Frontend/Course', ['response' => rtFormat($courses) ?? []]);
    }

}
