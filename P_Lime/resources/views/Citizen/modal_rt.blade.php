<!-- Modal Hapus -->
<div class="modal fade" id="exampleModalHapus{{ $d->rt_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Konfirmasi Hapus Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="material-icons">close</i>
                </button>
            </div>
            <div class="modal-body">

                apakah anda yakin ingin menghapus data? <b>{{ $d->nama_ketua }}</b>                                                                         </div>
            <div class="modal-footer">
                <form action="{{ route('rt.delete',['id'=> $d->rt_id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="Submit" class="btn btn-primary">Konfirmasi</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Untuk Tambah -->
<div class="modal fade" id="RT_tambah" tabindex="-1" role="dialog" aria-labelledby="RT_tambahTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="RT_tambahTitle">Tambah Acara</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form action="{{ route('rt.store') }}" method="POST">
            @csrf
            <div class="form-group" style="margin-left: 10px; margin-right: 10px;">
                <label for="exampleInputEmail1">Nama RT</label>
                <select name="nik_ketua" id="exampleInputEmail1" class="form-control">
                    @foreach ($warga as $w)
                        <option value="{{ $w->nik }}">{{ $w->nama_lengkap }}</option>
                    @endforeach
                </select>
                @error( 'nama_ketua' )
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group" style="margin-left: 10px; margin-right: 10px;">
                <label for="exampleInputEmail1">No RT</label>
                <input type="form" name="no_rt" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan No RT (conth: 003)">
                @error( 'no_rt' )
                    <small>{{ $message }}</small>
                @enderror
            </div>               
            <div class="form-row" style="margin-left: 10px; margin-right: 10px;">
                <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Mulai Masa Jabatan</label>
                    <input type="date" name="mulai_masa_jabatan" class="form-control" id="exampleInputPassword1">
                    @error( 'mulai_masa_jabatan' )
                        <small>{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Berakhir Masa Jabatan</label>
                    <input type="date" name="berakhir_masa_jabatan" class="form-control" id="exampleInputPassword1">
                </div>
            </div>
                                
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
        </form>
    </div>
    </div>
</div>

<!-- Modal Untuk Edit -->
<div class="modal fade" id="exampleModalEdit{{ $d->rt_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalEditTitle{{ $d->rt_id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalEditTitle{{ $d->rt_id }}">Edit Acara</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form action="{{ route('rt.update',['id'=> $d->rt_id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group" style="margin-left: 10px; margin-right: 10px;">
                <label for="exampleInputEmail1">Nama RT</label>
                <input type="form" name="nama_ketua" value="{{ $d->nama_ketua }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama RT">
                @error( 'nama_ketua' )
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group" style="margin-left: 10px; margin-right: 10px;">
                <label for="exampleInputEmail1">No RT</label>
                <input type="form" name="no_rt" value="{{ $d->no_rt }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan No RT (conth: 003)">
                @error( 'no_rt' )
                    <small>{{ $message }}</small>
                @enderror
            </div>               
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Mulai Masa Jabatan</label>
                    <input type="date" name="mulai_masa_jabatan" value="{{ $d->mulai_masa_jabatan }}" class="form-control" id="exampleInputPassword1">
                    @error( 'mulai_masa_jabatan' )
                        <small>{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Berakhir Masa Jabatan</label>
                    <input type="date" name="berakhir_masa_jabatan" value="{{ $d->berakhir_masa_jabatan }}" class="form-control" id="exampleInputPassword1">
                </div>
            </div>
                                
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
        </form>
    </div>
    </div>
</div>