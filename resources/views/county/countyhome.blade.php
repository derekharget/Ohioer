
@include('template.header')


    <!-- Navigation bar template needs to go right here -->
    @include('template.navigation')



                            <h2>County: {{ Str::ucfirst($county) }} by age</h2>




                        <div class="grid grid-cols-4 gap-2">
                            @foreach ($countyByAge as $ageData)

                                <div><a href="{{ url('/county/'.$county.'/age/'.$ageData->age) }}">{{ $ageData->age }}</a> ({{$ageData->citizenAge}} Total)</div>


                            @endforeach
                        </div>


@include('template.footer')
