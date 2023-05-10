@extends('layout.app')


@section('page-title')
@endsection

@section('headerData')
    <img src="../img/dc-logo.png" alt="">
    @foreach ($navData as $data)
        <li>{{ $data['text'] }}</li>
    @endforeach
@endsection


@section('content')
@endsection
