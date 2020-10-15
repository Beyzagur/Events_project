@extends('layouts.admin_panel')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="table-responsive table--no-card mb-30">
                    <table class="table table-borderless table-striped table-earning">
                        <thead>
                        <form action={{route('user.update',$user->id)}} method="post">
                            <div class="form-group">
                                <label for="exampleName">Adı</label>
                                <input type="text" name="name" value="{{$user->name}}" class="form-control"
                                       id="exampleName">
                            </div>
                            <div class="form-group">
                                <label for="exampleSurname">Soyadı</label>
                                <input type="text" name="surname" value="{{$user->surname}}" class="form-control"
                                       id="exampleSurname">
                            </div>
                            <div class="form-group">
                                <label for="exampleTelephone">Telefon</label>
                                <input type="tel" name="telephone" value="{{$user->telephone}}" class="form-control"
                                       id="exampleTelephone">
                            </div>
                            <div class="form-group">
                                <label for="examplegender">Cinsiyet</label>
                                <select name="gender">
                                    <option selected disabled>Seçiniz</option>
                                    <option value="Kadın">Kadın</option>
                                    <option value="Erkek">Erkek</option>
                                    <option value="Diğer">Diğer</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleDate">Doğum Tarihi</label>
                                <input type="date" name="date_of_birth" value="{{$user->date_of_birth}}"
                                       class="form-control"
                                       id="exampleDate">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">E-mail</label>
                                <input type="email" name="email" value="{{$user->email}}" class="form-control"
                                       id="exampleInputEmail1" aria-describedby="emailHelp">
                                <small id="emailHelp" class="form-text text-muted">E-postanızı asla başkalarıyla
                                    paylaşmayacağız.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Şifre</label>
                                <input type="password" name="password" value="{{$user->password}}" class="form-control"
                                       id="exampleInputPassword1">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Beni Hatırla</label>
                            </div>
                            @csrf
                            <button type="submit" class="btn btn-primary">GÜNCELLE</button>
                        </form>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

