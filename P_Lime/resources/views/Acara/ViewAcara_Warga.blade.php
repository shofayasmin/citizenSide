

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
        <title>Acara View</title>

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
                                <a href="/acara/manage">Manage</a>
                            </li>
                            <li>
                                <a href="/acara/view" class="active" onclick="return false;">View</a>
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
        
        
        
        @include('layouts.header')

        <div class="lime-container">
            <div class="lime-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-title">
                                <nav aria-label="breadcrumb">
                                  <ol class="breadcrumb breadcrumb-separator-1">
                                    <li class="breadcrumb-item"><a href="#">Acara</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">View</li>
                                  </ol>
                                </nav>
                                <h3>View Acara</h3>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl">
                            <div class="card">
                                <div class="card-body">
                                    
                                    <div class="card text-center">
                                        <div class="card-header">
                                          <ul class="nav nav-pills card-header-pills">

                                            <li class="nav-item">
                                              <a class="nav-link active" href="#all" role="tab" data-toggle="tab">All</a>
                                            </li>
                                            <li class="nav-item">
                                              <a class="nav-link" href="#Kegiatan" role="tab" data-toggle="tab">Kegiatan</a>
                                            </li>
                                            <li class="nav-item">
                                              <a class="nav-link" href="#Informasi" role="tab" data-toggle="tab">Informasi</a>
                                            </li>
                                            <li class="nav-item">
                                              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Coming Soon</a>
                                            </li>
                                          </ul>

                                        
                                          

                                          <div class="tab-content">

                                              
                                            <div role="tabpanel" class="tab-pane fade in active" id="all">
                                                @foreach ($data as $d)
                                                <div class="card mb-3 mt-3">

                                                    <div class="card-body mt-2">
                                                        <h5 class="card-title">{{ $d->judul }}</h5>
                                                        <img src="{{ asset('storage/photo-acara/'.$d->image) }}" alt="" width="100">
                                                        <p class="card-text">{{ $d->deskripsi }}</p>
                                                        <p class="card-text"><small class="text-muted">{{ $d->tanggal_penyelenggaraan }}</small></p>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                            

                                            <div role="tabpanel" class="tab-pane fade" id="Kegiatan">
                                                @foreach ($data as $d)
                                                <!-- Tampilkan hanya acara dengan tipe 'Kegiatan' -->
                                                @if ($d->tipe_acara == 'Kegiatan')
                                                <div class="card mb-3 mt-3">
                                                    <div class="card-body mt-2">
                                                        <h5 class="card-title">{{ $d->judul }}</h5>
                                                        <img src="{{ asset('storage/photo-acara/'.$d->image) }}" alt="" width="100">
                                                        <p class="card-text">{{ $d->deskripsi }}</p>
                                                        <p class="card-text"><small class="text-muted">{{ $d->tanggal_penyelenggaraan }}</small></p>
                                                    </div>
                                                </div>
                                                @endif
                                                @endforeach
                                            </div>

                                            <div role="tabpanel" class="tab-pane fade" id="Informasi">
                                                @foreach ($data as $d)
                                                <!-- Tampilkan hanya acara dengan tipe 'Informasi' -->
                                                @if ($d->tipe_acara == 'Informasi')
                                                <div class="card mb-3 mt-3">
                                                    <div class="card-body mt-2">
                                                        <h5 class="card-title">{{ $d->judul }}</h5>
                                                        <img src="{{ asset('storage/photo-acara/'.$d->image) }}" alt="" width="100">
                                                        <p class="card-text">{{ $d->deskripsi }}</p>
                                                        <p class="card-text"><small class="text-muted">{{ $d->tanggal_penyelenggaraan }}</small></p>
                                                    </div>
                                                </div>
                                                @endif
                                                @endforeach



                                          </div>

                                        </div>
                                        
                                      </div>
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