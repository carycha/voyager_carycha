@extends('voyager::master')

@section('content')
    <p>先試著印出回傳內容, {{ $testdatas }}</p></br>

    @foreach($testdatas as $testdata)
        <p>試著印出for {{ $testdata }} <a href='/'>home</a></p>
    @endforeach
@endsection
