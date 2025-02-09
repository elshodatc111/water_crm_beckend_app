<?php

namespace App\Http\Controllers;
use App\Services\HomeServices;
use Illuminate\Http\Request;

class HomeController extends Controller{
    public function __construct(protected HomeServices $homeServices){
        $this->middleware('auth');
    }
    public function index(){
        return view('home');
    }
}
