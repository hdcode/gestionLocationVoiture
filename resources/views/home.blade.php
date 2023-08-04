{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> 
</div>
@endsection --}}

@extends("layouts.master")

@section("contenu")
    <div class="row">
        <div class="col-12 p-4">
            <div class="jumbotron">
                <h1 class="display-3">
                    Bienvenu, <strong>{{ userFullName() }}</strong>
                </h1>
                @foreach (auth()->user()->roles as $role)
                <p>{{ $role->role }}</p>
                    
                @endforeach
                <p class="lead">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et laborum est sequi ratione libero, vero, expedita
                    eius suscipit repellendus consectetur sed maxime quia! Tempora veritatis laboriosam dolores cum voluptatum
                    laudantium.
                </p>
                <hr class="my-4">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo, esse!</p>
                <p class="lead">
                    <a href="#" class="btn btn-primary btn-lg">Learn More</a>
                </p>
            </div>
        </div>
    </div>
@endsection
