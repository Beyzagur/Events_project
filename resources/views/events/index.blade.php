@extends('layouts.admin_panel')

@section('content')
    <div class="row">
        <div class="col-lg-10">
            <div class="card">
                <div class="table-responsive table--no-card mb-30">
                    <table class="table table-borderless table-striped table-earning">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"></th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Etkinlik Adı</th>
                            <th scope="col">Tarih</th>
                            <th scope="col">Saat</th>
                            <th scope="col">Şehir</th>
                            <th scope="col">Mekan</th>
                            <th scope="col">Fiyat</th>
                            <th scope="col">Etkinliği Yükleyen</th>
                            <th scope="col">İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($events as $event)
                            <tr>
                                <td scope="row">{{$event->id}}</td>
                                <td><img src="{{asset('uploads/events/')."/".$event->photo}}" alt="{{$event->name}}" width="100px" height="100px"/></td>
                                <td>{{$event->category}}</td>
                                <td>{{$event->name}}</td>
                                <td>{{$event->date}}</td>
                                <td>{{$event->time}}</td>
                                <td>{{$event->city}}</td>
                                <td>{{$event->place}}</td>
                                <td>{{$event->price. '₺'}}</td>
                                <td>{{$event->userName}} {{$event->userSurname}} </td>
                                <td>
                                    <a href="/sill/{{$event->id}}">SİL</a>
                                    <a href="/guncel/{{$event->id}}">GÜNCELLE</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
