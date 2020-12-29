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
                            @foreach($eu as $evu)
                                <tr>
                                    <td>{{$evu->event->nama_event}}</td>

                                    <td>{{$evu->prestasi}}</td>

                                    <td>{{$evu->dosen->nama}}</td>
                                    <td>{{$evu->bukti}}</td>
                                    <td>{{$evu->point->keterangan}}</td>
                                    <td>@if($evu->is_approved == 0) <p class="text-warning">Pending</p>
                                        @elseif($evu->is_approved == 1) <p class="text-success">Approved</p>
                                        @else <p class="text-danger">Rejected</p> @endif
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
