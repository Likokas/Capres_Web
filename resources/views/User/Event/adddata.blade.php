@extends('User.layouts.app')
@section('content')
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading ">
                <h1 class="text-dark mx-auto">Add Data</h1>
                <h4>Silahkan Menambah Data Prestasi Anda</h4>
            </div>
            <form action="{{ route('user.data.store') }}" method="post"> {{--menampilkan data -- /EventUserController--}}
                @csrf
                <div class="form-group">
                    <label>Nama Event</label>
                    <select name="event_id" class="custom-select">
                        @foreach($datas as $data) {{--menampilkan data dropdown -- /EventUserController--}}
                            <option value="{{$data->id}}">{{$data->nama_event.'  ('. $data->tanggal_pelaksanaan.')'}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="alert alert-danger" style="font-size: 12px" role="alert">
                    Jika Event tidak ada, silahkan menambahkan event terlebih dahulu
                </div>
                <div class="form-group">
                    <label>Prestasi</label>
                    <input name="prestasi" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label>Tanggal</label>
                    <input name="tanggal_input" class="form-control" type="date">
                </div>
                <div class="form-group">
                    <label>Bukti</label>
                    <input name="bukti" class="form-control" type="text">
                </div>
                <div class="alert alert-danger" style="font-size: 12px" role="alert">
                    Bukti harus berupa link g-drive
                </div>
                <div class="form-group">
                    <label>Pembimbing</label>
                    <select name="dosen_id" class="custom-select">
                        @foreach($dosens as $dosen)
                            <option value="{{$dosen->id}}">{{$dosen->nama}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="alert alert-danger" style="font-size: 12px" role="alert">
                    Jika Pembimbing tidak ada, silahkan menambahkan event terlebih dahulu
                </div>
                <div class="form-group">
                    <label>Point </label>
                    <select name="point_id" class="custom-select">
                        @foreach($points as $point)
                            <option value="{{$point->id}}">{{$point->keterangan.' ('. $point->point.')'}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <input name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}" class="form-control" type="hidden">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Send</button></div>
            </form>
        </div>
    </section>



@endsection
