
@include('template.header')

    <!-- Navigation bar template needs to go right here -->
    @include('template.navigation')


    <div class="container">
        <div class="row">


            @include('template.search')


            <div class="col-sm-9 bg-light">
                <div class="my-2">
                    <div class="row">
                        <div class="col-md-12 offset-md-2 ">
                            <h2>{{ Str::ucfirst($city) }}, Ohio, {{$zip}} by age</h2>
                            <br>
                        </div>



                        <div class="col-md-2">
                            @foreach ($ageByCountyZip as $ageData)
                            @if($loop->iteration % 18 === 0)
                        </div><div class="col-md-2">
                            @else
                            <p>{{ $ageData->citizenAge }} ({{$ageData->citizenAmount}} Total)</p>
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
