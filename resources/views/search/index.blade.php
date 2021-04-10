@include('template.header')

<div class="md:container md:mx-auto">

    <!-- Navigation bar template needs to go right here -->
    @include('template.navigation')

    <div class="grid grid-cols-12 gap-4 mt-2">

        @include('template.search')

        <div class="col-start-5 col-end-9">
            <p class="text-gray-500 text-center text-4xl">Name Search:</p>
        </div>

        <div class="col-start-5 col-end-9">
            <p>Some Examples: <a href="{{ url('/search?first=john&last=doe') }}">John Doe</a> & Jane Doe</p>
        </div>
    </div>


@include('template.footer')
