<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;
use App\Models\Event;


class EventController extends Controller
{
    public function index() {

        $events = Event::all();


        return view('welcome',['events' => $events]);
    }

    public function create() {
        return view('events.create');
    }
}
