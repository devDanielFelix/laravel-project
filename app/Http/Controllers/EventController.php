<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

class EventController extends Controller
{
    public function index()
    {
        $pessoa =
        [
            'nome' => 'Daniel',
            'idade' => 24,
        ];


    return view('welcome', compact('pessoa'));
    }

    public function create() {
        return view('events.create');
    }
}
