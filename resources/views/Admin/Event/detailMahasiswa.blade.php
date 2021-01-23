<!-- The Modal -->
<div class="modal fade" id="detail{{$mahasiswa->id}}">
    <div class="modal-dialog">
        <form  class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Detail Mahasiswa</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->

            <div class="modal-body" style="text-align: left;">
                <div class="form-group">
                    <label>NIM</label>
                    <input class="form-control" type="text" disabled value="{{ $mahasiswa->nim }}">
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" type="text" disabled value="{{ $mahasiswa->nama }}">
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input class="form-control" type="text" disabled value="{{ $mahasiswa->phone }}">
                </div>
                <div class="form-group">
                    <label>Line Account</label>
                    <input class="form-control" type="text" disabled value="{{ $mahasiswa->line_account }}">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="text" disabled value="{{ $mahasiswa->email }}">
                </div>
                <div class="form-group">
                    <label>Angkatan</label>
                    <input class="form-control" type="text" disabled value="{{ $mahasiswa->angkatan }}">
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <input class="form-control" type="text" disabled value="{{ $mahasiswa->keterangan }}">
                </div>
                <div class="form-group">
                    <label>Pass Foto</label>
                    <input class="form-control" type="text" disabled value="{{ $mahasiswa->passfoto }}">
                </div>
                <div class="form-group">
                    <label>Prodi</label>
                    <input class="form-control" type="text" disabled value="{{ $mahasiswa->prodiMahasiswa->prodi }}">

                </div>
            </div>
        </form>
        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Back</button>
        </div>
    </div>
</div>
</div>
