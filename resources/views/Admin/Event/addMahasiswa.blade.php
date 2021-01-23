@extends('Admin.layouts.app')
@section('content')
    <section class="clean-block clean-form dark">
        <div class="container">
            <form action="{{ route('admin.mahasiswa.store') }}" method="post"> {{--add data dosen -- DosenController--}}
                @csrf
                <div class="form-group">
                    <label for="nama">NIM:</label>
                    <input type="text" class="form-control"  name="nim">
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
                    <label for="nama">Angkatan:</label>
                    <textarea type="text" class="form-control"  name="angkatan"></textarea>
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
                    <label for="nama">Prodi:</label>
                    <select name="prodi_id" class="custom-select">
                        @foreach($prodis as $prodi)
                            <option value="{{$prodi->id}}">{{$prodi->inisial.'('.$prodi->prodi.')'}}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <div>
                    <button class="btn btn-primary btn-block" type="submit">Create</button> </div>
            </form>
        </div>
    </section>


@endsection
