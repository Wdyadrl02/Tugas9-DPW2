@extends('section.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                  <div class="card-header">
                    Detail Data produk
                </div>
                <div class="card-body">
                    <h1> {{ $produk->nama }}</h1>
                    <hr>
                    <strong>
                        <p>
                             {{ ($produk->harga) }} <br>
                            Stok {{ $produk->stok }} |
                            Berat {{ $produk->berat }} gram |
                            Seller: {{ $produk->seller->username }} |
                            Tanggal Produk: {{ $produk->created_at->diffForHumans()}}
                        </p>

                    </strong>
                    <p>
                        {!! nl2br($produk->deskripsi) !!}
                    </p>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection