@extends('layout.layout')

@section('title', 'Gamers Show')
	@section('container')
	<div style="margin-top:20px;"></div>
	<div style="border-radius:5px; margin: auto; width:80%; padding: 20px; background: #f7f7f7; box-shadow: 1.5px 1.5px 2.5px;" class="form-group">
                            <div class="form-group">
                            <h3>Gammer Nº: {{$gamers->id}}</h3>
                                <div class="row">
                                  <div class="col">
                                    <label>Nombre:</label>
                                    <input type="text" class="form-control" readonly="" value="{{$gamers->name}}" name="name" required="">
                                  </div>
                                  <div class="col">
                                   <label>Apellido:</label>
                                    <input type="text" class="form-control"  readonly="" value="{{$gamers->apell}}" name="apell" required="">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col">
                                   <label>Correo:</label>
                                    <input type="email" class="form-control" readonly="" value="{{$gamers->mail}}" name="mail" required="">
                                  </div>
                                  <div class="col">
                                   <label>Telefono:</label>
                                    <input type="number" class="form-control"  readonly="" value="{{$gamers->telf}}" name="telf" required="">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col">
                                   <label>Cedula:</label>
                                    <input type="number" class="form-control" readonly="" value="{{$gamers->cedu}}" name="cedu" required="">
                                  </div>
                                  <div class="col">
                                   <label>Edad:</label>
                                    <input type="number" class="form-control" readonly="" value="{{$gamers->edad}}" name="edad" required="">
                                  </div>
                                  <div class="col">
                                   <label>Sexo: </label>
                                    <select class="form-control" name="sexo" readonly="" required="">
                                     <option>{{$gamers->sexo}}</option>
                                   </select>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col">
                                   <label>Direccion:</label>
                                    <input type="text" class="form-control"  readonly="" value="{{$gamers->direc}}" name="direc" required="">
                                  </div>
                                </div>    
                            </div>            
                        <div class="modal-footer">
                          <a class="btn btn-primary btn-sm" href="javascript:window.history.go(-1);"><input type="submit" value="Volver" class="form-control btn-primary"></a>
                          <a style="width: 100%;" href="{{route('admin.gamersedit', $gamers->id)}}" class="glyphicon glyphicon-zoom-in btn btn-info btn-sm"><input type="submit" value="Editar" class="form-control btn-info"></a>
                        </div>
	</div>
	@endsection