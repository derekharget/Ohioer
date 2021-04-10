
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
                            <h2>Ohioer - Free Ohioan Search</h2>
                            <br>
                        </div>
                        <div class="col-md-6">
                            <p>Lookup and see if you can find yourself</p>
                            <p>Find address information and other details</p>
                        </div>
                        <div class="col-md-6">
                            <p>Did you know there are at least <b>{{ number_format($totalUsers) }}</b> residents in ohio?</p>
                            <p>That means with a <b>8.8%</b> unemployment rate, <b>907,880</b> are sitting at home.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer needs to go right here -->

@include('template.footer')
