<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student;
use App\Http\Requests\StudentRequest;

class StudentController extends Controller
{
    public function index() {
        return Student::all();
    }

    public function info($id) {
        return Student::find($id);
    }

    public function store(StudentRequest $request) {
        $validated = $request->validated();
        $student = new Student($validated);
        
        if($student->save()) {
            return response()->json([
                "message" => "Student has been created"
            ], 201);
        }

        return response()->json([
            "errors_msg" => "Bad request"
        ], 400);
    }
}
