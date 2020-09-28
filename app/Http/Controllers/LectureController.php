<?php

namespace App\Http\Controllers;

use App\Models\Lecture;
use Illuminate\Http\Request;

class LectureController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        // $lectures =  Lecture::all();

        $topic = $request->query('topic');

        if ($topic) {
            $lectures = Lecture::where('topic', $topic)->get();
        } else {
            $lectures = Lecture::orderBy('name')->get();
        }


        return view('lectures.index', ['lectures' => $lectures]);
    }

    public function show($id)
    {
        $lecture = Lecture::findOrFail($id);

        return view('lectures.show', ['lecture' => $lecture]);
    }

    public function create()
    {
        return view('lectures.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'topic' => 'required',
            'description' => 'required',
        ]);

        Lecture::create($request->all());

        return redirect('/lectures')->with('mssg', 'Lekcija kreirana!');
    }

    public function destroy($id)
    {
        $lecture = Lecture::findOrFail($id);

        $lecture->delete();

        return redirect("/lectures")->with('mssg', 'Lekcija obrisana!');
    }
   
    public function edit_form(Request $request, $id){
          $lecture = Lecture::find($id);

         return view('lectures.edit')->with('lecture',$lecture);
    }
     public function edit(Request $request, $id){
         $lecture = Lecture::find($id);
         $lecture->name = $request->name;
         $lecture->topic = $request->topic;
         $lecture->description= $request->description;
         $lecture->save();
        
         return redirect("/lectures")->with('mssg', 'Lekcija uređena!');
         
    }
}   

