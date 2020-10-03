@extends('layouts.app')

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

                   @if(auth()->user()->is_admin == 1)
                    
                     
                    <p style="color: #5F9EA0;">{{ Auth::user()->name }} </p>
                     <p style="color: #5F9EA0;">{{ Auth::user()->email }}</p> 
                    <p>You are admin</p>
                    <p><a href="{{url('recipes')}}" style="color: #FFD700;  background-color:#5F9EA0; box-shadow: 2px 2px #fff;">Recipes</a></p>
                    @else
                    <p style="color: #5F9EA0;">{{ Auth::user()->name }} </p>
                     <p style="color: #5F9EA0;">{{ Auth::user()->email }}</p> 
                    <p>You are not admin</p>
                    <a href="{{url('recipes/create')}}" class="btn btn-warning">Създай</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
