
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
        
        <div class="lime-sidebar">
            <div class="lime-sidebar-inner slimscroll">
                <ul class="accordion-menu">
                    <li class="sidebar-title">
                        Apps
                    </li>
                    <li>
                        <a href="{{('/home')}}" ><i class="material-icons">dashboard</i>Dashboard</a>
                    </li>
                    <li>
                        <a href="profile.html"><i class="material-icons">person_outline</i>Laporan</a>
                    </li>

                    <li class="page">
                        <a href="#"><i class="material-icons">inbox</i>Acara<i class="material-icons has-sub-menu">keyboard_arrow_left</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="/acara/manage" class="active" onclick="return false;">Manage</a>
                            </li>
                            <li>
                                <a href="/acara/view">View</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="todo.html"><i class="material-icons">done_all</i>Bansos</a>
                    </li>
                    <li>
                        <a href="file-manager.html"><i class="material-icons">cloud_queue</i>Iuran</a>
                    </li>
                </ul>
            </div>
        </div>
        
        
        <div class="theme-settings-sidebar">
            <div class="theme-settings-inner">
                <h3 class="theme-sidebar-title">Themes</h3>
                <p class="themes-info">Select a demo</p>
                
                <a class="theme-item active" href="#">
                    <img src="{{ asset('lime/theme/assets/images/themes/1.png')}}" alt="">
                    <h4 class="theme-title">Classic</h4>
                </a>
                <a class="theme-item" href="#">
                    <div class="coming-theme">Coming Soon</div>
                    <img src="{{ asset('lime/theme/assets/images/themes/2.png')}}" alt="">
                    <h4 class="theme-title">Dark Theme</h4>
                </a>
            </div>
        </div>
        
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
                                                    <h5 class="card-title">Data Rumah</h5>
                                                    <p>Berikut adalah Data Data Rumah dari RW 003</code>.</p>
                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                        <a href="{{ route('rumah.create') }}" class="btn btn-primary key ml-auto">Tambah</a>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                
                                                                <tr>
                                                                    <th scope="col">No</th>
                                                                    <th scope="col">Nama Pemilik</th>
                                                                    <th scope="col">Alamat</th>
                                                                    <th scope="col">Luas Bangunan</th>
                                                                    <th scope="col">Luas Tanah</th>
                                                                    <th scope="col">Jumlah Anggota KK</th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($data as $d)
                                                                    
                                                                <tr>
                                                                    <th scope="row">{{ $d->rumah_id }}</th>
                                                                    <td>{{ $d->nama_pemilik }}</td>
                                                                    <td>{{ $d->alamat }}</td>
                                                                    <td>{{ $d->luas_bangunan }} m²</td>
                                                                    <td>{{ $d->luas_tanah }} m²</td>
                                                                    <td>{{ $d->jumlah_anggota_kk }}</td>
                                                                    <td>
                                                                        <a href="{{route('rumah.edit',['id' => $d->rumah_id])}}" class="btn btn-primary"><i class="fas fa-pen"></i>Edit</a>
                                                                        <a data-toggle="modal" data-target="#exampleModalHapus{{ $d->rumah_id }}" class="btn btn-danger"><i class="fas fa-trash-alt">Hapus</i></a>
                                                                    </td>
                                                                </tr>

                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModalHapus{{ $d->rumah_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Konfirmasi Hapus Data</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <i class="material-icons">close</i>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">apakah anda yakin ingin menghapus data? <b>{{ $d->nama_pemilik }}</b></div>
                                                                            <div class="modal-footer">
                                                                                <form action="{{ route('rumah.delete',['id'=> $d->rumah_id]) }}" method="POST">
                                                                                    @csrf
                                                                                    @method('DELETE')
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                    <button type="Submit" class="btn btn-primary">Konfirmasi</button>
                                                                                </form>
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
                    <a href="{{ route('citizen.index') }}"> <- Kembali</a>

                    
            
        
        
        <!-- Javascripts -->
        <script src="{{ asset('lime/theme/assets/plugins/jquery/jquery-3.1.0.min.js')}}"></script>
        <script src="{{ asset('lime/theme/assets/plugins/bootstrap/popper.min.js')}}"></script>
        <script src="{{ asset('lime/theme/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('lime/theme/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{ asset('lime/theme/assets/js/lime.min.js')}}"></script>
    </body>
</html>