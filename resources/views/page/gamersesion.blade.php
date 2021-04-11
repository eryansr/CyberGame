@extends('layout.pagelayout')

@section('title', 'Sesion')
	@section('budy')
			
			<div style="color: white; background:#5382b0c4;" class="jumbotron">
			@if (Route::has('login'))
                <div style="float: right;" class="top-right links">
                    @auth
                    	<button class="btn btn-danger">	
                        <a style="text-decoration: none; color: white;" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            Cerrar Sesion
                        </a>
                    	</button>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
			  <h1>Bienvenido: {{ Auth::user()->name }}</h1>
			  <p>Aqui podras estar al tanto de las novedates sobre la comunidad gamer de Maracay</p>
			  <p>!!Completa el registro gratis!!</p><br><button id="show" class="btn btn-info btn-sm">Completar Registro</button>
			</div>
			<div style="display: none;" class="jumbotron">
			<h2> !!!! </h2>
			</div>
			<div style="display: none; background-color: rgba(31, 46, 62, 0.62);" id="mostrar" >
				<div class="featured" style="background: none; width: 630px; height: 600px; margin: auto;"> <img style="margin: auto; width: 100%; height:100%; " src="{{ asset('PanelStyle/images/formgema2.png') }}" alt="">
                <div style="width: 89%; background-image: none; margin-top: 40px;" class="section">
                    <div style="position: absolute; border-radius:5px; margin: auto; padding: 20px; background:#0705591f;; box-shadow: 0 0 7px;" class="form-group">
                        <form  method="POST" action="{{ route('page.gamersave') }}">
                        {{csrf_field()}}
                        <h5 style="text-align: center;">Completa tu registro</h5>
                        <div class="modal-body">
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
                          <input name="boton_guardar" id="boton_guardar" type="submit" value="Registrar" class="form-control btn-primary">
                        </div>
                        </form> 
                    </div>      
                </div>
            </div>
			</div>
	@endsection
@section('script')
<script type="text/javascript">
        $(document).ready(function(){
        $("#show").click(function(){
            $("#mostrar").toggle();
        });
    });
</script>
@endsection