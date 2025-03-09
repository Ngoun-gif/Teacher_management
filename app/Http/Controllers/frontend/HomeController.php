<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $teachersdetails = DB::table('teacherdetails')
            ->join('teachers', 'teacherdetails.teacher_id', '=', 'teachers.id')
            ->join('schedules', 'teacherdetails.schedule_id', '=', 'schedules.id')
            ->join('majors', 'teacherdetails.major_id', '=', 'majors.id')
            ->join('courses', 'teacherdetails.course_id', '=', 'courses.id')
            ->join('subjects', 'teacherdetails.subject_id', '=', 'subjects.id')

            ->select(
                'teacherdetails.*',
                'teachers.teacher_name',
                'teachers.teacher_image',
                'schedules.schedule_day',
                'majors.major_type',
                'courses.course_name',
                'courses.course_price',
                'subjects.subject_name',
            )
            ->get();
        $teachers = DB::table('teachers')->count();
        return view("frontend.home.index")->with('teacherdetails', $teachersdetails)->with('teachers', $teachers);
    }
}
