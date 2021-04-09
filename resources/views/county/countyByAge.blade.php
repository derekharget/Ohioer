@include('template.header')

<div class="container">

    <!-- Navigation bar template needs to go right here -->
    @include('template.navigation')



    <div class="container">
        <div class="row">

            @include('template.search')

            <div class="col-sm-9 bg-light">
                <table class="table table-striped">
                    @if($countyByAge->isNotEmpty())
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
                        @foreach ($countyByAge as $citizen)
                            <tr>
                                <th scope="row">{{ $citizen->id }}</th>
                                <td><a href="/citizen/{{ $citizen->id }}">{{ ucwords(strtolower($citizen->first_name.' '.$citizen->last_name)) }}</a></td>
                                <td>{{ \Carbon\Carbon::parse($citizen->date_of_birth)->age }}</td>
                                <td>{{ ucwords(strtolower($citizen->residential_address)) }}</td>
                                <td>{{ $citizen->residential_zip }}</td>
                            </tr>

                        @endforeach
                        </tbody>

                    @else
                        <div>No data found</div>
                    @endif

                </table>

                {{ $countyByAge->links() }}

            </div>

        </div>
    </div>


@include('template.footer')
