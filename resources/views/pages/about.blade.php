@extends('layouts.app')
@section('title', 'Tentang Iccang')
@section('content')
<div class="container">

    <div class="row">
        <div class="col-sm-4">
            <img src="{{ asset('img/iccang.jpg') }}" width="200" height="400" class="card-img-top" alt="Iccang kun">
        </div>
        <div class="col-sm-8">
            <div class="card border-primary">
                <div class="card-header border-danger">
                    <h2>Orang Biasa yg Pengen Jadi Luar Biasa !</h2>
                </div>
                <div class="card-body">
                  <p class="card-text">Nama saya M. Ihsan Mustapa, orang biasa memanggil saya Iccang. Saya merupakan mahasiswa jurusan sistem informasi UIN Alauddin Makassar, saya lahir di Luwu Utara 20 tahun yang lalu, saya mempunyai hobi nonton anime dan menggambar, saya tertarik dengan dunia desain dan multimedia terkadang saya juga suka membeli barang yang bahkan tidak saya butuhkan sama sekali hanya karena saya ingin menghilangkan rasa penasaran.</p>
                  <p class="font-weight-bold">Saya Jomblo loh :)</p>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
