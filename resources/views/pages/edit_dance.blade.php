@extends('layouts.app')
@section('title', 'Edit Data')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <form action="/suku/{{$dance->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label for="title">Nama Tarian</label>
                  <input type="text" class="form-control  @error('title') is-invalid @enderror" id="title" name="title" autocomplete="off" autofocus placeholder="Input Nama Tarian" value="{{old('title') ? old('title') : $dance->title}}" >

                  @error('title')
                      <p class="alert alert-danger">{{$message}}</p>
                  @enderror
                </div>

                <div class="form-group">
                    <label for="img">Gambar</label>
                    <img src="{{url($dance->img)}}" alt="{{$dance->title}}" width="200" height="80" >
                    <input type="file" class="form-control @error('img') is-invalid @enderror" id="img" name="img">
               
                    @error('img')
                        <p class="alert alert-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" > {{old('title') ? old('title') : $dance->description }} </textarea>
                    
                    @error('description')
                        <p class="alert alert-danger">{{$message}}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-warning btn-block">Edit</button>
            </form>
        </div>
    </div>
</div>

@endsection
