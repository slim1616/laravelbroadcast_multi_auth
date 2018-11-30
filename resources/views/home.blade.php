@extends('layouts.app')

@section('content')

<div class="container" data-user="user.{{ Auth::user()->id}}" id="user">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Utilisateurs</div>

                <div class="card-body">
                   @foreach($users as $user)
                       <form action="{{ route('notifyUser', $user->id) }}" method="post">
                            {{ csrf_field() }}
                            
                            <button class="btn btn-primary">{{ $user->name }}</button>
                           
                       </form>
                   @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<button id="notifier">notifier</button>
<script src="//{{Request::getHost()}}:6001/socket.io/socket.io.js"></script>

@endsection
