
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

<!-- Modal untuk ikut -->
@foreach($data as $d)
    <div class="modal fade" id="confirmationModal{{ $d->umkm_id }}" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form method="POST" action="{{ route('participate') }}">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmationModalLabel">Konfirmasi Partisipasi</h5>
                        <input type="hidden" name="umkm_id" value="{{ $d->umkm_id }}">
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apakah anda bersedia untuk ikut?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-primary">Yes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endforeach
<script>
    function confirmBatal(id) {
        if (confirm('Apakah Anda yakin ingin membatalkan kegiatan ini?')) {
            document.getElementById('form-batal-' + id).submit();
        }
    }
</script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
{{-- <script>
    $(document).ready(function(){
        var selectedUmkmId;

        $('.ikut-kegiatan').on('click', function() {
            selectedUmkmId = $(this).data('id');
        });

        $('#confirm-participation').on('click', function() {
            $.ajax({
                url: '{{ route('participate') }}',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    umkm_id: selectedUmkmId,
                    user_id: '{{ auth()->user()->id }}'
                },
                success: function(response) {
                    if (response.success) {
                        alert('Anda telah berhasil berpartisipasi.');
                    } else {
                        alert('Gagal berpartisipasi.');
                    }
                    $('#confirmationModal').modal('hide');
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    alert('Error submitting participation.');
                }
            });
        });
    });
</script> --}}




