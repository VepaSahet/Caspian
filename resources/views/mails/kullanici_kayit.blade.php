<h1>{{ config('app.name') }}</h1>
<p>Salam {{ $kullanici->adsoyad }}, siziň hasaba alynmagyňyz üstünlikli geçirildi.</p>
<p>Hasabyňyzy aktiwleşdirmek üçin <a href="{{ config('app.url') }}/kullanici/aktiflestir/{{ $kullanici->aktivasyon_anahtari }}">basyň</a> ýada aşakda berilen sylkany brauzeriňizde açyň.</p>
<p>{{ config('app.url') }}/kullanici/aktiflestir/{{ $kullanici->aktivasyon_anahtari }}</p>
