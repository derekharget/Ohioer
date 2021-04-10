
@include('template.header')


<div class="md:container md:mx-auto">

    <!-- Navigation bar template needs to go right here -->
    @include('template.navigation')


<div class="grid grid-cols-12 gap-4 mt-2">

    @include('template.search')


    <div class="col-start-4 col-end-13">
        <div class="grid grid-cols-12 gap-2 mt-2">
            <div class="col-start-1 col-end-10 mb-4">
                <p class="text-gray-500 text-center text-3xl">{{ $full_name ?? 'DATABASE ERROR' }} ({{ $citizen_age }})</p>
            </div>
            <div class="col-start-2 col-end-7">
                <p><b>Date of Birth:</b> {{ $dob }} </p>
                <p><b>Address:</b> {{ $home_address }}  </p>
                <p><b>Zip:</b> <a href="{{ url('/county/'.Str::lower($county_name)).'/zip/'.$home_zip }}">{{ $home_zip }}</a>    </p>
                <p><b>City:</b> {{ $home_city }}</p>
                <p><b>State:</b> {{ $home_state }} </p>
                <p><b>County:</b> <a href="{{ url('/county/'.Str::lower($county_name)) }}">{{ $county_name }}</a></p>
                <p><a href="{{ $google_map_address }}" target="_blank">Search Address on Google Maps</a></p>
            </div>
            <div class="col-start-7 col-end-12">
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
    <!-- Footer needs to go right here -->

@include('template.footer')
