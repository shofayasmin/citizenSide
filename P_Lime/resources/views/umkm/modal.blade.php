
<!-- Modal untuk Hapus -->
<div class="modal fade" id="exampleModalHapus{{ $d->umkm_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Konfirmasi Hapus Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="material-icons">close</i>
                </button>
            </div>
            <div class="modal-body">apakah anda yakin ingin menghapus data? <b>{{ $d->Nama }}</b></div>
            <div class="modal-footer">
                <form action="{{ route('umkm.delete',['id'=> $d->umkm_id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="Submit" class="btn btn-primary">Konfirmasi</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal Untuk Edit -->
<div class="modal fade" id="exampleModalEdit{{ $d->umkm_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalEditTitle{{ $d->umkm_id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalEditTitle{{ $d->umkm_id }}">Edit Acara</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form action="{{ route('umkm.update',['id'=> $d->umkm_id]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group" style="margin-left: 10px; margin-right: 10px;">
                <label for="exampleInputEmail1">Nama Peserta</label>
                <input type="form" name="Nama" value="{{ $d->Nama }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama">
            
            </div>
            <div class="form-group" style="margin-left: 10px; margin-right: 10px;">
                <label for="">Nama UMKM</label>
                <textarea class="form-control" name="umkm" id="exampleFormControlTextarea1" rows="3" placeholder="Masukkan umkm">{{ old('umkm', $d->umkm) }}</textarea>
            </div>

            
                                
            <div class="modal-footer" style="margin-left: 10px; margin-right: 10px;">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    </div>
</div>




