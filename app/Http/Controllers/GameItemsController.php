<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameItemsController extends Controller
{
    public function index() {
        return view('game-items.index');
    }
}
