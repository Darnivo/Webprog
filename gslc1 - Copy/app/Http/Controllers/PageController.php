<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function showPage($page = 'home')
    {
        if ($page == 'home') {
            return view('test1');
        } elseif ($page == 'about') {
            return view('test2');
        } elseif ($page == 'contact') {
            return view('test3');
        }
    }

    public function showStudents()
    {
        $studentArray = ["Risa Lestari","John", "Alex", "George", "James"];
        return view('students')->with('students', $studentArray);
    }

    public function registerStudent(Request $request)
    {
        $data = $request->name . ',' . $request->email . ',' . $request->phone . "\n";
        file_put_contents('data/students.txt', $data, FILE_APPEND);
        return redirect('/students')->with('success', 'Registration successful!');
    }

}