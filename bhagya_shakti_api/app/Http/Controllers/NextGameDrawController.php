<?php

namespace App\Http\Controllers;

use App\Models\NextGameDraw;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NextGameDrawController extends Controller
{
    public function index(){
        $data = NextGameDraw::first();
        return $data;
    }

    public function getNextDrawIdOnly(){
        $nextGameDrawObj = NextGameDraw::first();
        return $nextGameDrawObj->next_draw_id;
    }
}
