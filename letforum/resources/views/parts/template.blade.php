<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="initial-scale=1, minimum-scale=1, width=device-width">
        {{-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> --}}
        <link rel="stylesheet" type="text/css" href="{{ env('APP_URL_PUBLIC') }}assets/fonts/stylesheet.css?v={{ env('VERSION') }}">
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" /> --}}
        <link rel="stylesheet" type="text/css" href="{{ env('APP_URL_PUBLIC') }}assets/css/index.css?v={{ env('VERSION') }}">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
        crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"
        integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0="
        crossorigin="anonymous"></script>
        

        <link rel="mask-icon" href="{{ env('APP_URL_PUBLIC') }}/safari-pinned-tab.svg?v={{ env('VERSION') }}" color="#ffffff">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="theme-color" content="#ffffff">

        <title>Fórum Flash</title>
    </head>
    <body onselectstart="return false">


        
      