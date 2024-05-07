
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
        <title>Create organisasi page</title>

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
                                    <li class="breadcrumb-item active" aria-current="page">Form Tambah</li>
                                  </ol>
                                </nav>
                                <h3>Form Tambah</h3>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Tambah Data Warga</h5>
                                    <p> </p>


                                    <form action="{{ route('warga.update',['id'=> $data->id_warga]) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">NIK</label>
                                            <input type="form" name="nik" value="{{ $data->nik }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Pemilik">
                                            @error( 'nik' )
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">No KK</label>
                                            <input type="form" name="no_kk" value="{{ $data->no_kk }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="jl.smerewing jos 123">
                                            @error( 'no_kk' )
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>               
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Lengkap</label>
                                            <input type="form" name="nama" value="{{ $data->nama }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Cukup masukkan Angka saja">
                                            @error( 'nama' )
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>                
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tempat Tanggal Lahir</label>
                                            <input type="form" name="tempat_tanggal_lahir" value="{{ $data->tempat_tanggal_lahir }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Cukup masukkan Angka saja">
                                            @error( 'tempat_tanggal_lahir' )
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>                
                                                    
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                            <select class="form-control custom-select" name="jenis_kelamin" value="{{ $data->jenis_kelamin }}" id="exampleFormControlSelect1">
                                                <option>Laki-Laki</option>
                                                <option>Perempuan</option>
                                            </select>
                                            @error( 'jenis_kelamin' )
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>             
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Alamat</label>
                                            <input type="form" name="alamat" value="{{ $data->alamat }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Cukup masukkan Angka saja">
                                            @error( 'alamat' )
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>               
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Agama</label>
                                            <select class="form-control custom-select" name="agama" value="{{ $data->agama }}" id="exampleFormControlSelect1">
                                                <option>Islam</option>
                                                <option>Kristen</option>
                                                <option>Katolik</option>
                                                <option>Hindu</option>
                                                <option>Buddha</option>
                                                <option>Khongucu</option>
                                                <option>Ateis</option>
                                            </select>
                                            @error( 'agama' )
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>             
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Status</label>
                                            <select class="form-control custom-select" name="status" value="{{ $data->status }}" id="exampleFormControlSelect1">
                                                <option>Sudah Menikah</option>
                                                <option>Belum Menikah</option>
                                            </select>
                                            @error( 'status' )
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>               
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Pekerjaan</label>
                                            <input type="form" name="pekerjaan" value="{{ $data->pekerjaan }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Cukup masukkan Angka saja">
                                            @error( 'pekerjaan' )
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>               
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kewarganegaraan</label>
                                            <input type="form" name="kewarganegaraan" value="{{ $data->kewarganegaraan }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Cukup masukkan Angka saja">
                                            @error( 'kewarganegaraan' )
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>               
                                                     
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>



                                </div>
                            </div>
                        </div>
                    </div>

                    
            <div class="lime-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <span class="footer-text"></span>
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