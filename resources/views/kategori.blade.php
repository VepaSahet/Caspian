@extends('layouts.master')
@section('title',$kategori->kategori_adi)
@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{route('anasayfa')}}">Baş Sahypa</a></li>
            <li class="active">{{ $kategori->kategori_adi }}</li>
        </ol>
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $kategori->kategori_adi }}</div>
                    <div class="panel-body">
                        Jemi {{ $kategori->urunler->count() }} haryt bar.
                        <hr>
                        @if (count($alt_kategoriler)>0)
                    </div>
                    @else
                        @if($ust_kategori != null)
                            <a href="{{ route('kategori', $ust_kategori->slug) }}" class="btn btn-xs btn-block btn-primary">
                                <i class="fa fa-arrow-circle-left"></i>
                                {{ $ust_kategori->kategori_adi }}
                            </a>
                        @endif
                            {{ $kategori->kategori_adi }} kategoriýasynda başga kiçi kategoriýa ýok.
                    @endif
                    </div>
                </div>
            </div>
            <div class="col-md-15">
                <div class="products bg-content">
                    @if (count($urunler)>0)
                        Tertiple
                    <a href="?order=coksatanlar" class="btn btn-default">Köp Görülenler</a>
                    <a href="?order=yeni" class="btn btn-default">Täze Harytlar</a>
                    <hr>
                    @endif
                    <div class="row">
                        @if (count($urunler)==0)
                            <div class="col-md-12">Bu kategoriýada entek haryt ýok!</div>
                        @endif
                            @foreach($urunler as $urun)
                                <div class="col-md-3 product">
                                    <a href="{{ route('urun', $urun->slug) }}">
                                        <img src="{{ $urun->detay->urun_resmi!=null ? asset('uploads/urunler/' . $urun->detay->urun_resmi) : 'http://via.placeholder.com/400x400?text=UrunResmi' }}">
                                    </a>
                                    <p><a href="{{ route('urun', $urun->slug) }}">{{ $urun->urun_adi }}</a></p>
                                    <p class="price">{{ round($urun->fiyati, 2) }} TMT</p>
                                    <form action="{{ route('sepet.ekle') }}" method="post">
                                        {{ csrf_field() }}
                                        <input  type="hidden" name="adet" value="1" >
                                        <input  type="hidden" name="id" value="{{$urun->id}}">
                                        <input type="submit" class="btn btn-theme" value="Sepete Ekle">
                                    </form>
                                </div>
                            @endforeach
                    </div>
                    {{ request()->has('order') ? $urunler->appends(['order'=>request('order')])->links() : $urunler->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
