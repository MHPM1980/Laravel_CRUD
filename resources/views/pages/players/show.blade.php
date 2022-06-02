@extends('master.main')


@section('content')

    @component('components.players.playerShow',[
        'player'=>$player
    ])
    @endcomponent
@endsection
