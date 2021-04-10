
@include('template.header')

    <!-- Navigation bar template needs to go right here -->
    @include('template.navigation')



<div class="grid grid-cols-12 gap-4 mt-2">

    @include('template.search')

        <div class="col-start-4 col-end-12">
            <div class="grid grid-cols-4 gap-2">
                @foreach ($showCounties as $county)

                    <div><p><a href="{{ url('/county/'. Str::lower($county->name)) }}">{{ $county->name }} ({{$county->citizens}} Citizens)</a></p></div>


                @endforeach
            </div>
        </div>
    </div>


@include('template.footer')
