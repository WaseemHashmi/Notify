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

                    {{ __('You are logged in!') }}
                </div>
            </div>

            <div class="card">
                <div class="card-header">{{ __('Notifications') }}</div>

                <div class="card-body">
                    <div class="row">
                        <h1>Unread</h1>
                        @foreach(Auth::user()->unreadNotifications as $notifications)
                        <div class="col">{{$notifications->data['letter']['title']}}</div>
                        @endforeach
                    </div>
                    <div class="row">
                        <h1>Read</h1>
                        @foreach(Auth::user()->readNotifications as $notifications)
                        <div class="col">{{$notifications->data['letter']['title']}}</div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
