@extends('layouts.app')
@section('title', 'Suku Di Nusantara')
@section('content')
<div class="container">

    @if (session('msg'))
        <p class="alert alert-info">{{session('msg')}}</p>
    @endif

    <div class="row">
        @foreach ($dances as $dance)
        <div class="col-sm-4 mb-4">
            <div class="card">
                <div class="card-img-body">
                    <img class="card-img" src="{{url($dance->img)}}" alt="Card image cap">
                </div>
                <div class="card-body">
                    <h4 class="card-title"><a href="/suku/{{$dance->title}}">{{$dance->title}}</a></h4>
                    <p class="card-text">{{Str::limit($dance->description, 300)}}</p>

                    @if ($dance->isLogin())
                        
                    <a href="/suku/{{$dance->id}}/edit" class="btn btn-outline-warning btn-sm">Edit</a>

                    <form  action="/suku/{{$dance->id}}" method="POST" class="d-inline-flex">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Hapus Data {{$dance->title}}?  ')" class="btn btn-outline-danger btn-sm">Delete</button>
                    </form>
                    @endif
                </div>
                <div class="card-footer">
                    <h6>Ditulis Oleh {{$dance->user->name}} : {{$dance->created_at->format('d M Y')}}</h6>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    {{$dances->links()}}

</div>
@endsection
