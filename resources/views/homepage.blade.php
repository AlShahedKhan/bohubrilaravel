@extends('layouts.custom')
@section('content')
    <img src="/images/Capture.PNG" alt="">
    @foreach ($products as $data)
        @if ($data == 'table')
            <h1>{{ $data }}</h1>
        @elseif ($data == 'chare')
            <h1>{{ $data }}</h1>
        @else
            <h1>This is not table or chir</h1>
        @endif
    @endforeach
@endsection
