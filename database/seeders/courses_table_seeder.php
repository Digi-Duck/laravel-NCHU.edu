<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\CourseType;
use App\Models\Course;


class courses_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::truncate();
        
        $names = file_get_contents(database_path('seeders/course_texts/courses_names.txt'));
        $contents = file_get_contents(database_path('seeders/course_texts/courses_contents.txt'));
        $start_times = file_get_contents(database_path('seeders/course_texts/courses_start_times.txt'));
        $end_times = file_get_contents(database_path('seeders/course_texts/courses_end_times.txt'));
        $prices = file_get_contents(database_path('seeders/course_texts/courses_prices.txt'));
        $links = file_get_contents(database_path('seeders/course_texts/courses_links.txt'));
        $img_paths = file_get_contents(database_path('seeders/course_texts/courses_img_paths.txt'));
        $index = 0;
        $courseTypes = CourseType::all();

        foreach ($courseTypes as $courseType) {
            Course::insert([
                'name' => $names[$index],
                'course_type_id' => $courseType->id,
                'start_time' => now()->format('Y-m-d'),
                'end_time' => now()->addDays(30)->format('Y-m-d'),
                'price' => rand(0, 5000),
                'content' => '',
                'link' => 'https://www.instagram.com/weiwei_0731_/?hl=zh-tw',
                'img_path' => '/test/wei.svg',
            ]);
            $index++;
        }
    }
}
