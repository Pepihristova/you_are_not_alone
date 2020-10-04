@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color: rgba(0, 0, 0, 0.8); color: #fff; margin-top: 20%;">
               <center><div class="card-header">{{ __('Dashboard') }}</div></center> 

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   @if(auth()->user()->is_admin == 1)
                    
                     
                  <center><p style="color: #5F9EA0;">{{ Auth::user()->name }} </p></center>  
                    <center><p style="color: #5F9EA0;">{{ Auth::user()->email }}</p> </center> 
                    <center><p>You are admin</p></center>
                    <center><p><a href="{{url('recipes')}}" style="color: #FFD700;  background-color:#5F9EA0; box-shadow: 2px 2px #fff;">Recipes</a></p></center>
                    @else
                    <center><p style="color: #5F9EA0;">{{ Auth::user()->name }} </p></center>
                    <center> <p style="color: #5F9EA0;">{{ Auth::user()->email }}</p> </center>
                    <center><p>You are not admin</p></center>
                    <center><a href="{{url('recipes/create')}}" class="btn btn-warning">Създай</a></center>
                    <p></p>
                    <center><a href="{{url('decisions/choise')}}" class="btn btn-warning">Избери си рецепта</a></center>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
