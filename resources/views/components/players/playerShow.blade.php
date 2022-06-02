
<div class="container">
    <h1>Show Player</h1>
    <form method="" action="{{ url('players') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input
                disabled
                type="text"
                id="name"
                name="name"
                autocomplete="name"
                placeholder="Type your name"
                class="form-control"
                value="{{ $player->name }}"
                required
                aria-describedby="nameHelp">
            <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <input
                disabled
                type="text"
                id="address"
                name="address"
                autocomplete="address"
                placeholder="Type your address"
                class="form-control"
                value="{{ $player->address }}"
                required
                aria-describedby="addressHelp">
        </div>


        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea
                disabled
                type="text"
                id="description"
                name="description"
                autocomplete="description"
                placeholder="Type your description"
                class="form-control"
                required
                aria-describedby="descriptionHelp"
                rows="4">{{ $player->description }}</textarea>
        </div>

        <div>
            <div>
                <span>Retired?</span>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="retired" id="inlineRadio1" value="1" @if ($player->retired) checked @else disabled @endif>
                <label class="form-check-label" for="inlineRadio1">Yes</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="retired" id="inlineRadio2" value="0" @if (!$player->retired) checked @else disabled @endif>
                <label class="form-check-label" for="inlineRadio2">No</label>
            </div>
        </div>
        <div>
            <a type="button" class="mt-2 mb-5 btn btn-primary" href="{{url('players/')}}">Back</a>
        </div>

    </form>
</div>
