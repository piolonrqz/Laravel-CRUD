<?php

namespace App\Http\Controllers;

use App\Models\Intern;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //display

    public function index(){
        $interns = Intern::all(); //get all interns from db
        return view('intern.index', compact('interns'));
    }
    //create 
    public function create(){
        return view('intern.create');
    }
    //store data
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'course' => 'required',
            'institution' => 'required',
            'career_path' => 'required',
        ]);

        Intern::create($request->all());
        return redirect()->route('intern.index')->with('success', 'Intern added successfully!');
    }
    //edit
    public function edit($id){
        $intern = Intern::findOrFail($id);
        return view('intern.edit', compact('intern'));
    }
    //update
    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'course' => 'required',
            'institution' => 'required',
            'career_path' => 'required',
        ]);

        $intern = Intern::findOrFail($id);
        $intern->update($request->all());

        return redirect()->route('intern.index');
    }
    //delete
    public function destroy($id){
        Intern::destroy($id);
        return redirect()->route('intern.index');
    }

}
