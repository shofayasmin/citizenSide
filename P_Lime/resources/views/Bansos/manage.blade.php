
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
                                                    
                                                    <h4 class="mb-0">Data Bansos</h4>
                                                    <p>Berikut adalah Data Data Bansos dari RW 003</code>.</p>
                                                    <div class="text-right mb-3">
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kk_tambah">
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
                                                                    <th scope="col">Gambar</th>
                                                                   
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td>Bantuan Pemerintah</td>
                                                                    <td>1-2 Hari</td>
                                                                    <td>20 Juni 2024</td>
                                                                    <td>
                                                                        <ul>
                                                                            <li>Arif</li>
                                                                            <li>Johan</li>
                                                                            <li>Saifudin</li>
                                                                            <li>Bambang</li>
                                                                            <li>Tejo</li>
                                                                            <li>Yanto</li>
                                                                            <li>Yayat</li>
                                                                        </ul>
                                                                    </td>
                                                                    <td><img src="{{ asset('storage/photo-acara/Presiden Jokowi Luncurkan Penyaluran Cadangan Beras Pemerintah untuk Bantuan Pangan.jpeg') }}" alt="" width="100"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">2</th>
                                                                    <td>Bantuan Sposor Pocari Sweat</td>
                                                                    <td>1-2 Hari</td>
                                                                    <td>21 Juli 2024</td>
                                                                    <td>
                                                                        <ul>
                                                                            <li>Arif</li>
                                                                            <li>Johan</li>
                                                                            <li>Saifudin</li>
                                                                            <li>Bambang</li>
                                                                            <li>Tejo</li>
                                                                            <li>Yanto</li>
                                                                            <li>Yayat</li>
                                                                        </ul>
                                                                    </td>
                                                                    <td>
                                                                        <img src="{{ asset('storage/photo-acara/TVC POCARI SWEAT - Bintang SMA.jpeg') }}" alt="" width="100">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">3</th>
                                                                    <td>Bantuan Program Covid</td>
                                                                    <td>1-5 Hari</td>
                                                                    <td>22 Agustus 2024</td>
                                                                    <td>
                                                                        <ul>
                                                                            <li>Arif</li>
                                                                            <li>Johan</li>
                                                                            <li>Saifudin</li>
                                                                            <li>Bambang</li>
                                                                            <li>Tejo</li>
                                                                            <li>Yanto</li>
                                                                            <li>Yayat</li>
                                                                        </ul>
                                                                    </td>
                                                                    <td>
                                                                        <img src="{{ asset('storage/photo-acara/Lagi, Polres Tangsel Salurkan BTPKLW Ke Pelaku Usaha Mikro.jpeg') }}" alt="" width="100">
                                                                    </td>
                                                                </tr>
                                                                {{-- <td>
                                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalEdit">
                                                                        Edit
                                                                    </button>
                                                                    <a data-toggle="modal" data-target="#exampleModalHapus" class="btn btn-danger"><i class="fas fa-trash-alt">Hapus</i></a>
                                                                </td> --}}

                                                                <!-- Modal -->
                                                                

                                                                
                                                                
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