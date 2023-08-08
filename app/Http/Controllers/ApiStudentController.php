<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
use App\Http\Resources\StudentResource;

class ApiStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $students = Students::all();
        return StudentResource::collection($students);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): StudentResource
    {
        //
        // $students = Students::create($request->all());
        // return new StudentResource($students);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $students = Students::find($id);
        if ($students) {
            return new StudentResource($students);
        } else {
            return response()->json(['message' => 'Sinh viên không tồn tại'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $students = Students::find($id);
        if ($students) {
            $students->update($request->all());
            return new StudentResource($students);
        } else {
            return response()->json(['message' => 'Sinh viên không tồn tại'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $students = Students::find($id);
        if ($students) {
            $students->delete();
            return response()->json(['message' => 'Xóa thành công'], 280);
        } else {
            return response()->json(['message' => 'Sinh viên không tồn tại'], 404);
        }
    }
}
