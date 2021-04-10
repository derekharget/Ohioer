@include('template.header')

<div class="md:container md:mx-auto">

    <!-- Navigation bar template needs to go right here -->
    @include('template.navigation')

    <div class="grid grid-cols-12 gap-4 mt-2">

        @include('template.search')
        <div class="col-start-5 col-end-9">
            <div class="grid grid-cols-6 gap-4 mt-2">
                <div class="col-start-2 col-end-10">
                    <p class="text-gray-500 text-center text-4xl">Name Search:</p>
                </div>

                <div class="col-start-1 col-end-5">
                    <p>Some Examples: <a href="{{ url('/search?first=john&last=doe') }}">John Doe</a> & Jane Doe</p>
                </div>
            </div>
        </div>
    </div>


@include('template.footer')
