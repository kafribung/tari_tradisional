@extends('layouts.app')
@section('title', 'Create Data')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <form action="/suku" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="title">Nama Tarian</label>
                  <input type="text" class="form-control  @error('title') is-invalid @enderror" id="title" name="title" autocomplete="off" autofocus placeholder="Input Nama Tarian" value="{{old('title')}}" >

                  @error('title')
                      <p class="alert alert-danger">{{$message}}</p>
                  @enderror
                </div>

                <div class="form-group">
                    <label for="img">Gambar</label>
                    <input type="file" class="form-control @error('img') is-invalid @enderror" id="img" name="img" autocomplete="off" value="{{old('img')}}"  >
               
                    @error('img')
                        <p class="alert alert-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" > {{old('title')}}</textarea>
                    
                    @error('description')
                        <p class="alert alert-danger">{{$message}}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-block">Tambah</button>
            </form>
        </div>
    </div>
</div>

@endsection
