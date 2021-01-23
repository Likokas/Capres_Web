@extends('Admin.layouts.app')
@section('content')
    <section class="clean-block clean-form dark">
        <div class="container">
            <form action="{{ route('admin.account.store') }}" method="post"> {{--add data dosen -- DosenController--}}
                @csrf
                <div class="form-group">
                    <label for="nama">Full Name:</label>
                    <input type="text" class="form-control"  name="name">
                </div>
                <div class="form-group">
                    <label for="nama">Email:</label>
                    <input type="text" class="form-control"  name="email">
                </div>
                <div class="form-group">
                    <label for="nama">Password:</label>
                    <input type="text" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <label for="nama">Mahasiswa:</label>
                    <select name="prodi_id" class="custom-select">
                        @foreach($mahasiswas as $mahasiswa)
                            <option value=""></option>
                            <option value="{{$mahasiswa->id}}">{{$mahasiswa->nama}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama">Dosen:</label>
                    <select name="prodi_id" class="custom-select">
                        @foreach($dosens as $dosen)
                            <option value=""></option>
                            <option value="{{$dosen->id}}">{{$dosen->nama}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <select name="role_id" id="">
                        <option value="2">User</option>
                    </select>
                </div>
                <br>
                <div>
                    <button class="btn btn-primary btn-block" type="submit">Create</button> </div>
            </form>
        </div>
    </section>


@endsection
