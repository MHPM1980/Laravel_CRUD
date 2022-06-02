@extends('master.main')


@section('content')

    @component('components.players.playerEdit',[
        'player'=>$player
    ])
    @endcomponent
@endsection
