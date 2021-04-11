<?php
namespace App\Http\Controllers;

use DB;
use App\Gamers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
    public function index()
    {
        $allgamers = Gamers::count();
        $allusers = User::count();
        return view('admin.index', compact('allgamers', 'allusers'));
    } 

    public function gamers()
    {
        $gamers = Gamers::all();
        $allusers = User::all();
        return view('admin.gamers', compact('gamers', 'allusers'));
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
        return redirect()->route('admin.gamers');
    }
    
    public function show($id)
    {
        $gamers = Gamers::FindOrFail ($id);
        return view('admin.gamershow', compact('gamers'));
    }

    public function edit($id)
    {
        $gamer = Gamers::all();
        $gamers = Gamers::FindOrFail ($id);
        return view('admin.gamersedit', compact('gamers', 'gamer'));
    }


     public function update(Request $request, $id)
    {
        $gamers = Gamers::FindOrFail ($id);
        $gamers->update($request->all());
        return redirect()->route('admin.gamers');
    }

    public function destroy($id)
    {
        $gamers = Gamers::FindOrFail ($id);
        $gamers->delete();
        return redirect()->route('admin.gamers');

    }
        
}
