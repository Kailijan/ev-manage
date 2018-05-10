@extends("layouts.master")

@section("title")
    Login
@stop

@section("content")
    @include("elements.nav")
    <div class="page-login container">
        <div class="row">
            <div class="col col-lg-4 offset-lg-4">
                <div class="card p-3 w-12">
                    <img class="m-auto" src="{{ asset('img/ev-logo.png') }}" width="120" height="120" alt="{{ config('app.name') }}" title="Login | {{ config('app.name') }}">
                    <div class="card-body">
                      <h5 class="card-title">Login</h5>
                      <p class="card-text">Form Placeholder</p>
                      <a href="#" class="btn btn-primary">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop