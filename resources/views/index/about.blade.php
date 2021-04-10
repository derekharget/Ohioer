
@include('template.header')


    <!-- Navigation bar template needs to go right here -->
    @include('template.navigation')


<div class="grid grid-cols-12 gap-4 mt-2">

            @include('template.search')

    <div class="col-start-5 col-end-13">

        <div class="grid grid-cols-12 gap-2 mt-2">

            <div class="col-start-3 col-end-6 mb-4">
                <p class="text-gray-500 text-center text-4xl">About</p>
            </div>


            <div class="col-start-1 col-end-4">
                <p class="text-gray-500 text-center text-2xl">About</p>
                <p class="text-gray-500">This site was built primarily for me to learn Laravel and a few other programs better. It's more of a learning/testbed for me.</p>
            </div>
            <div class="col-start-4 col-end-8">
                <p class="text-gray-500 text-center text-2xl">Software Used:</p>
                <p class="text-gray-500 text-center"><a href="https://laravel.com/" target="_blank" class="text-gray-500 text-center">Laravel</a></p>
                <p class="text-gray-500 text-center"><a href="https://redis.io/" target="_blank" class="text-gray-500 text-center">Redis</a></p>
                <p class="text-gray-500 text-center"><a href="https://www.php.net/" target="_blank" class="text-gray-500 text-center">PHP 8.0.3</a></p>
                <p class="text-gray-500 text-center"><a href="https://www.mysql.com/" target="_blank" class="text-gray-500 text-center">MySQL 5.7</a></p>
                <p class="text-gray-500 text-center"><a href="https://nginx.org/" target="_blank" class="text-gray-500 text-center">Nginx 1.19.9</a></p>
                <p class="text-gray-500 text-center"><a href="https://getbootstrap.com/" target="_blank">Bootstrap</a></p>
            </div>
            <div class="col-start-8 col-end-12">
                <p class="text-gray-500 text-center text-2xl">Disclaimer:</p>
                <p class="text-gray-500">This site offers no warranty, support, or ways to contact.</p>
                <p class="text-gray-500">This site may disappear random or change.</p>
                <p class="text-gray-500"><a href="https://joyfoodsunshine.com/the-most-amazing-chocolate-chip-cookies/">Here's a cookie recipe</a></p>
            </div>
        </div>
    </div>
</div>



    <!-- Footer needs to go right here -->

@include('template.footer')
<?php
