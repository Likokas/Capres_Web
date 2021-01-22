<!-- The Modal -->
<div class="modal fade" id="detail">
    <div class="modal-dialog">
        <form  class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Detail Dosen</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->

            <div class="modal-body" style="text-align: left;">
                <div class="form-group">
                    <label>NIP</label>
                    <input class="form-control" type="text" disabled value="{{ $dosen->nip }}">
                </div>
                <div class="form-group">
                    <label>NIDN</label>
                    <input class="form-control" type="text" disabled value="{{ $dosen->nidn }}">
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" type="text" disabled value="{{ $dosen->nama }}">
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input class="form-control" type="text" disabled value="{{ $dosen->phone }}">
                </div>
                <div class="form-group">
                    <label>Line Account</label>
                    <input class="form-control" type="text" disabled value="{{ $dosen->line_account }}">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="text" disabled value="{{ $dosen->email }}">
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <input class="form-control" type="text" disabled value="{{ $dosen->keterangan }}">
                </div>
                <div class="form-group">
                    <label>Pass Foto</label>
                    <input class="form-control" type="text" disabled value="{{ $dosen->passfoto }}">
                </div>
                <div class="form-group">
                    <label>Prodi</label>
                    <input class="form-control" type="text" disabled value="{{ $dosen->prodiDosen->prodi }}">

                </div>
                <div class="form-group">
                    <label>Jabatan </label>
                    <input class="form-control" type="text" disabled value="{{ $dosen->jabatan->jabatan }}">
                </div>
                <div class="form-group">
                    <label>Jaka</label>
                    <input class="form-control" type="text" disabled value="{{ $dosen->jaka->jaka }}">
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
