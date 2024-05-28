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
        <title>Dashboard</title>

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
        
        <!-- SideBar -->
        @include('layouts.sidebar')
        
        
        <!-- Header -->
        @include('layouts.header')

        <!-- Content -->
        <div class="container mt-4">
            <div class="row">
                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">TOPSIS</h5>
                            <p>Ini cuman percobaan ngitung metode <code>SPK</code> menggunakan topsis yang diimplementasikan ke web</p>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Luas Rumah <br>(m²)</th>
                                        <th scope="col">Range Gaji <br>(Rp)</th>
                                        <th scope="col">Status <br>Perkawinan</th>
                                        <th scope="col">Jumlah Usia<br>Lanjut</th>
                                        <th scope="col">Jarak Domisili<br>(m)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d)
                                    <tr>
                                        <th scope="row">Keluarga {{ $d->id_spk }}</th>
                                        <td>{{ $d->luas_rumah }}</td>
                                        <td>{{ $d->gaji }}</td>
                                        <td>{{ $d->status }}</td>
                                        <td>{{ $d->jumlah_usia_lanjut }}</td>
                                        <td>{{ $d->jarak_domisili }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>       
                        </div>
                    </div>
    
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Bobot</h5>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Luas Rumah</th>
                                        <th>Gaji</th>
                                        <th>Status Perkawinan</th>
                                        <th>Jumlah Usia Lanjut</th>
                                        <th>Jarak Domisili</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>4</td>
                                        <td>6</td>
                                        <td>3</td>
                                        <td>3</td>
                                        <td>5</td>
                                    </tr>
                                </tbody>
                            </table>       
                        </div>
                    </div>
    
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2>Create Matrix</h2>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Luas Rumah</th>
                                        <th>Gaji</th>
                                        <th>Status Perkawinan</th>
                                        <th>Jumlah Usia Lanjut</th>
                                        <th>Jarak Domisili</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($processedData as $matrix)
                                        <tr>
                                            <td>{{ $matrix['luas_rumah'] }}</td>
                                            <td>{{ $matrix['gaji'] }}</td>
                                            <td>{{ $matrix['status_perkawinan'] }}</td>
                                            <td>{{ $matrix['jumlah_usia_lanjut'] }}</td>
                                            <td>{{ $matrix['jarak_domisili'] }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>      
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
        <script src="{{ asset('lime/theme/assets/plugins/chartjs/chart.min.js')}}"></script>
        <script src="{{ asset("lime/theme/assets/plugins/apexcharts/dist/apexcharts.min.js")}}"></script>
        <script src="{{ asset('lime/theme/assets/js/lime.min.js')}}"></script>
        <script src="{{ asset('lime/theme/assets/js/pages/dashboard.js')}}"></script>
    </body>
</html>