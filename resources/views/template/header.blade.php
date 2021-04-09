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


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
