<div class="list-group">
    <a href="{{ route('yonetim.anasayfa') }}" class="list-group-item">
        <span class="fa fa-fw fa-dashboard"></span> Dolandyryş Paneli
    </a>
    <a href="{{ route('yonetim.urun') }}" class="list-group-item">
        <span class="fa fa-fw fa-cubes"></span> Harytlar
        <span class="badge badge-dark badge-pill pull-right">{{ $istatistikler['toplam_urun'] }}</span>
    </a>
    <a href="{{ route('yonetim.kategori') }}" class="list-group-item">
        <span class="fa fa-fw fa-folder"></span> Kategoriýalar
        <span class="badge badge-dark badge-pill pull-right">{{ $istatistikler['toplam_kategori'] }}</span>
    </a>
    <a href="#" class="list-group-item">
        <span class="fa fa-fw fa-comment"></span> Haryt Synlary
    </a>
    <a href="#" class="list-group-item collapsed" data-target="#mnu_kategori_urunleri" data-toggle="collapse"
       data-parent="#sidebar"><span class="fa fa-fw fa-folder"></span> Kategoriýa Harytlary <span class="caret arrow"></span></a>
    <div class="list-group collapse" id="mnu_kategori_urunleri">
        <a href="#" class="list-group-item">Kategoriýalar</a>
        <a href="#" class="list-group-item">Kategoriýalar</a>
    </div>
    <a href="{{ route('yonetim.kullanici') }}" class="list-group-item">
        <span class="fa fa-fw fa-users"></span> Ulanyjylar
        <span class="badge badge-dark badge-pill pull-right">{{ $istatistikler['toplam_kullanici'] }}</span>
    </a>
    <a href="{{ route('yonetim.siparis') }}" class="list-group-item">
        <span class="fa fa-fw fa-shopping-cart"></span> Sargytlar
        <span class="badge badge-dark badge-pill pull-right">{{ $istatistikler['bekleyen_siparis'] }}</span>
    </a>
    <a href="#" class="list-group-item collapsed" data-target="#mnu_raporlar" data-toggle="collapse"
       data-parent="#sidebar"><span class="fa fa-fw fa-pie-chart"></span> Raportlar <span class="caret arrow"></span></a>
    <div class="list-group collapse" id="mnu_raporlar">
        <a href="#" class="list-group-item"> Köp satylan harytlar </a>
        <a href="#" class="list-group-item"> Günlere Görä Satylanlar </a>
    </div>
    <a href="#" class="list-group-item">
        <span class="fa fa-fw fa-adjust "></span> Saýt Sazlamalary
    </a>
</div>
