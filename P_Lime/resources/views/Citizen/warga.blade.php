
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
                                    <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Forms</li>
                                    
                                  </ol>
                                </nav>
                                <h3>Forms</h3>
                                
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
                                                    <h5 class="card-title">Data Warga</h5>
                                                    <p>Berikut adalah Data Data Warga dari RW 003</code>.</p>
                                                    <div class="text-right mb-3">
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#warga_tambah">
                                                            Tambah Data Warga
                                                        </button>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">No</th>
                                                                    <th scope="col">NIK</th>
                                                                    <th scope="col">NO KK</th>
                                                                    <th scope="col">Nama Lengkap</th>
                                                                    <th scope="col">Tempat Tanggal Lahir</th>
                                                                    <th scope="col">Jenis Kelamin</th>
                                                                    <th scope="col">Alamat KTP</th>
                                                                    <th scope="col">Agama</th>
                                                                    <th scope="col">No. Telepon</th>
                                                                    <th scope="col">Status</th>
                                                                    <th scope="col">Pekerjaan</th>
                                                                    <th scope="col">Kewarganegaraan</th>
                                                                    <th scope="col">Alamat Domisili</th>
                                                                    
                                                                   
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($data as $d)
                                                                <tr>
                                                                        
                                                                    <th scope="row">{{ $d->id }}</th>
                                                                    <td>{{ $d->nik }}</td>
                                                                    <td>{{ $d->no_kk }}</td>
                                                                    <td>{{ $d->nama_lengkap }}</td>
                                                                    <td>{{ $d->tempat_lahir }}, {{ \Carbon\Carbon::parse($d->tanggal_lahir)->format('j F Y') }}</td>
                                                                    <td>{{ $d->jenis_kelamin }}</td>
                                                                    <td>{{ $d->alamat }}</td>
                                                                    <td>{{ $d->agama }}</td>
                                                                    <td>{{ $d->nomor_telepon }}</td>
                                                                    <td>{{ $d->status }}</td>
                                                                    <td>{{ $d->pekerjaan }}</td>
                                                                    <td>{{ $d->kewarganegaraan }}</td>
                                                                    <td>{{ $d->domisili }}</td>
                                                                    <td>
                                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalEdit{{ $d->nik }}">
                                                                            Edit
                                                                        </button>
                                                                        <a data-toggle="modal" data-target="#exampleModalHapus{{ $d->nik }}" class="btn btn-danger"><i class="fas fa-trash-alt">Hapus</i></a>
                                                                    </td>
                                                                </tr>

                                                                <!-- Modal -->
                                                                @include('Citizen.modal_warga')

                                                                @endforeach
                                                               
                                                            </tbody>
                                                            <!-- Form untuk input NIK -->
                                                            <form method="post" action="/cek-nik">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <label for="nik">NIK:</label>
                                                                    <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK">
                                                                </div>
                                                                <!-- Tombol untuk memeriksa NIK -->
                                                                <button type="submit" class="btn btn-primary">Cek NIK</button>
                                                            </form>
                                                        </table>
                                                        <a href="{{ route('citizen.index') }}"> <- Kembali</a>
                                                    </div>      
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
    </body>
</html>