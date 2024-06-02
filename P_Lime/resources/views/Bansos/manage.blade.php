
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

        <div class="lime-container">
            <div class="lime-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-title">
                                <nav aria-label="breadcrumb">
                                  <ol class="breadcrumb breadcrumb-separator-1">
                                    <li class="breadcrumb-item"><a href="#">Bansos</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Manage Bansos</li>
                                  </ol>
                                </nav>
                                <h3>Manage Bansos</h3>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl">
                                            <div class="card">
                                                <div class="card-body">
                                                    
                                                    <h4 class="mb-0">Data Bansos</h4>
                                                    <p>Berikut adalah Data Data Bansos dari RW 003</code>.</p>
                                                    <div class="text-right mb-3">
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bansos_tambah">
                                                            Tambah Data Bansos
                                                        </button>
                                                    </div>

                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">No</th>
                                                                    <th scope="col">Jenis Bansos</th>
                                                                    <th scope="col">Periode Bansos</th>
                                                                    <th scope="col">Tanggal Penyaluran</th>
                                                                    <th scope="col">Penerima Bansos</th>
                                                                    
                                                                   
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @php
                                                                    $counter = 1;
                                                                @endphp
                                                                @foreach ($bansos as $key => $b)
                                                                <tr>
                                                                    <th scope="row">{{ $counter++ }}</th>
                                                                    <td>{{ $b->jenis_bansos }}</td>
                                                                    <td>{{ $b->periode_bansos }} Hari</td>
                                                                    <td>{{ $b->tanggal_penyaluran }}</td>
                                                                    <td>
                                                                        <a href="{{ route('spk.promethee') }}" class="btn btn-link">Lihat Detail</a> 
                                                                    </td>
                                                                    
                                                                </tr>
                                                                @include('Bansos.modal')
                                                                @endforeach
                                                                
                                                                {{-- <td>
                                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalEdit">
                                                                        Edit
                                                                    </button>
                                                                    <a data-toggle="modal" data-target="#exampleModalHapus" class="btn btn-danger"><i class="fas fa-trash-alt">Hapus</i></a>
                                                                </td> --}}
                                                                <!-- Modal Buat Show Kandidat-->
                                                                @foreach($bansos as $key => $d)
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
                                                                @endforeach

                                                                
                                                                

                                                                
                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('bansos.informasi') }}"> <- Kembali</a>

                    
            
        
        
        <!-- Javascripts -->
        <script src="{{ asset('lime/theme/assets/plugins/jquery/jquery-3.1.0.min.js')}}"></script>
        <script src="{{ asset('lime/theme/assets/plugins/bootstrap/popper.min.js')}}"></script>
        <script src="{{ asset('lime/theme/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('lime/theme/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{ asset('lime/theme/assets/js/lime.min.js')}}"></script>
    </body>
</html>