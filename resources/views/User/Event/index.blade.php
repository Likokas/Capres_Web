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
                            <th>Prestasi</th>
                            <th>Pembimbing</th>
                            <th>Bukti</th>
                            <th>Point</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
{{--                            @foreach($events as $event)--}}
{{--                                <tr>--}}
{{--                                    <td>{{$event->namaEvent->nama_event}}</td>--}}
{{--                                    <td>{{$event->keterangan_event}}</td>--}}
{{--                                    <td>{{$event->prestasi}}</td>--}}
{{--                                    <td>{{$event->tanggal_pelaksanaan}}</td>--}}
{{--                                    <td>{{$event->penyelenggara}}</td>--}}
{{--                                    <td>{{$event->pembimbing->pembimbing}}</td>--}}
{{--                                    <td>{{$event->jenis->jenis}}</td>--}}
{{--                                    <td>{{$event->tingkatan->tingkatan}}</td>--}}
{{--                                    <td>{{$event->point->point}}</td>--}}
{{--                                    <td>{{$event->negara->negara}}</td>--}}
{{--                                    <td>{{$event->bukti}}</td>--}}
{{--                                    <td>-</td>--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
