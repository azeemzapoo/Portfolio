<?php

namespace App\Http\Controllers;
use App\Models\project;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    //
    public function index(){
        $projects = project::orderByDesc('featured')
        ->orderBy('sort_order')
        ->get();


        return view('pages.portfolio', compact('projects'));
    }
}
