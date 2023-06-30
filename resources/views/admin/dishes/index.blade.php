@extends('layouts.app');
@section('content')
<h1>Index</h1>
<h5>Lista piatti</h5>
@foreach ($dishes as $dish)
    <p> Nome piatto: {{$dish->name}}</p>
@endforeach
@endsection
