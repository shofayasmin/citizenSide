
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
                                            <h5 class="card-title">Daily Visitors</h5>
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
                                    <h5 class="card-title">Last Transactions</h5>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Company</th>
                                                    <th scope="col">Amount</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>0776</td>
                                                    <td>Sale Management</td>
                                                    <td>$18, 560</td>
                                                    <td><span class="badge badge-success">Finished</span></td>
                                                </tr>
                                                <tr>
                                                    <td>0759</td>
                                                    <td>Dropbox</td>
                                                    <td>$40, 672</td>
                                                    <td><span class="badge badge-warning">Waiting</span></td>
                                                </tr>
                                                <tr>
                                                    <td>0741</td>
                                                    <td>Social Media</td>
                                                    <td>$13, 378</td>
                                                    <td><span class="badge badge-info">In Progress</span></td>
                                                </tr>
                                                <tr>
                                                    <td>0740</td>
                                                    <td>Envato Market</td>
                                                    <td>$17, 456</td>
                                                    <td><span class="badge badge-info">In Progress</span></td>
                                                </tr>
                                                <tr>
                                                    <td>0735</td>
                                                    <td>Graphic Design</td>
                                                    <td>$29, 999</td>
                                                    <td><span class="badge badge-secondary">Canceled</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>      
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Social Media</h5>
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
                                        <div class="social-media-item">
                                            <div class="social-icon google">
                                                <i class="fab fa-google-plus-g"></i>
                                            </div>
                                            <div class="social-text">
                                                <p>Sometimes by losing a battle you find a new way to win the war...</p>
                                                <span>26 October, 2019</span>
                                            </div>
                                        </div>
                                        <div class="social-media-item">
                                            <div class="social-icon facebook">
                                                <i class="fab fa-facebook-f"></i>
                                            </div>
                                            <div class="social-text">
                                                <p>To improve is to change; to be perfect is to change often...</p>
                                                <span>12 October, 2019</span>
                                            </div>
                                        </div>
                                        <div class="social-media-item">
                                            <div class="social-icon facebook">
                                                <i class="fab fa-facebook-f"></i>
                                            </div>
                                            <div class="social-text">
                                                <p>If you're going through hell, keep going...</p>
                                                <span>29 September, 2019</span>
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
                                    <h5 class="card-title">Popular Products</h5>
                                    <div class="popular-products">
                                        <canvas id="productsChart">Your browser does not support the canvas element.</canvas>
                                        <div class="popular-product-list">
                                            <ul class="list-unstyled">
                                                <li id="popular-product1">
                                                    <span>Alpha - Material Design</span>
                                                    <span class="badge badge-pill badge-success">59%</span>
                                                </li>
                                                <li id="popular-product2">
                                                    <span>Space - Light Theme</span>
                                                    <span class="badge badge-pill badge-warning">15%</span>
                                                </li>
                                                <li id="popular-product3">
                                                    <span>Modern - Admin Dashboard</span>
                                                    <span class="badge badge-pill badge-secondary">26%</span>
                                                </li>
                                            </ul>
                                            <div class="alert alert-info" role="alert">
                                                Based on last week's earnings.
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
                                    <div id="apex1"></div>
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
    </body>
</html>