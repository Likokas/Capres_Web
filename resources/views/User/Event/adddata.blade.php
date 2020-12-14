@extends('User.layouts.app')
@section('content')
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading ">
                <h1 class="text-dark mx-auto">Add Data</h1>
                <h4>Silahkan Menambah Data Prestasi Anda</h4>
            </div>
            <form>
                <div class="form-group">
                    <label>Nama Event</label>
                    <select class="custom-select" required></select>
                </div>
                <div class="alert alert-danger" style="font-size: 12px" role="alert">
                    Jika Event tidak ada, silahkan menambahkan event terlebih dahulu
                </div>
                <div class="form-group">
                    <label>Prestasi</label>
                    <input class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label>Bukti</label>
                    <input class="form-control" type="text">
                </div>
                <div class="alert alert-danger" style="font-size: 12px" role="alert">
                    Bukti harus berupa link g-drive
                </div>
                <div class="form-group">
                    <label>Pembimbing</label>
                    <select class="custom-select"> </select>
                </div>
                <div class="alert alert-danger" style="font-size: 12px" role="alert">
                    Jika Pembimbing tidak ada, silahkan menambahkan event terlebih dahulu
                </div>
                <div class="form-group">
                    <label>Point </label>
                    <input class="form-control"  type="text" disabled>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="button">Send</button></div>
            </form>
        </div>
    </section>



@endsection
