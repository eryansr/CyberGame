<?php

namespace App\Http\Controllers;
use Auth;
use App\Gamers;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware(['auth', 'roles']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->role == "admin") {
            $allgamers = Gamers::count();
            $allusers = User::count();
            return view('admin.index', compact('allgamers', 'allusers'));
        } 
    }
}
