
@include('template.header')



    <!-- Navigation bar template needs to go right here -->
    @include('template.navigation')



<div class="grid grid-cols-12 gap-4 mt-2">

    @include('template.search')

    <div class="col-start-5 col-end-10 ...">
        <p class="text-gray-500 text-center text-4xl">Ohioer - Free Ohioan Search</p>
    </div>

    <div class="col-start-5 col-end-8">
        <p>Lookup and see if you can find yourself</p>
        <p>Find address information and other details</p>
    </div>

    <div class="col-start-8 col-end-13">
        <p>Did you know there are at least <b>{{ number_format($totalUsers) }}</b> residents in ohio?</p>
        <p>That means with a <b>8.8%</b> unemployment rate, <b>907,880</b> are sitting at home.</p>
    </div>


</div>


    <!-- Footer needs to go right here -->

@include('template.footer')
