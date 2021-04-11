@extends('layout.pagelayout')

@section('title', 'Sesion')
    @section('budy')
            <div class="featured" style="background: none; width: 630px; height: 600px; margin: auto;"> <img style="margin: auto; width: 100%; height:100%; " src="{{ asset('PanelStyle/images/formlog.png') }}" alt="">
                <div style="width: 89%; background-image: none; margin-top: 60px;" class="section">
                    <div style="position: absolute; border-radius:5px; margin: auto; padding: 20px; background: #1c14141f; box-shadow: 0 0 7px;" class="form-group">
                        <form method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                <h3 style="text-align: center;">Iniciar Sesion</h3>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 {{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label>Correo</label>
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                            @if ($errors->has('email'))
                                                <span style="" class="help-block">
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
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recuerdame
                                            </label>
                                        </div>
                                    </div>     
                                </div> 
                            <div class="modal-footer">
                                <button style="width: 100%;" type="submit" class="btn btn-info">
                                    Iniciar Sesion
                                </button>
                            </div>
                            <div style="text-align: center;">
                                <!-- <a style="color:black;" class="btn btn-link" href="{{ route('password.request') }}">
                                    ¿Olvidaste tu Clave?
                                </a> -->
                                <a style="color:black;" class="btn btn-link" href="{{ route('register') }}">
                                    ¿Aun no te Registras?
                                </a>
                            </div>
                        </form>
                    </div>      
                </div>
            </div>
    @endsection
