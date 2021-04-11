@extends('layout.layout')

@section('title', 'Gamers')
	@section('container')
	<div style="border-radius:5px; margin-top:10px; padding: 20px;  background-image: linear-gradient(to right, #002853, #127391); box-shadow: 1.5px 1.5px 2.5px;" class="form-group">
        <h1 style="color: white; " class="mt-4">Registros Generales</h1>  
    </div>
    <!-- Gamer vip -->
    <div style="border-radius:5px; margin-top:10px; padding: 20px; background: #f0f0f0; box-shadow: 1.5px 1.5px 2.5px;" class="form-group">
        <h5 style="background: #6fce82c7;padding: 10px;border-radius: 10px;text-align: center;">Usuarios VIP</h5>
        <table id="gamertable" class="table table-hover">
          <thead>
            <tr>
              <td><strong>Cédula</strong></td>
              <td><strong>Nombre</strong></td>
              <td><strong>Apellido</strong></td>
              <td><strong>Edad</strong></td>
              <td><strong>Registrado</strong></td>

              <td colspan="1"><a href="" style="width:100%;" data-toggle="modal" data-target=".bd-example-modal-lg" class="glyphicon glyphicon-plus btn btn-primary btn-sm">Agregar</a></td>
            </tr>
          </thead>
          <tbody style="margin: auto;">
          @foreach ($gamers as $data)
            <tr>
              <td>{{$data->cedu}}</td>
              <td>{{$data->name}}</td>
              <td>{{$data->apell}}</td>
              <td>{{$data->edad}}</td>
              <td>{{$data->created_at}}</td>
              <td style="text-align: center; display: block ruby;">
              <a href="{{route('admin.gamershow', $data->id)}}" class="glyphicon glyphicon-zoom-in btn btn-info btn-sm">Ver</a>
              <form method="POST" action="{{ route('admin.gamersdelete', $data->id )}}">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE">
                <input type="submit" name="eliminar" value="Eliminar" class="glyphicon glyphicon-zoom-in btn btn-danger btn-sm">
              </form> 
              </td> 
            </tr>
          @endforeach
          </tbody>
        </table>
    </div>
    <!-- fin Gamer vip -->
    <!-- user -->
    <div style="border-radius:5px; margin-top:10px; padding: 20px; background: #f0f0f0; box-shadow: 1.5px 1.5px 2.5px;" class="form-group">
        <h5 style="background: #ceb66fc7;padding: 10px;border-radius: 10px;text-align: center;">Total Usuarios</h5>
        <table id="usertable" class="table table-hover">
          <thead>
            <tr>
              <td><strong>Nombre</strong></td>
              <td><strong>Email</strong></td>
              <td><strong>Registrado</strong></td>
            </tr>
          </thead>
          <tbody style="margin: auto;">
          @foreach ($allusers as $user)
            <tr>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->created_at}}</td>
            </tr>
          @endforeach
          </tbody>
        </table>
    </div>
    <!-- fin user -->
    <div  id="crearModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" >
                    <div class="modal-content">
                        <div style="background: #0b2971; color: white;" class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Nuevo Gamer</h4>
                            <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Cerrar</span>
                          </button>
                          <div id="aviso" style="display: none" class="alert alert-danger" role="alert">
                            <center>Cedula ya existente</center>
                          </div>
                        </div>
                        <form id="guardarModal" method="POST" action="{{ route('admin.gamersave') }}">
                        {{csrf_field()}}
                        <div style="background: #f0f0f0;" class="modal-body">
                            <div class="form-group">
                                <div class="row">
                                  <div class="col">
                                    <label>Nombre:</label>
                                    <input type="text" class="form-control" placeholder="Nombres" name="name" required="">
                                  </div>
                                  <div class="col">
                                   <label>Apellido:</label>
                                    <input type="text" class="form-control" placeholder="Apellidos" name="apell" required="">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col">
                                   <label>Correo:</label>
                                    <input type="email" class="form-control" placeholder="xx@xxxx.com" name="mail" required="">
                                  </div>
                                  <div class="col">
                                   <label>Telefono:</label>
                                    <input type="number" class="form-control" placeholder="xx-xxxxx" name="telf" required="">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col">
                                   <label>Cedula:</label>
                                    <input type="number" class="form-control" placeholder="1234567" name="cedu" required="">
                                  </div>
                                  <div class="col">
                                   <label>Edad:</label>
                                    <input type="number" class="form-control" placeholder="xx" name="edad" required="">
                                  </div>
                                  <div class="col">
                                   <label>Sexo:</label>
                                    <select class="form-control" name="sexo" required="">
                                     <option></option>
                                     <option>Masculino</option>
                                     <option>Femenino</option>
                                   </select>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col">
                                   <label>Direccion:</label>
                                    <input type="text" class="form-control"  name="direc" required="">
                                  </div>
                                </div>    
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                          <input name="boton_guardar" id="boton_guardar" type="submit" value="Registrar" class="form-control btn-primary">
                        </div>
                        </form> 
                    </div>                   
        </div>
    </div>

	@endsection
@section('script')
<script>
$(document).ready(function() {
    $('#gamertable').DataTable()
});
</script>
<script>
$(document).ready(function() {
    $('#usertable').DataTable()
});
</script>
@endsection

