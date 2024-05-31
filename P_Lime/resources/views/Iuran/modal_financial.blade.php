<!-- Modal untuk Hapus -->
<div class="modal fade" id="exampleModalHapus{{ $d->income_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Konfirmasi Hapus Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="material-icons">close</i>
                </button>
            </div>
            <div class="modal-body">apakah anda yakin ingin menghapus data? <b>{{ $d->income_name }}</b></div>
            <div class="modal-footer">
                <form action="{{ route('rumah.delete',['id'=> $d->income_id]) }}" method="POST">
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
<div class="modal fade" id="rumah_tambah" tabindex="-1" role="dialog" aria-labelledby="rumah_tambahTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="rumah_tambahTitle">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form action="{{ route('rumah.store') }}" method="POST">
            @csrf
            <div class="form-group" style="margin-left: 10px; margin-right: 10px;">
                <label for="exampleInputEmail1">Nama Pemasukan</label>
                <input type="form" name="income_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Pemasukan">
                @error( 'income_name' )
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group" style="margin-left: 10px; margin-right: 10px;">
                <label for="exampleInputEmail1">Tipe Pemasukan</label>
                <input type="form" name="income_type" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="jl.smerewing jos 123">
                @error( 'income_type' )
                    <small>{{ $message }}</small>
                @enderror
            </div>               
            <div class="form-group" style="margin-left: 10px; margin-right: 10px;">
                <label for="exampleInputEmail1">Jumlah</label>
                <input type="form" name="amount" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Cukup masukkan Angka saja">
                @error( 'amount' )
                    <small>{{ $message }}</small>
                @enderror
            </div>               
            <div class="form-group" style="margin-left: 10px; margin-right: 10px;">
                <label for="exampleInputEmail1">Deskripsi</label>
                <input type="form" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Cukup masukkan Angka saja">
                @error( 'description' )
                    <small>{{ $message }}</small>
                @enderror
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
<div class="modal fade" id="exampleModalEdit{{ $d->income_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalEditTitle{{ $d->income_id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalEditTitle{{ $d->income_id }}">Edit Acara</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form action="{{ route('income.update',['id'=> $d->income_id]) }}" method="POST">
            @csrf
            @method("PUT")
            <div class="form-group" style="margin-left: 10px; margin-right: 10px;">
                <label for="exampleInputEmail1">Nama Pemasukan</label>
                <input type="form" name="income_name" value="{{ $d->income_name }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Pemasukan">
                @error( 'income_name' )
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group" style="margin-left: 10px; margin-right: 10px;">
                <label for="exampleInputEmail1">Tipe Pemasukan</label>
                <input type="form" name="income_type" value="{{ $d->income_type }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Tipe Pemasukan">
                @error( 'income_type' )
                    <small>{{ $message }}</small>
                @enderror
            </div>               
            <div class="form-group" style="margin-left: 10px; margin-right: 10px;">
                <label for="exampleInputEmail1">Jumlah</label>
                <input type="form" name="amount" value="{{ $d->amount }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Jumlah Pemasukan">
                @error( 'amount' )
                    <small>{{ $message }}</small>
                @enderror
            </div>               
            <div class="form-group" style="margin-left: 10px; margin-right: 10px;">
                <label for="exampleInputEmail1">Deskripsi</label>
                <input type="form" name="description" value="{{ $d->description }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Deskripsi">
                @error( 'description' )
                    <small>{{ $message }}</small>
                @enderror
            </div>               
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
        </form>
    </div>
    </div>
</div>