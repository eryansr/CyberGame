@extends('layout.pagelayout')

@section('title', 'Sesion')
    @section('budy')
            <div class="featured" style="background-image: none; width: 630px; height: 600px; margin: auto;"> <img style="margin: auto; width: 100%; height:100%;" src="{{ asset('PanelStyle/images/formgema7.png') }}" alt="">
                <div style="width: 89%; background-image: none; margin-top: 40px;" class="section">
                    <div style="position: absolute; border-radius:5px; margin: auto; padding: 20px; background: #8a252526; box-shadow: 1.5px 1.5px 2.5px;" class="form-group">
                        <form method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}
                                <h3 style="text-align: center;">Registrate</h3>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 {{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label>Nombre</label>
                                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif                                     
                                        </div>
                                        <div class="col-12 {{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label>Correo</label>
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif                                    
                                        </div>
                                        <div class="col-12 {{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label>Contraseña</label>
                                            <input id="password" type="password" class="form-control" name="password" required>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif                                            
                                        </div>
                                        <div class="col-12">
                                            <label>Confirmar Contraseña</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                        </div> 
                                    </div>     
                                </div> 
                            <div class="modal-footer">
                                <button style="width: 100%;" type="submit" class="btn btn-info">
                                    Registrar
                                </button>
                            </div>
                        </form>
                    </div>      
                </div>
            </div>
    @endsection
