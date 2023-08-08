<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StudentsRequest;

class StudentController extends Controller
{
    // LIST------------------------------------------------------------------------------------
    public function list(Request $request)
    {
        $students = new Students();
        $listStudent = $students::all();
        $searchResult = '';
        if ($request->post() && $request->searchStudent) {
            $listStudent = $students::where('name', 'like', '%' . $request->searchStudent . '%')->get();
            $searchResult = $request->searchStudent;
        }
        return view('students.list', compact('listStudent', 'searchResult'));
    }

    // ADD----------------------------------------------------------------------------------
    public function add(Request $request)
    {
        if ($request->isMethod('POST')) {
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                // dd($request->avatar);
                $image = $request->image;
                $image = uploadFile('image', $request->file('image'));
            }
            $params = $request->except('_token');
            $params['image'] = $image;
            // dd($params);
            $student = Students::create($params);
            if ($student) {
                return redirect('list_students');
            }
        }
        return view('students.add');
    }
    // EDIT---------------------------------------------------------------------------------------------------
    public function edit(Request $request, $id)
    {
        $studentEdit = DB::table('students')->where('id', $id)->first();
        if ($request->isMethod('POST')) {
            $params = $request->except('_token');
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $resultDL = Storage::delete('/public/' . $studentEdit->image);
                if ($resultDL) {
                    $image = $request->image;
                    $image = uploadFile('image', $request->file('image'));
                }
            } else {
                $params['image'] = $studentEdit->image;
            }
            $params['image'] = $image;
            // dd($params['image']);
            $result = Students::where('id', $id)->update($params);
            if ($result) {
                return redirect('list_students');
            }
        }
        return view('students.edit', compact('studentEdit'));
    }
    // DELETE-----------------------------------------------------------------------------------------------
    public function delete(Request $request, $id)
    {
        $studentDL = Students::where('id', $id)->delete();
        if ($studentDL) {
            return redirect('list_students');
        }
    }
}
