
@include('template.header')


<div class="container">

    <!-- Navigation bar template needs to go right here -->
    @include('template.navigation')


    <div class="container">
        <div class="row">


            @include('template.search')


            <div class="col-sm-9 bg-light">
                <div class="my-2">
                    <div class="row">
                        <div class="col-md-12 offset-md-2">
                            <h2> {{ $full_name ?? 'DATABASE ERROR' }} ({{ $citizen_age }})</h2>
                            <br>
                        </div>
                        <div class="col-md-6">
                            <p><b>Date of Birth:</b> {{ $dob }} </p>
                            <p><b>Address:</b> {{ $home_address }}  </p>
                            <p><b>Zip:</b> {{ $home_zip }}    </p>
                            <p><b>City:</b> {{ $home_city }}</p>
                            <p><b>State:</b> {{ $home_state }} </p>
                            <p><b>County:</b> <a href="{{ url('/county/'.Str::lower($county_name)) }}">{{ $county_name }}</a></p>
                            <p><a href="{{ $google_map_address }}" target="_blank">Search Address on Google Maps</a></p>
                        </div>
                        <div class="col-md-6">
                            <p><b>First Name:</b> <a href="{{ url('/search?first='. $first_name) }}">{{ $first_name }}</a></p>
                            <p><b>Middle Name:</b> {{ $middle_name }}  </p>
                            <p><b>Last Name:</b> <a href="{{ url('/search?last='. $last_name) }}">{{ $last_name }}</a></p>
                            <p><b>Township:</b> {{ $township }}  </p>
                            <p><b>Village:</b> {{ $village }}</p>
                            <p><b>Political Affiliation:</b> {{ $political_party }}  </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer needs to go right here -->

@include('template.footer')
