@extends('User.layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header py-3">
                <div class="row no-gutters">
                    <div class="col md-10">
                        <h1 class="h4 mb-0 font-weight-bold text-dark" style="margin-top: 0.2em;">List Prestasi</h1>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    {{--                @if(count($event->guests) > 0)--}}
                    <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                        <thead>
                        <tr class="text-center">
                            <th>Nama Event</th>
                            <th>Keterangan Event</th>
                            <th>Prestasi</th>
                            <th>Tanggal Pelaksanaan</th>
                            <th>Penyelenggara</th>
                            <th>Pembimbing</th>
                            <th>Jenis Event</th>
                            <th>Tingkatan</th>
                            <th>Point</th>
                            <th>Negara</th>
                            <th>Bukti</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>NPLC</td>
                            <td>Lomba Coding Surabaya</td>
                            <td>Juara 1 Lomba Kategori 1</td>
                            <td>08/12/2020</td>
                            <td>Universitas Ciputra</td>
                            <td>-</td>
                            <td>Tahunan</td>
                            <td>Nasional</td>
                            <td>100</td>
                            <td>Surabaya</td>
                            <td>Link Drive</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>NPLC</td>
                            <td>Lomba Coding Surabaya</td>
                            <td>Juara 1 Lomba Kategori 1</td>
                            <td>08/12/2020</td>
                            <td>Universitas Ciputra</td>
                            <td>-</td>
                            <td>Tahunan</td>
                            <td>Nasional</td>
                            <td>100</td>
                            <td>Surabaya</td>
                            <td>Link Drive</td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
