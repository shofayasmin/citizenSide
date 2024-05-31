
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
                        <div class="col-md-8">
                            <div class="card bg-info text-white">
                                <div class="card-body">
                                    <div class="dashboard-info row">
                                        <div class="info-text col-md-6">
                                            {{-- step ini bisa dipanggil dengan database --}}
                                            <h5 class="card-title">Welcome back Anna!</h5> 
                                            <p>Get familiar with dashboard, here are some ways to get started.</p>
                                            <ul>
                                                <li>Check some stats for your website bellow</li>
                                                <li>Sync content to other devices</li>
                                                <li>You now have access to File Manager app.</li>
                                            </ul>
                                            <a href="#" class="btn btn-warning m-t-xs">Learn More</a>
                                        </div>
                                        <div class="info-image col-md-6"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="">
                                        <div class="">
                                            <h5 class="card-title">Total Penduduk Mingguan</h5>
                                            <canvas id="visitorsChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  

                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card stat-card">
                                <div class="card-body">
                                    <h5 class="card-title">New Customers</h5>
                                    <h2 class="float-right">45.6K</h2>
                                    <p>From last week</p>
                                    <div class="progress" style="height: 10px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card stat-card">
                                <div class="card-body">
                                    <h5 class="card-title">Orders</h5>
                                    <h2 class="float-right">14.3K</h2>
                                    <p>Orders in waitlist</p>
                                    <div class="progress" style="height: 10px;">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card stat-card">
                                <div class="card-body">
                                    <h5 class="card-title">Monthly Profit</h5>
                                    <h2 class="float-right">45.6$</h2>
                                    <p>For last 30 days</p>
                                    <div class="progress" style="height: 10px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">List Report</h5>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Judul Laporan</th>
                                                    <th scope="col">Pengirim <br>Laporan</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($laporan as $l)
                                                    
                                                <tr>
                                                    <td>{{ $l->laporan_id }}</td>
                                                    <td>{{ $l->judul }}</td>
                                                    <td>{{ $l->pengirim }}</td>
                                                    <td>
                                                        @if($l->status == 'Selesai')
                                                            <span class="badge badge-success">{{ $l->status }}</span>
                                                        @elseif($l->status == 'Belum Selesai')
                                                            <a href="{{ route('laporan.view') }}" class="badge badge-danger">{{ $l->status }}</a>
                                                        @endif
                                                    </td>
                                                </tr>
                                                @endforeach
                                                
                                            </tbody>
                                        </table>
                                    </div>      
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">List Laporan</h5>
                                    <div class="social-media-list">

                                        <div class="social-media-item">
                                            <div class="social-icon twitter">
                                                <i class="fab fa-twitter"></i>
                                            </div>
                                            <div class="social-text">
                                                <p>It’s kind of fun to do the impossible...</p>
                                                <span>4 November, 2019</span>
                                            </div>
                                        </div>

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-warning m-b-lg" role="alert">
                                Data has been updated 23 min ago.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="col-lg">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Doughnut Chart</h5>
                                                <canvas id="chartjs4">Your browser does not support the canvas element.</canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Earnings</h5>
                                    <div id="apex100"></div>
                                </div>
                            </div>
                        </div>
                        <script>
                            // Mendefinisikan array kosong untuk menyimpan data tanggal dan pemasukan
                            var dates = [];
                            var earnings = [];
                        
                            // Mengisi array dengan data dari model Iuran
                            @foreach ($iuran as $i)
                                dates.push("{{ $i->tanggal }}"); // Sesuaikan dengan nama atribut di model i
                                earnings.push({{ $i->pemasukan }}); // Sesuaikan dengan nama atribut di model i
                            @endforeach
                        
                            // Data untuk grafik
                            var earningsData = {
                                series: [{
                                    name: 'Earnings',
                                    data: earnings
                                }],
                                chart: {
                                    height: 350,
                                    type: 'line',
                                    zoom: {
                                        enabled: false
                                    },
                                },
                                dataLabels: {
                                    enabled: false
                                },
                                stroke: {
                                    curve: 'smooth'
                                },
                                xaxis: {
                                    categories: dates
                                }
                            };
                        
                            // Menampilkan grafik menggunakan ApexCharts
                            var earningsChart = new ApexCharts(document.getElementById('apex100'), earningsData);
                            earningsChart.render();
                        </script>

                    </div>
                </div>
            </div>
            <div class="lime-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <span class="footer-text">2019 © stacks</span>
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
        <script src="{{ asset('lime/theme/assets/plugins/apexcharts/dist/apexcharts.min.js') }}"></script>
        <script src="{{ asset('lime/theme/assets/plugins/chartjs/chart.min.js') }}"></script>
        <script src="{{ asset('lime/theme/assets/js/pages/charts.js')}}"></script>
    </body>
</html>