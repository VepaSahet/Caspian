@extends('layouts.master')
@section('title','Siparişler')
@section('content')
    <div class="container">
        <div class="bg-content">
            <h2>Sargytlar</h2>
            @if(count($siparisler)==0)
                <p>Entäk sargydyňyz yok</p>
            @else
            <table class="table table-bordererd table-hover">
                <tr>
                    <th>Sargyt Nomeri</th>
                    <th>Jemi Bahasy</th>
                    <th>Jemi Haryt</th>
                    <th>Ýagdaýy</th>
                    <th></th>
                </tr>
                @foreach($siparisler as $siparis)
                <tr>
                    <td>SP-{{ $siparis->id }}</td>
                    <td>{{ $siparis->siparis_tutari * ((100+config('card.tax'))/100) }}</td>
                    <td>{{ $siparis->sepet->sepet_urun_adet() }}</td>
                    <td>{{ $siparis->durum }}</td>
                    <td><a href="{{ route('siparis', $siparis->id) }}" class="btn btn-sm btn-success">Maglumat</a></td>
                </tr>
                @endforeach
            </table>
            @endif
        </div>
    </div>
@endsection
