
@include('template.header')


    <!-- Navigation bar template needs to go right here -->
    @include('template.navigation')


    <div class="container">
        <div class="row">


            @include('template.search')


            <div class="col-sm-9 bg-light">
                <div class="my-2">
                    <div class="row">
                        <div class="col-md-12 offset-md-4">
                            <h2>About</h2>
                            <br>
                        </div>
                        <div class="col-md-4">
                           <h3>About this site:</h3>
                            <p>This site was built primarily for me to learn Laravel and a few other programs better. It's more of a learning/testbed for me.</p>
                        </div>
                        <div class="col-md-4">
                          <h3>Software Used:</h3>
                            <p><a href="https://laravel.com/" target="_blank">Laravel</a></p>
                            <p><a href="https://redis.io/" target="_blank">Redis</a></p>
                            <p><a href="https://www.php.net/" target="_blank">PHP 8.0.3</a></p>
                            <p><a href="https://www.mysql.com/" target="_blank">MySQL 5.7</a></p>
                            <p><a href="https://nginx.org/" target="_blank">Nginx 1.19.9</a></p>
                            <p><a href="https://getbootstrap.com/" target="_blank">Bootstrap</a></p>
                        </div>
                        <div class="col-md-4">
                            <h3>Disclaimer:</h3>
                            <p>This site offers no warranty, support, or ways to contact.</p>
                            <p>This site may disappear random or change.</p>
                            <p><a href="https://joyfoodsunshine.com/the-most-amazing-chocolate-chip-cookies/">Here's a cookie recipe</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer needs to go right here -->

@include('template.footer')
<?php
