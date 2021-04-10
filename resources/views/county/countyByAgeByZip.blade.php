
@include('template.header')

    <!-- Navigation bar template needs to go right here -->
    @include('template.navigation')


<div class="grid grid-cols-12 gap-4 mt-2">

    @include('template.search')


    <div class="col-start-4 col-end-12">
        <div class="col-start-1 col-end-5 mb-5">
            <p class="text-gray-500 text-center text-3xl">{{ Str::ucfirst($city) }}, Ohio, {{$zip}} by age</p>
        </div>

        <div class="grid grid-cols-4 gap-2">
            @foreach ($ageByCountyZip as $ageData)

                <div><p>{{ $ageData->citizenAge }} ({{$ageData->citizenAmount}} Total)</p></div>


            @endforeach
        </div>
    </div>
</div>

    <!-- Footer needs to go right here -->

    @include('template.footer')
