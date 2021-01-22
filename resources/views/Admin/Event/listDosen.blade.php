@extends('Admin.layouts.app')
@section('content')

    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header py-3">
                <div class="row no-gutters">
                    <div class="col md-10">
                        <h1 class="h4 mb-0 font-weight-bold text-primary" style="margin-top: 0.2em;">List Dosen</h1>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    {{--                @if(count($event->guests) > 0)--}}
                    <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                        <thead>
                        <tr class="text-center">
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Detail</th>
{{--                            <th>Action</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($dosens as $dosen)
                        <tr>
                            <td>{{$dosen->nip}}</td>
                            <td>{{$dosen->nama}}</td>
                            <td>{{$dosen->email}}</td>

                            <td>
                                <button class="btn btn-primary" data-toggle="modal"
                                    data-target="#detail{{$dosen->id}}"><i class="fas fa-circle" type="submit" > Detail</i>
                                </button>
                                    @include('Admin.Event.detailDosen')
                            </td>
{{--                            <td>--}}
{{--                                <form action="{{ route('admin.pembimbing.destroy', $dosen) }}" method="POST">--}}
{{--                                    --}}
{{--                                    @csrf--}}
{{--                                    <input type="hidden" name="_method" value="DELETE">--}}
{{--                                    <button class="btn btn-danger" type="submit">DELETE</button>--}}
{{--                                </form>--}}
{{--                            </td>--}}
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
