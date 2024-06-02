<!-- Modal Buat Tambah Data -->
<div class="modal fade" id="bansos_tambah">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form action="" method="POST">
                @csrf
                <div class="form-group mt-3" style="margin-left: 10px; margin-right: 10px;">
                    <label for="exampleInputEmail1">Jenis Bansos</label>
                    <input type="form" name="no_kk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jenis Bansos">
                    @error( 'no_kk' )
                        <small>{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group" style="margin-left: 10px; margin-right: 10px;">
                    <label for="exampleInputEmail1">Periode Bansos</label>
                    <input type="form" name="no_kk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Periode Bansos">
                    @error( 'no_kk' )
                        <small>{{ $message }}</small>
                    @enderror
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Siapa Saja Penerima Bansos</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
    
                
                <div class="form-group" style="margin-left: 10px; margin-right: 10px;">
                    <label for="exampleInputEmail1">Tanggal Penyaluran</label>
                    <input type="form" name="no_kk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Dalam bentuk tahun">
                    @error( 'no_kk' )
                        <small>{{ $message }}</small>
                    @enderror
                </div>
                             
                        
                
                                    
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Buat Show Kandidat-->
{{-- @foreach($bansos as $key => $d)
    <div class="modal fade" id="modal_kandidat_{{ $key }}" tabindex="-1" role="dialog" aria-labelledby="modal_kandidatTitle_{{ $key }}" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_kandidatTitle_{{ $key }}">{{ $d->jenis_bansos }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mb-4">
                    <p>Periode: {{ $d->periode_bansos }} Hari</p>
                    <p>Tanggal Penyaluran: {{ $d->tanggal_penyaluran }}</p>
                    <p>Deskripsi: {{ $d->deskripsi }}</p>
                    <img src="{{ asset('storage/photo-acara/' . $d->gambar) }}" alt="" width="100">
                </div>
            </div>
        </div>
    </div>
@endforeach --}}