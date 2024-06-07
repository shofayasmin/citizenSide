{{-- Modal untuk membaca lebih lanjut --}}
@foreach ($data as $key => $d)
    <div class="modal fade" id="Read_More_{{ $key }}" tabindex="-1" role="dialog"
        aria-labelledby="Read_MoreTitle_{{ $key }}" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">

                <img src="{{ asset('storage/' . $d->gambar) }}" class="card-img-top" alt="Placeholder"
                    style="width: 100%; height: 200px; object-fit: cover;">

                <div class="modal-header">
                    <h5 class="modal-title" id="Read_MoreTitle_{{ $key }}">{{ $d->judul }}</h5>
                </div>
                <div class="modal-body mb-4">
                    <p>{{ $d->deskripsi }}</p>
                    {{-- <a href="#" class="card-link">Another link</a> --}}
                </div>
            </div>
        </div>
    </div>
@endforeach




<script>
    $(document).ready(function(){
        $('.Read_More').on('click', function(){
            var modalId = $(this).data('target');
            $(modalId).modal('show');
        });
    });
</script>
