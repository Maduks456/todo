<?php

namespace App\Http\Controllers;
use App\Models\Diary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class DiaryController extends Controller
{
    public function index()
    {
        $diaries = Diary::all();
        return view("diaries.index", compact("diaries"));
    }
    public function show(Diary $diary){
        if(Auth::user()->id== $diary->user_id){
            return view("diaries.show", compact("diary"));
        }
        return back();
    }

    public  function create(){
        return view('diaries.create');
    }
    public function store(Request $request){
        $validated = $request->validate([
            "title" => "required| max:255",
            "body" => "required|max:255",
            "date" => "required|date"
        ]);
        Diary::create([
            "title" => $request->title,
            "body" =>  $request->body,
            "date" =>  $request->date,
            'user_id' => Auth::user()->id
        ]);
        return redirect("/diaries");
    }
    public function edit(Diary $diary){
        return view('diaries.edit', compact('diary'));
    }
    public function update(Request $request, Diary $diary){
       $validated = $request->validate([
            "title" => "required| max:255",
            "body" => "required|max:255",
            "date" => "required|date"
        ]);
        $diary->title = $validated["title"];
        $diary->body = $validated["body"];
        $diary->date = $validated["date"];
        $diary->save();
        return redirect("/diaries/"). $diary->id;
    }
    public function destroy(Diary $diary){
        $diary->delete();
        return redirect("/diaries");
    }
}
