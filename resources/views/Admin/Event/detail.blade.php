<!-- The Modal -->
<div class="modal fade" id="detail">
    <div class="modal-dialog">
        <form  class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Detail Event</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->

            <div class="modal-body" style="text-align: left;">
                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" type="text" disabled value="{{ $event->user->name }}" >
                </div>
                <div class="form-group">
                    <label>Nama Event</label>
                    <input class="form-control" type="text" disabled value="{{ $event->event->nama_event }}" >
                </div>

                <div class="form-group">
                    <label>Keterangan Point</label>
                    <input class="form-control" type="text" disabled value="{{ $event->point->keterangan }}">
                </div>
                <div class="form-group">
                    <label>Point</label>
                    <input class="form-control" type="text" disabled value="{{ $event->point->point }}">
                </div>

                <div class="form-group">
                    <label>Prestasi</label>
                    <input class="form-control" type="text" disabled value="{{ $event->prestasi }}">
                </div>
                <div class="form-group">
                    <label>Bukti</label>
                    <input class="form-control" type="text" disabled value="{{ $event->bukti }}">
                </div>
                <div class="form-group">
                    <label>Tanggal Input</label>
                    <input class="form-control" type="text" disabled value="{{ $event->tanggal_input }}">
                </div>
                <div class="form-group">
                    <label>Pembimbing</label>
                    <input class="form-control" type="text" disabled value="{{ $event->dosen->nama }}">
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
