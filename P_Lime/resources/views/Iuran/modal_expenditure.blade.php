<!-- Modal untuk Hapus Expenditure -->
<div class="modal fade" id="exampleModalHapusExpenditure{{ $expenditure->expenditure_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Konfirmasi Hapus Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="material-icons">Close</i>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus data <b>{{ $expenditure->expenditure_name }}</b>?
            </div>
            <div class="modal-footer">
                <form action="{{ route('expenditure.delete',['id'=> $expenditure->expenditure_id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="Submit" class="btn btn-primary">Konfirmasi</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal untuk Tambah Expenditure -->
<div class="modal fade" id="exampleModalTambahExpenditure" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data Pengeluaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="material-icons">Close</i>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form untuk tambah data expenditure -->
                <form action="{{ route('expenditure.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="expenditure_name">Nama Pengeluaran:</label>
                        <input type="text" class="form-control" id="expenditure_name" name="expenditure_name">
                    </div>
                    <div class="form-group">
                        <label for="amount">Jumlah:</label>
                        <input type="number" class="form-control" id="amount" name="amount">
                    </div>
                    <div class="form-group">
                        <label for="description">Deskripsi:</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal untuk Edit Expenditure -->
<div class="modal fade" id="exampleModalEditExpenditure{{ $expenditure->expenditure_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Edit Data Pengeluaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="material-icons">Close</i>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form untuk edit data expenditure -->
                <form action="{{ route('expenditure.update',['id'=> $expenditure->expenditure_id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="expenditure_name">Nama Pengeluaran:</label>
                        <input type="text" class="form-control" id="expenditure_name" name="expenditure_name" value="{{ $expenditure->expenditure_name }}">
                    </div>
                    <div class="form-group">
                        <label for="amount">Jumlah:</label>
                        <input type="number" class="form-control" id="amount" name="amount" value="{{ $expenditure->amount }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Deskripsi:</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{ $expenditure->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</div>
