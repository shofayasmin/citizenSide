
{{-- modal read more --}}
@foreach($data as $key => $d)
    <div class="modal fade" id="Read_More_{{ $key }}" tabindex="-1" role="dialog" aria-labelledby="Read_MoreTitle_{{ $key }}" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <img src="{{ asset('C:/Users/ASUS/AppData/Local/Temp/'.$d->gambar) }}" class="card-img-top" alt="Placeholder" style="width: 100%; height: 200px; object-fit: cover;">
                
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

{{-- modal for read comment --}}
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
                            {{-- <div class="divider"></div> --}}
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
                            {{-- <div class="divider"></div> --}}
                            <div class="mail-text mb-3">
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>