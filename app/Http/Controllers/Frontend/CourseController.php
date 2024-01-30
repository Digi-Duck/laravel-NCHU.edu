<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Course;

class CourseController extends Controller
{

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
    public function child()
    {
        $courses = [];
         $courses = Course::where('course_type_id', 1)->select(['course_type_id', 'name', 'start_time', 'price', 'link', 'img_path'])->get();
        return Inertia::render('Frontend/Course', ['response' => rtFormat($courses) ?? []]);
    }
    public function diy()
    {
        $courses = [];
         $courses = Course::where('course_type_id', 2)->select(['course_type_id', 'name', 'start_time', 'price', 'link', 'img_path'])->get();
        return Inertia::render('Frontend/Course', ['response' => rtFormat($courses) ?? []]);
    }
    public function sport()
    {
        $courses = [];
         $courses = Course::where('course_type_id', 3)->select(['course_type_id', 'name', 'start_time', 'price', 'link', 'img_path'])->get();
        return Inertia::render('Frontend/Course', ['response' => rtFormat($courses) ?? []]);
    }
    public function train()
    {
        $courses = [];
         $courses = Course::where('course_type_id', 4)->select(['course_type_id', 'name', 'start_time', 'price', 'link', 'img_path'])->get();
        return Inertia::render('Frontend/Course', ['response' => rtFormat($courses) ?? []]);
    }
    public function major()
    {
        $courses = [];
         $courses = Course::where('course_type_id', 5)->select(['course_type_id', 'name', 'start_time', 'price', 'link', 'img_path'])->get();
        return Inertia::render('Frontend/Course', ['response' => rtFormat($courses) ?? []]);
    }


}
