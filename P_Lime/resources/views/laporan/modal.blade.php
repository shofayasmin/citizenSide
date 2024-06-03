{{-- modal read more --}}
@foreach($data as $d)
    <div class="modal fade" id="Read_More_{{ $d->id_laporan_id }}" tabindex="-1" role="dialog" aria-labelledby="Read_MoreTitle_{{ $d->id_laporan_id }}" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <img src="{{ asset('storage/photo-acara/masjid-rusak.jpg') }}" class="card-img-top" alt="Placeholder" style="width: 100%; height: 200px; object-fit: cover;">
                
                <div class="modal-header">
                    <h5 class="modal-title" id="Read_MoreTitle_{{ $d->id_laporan_id }}">{{ $d->judul }}</h5>
                </div>
                <div class="modal-body mb-4">
                    <p>{{ $d->deskripsi }}</p>
                    {{-- <a href="#" class="card-link">Another link</a> --}}
                </div>
            </div>
        </div>
    </div>
@endforeach

{{-- modal for read comment --}}
{{-- @foreach($data as $key => $d)
    <div class="modal fade" id="comment_{{ $key }}" tabindex="-1" role="dialog" aria-labelledby="commentTitle_{{ $key }}" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="mail-container">
                                <div class="mail-header">
                                    <div class="mail-title">
                                        {{ $d->judul }}
                                    </div>
                                </div>
                                <div class="mail-info">
                                    <div class="mail-author">
                                        <img src="{{ asset('storage/photo-acara/orang.png') }}" alt="">
                                        <div class="mail-author-info">
                                            <span class="mail-author-name">Ahmad susanto</span>
                                            <p>Aduh lama banget ini dibenerinnya tolong dong cepet</p>
                                        </div>
                                    </div>
                                    <div class="mail-other-info">
                                        <span>18:01</span>
                                    </div>
                                </div>
                                <div class="mail-text">
                                </div>
                                <div class="mail-info">
                                    <div class="mail-author">
                                        <img src="{{ asset('storage/photo-acara/orang.png') }}" alt="">
                                        <div class="mail-author-info">
                                            <span class="mail-author-name">Siti Ropeah</span>
                                            <p>Aduh Bau banget nihhhhhh</p>
                                        </div>
                                    </div>
                                    <div class="mail-other-info">
                                        <span>18:05</span>
                                    </div>
                                </div>
                                <div class="mail-text mb-3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach --}}

@foreach($data as $d)
    <div class="modal fade" id="comment_{{ $d->id_laporan_id }}" tabindex="-1" role="dialog" aria-labelledby="commentTitle_{{ $d->id_laporan_id }}" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="mail-container">
                                <div class="mail-header">
                                    <div class="mail-title">
                                        {{ $d->judul }}
                                    </div>
                                </div>
                                <div class="comments-container">
                                   
                                    <div class="mail-info">
                                        <div class="mail-author">
                                            <img src="{{ asset('storage/photo-acara/orang.png') }}" alt="">
                                            <div class="mail-author-info">
                                                <span class="mail-author-name">{{ $d->author }}</span>
                                                <p>{{ $d->comment }}</p>
                                            </div>
                                        </div>
                                        <div class="mail-other-info">
                                            <span>{{ $d->created_at->format('H:i') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-form mt-3">
                                    <form id="commentForm_{{ $d->id_laporan_id}}" method="POST" action="{{route('comments.store')}}">
                                        @csrf
                                        <input type="hidden" name="laporan_id" value="{{ $d->laporan_id }}">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="author" placeholder="Your Name" required>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" name="comment" rows="3" placeholder="Your Comment" required></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit Comment</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="datacomment_{{ $d->id_laporan_id }}" tabindex="-1" role="dialog" aria-labelledby="commentTitle_{{ $d->id_laporan_id }}" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="mail-container">
                                <div class="mail-header">x`x`
                                    <div class="mail-title">
                                        {{ $d->judul }}
                                    </div>
                                </div>

                                <div class="mail-info">
                                    <div class="mail-author">
                                        <img src="{{ asset('storage/photo-acara/orang.png') }}" alt="">
                                        <div class="mail-author-info">
                                            <span class="mail-author-name">{{ $d->author }}</span>
                                            <p>{{ $d->comment }}</p>
                                        </div>
                                    </div>
                                    <div class="mail-other-info">
                                        <span>{{ $d->created_at }}</span>
                                    </div>
                                </div>
                                <div class="mail-text">
                                </div>
                                
                               
                                <div class="mail-text mb-3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

<script>
    $(document).ready(function() {
        @foreach($data as $d)
            $('#commentForm_{{ $d->id_laporan_id }}').on('submit', function(event) {
                event.preventDefault();
                var formData = $(this).serialize();
                
                $.ajax({
                    url: '{{ route('comments.store') }}',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        if (response.success) {
                            location.reload(); // Refresh the page to display the new comment
                        } else {
                            alert('Failed to submit comment');
                        }
                    },
                    error: function() {
                        alert('Error submitting comment');
                    }
                });
            });
        @endforeach
    });
</script>
<script>
    $(document).ready(function(){
        $('.Read_More').on('click', function(){
            var modalId = $(this).data('target');
            $(modalId).modal('show');
        });
    });
</script>
