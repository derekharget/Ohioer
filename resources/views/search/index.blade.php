@include('template.header')

<div class="md:container md:mx-auto">

    <!-- Navigation bar template needs to go right here -->
    @include('template.navigation')



    <div class="container">
        <div class="row">

            @include('template.search')

            <div class="col-sm-9 bg-light">

                <h2 class="text-center"> Begin your search:</h2>
                <p class="text-center">Some Examples: <a href="{{ url('/search?first=john&last=doe') }}">John Doe</a> & Jane Doe</p>

            </div>

        </div>
    </div>


@include('template.footer')
