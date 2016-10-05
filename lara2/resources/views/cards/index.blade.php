@extends('layout')
@section('body')

<h1>All cards</h1>
@foreach ($cards as $card)
    <div>
{{ $card->title }}
</div>
@endforeach
@stop