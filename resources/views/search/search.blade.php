@include('template.header')

<div class="container">

    <!-- Navigation bar template needs to go right here -->
    @include('template.navigation')



    <div class="container">
        <div class="row">

            @include('template.search')

            <div class="col-sm-9 bg-light">
            <table class="table table-striped">
                @if($citizen_user_data->isNotEmpty())
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Address</th>
                    <th scope="col">Zip</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($citizen_user_data as $citizen)
                <tr>
                    <th scope="row">{{ $citizen->id }}</th>
                    <td><a href="/citizen/{{ $citizen->id }}">{{ $citizen->getFullName() }}</a></td>
                    <td>{{ $citizen->getAge() }}</td>
                    <td>{{ $citizen->AddressFormat() }}</td>
                    <td>{{ $citizen->residential_zip }}</td>
                </tr>

                @endforeach
                </tbody>

                @else
                    <div>No data found</div>
                @endif

            </table>

                    {{ $citizen_user_data->links() }}

        </div>

</div>
    </div>


@include('template.footer')
