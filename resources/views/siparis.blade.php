@extends('layouts.master')
@section('title','Sipariş Detayı')
@section('content')
    <div class="container">
        <div class="bg-content">
            <a  href="{{ route('siparisler') }}" class="btn btn-xs btn-primary">
                <i class="glyphicon glyphicon-arrow-left"></i> Sargytlara geç
            </a>
            <h2>Sargyt (Sargyt-{{ $siparis->id }})</h2>
            <table class="table table-bordererd table-hover">
                <tr>
                    <th colspan="2">Haryt</th>
                    <th>Jemi</th>
                    <th>Mukdar</th>
                    <th>Ara Toplam</th>
                    <th>Ýagdaýy</th>
                </tr>
                @foreach($siparis->sepet->sepet_urunler as $sepet_urun)
                <tr>
                    <td style="width: 120px">
                        <a href="{{ route('urun', $sepet_urun->urun->slug) }}">
                            <img src="{{ $sepet_urun->urun->detay->urun_resmi!=null ? asset('uploads/urunler/' . $sepet_urun->urun->detay->urun_resmi) : 'http://via.placeholder.com/120x100?text=UrunResmi' }}" style="height: 120px;">
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('urun', $sepet_urun->urun->slug) }}">
                        {{ $sepet_urun->urun->urun_adi }}
                        </a>
                    </td>
                    <td>{{ $sepet_urun->fiyati }} TMT</td>
                    <td>{{ $sepet_urun->adet }}</td>
                    <td>{{ $sepet_urun->fiyati * $sepet_urun->adet }} TMT</td>
                    <td>{{ $sepet_urun->durum}}</td>
                </tr>
                @endforeach
                <tr>
                    <th colspan="4" class="text-right">Jemi Baha</th>
                    <td colspan="2">{{ $siparis->siparis_tutari }} TMT</td>
                </tr>
                <tr>
                    <th colspan="4" class="text-right">Toplam Tutar (KDV'li)</th>
                    <td colspan="2">{{ $siparis->siparis_tutari* ((100+config('cart.tax'))/100) }} TMT</td>
                </tr>
                <tr>
                    <th colspan="4" class="text-right">Sargyt Ýagdaýy</th>
                    <td colspan="2">{{ $siparis->durum }} </td>
                </tr>
            </table>
        </div>
    </div>
@endsection
