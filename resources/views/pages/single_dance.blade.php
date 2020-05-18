@extends('layouts.app')
@section('title', 'Suku Di Nusantara')
@section('content')
<div class="container">

    <div class="row">
        <div class="col-sm-8">
            <h1>{{$dance->title}}</h1>
            <img src="{{url($dance->img)}}" alt="Gambar Tarian" width="700" height="400" class="radius">
            <p class="mt-3">{{$dance->description}}</p>
        </div>
    </div>
</div>
@endsection
