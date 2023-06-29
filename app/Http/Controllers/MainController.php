<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        return view('home');
    }
    public function about(){
        return view('about');
    }

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
