@extends('layouts.admin_panel')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form action="{{route('events.create')}}" method="post" enctype="multipart/form-data">
                    <h4>Etkinlik Kayıt Formu:</h4>
                    <div class="form-group">
                        <label for="exampleCategory">Kategori</label>
                        <select name="category">
                            <option value disabled>Lütfen Seçiniz</option>
                            <option value="Festival">Festival</option>
                            <option value="Konferans">Konferans</option>
                            <option value="Konser">Konser</option>
                            <option value="Müze">Müze</option>
                            <option value="Sahne">Sahne</option>
                            <option value="Sergi">Sergi</option>
                            <option value="Webinar">Webinar</option>
                            <option value="Diğer">Diğer</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleName">Adı</label>
                        <input type="text" name="name" class="form-control" id="exampleInputName ">
                    </div>
                    <div class="form-group">
                        <label for="exampleDate">Tarih</label>
                        <input type="date" name="date" class="form-control" id="exampleDate">
                    </div>
                    <div class="form-group">
                        <label for="exampleTime">Saat</label>
                        <input type="time" name="time" class="form-control" id="exampleTime">
                    </div>
                    <div class="from-group">
                        <label for="exampleCity">Şehir</label>
                        <select name="city">
                            <option value disabled>Lütfen Seçiniz</option>
                            <option value="Tüm Şehirler">Tüm Şehirler</option>
                            <option value="Adana">Adana</option>
                            <option value="Adıyaman">Adıyaman</option>
                            <option value="Afyonkarahisar">Afyonkarahisar</option>
                            <option value="Ağrı">Ağrı</option>
                            <option value="Aksaray">Aksaray</option>
                            <option value="Amasya">Amasya</option>
                            <option value="Ankara">Ankara</option>
                            <option value="Antalya">Antalya</option>
                            <option value="Ardahan">Ardahan</option>
                            <option value="Artvin">Artvin</option>
                            <option value="Aydın">Aydın</option>
                            <option value="Balıkesir">Balıkesir</option>
                            <option value="Bartın">Bartın</option>
                            <option value="Batman">Batman</option>
                            <option value="Bayburt">Bayburt</option>
                            <option value="Bilecik">Bilecik</option>
                            <option value="Bingöl">Bingöl</option>
                            <option value="Bitlis">Bitlis</option>
                            <option value="Bolu">Bolu</option>
                            <option value="Burdur">Burdur</option>
                            <option value="Bursa">Bursa</option>
                            <option value="Çanakkale">Çanakkale</option>
                            <option value="Çankırı">Çankırı</option>
                            <option value="Çorum">Çorum</option>
                            <option value="Denizli">Denizli</option>
                            <option value="Diyarbakır">Diyarbakır</option>
                            <option value="Düzce">Düzce</option>
                            <option value="Edirne">Edirne</option>
                            <option value="Elazığ">Elazığ</option>
                            <option value="Erzincan">Erzincan</option>
                            <option value="Erzurum">Erzurum</option>
                            <option value="Eskişehir">Eskişehir</option>
                            <option value="Gaziantep">Gaziantep</option>
                            <option value="Giresun">Giresun</option>
                            <option value="Gümüşhane">Gümüşhane</option>
                            <option value="Hakkari">Hakkari</option>
                            <option value="Hatay">Hatay</option>
                            <option value="Iğdğr">Iğdır</option>
                            <option value="Isparta">Isparta</option>
                            <option value="İstanbul">İstanbul</option>
                            <option value="İzmir">İzmir</option>
                            <option value="Kahramanmaraş">Kahramanmaraş</option>
                            <option value="Karabük">Karabük</option>
                            <option value="Karaman">Karaman</option>
                            <option value="Kars">Kars</option>
                            <option value="Kastamonu">Kastamonu</option>
                            <option value="Kayseri">Kayseri</option>
                            <option value="Kırıkkale">Kırıkkale</option>
                            <option value="Kırklareli">Kırklareli</option>
                            <option value="Kırşehir">Kırşehir</option>
                            <option value="Kilis">Kilis</option>
                            <option value="Kocaeli">Kocaeli</option>
                            <option value="Konya">Konya</option>
                            <option value="Kütahya">Kütahya</option>
                            <option value="Malatya">Malatya</option>
                            <option value="Manisa">Manisa</option>
                            <option value="Mardin">Mardin</option>
                            <option value="Mersin">Mersin</option>
                            <option value="Muğla">Muğla</option>
                            <option value="Muş">Muş</option>
                            <option value="Nevşehir">Nevşehir</option>
                            <option value="Niğde">Niğde</option>
                            <option value="Ordu">Ordu</option>
                            <option value="Osmaniye">Osmaniye</option>
                            <option value="Rize">Rize</option>
                            <option value="Sakarya">Sakarya</option>
                            <option value="Samsun">Samsun</option>
                            <option value="Siirt">Siirt</option>
                            <option value="Sinop">Sinop</option>
                            <option value="Sivas">Sivas</option>
                            <option value="Şanlıurfa">Şanlıurfa</option>
                            <option value="Şırnak">Şırnak</option>
                            <option value="Tekirdağ">Tekirdağ</option>
                            <option value="Tokat">Tokat</option>
                            <option value="Trabzon">Trabzon</option>
                            <option value="Tunceli">Tunceli</option>
                            <option value="Uşak">Uşak</option>
                            <option value="Van">Van</option>
                            <option value="Yalova">Yalova</option>
                            <option value="Yozgat">Yozgat</option>
                            <option value="Zonguldak">Zonguldak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleprice">Mekan</label>
                        <input type="text" name="place" class="form-control" id="exampleInputPlace ">
                    </div>
                    <div class="form-group">
                        <label for="exampleprice">Fiyat</label>
                        <input type="text" name="price" class="form-control" id="exampleInputPrice ">
                    </div>
                    <div class="form-group">
                        <label for="examplephoto">Fotoğraf</label>
                        <input type="file" name="photo" class="form-control" id="exampleInputPhoto ">
                    </div>
                    @csrf

                    <button type="submit" class="btn btn-primary">Kaydet</button>
                </form>
            </div>
        </div>
    </div>
@endsection

