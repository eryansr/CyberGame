<?php
namespace App\Http\Controllers;

use DB;
use App\Gamers;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Input;

class PageController extends Controller
{
    public function index()
    {
        return view('page.TibiaMaracay');
    }
    public function gamersesion()
    {
        return view('page.gamersesion');
    }
    public function store(Request $request)
    {
        $gamers = new Gamers;
        $gamers->name = $request->name;
        $gamers->apell = $request->apell;
        $gamers->mail = $request->mail;
        $gamers->telf = $request->telf;
        $gamers->cedu = $request->cedu;
        $gamers->edad = $request->edad;
        $gamers->sexo = $request->sexo;
        $gamers->direc = $request->direc;
        $gamers->save();
        return redirect()->route('page.gamersesion');
    }
    

}
