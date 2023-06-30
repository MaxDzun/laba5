<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\Air;
use App\Models\Place;
use App\Models\Season;

class MainController extends Controller
{
    public function about(){
        return view('about');
    }

    public function all_places(){
        $places = Place::all();
        return view('places', compact('places'));
    }

    public function one_place($id)
    {
        $place = Place::find($id);
        return view('one_place', compact('place'));
    }

    public function all_airs(){
        $airs = Air::all();
        return view('airs', compact('airs'));
    }

    public function one_air($id)
    {
        $place = Air::find($id);
        return view('one_air', compact('air'));
    }

    public function all_seasons(){
        $airs = Season::all();
        return view('seasons', compact('seasons'));
    }

    public function one_season($id)
    {
        $place = Season::find($id);
        return view('one_season', compact('season'));
    }



//    public function seasons(){
//        return view('seasons');
//    }
//
//    public function airs(){
//        return view('airs');
//    }

    public function review(){
        $reviews = new Contact();
//        dd($reviews->all());
        return view('review', ['reviews' => $reviews->all()]);
    }
//отримуємо дані
    public function review_check(Request $request){
        //перевіряємо дані
        $valid = $request->validate([
            'email' => 'required|min:5|max:99',
            'subject' => 'required|min:2|max:100',
            'message' => 'required|min:16|max:400'
        ]);

        //створюємо об'єкт та додаємо значення в окремі поля

        $review = new Contact();
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();

        return redirect()->route('review');
    }
}
