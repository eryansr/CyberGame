@extends('layout.layout')

@section('title', 'Admin Panel') 
	@section('container')
    <div style="margin-top:10px;" class="jumbotron">
            <h1>Hola, {{ Auth::user()->name }}!</h1>
            <p>Bienvenido, este es el Panel del Administrador</p>
          </div>
    <div class="col-md-10">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row mt-4">
                    <div style="border-radius:5px; margin:10px; padding: 20px; background-image: linear-gradient(to right, #530000, #915312); color: white; box-shadow: 1.5px 1.5px 2.5px;" class="col-md-3 text-center">
                        <h1>{{ $allusers }}</h1>
                        Total Registrados
                    </div>
                    <div style="border-radius:5px; margin:10px; padding: 20px; background-image:linear-gradient(to right, #530052, #129167); color: white; box-shadow: 1.5px 1.5px 2.5px;" class="col-md-3 text-center">
                        <h1>{{ $allgamers }}</h1>
                        Registrados VIP
                    </div>
                    <div style="border-radius:5px; margin:10px; padding: 20px; background-image: linear-gradient(to right, #005320, #5d9112); color: white; box-shadow: 1.5px 1.5px 2.5px;" class="col-md-3 text-center">
                        <h1>23</h1>
                        Visitas Hoy
                    </div>
                </div>
            </div>
        </div>
    </div>
	@endsection
