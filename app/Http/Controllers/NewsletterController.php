<?php

namespace App\Http\Controllers;

use App\Events\TaskEvent;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function index(){
        return view('index');
    }


    public function event(){

    event(new TaskEvent('How are you?'));
    }
}