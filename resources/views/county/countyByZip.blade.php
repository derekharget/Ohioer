
@include('template.header')


<div class="md:container md:mx-auto">

    <!-- Navigation bar template needs to go right here -->
    @include('template.navigation')


    <div class="container">
        <div class="row">


            @include('template.search')


            <div class="col-sm-9 bg-light">
                <div class="my-2">
                    <div class="row">
                        <div class="col-md-12 offset-md-4 ">
                            <h2>County: {{ Str::ucfirst($county) }} by Residents</h2>
                            <br>
                        </div>



                        <div class="col-md-2">
                            @foreach ($countyByZip as $data)
                                @if($loop->iteration % 2 === 0)
                        </div><div class="col-md-2">
                            @else
                                <p><a href="{{ url('/county/'.$county.'/zip/'.$data->residential_zip) }}">{{ $data->city.', Ohio '.$data->residential_zip }}</a> ({{$data->citizenAmount}} Total)</p>
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
