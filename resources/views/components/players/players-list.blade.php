<h1 class="text-center py-2">Players List</h1>
<div class="d-flex justify-content-center h-100">
    <div>
        <form action="{{url('players')}}" method="POST">
            @csrf
            @method('POST')
            <button type="submit" class="btn btn-danger">Delete ALL</button>
        </form>
        <a type="button" class="btn btn-info" href="{{url('players/export')}}">Export Excel</a>
        <form method="POST" action="{{url('players/import')}}" enctype="multipart/form-data">
            @csrf
            <input type="file" name="playersFile" />
            <button type="submit" class="btn btn-primary">Import</button>
        </form>
    </div>
</div>


@if(session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('status')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<div class="container-fluid w-75">
    <table class="table text-center">
        <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Retired</th>
            <th>Actions</th>
        </tr>
        </thead>
        @foreach ($players as $player)
            <tr>
                <td>{{$player->id}}</td>
                <td>{{$player->name}}</td>
                <td>{{$player->address}}</td>
                <td>
                    @if($player->retired) <i class="bi bi-check-circle text-success h2"></i>
                    @else <i class="bi bi-x-circle text-danger h2"></i>
                    @endif
                </td>
                <td class="d-flex justify-content-between align-items-center h-100">
                    <a type="button" class="btn btn-success" href="{{url('players/'.$player->id)}}">Show</a>
                    <a type="button" class="btn btn-primary" href="{{url('players/'.$player->id. '/edit')}}">Edit</a>
                    <form action="{{url('players/'.$player->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>

                </td>
            </tr>
        @endforeach
    </table>
    {{$players->links()}}
</div>
