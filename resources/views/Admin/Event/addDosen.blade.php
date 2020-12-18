@extends('Admin.layouts.app')
@section('content')
    <section class="clean-block clean-form dark">
        <div class="container">
            <form action="" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama">NIP:</label>
                    <input type="text" class="form-control"  name="nip">
                </div>
                <div class="form-group">
                    <label for="nama">NIDN:</label>
                    <input type="text" class="form-control"  name="nidn">
                </div>
                <div class="form-group">
                    <label for="nama">Full Name:</label>
                    <input type="text" class="form-control"  name="nama">
                </div>
                <div class="form-group">
                    <label for="nama">Phone:</label>
                    <input type="text" class="form-control"  name="phone">
                </div>
                <div class="form-group">
                    <label for="nama">Line Account:</label>
                    <input type="text" class="form-control"  name="line_account">
                </div>
                <div class="form-group">
                    <label for="nama">Email:</label>
                    <input type="text" class="form-control"  name="email">
                </div>
                <div class="form-group">
                    <label for="nama">Keterangan:</label>
                    <textarea type="text" class="form-control"  name="keterangan"></textarea>
                </div>
                <div class="form-group">
                    <label for="nama">Pass Foto:</label>
                    <input type="text" class="form-control" name="passfoto">
                </div>
                <div class="form-group">
                    <label for="nama">Penyelenggara:</label>
                    <input type="text" class="form-control"  name="penyelenggara">
                </div>
                <div class="form-group">
                    <label for="nama">Prodi:</label>
                    <select name="prodi_id" class="custom-select">
{{--                        @foreach($negaras as $negara)--}}
{{--                            <option value="{{$negara->id}}">{{$negara->negara}}</option>--}}
{{--                        @endforeach--}}
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama">Jabatan:</label>
                    <select name="jabatan_id" class="custom-select">
{{--                        @foreach($negaras as $negara)--}}
{{--                            <option value="{{$negara->id}}">{{$negara->negara}}</option>--}}
{{--                        @endforeach--}}
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama">Jaka:</label>
                    <select name="jaka_id" class="custom-select">
{{--                        @foreach($negaras as $negara)--}}
{{--                            <option value="{{$negara->id}}">{{$negara->negara}}</option>--}}
{{--                        @endforeach--}}
                    </select>
                </div>
                <br>
                <div>
                <button class="btn btn-primary btn-block" type="submit">Create</button> </div>
            </form>
        </div>
    </section>


@endsection
