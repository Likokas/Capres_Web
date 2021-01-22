@extends('Admin.layouts.app')
@section('content')

<div class="container-fluid">
    <div class="card mb-4">
        <div class="card-header py-3">
            <div class="row no-gutters">
                <div class="col md-10">
                    <h1 class="h4 mb-0 font-weight-bold text-primary" style="margin-top: 0.2em;">List Prestasi ( ADMIN )</h1>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
{{--                @if(count($event->guests) > 0)--}}
                    <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                        <thead>
                        <tr class="text-center">
                            <th>Name</th>
                            <th>Nama Event</th>
                            <th>Keterangan Point</th>
                            <th>Detail</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($events as $event) {{--menampilkan data -- Admin/EventController--}}
                        <tr>
                            <td>{{$event->user->name}}</td> {{-- Function user Model/EventUser -> nama coloumn--}}
                            <td>{{$event->event->nama_event}}</td>
                            <td>{{$event->point->keterangan}}</td>
                            <td>
                                <button class="btn btn-primary" data-toggle="modal"
                                        data-target="#detail{{$event->id}}"><i class="fas fa-circle" type="submit" > Detail</i></button>
                                @include('Admin.Event.detail')
                            </td>
                            <td>@if($event->is_approved == 0) <p class="text-warning">Pending</p> {{--Function approve Admin/EventController--}}
                                @elseif($event->is_approved == 1) <p class="text-success">Approved</p>
                                @else <p class="text-danger">Rejected</p> @endif </td>
                            <td width="150px">
                                <div class="row no-gutters">
                                    @if($event->is_approved == 0)
                                        <div class="col-md-6">
                                            <form action="{{route('admin.events.approve', $event->id)}}" method="POST">
                                                  {{ csrf_field() }}
                                                  <input name="event_id" type="hidden" value="{{$event->id}}">
                                                  <button class="btn btn-success btn-circle" title="Approve" type="submit"><i class="fas fa-check"></i></button>
                                            </form>
                                        </div>
                                        <div class="col-md-6">
                                            <form action="{{route('admin.events.decline', $event->id)}}" method="POST">
                                                   {{ csrf_field() }}
                                                   <input name="event_id" type="hidden" value="{{$event->id}}">
                                                   <button class="btn btn-danger btn-circle" title="Reject" type="submit"><i class="fas fa-times"></i></button>
                                            </form>
                                        </div>
                                    @endif
                                </div>
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
