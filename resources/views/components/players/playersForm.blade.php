
<div class="container">
    <h1>Add Player</h1>
    <form method="POST" action="{{ url('players') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input
                type="text"
                id="name"
                name="name"
                autocomplete="name"
                placeholder="Type your name"
                class="form-control
                @error('name') is-invalid @enderror"
                value="{{ old('name') }}"
                required
                aria-describedby="nameHelp">
            <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <input
                type="text"
                id="address"
                name="address"
                autocomplete="address"
                placeholder="Type your address"
                class="form-control
                @error('address') is-invalid @enderror"
                value="{{ old('address') }}"
                required
                aria-describedby="addressHelp">
            @error('address')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>


        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea
                type="text"
                id="description"
                name="description"
                autocomplete="description"
                placeholder="Type your description"
                class="form-control
                @error('description') is-invalid @enderror"
                value="{{ old('description') }}"
                required
                aria-describedby="descriptionHelp"
                rows="4"></textarea>
        </div>

        <div>
            <div>
                <span>Retired?</span>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="retired" id="inlineRadio1" value="1">
                <label class="form-check-label" for="inlineRadio1">Yes</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="retired" id="inlineRadio2" value="0">
                <label class="form-check-label" for="inlineRadio2">No</label>
            </div>
        </div>
        <div>
            <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
        </div>

    </form>
</div>
