@extends('layout.layout')

@section('title', 'Gamers Show')
	@section('container')
	<div style="margin-top:20px;"></div>
	<div style="border-radius:5px; margin: auto; width:80%; padding: 20px; background: #f7f7f7; box-shadow: 1.5px 1.5px 2.5px;" class="form-group">
        <form  method="POST" action="{{ route('admin.gamersupdate', $gamers->id )}}">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PUT">
                            <div class="form-group">
                            <h3>Gammer Nº: {{$gamers->id}}</h3>
                                <div class="row">
                                  <div class="col">
                                    <label>Nombre:</label>
                                    <input type="text" class="form-control" value="{{$gamers->name}}" name="name" required="">
                                  </div>
                                  <div class="col">
                                   <label>Apellido:</label>
                                    <input type="text" class="form-control"  value="{{$gamers->apell}}" name="apell" required="">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col">
                                   <label>Correo:</label>
                                    <input type="email" class="form-control" value="{{$gamers->mail}}" name="mail" required="">
                                  </div>
                                  <div class="col">
                                   <label>Telefono:</label>
                                    <input type="number" class="form-control"  value="{{$gamers->telf}}" name="telf" required="">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col">
                                   <label>Cedula:</label>
                                    <input type="number" class="form-control" value="{{$gamers->cedu}}" name="cedu" required="">
                                  </div>
                                  <div class="col">
                                   <label>Edad:</label>
                                    <input type="number" class="form-control" value="{{$gamers->edad}}" name="edad" required="">
                                  </div>
                                  <div class="col">
                                   <label>Sexo: </label>
                                    <select class="form-control" name="sexo" required="">
                                    <option>{{$gamers->sexo}}</option>
                                    <option>Masculino</option>
                                    <option>Femenino</option>
                                   </select>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col">
                                   <label>Direccion:</label>
                                    <input type="text" class="form-control" value="{{$gamers->direc}}" name="direc" required="">
                                  </div>
                                </div>    
                            </div>            
                        <div class="modal-footer">
                          <a style="width: 100%;" class="glyphicon glyphicon-zoom-in btn btn-primary btn-sm"><input type="submit" name="boton_actualziar" value="Actualizar Gamer" class="form-control btn-primary"></a>
                        </div>
        </form> 
	</div>
	@endsection