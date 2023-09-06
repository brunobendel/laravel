<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {      
        // conexão com o model
        $events = Event::all();


        return view('welcome', 
        [
            'events' => $events,

        ]);
    }

    public function create()
    {
        
        return view('events.create');
    }

    public function contact()
    {
        
        return view('events.contact');
    }

}
