@extends('User.layouts.app')
@section('content')
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading ">
                <h2 class="text-info mx-auto">Add Data</h2>
                <p>Silahkan Menambah Data</p>
            </div>
            <form>
                <div class="form-group">
                    <label>Nama Event</label>
                    <select class="custom-select"> </select>
                </div>
                <div class="form-group">
                    <label>Keterangan Event</label>
                    <textarea class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Prestasi</label>
                    <input class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label>Bukti</label>
                    <input class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label>Tanggal Pelaksanaan</label>
                    <input class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label>Negara</label>
                    <select class="custom-select"> </select>
                </div>
                <div class="form-group">
                    <label>Pembimbing</label>
                    <select class="custom-select"> </select>
                </div>
                <div class="form-group">
                    <label>Tingkatan </label>
                    <select class="custom-select"> </select>
                </div>
                <div class="form-group">
                    <label>Point </label>
                    <input class="form-control"  type="text" disabled>
                </div>
                <div class="form-group">
                    <label>Penyelenggara</label>
                    <input class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label>Jenis Event&nbsp;</label>
                    <select class="custom-select"> </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="button">Send</button></div>
            </form>
        </div>
    </section>



@endsection
