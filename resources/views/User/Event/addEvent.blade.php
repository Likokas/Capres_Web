@extends('User.layouts.app')
@section('content')
    <section class="clean-block clean-form dark">
        <div class="container">
            <form action="{{ route('user.event.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama Event:</label>
                    <input type="text" class="form-control"  name="nama_event">
                </div>
                <div class="form-group">
                    <label for="barcode">Keterangan Event:</label>
                    <textarea type="text" class="form-control"  name="keterangan_event"></textarea>
                </div>
                <div class="form-group">
                    <label for="barcode">Tanggal Pelaksnaan</label>
                    <input type="date" class="form-control"  name="tanggal_pelaksanaan"></input>
                </div>
                <div class="form-group">
                    <label for="nama">Jenis:</label>
                    <select name="jenis_id" class="custom-select">
                        @foreach($jenisk as $jenis)
                            <option value="{{$jenis->id}}">{{$jenis->jenis}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama">Negara:</label>
                    <select name="negara_id" class="custom-select">
                        @foreach($negaras as $negara)
                            <option value="{{$negara->id}}">{{$negara->negara}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama">Tingkatan:</label>
                    <select name="tingkatan_id" class="custom-select">
                        @foreach($tingkatans as $tingkatan)
                            <option value="{{$tingkatan->id}}">{{$tingkatan->tingkatan}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama">Penyelenggara:</label>
                    <input type="text" class="form-control"  name="penyelenggara">
                </div>
                <br>
                <div>
                <button class="btn btn-primary btn-block" type="submit">Create</button> </div>
            </form>
        </div>
    </section>


@endsection
