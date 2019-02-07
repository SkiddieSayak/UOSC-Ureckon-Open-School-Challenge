<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participants;

class PublicController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }

    public function showForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
	dd($request);
        $participant = new Participants;
        $participant->team = $request->team;
        $participant->school = $request->school;
        $participant->event = $request->event;
        $participant->name1 = $request->name1;
        $participant->name2 = $request->name2;
        $participant->name3 = $request->name3;
        $participant->name4 = $request->name4;
        $participant->name5 = $request->name5;
        $participant->class1 = $request->class1;
        $participant->class2 = $request->class2;
        $participant->class3 = $request->class3;
        $participant->class4 = $request->class4;
        $participant->class5 = $request->class5;
        $participant->contact1 = $request->contact1;
        $participant->contact2 = $request->contact2;
        $participant->contact3 = $request->contact3;
        $participant->contact4 = $request->contact4;
        $participant->contact5 = $request->contact5;
        $participant->save();
        return back();
    }
}
