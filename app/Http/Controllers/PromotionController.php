<?php

namespace App\Http\Controllers;

use App\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function index()
    {
        $promotions = Promotion::all();

        return view('user.promotion.index', compact('promotions'));
    }
}
