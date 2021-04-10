<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    @if (Request::is('citizen/*'))
        <title>Ohioer | {{ $full_name }} | {{ $citizen_age }} | {{ $home_city }}, {{ $home_state }}</title>
    @elseif(Request::is('browse'))
        <title>Ohioer | Ohio Information Lookup | Browse</title>
    @else
        <title>Ohioer - Ohio Information Lookup</title>
    @endif


    @if (Request::is('citizen/*'))
            <meta name="description" content="Find Current Address Information and age for citizens of Ohio. {{ $full_name }} | {{ $citizen_age }} | {{ $home_city }}, {{ $home_state }}" />
    @else
             <meta name="description" content="Find Current Address Information and age for citizens of Ohio." />
    @endif


    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<div class="md:container md:mx-auto bg-gray-50">
