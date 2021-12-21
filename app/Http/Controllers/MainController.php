<?php

namespace App\Http\Controllers;
use App\ContactModel;
use Illuminate\Http\Request;


class MainController extends Controller
{
    public function home(){return view('home');}
    public function about(){return view('about');}
    public function reviews()
    {
        
        $review_forshow = new ContactModel();

        return view('reviews', ['review_forblade' => $review_forshow->orderBy('created_at','desc')->paginate(3)]);
    }

    public function review_check(Request $request)
    {
        $valid = $request->validate([
            'email' => 'required|min:5|max:50',
            'review_text' => 'required|min:5|max:500'
        ]);


        $review = new ContactModel();
        $review->email = $request->input('email');
        $review->review = $request->input('review_text'); 
        $review->save();
        return redirect()->route('/reviews');
    }
}
