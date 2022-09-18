<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['students'] = Student::all();
        return view('pages.administrator.students.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        try{
            DB::beginTransaction();
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'role' => '0'
            ]);

            if($request->file()){
                $image_path = $user->id;
                $request->file('image')->move(public_path('images/student'), $file_name);
            }

            Student::create([
                "name" => $request->input('name'),
                "user_id" => $user->id,
                "phone" => $request->input('phone'),
                "year" => $request->input('year'),
                "gender" => $request->input('gender'),
                "date_of_birth" => $request->input('date_of_birth'),
                "address" => $request->input('address'),
                "image_path" => $image_path,
            ]);

            DB::commit();
            return response()->json([
                "message" => "Student added."
            ], 200);
        }catch(Exception $e){
            DB::rollBack();
            return response()->json([
                "error" => $e->getMessage()
            ], 403);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        if(!$student){
            abort(404);
        }
        $user = User::find($student['user_id']);
        $student['email'] = $user['email'];
        return response()->json([
            'student' => $student
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        if(!$student){
            abort(404);
        }
        return response()->json([
            'student' => $student
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
