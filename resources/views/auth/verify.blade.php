@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="">
                <div class="card-header bg-warning py-4">
                    <h2 class="container">{{ __('Inicia sesión') }}</h2>
                </div>

                <div class="py-4">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Se ha enviado un email de verificación a tu correo electrónico.') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar, por facor comprueba el enlace de tu correo electrónico de verificación.') }}
                    {{ __('Si no has recibido ningún email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Clica aquí para solicitar otro') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
