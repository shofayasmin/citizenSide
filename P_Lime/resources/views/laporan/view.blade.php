
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title>Manage Citizen Data</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="{{ asset('lime/theme/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ asset('lime/theme/assets/plugins/font-awesome/css/all.min.css')}}" rel="stylesheet">
        <link href="{{ asset('lime/theme/assets/plugins/font-awesome/css/track.css')}}" rel="stylesheet">
        

        <link href="{{ asset('lime/theme/assets/plugins/plupload/js/jquery.plupload.queue/css/jquery.plupload.queue.css')}}" rel="stylesheet">  

      
        <!-- Theme Styles -->
        <link href="{{ asset('lime/theme/assets/css/lime.min.css')}}" rel="stylesheet">
        <link href="{{ asset('lime/theme/assets/css/custom.css')}}" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        @include('layouts.sidebar')
        
        @include('layouts.header')

        

        <div class="row">
            <div class="col-xl">
                <div class="container">
                    
                    <div class="row">
                        @foreach($data as $key => $d)
                            <div class="col-10">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h3 class="mt-3">{{ $d->judul }}</h3>
                    
                                        @if (auth()->user()->role == 'rw')
                                            <img src="{{ asset('storage/photo-acara/comment1.png') }}" width="25" data-toggle="modal" data-target="#datacomment_{{ $d->id }}">
                                        @elseif(auth()->user()->role == 'citizen')
                                            <img src="{{ asset('storage/photo-acara/comment1.png') }}" width="25" data-toggle="modal" data-target="#comment_{{ $d->id }}">
                                        @endif
                                    </div>
                                    <div class="card-body">
                                        <small>{{ $d->created_at }}</small>
                                        <h5 class="card-title">{{ $d->pengirim }}</h5>
                                        <a href="#" class="badge badge-primary" data-toggle="modal" data-target="#Read_More_{{ $d->id }}">Read More</a>
                                        <div class="text-right">
                                            <button class="btn {{ $d->status == 'Belum Selesai' ? 'btn-danger' : 'btn-success' }} status-toggle" data-id="{{ $d->id }}">
                                                {{ $d->status }}
                                            </button>
                                        </div>
                    
                                        <!-- Display Comments -->
                                        <div class="comments mt-3">
                                            @foreach($d->comments as $comment)
                                                <div class="comment">
                                                    <strong>{{ $comment->user->username }}</strong>
                                                    <p>{{ $comment->content }}</p>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Comment Modal for Citizen -->
                            @if(auth()->user()->role == 'citizen')
                                <div class="modal fade" id="comment_{{ $d->id }}" tabindex="-1" role="dialog" aria-labelledby="commentModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="commentModalLabel">Add Comment</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('laporan.addComment', $d->id) }}" method="POST">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="content">Comment</label>
                                                        <textarea name="content" class="form-control" id="content" rows="3" required></textarea>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                    
                            @include('laporan.modal', ['d' => $d])
                        @endforeach
                    </div>
                    
                </div>
            </div>
        </div>


       

                    
            
        
        
        <!-- Javascripts -->
        <script src="{{ asset('lime/theme/assets/plugins/jquery/jquery-3.1.0.min.js')}}"></script>
        <script src="{{ asset('lime/theme/assets/plugins/bootstrap/popper.min.js')}}"></script>
        <script src="{{ asset('lime/theme/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('lime/theme/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{ asset('lime/theme/assets/js/lime.min.js')}}"></script>
        <script src="{{ asset('lime/theme/assets/plugins/plupload/js/plupload.full.min.js')}}"></script>
        <script src="{{ asset('lime/theme/assets/plugins/plupload/js/jquery.plupload.queue/jquery.plupload.queue.min.js')}}"></script>
        <script src="{{ asset('lime/theme/assets/js/pages/plupload.js')}}"></script>
        <!-- Skrip JavaScript -->
        <script>
            $(document).ready(function(){
                // Mengaktifkan modal ketika gambar diklik
                $('#myModal').on('shown.bs.modal', function () {
                    $('#myModal').modal('show');
                });
            });
        </script>
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function(){
                $('.status-toggle').on('click', function(event){
                    event.preventDefault(); // Mencegah tindakan default tautan
                    var $this = $(this);
                    var laporanId = $this.data('id');
                    var newStatus = $this.hasClass('badge-danger') ? 'Selesai' : 'Belum Selesai';
                    
                    $.ajax({
                        url: '{{ route('laporan.updateStatus') }}',
                        type: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: laporanId,
                            status: newStatus
                        },
                        success: function(response) {
                            if (response.success) {
                                if ($this.hasClass('btn-danger')) {
                                    $this.removeClass('btn-danger').addClass('btn-success');
                                    $this.text('Selesai');
                                } else {
                                    $this.removeClass('btn-success').addClass('btn-danger');
                                    $this.text('Belum Selesai');
                                }
                            } else {
                                alert('Failed to update status');
                            }
                        },
                        error: function() {
                            alert('Error updating status');
                        }
                    });
                });
            });
        </script>
    </body>
</html>