
@include('template.header')

    <!-- Navigation bar template needs to go right here -->
    @include('template.navigation')


    <div class="container">
        <div class="row">


            @include('template.search')


            <div class="col-sm-9 bg-light">
                <div class="my-2">
                    <div class="row">
                        <div class="col-md-12 offset-md-4 ">
                            <h2>Ohio Counties</h2>
                            <br>
                        </div>
                        <div class="col-md-4">
                            @foreach ($showCounties as $county)
                                @if($county->id % 30 === 0)
                        </div><div class="col-md-4">
                            @else
                                <p><a href="{{ url('/county/'. Str::lower($county->name)) }}">{{ $county->name }}</a> ({{$county->citizens}} Citizens)</p>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer needs to go right here -->

@include('template.footer')
