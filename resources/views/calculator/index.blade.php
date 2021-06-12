@extends('layout.master')
@section('title','calculator')
@section('content')
    <H1>เครื่องคิดเลข</H1>
    ผลของเลข {{$num1}} และ {{$num2}} เท่ากับ {{$num1 + $num2}}
    <hr>
@endsection
