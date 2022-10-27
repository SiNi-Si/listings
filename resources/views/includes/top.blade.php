<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="img/favicon.png">
<meta name="csrf-token" content="{{ csrf_token() }}">

<link href="{{ asset('css/bootstrap.min.css') }}" id="option_style" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" id="option_style" rel="stylesheet">

</head>
