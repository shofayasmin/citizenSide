<!-- Modal untuk Hapus Income -->
<div class="modal fade" id="exampleModalHapusIncome{{ $income->income_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Konfirmasi Hapus Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="material-icons">Close</i>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus data <b>{{ $income->income_name }}</b>?
            </div>
            <div class="modal-footer">
                <form action="{{ route('income.delete',['id'=> $income->income_id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="Submit" class="btn btn-primary">Konfirmasi</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal untuk Tambah Income -->
<div class="modal fade" id="exampleModalTambahIncome" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Pemasukan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="material-icons">Close</i>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form untuk tambah data income -->
                <form action="{{ route('income.store') }}" method="POST">
                    @csrf
                    <div class="form-group" style="margin-left: 10px; margin-right: 10px;">
                        <label for="exampleInputEmail1">Nama Pemasukan:</label>
                        <input type="form" class="form-control" id="exampleInputEmail1" name="income_name" aria-describedby="emailHelp" placeholder="Masukkan Nama Pemasukan" >
                    </div>
                    <div class="form-group" style="margin-left: 10px; margin-right: 10px;">
                        <label for="exampleInputEmail1">Tipe Pemasukan:</label>
                        <select class="form-control" id="income_type" name="income_type">
                            <option value="Iuran Warga">Iuran Warga</option>
                            <option value="Sumbangan">Sumbangan</option>
                            <option value="Usaha RW">Usaha RW</option>
                            <option value="Bantuan Pemerintah">Bantuan Pemerintah</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin-left: 10px; margin-right: 10px;">
                        <label for="total_money">Total Money:</label>
                        <input type="number" class="form-control" name="total_money" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Pemasukan">
                    </div>
                    <div class="form-group" style="margin-left: 10px; margin-right: 10px;">
                        <label for="description">Deskripsi:</label>
                        <input class="form-control" id="exampleInputEmail1" name="description" rows="3" ></input>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
        
    </div>
</div>

<!-- Modal untuk Edit Income -->
<div class="modal fade" id="exampleModalEditIncome{{ $income->income_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Edit Data Pemasukan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="material-icons">Close</i>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form untuk edit data income -->
                <form action="{{ route('income.update',['id'=> $income->income_id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="income_name">Nama Pemasukan:</label>
                        <input type="text" class="form-control" id="income_name" name="income_name" value="{{ $income->income_name }}">
                    </div>
                    <div class="form-group">
                        <label for="income_type">Tipe Pemasukan:</label>
                        <select class="form-control" id="income_type" name="income_type">
                            <option value="Iuran Warga" {{ $income->income_type == "Iuran Warga" ? 'selected' : '' }}>Iuran Warga</option>
                            <option value="Sumbangan" {{ $income->income_type == "Sumbangan" ? 'selected' : '' }}>Sumbangan</option>
                            <option value="Usaha RW" {{ $income->income_type == "Usaha RW" ? 'selected' : '' }}>Usaha RW</option>
                            <option value="Bantuan Pemerintah" {{ $income->income_type == "Bantuan Pemerintah" ? 'selected' : '' }}>Bantuan Pemerintah</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Deskripsi:</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{ $income->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="total_money">Inflow:</label>
                        <input type="number" class="form-control" id="total_money" name="total_money" value="{{ $income->total_money }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>