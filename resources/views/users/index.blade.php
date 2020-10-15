@extends('layouts.admin_panel')

@section('content')
    <div class="row">
        <div class="col-lg-9">
            <div class="card">
                <div class="table-responsive table--no-card mb-30">
                    <table class="table table-borderless table-striped table-earning">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>İSİM</th>
                            <th scope="col">SOYİSİM</th>
                            <th scope="col">TELEFON</th>
                            <th scope="col">CİNSİYET</th>
                            <th scope="col">DOĞUM TARİHİ</th>
                            <th scope="col">E-MAİL</th>
                            <th scope="col">İŞLEMLER</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td scope="row">{{$user->id}}</td>
                                <td >{{$user->name}}</td>
                                <td>{{$user->surname}}</td>
                                <td>{{$user->telephone}}</td>
                                <td>{{$user->gender}}</td>
                                <td>{{$user->date_of_birth}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <button type="button" class="btn btn-danger"><a href="/sil/{{$user->id}}" style="color: white">Sil</a></button>
                                    <button type="button" class="btn btn-info"><a href="/guncel/{{$user->id}}" style="color: white">Güncelle</a></button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <button type="button" class="btn btn-primary"><a href="/kayit" style="color: white">Üye Ekle</a></button>
                    <button type="button" class="btn btn-secondary"><a href="/indir" style="color: white">İndir</a></button>


                </div>
            </div>
        </div>
    </div>

@endsection
