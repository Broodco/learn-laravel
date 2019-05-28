<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $tasks = [
            "Learn Laravel",
            "Do laundry",
            "Get some sleep"
        ];
        return view('welcome')->withTasks($tasks);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
