<div class="col-sm-3 bg-light">
    <h3 class="d-inline-flex p-2 ">Name Search:</h3>
    <div class="mx-3">
        <form action="/search" method="get">
            <input class="form-control my-1" type="text" placeholder="First Name" name="first" value="{{ request()->input('first') ?? old('first') }}">
            <input class="form-control" type="text" placeholder="Last Name" name="last" value="{{ request()->input('last') ?? old('last') }}">
                <div class="mt-2">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
        </form>
    </div>

    <div class="mt-4 mx-3">
        <h5>Hints:</h5>
        <ul class="list-group">
            <li class="list-group-item">1. You can search by first or last name</li>
            <li class="list-group-item">2. Names need to be exact</li>
            <li class="list-group-item">3. Names with special characters need to be exact</li>
            <li class="list-group-item">4. Searching common names like John will result in to many records and is kinda pointless.</li>
            <li class="list-group-item">5. Searching by the first and last name will offer the best results </li>
        </ul>
    </div>
</div>
