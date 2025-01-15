<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class GameController extends Controller
{
    /**
     * Muestra la vista GameView
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        Inertia::render('Game');
    }
}
