<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseConteroller extends Controller
{
    //
    public function index(){
        // menarik data dari database
        $course = Course::all();
        

        // panggil view dan kirim data course
        return view('admin.contents.course.index',[
            'course' => $course
        ]);
    }

    public function create(){
  
        return view('admin.contents.course.create');
    }

    public function store(request $request){
        // falidasi data
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'desc' => 'required'
        ]);

        // simpan ke database
        Course::create([
            'name' => $request->name,
            'category' => $request->category,
            'desc' => $request->desc
        ]);

        // kembalikan ke halaman student
        return redirect('/admin/course')->with('massage', 'Berhasil Menambahkan Course');

    }

    public function edit($id){
        // cari data student berdasarkan id
        $courses = Course::find($id); //Select * from course where id=$id

        return view('admin.contents.course.edit', [
            'course' => $courses
        ]);
    }

    public function update($id, Request $request){
        // cari data student berdasarkan id
        $courses = Course::find($id); // SELECT * FROM course WHERE id=$id

        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'desc' => 'required'
        ]);

        // simpan perubahan
        $courses->update([
            'name' => $request->name,
            'category' => $request->category,
            'desc' => $request->desc
        ]);

        // retrun to index
        return redirect('/admin/course')->with('massage', 'Berhasil Memperbarui Course');
    }

    public function destroy($id){
        // cari data course berdasarkan id
        $courses = Course::find($id); // SELECT * FROM Course WHERE id=$id

        // hapus course
        $courses->delete();

         // retrun to index
         return redirect('/admin/course')->with('massage', 'Berhasil Memperbarui course');
    }
}
