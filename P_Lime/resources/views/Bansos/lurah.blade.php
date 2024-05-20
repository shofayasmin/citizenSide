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
        
        @include('layouts.sidebar')
        @include('layouts.header')

        <div class="lime-container">
            <div class="lime-body mailbox">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="mailbox-options d-flex align-items-center">
                                <button class="btn btn-primary m-r-xxs" data-toggle="modal" data-target="#compose">Compose</button>
                                <button class="btn btn-secondary m-r-xxs">Refresh</button>
                                <button class="btn btn-secondary m-r-xxs">Mark all as read</button>
                                <button class="btn btn-secondary m-r-xxs">Settings</button>
                                <p class="mail-count ml-auto">1-50 of 1,957</p>
                                <button class="btn btn-secondary m-l-xxs mail-left-btn">&lt;</button>
                                <button class="btn btn-secondary float-right m-l-xxs no-m-r mail-right-btn">&gt;</button>
                                <div class="modal fade" id="compose" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">New Message</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" id="emailto" aria-describedby="emailto" placeholder="To">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea class="form-control" placeholder="Message" id="mail-message" rows="3"></textarea>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-primary">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mailbox-search">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search mailbox" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary" type="button" id="button-addon1">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="card card-transparent">
                                <div class="card-body">
                                    <div class="mailbox-menu">
                                        <ul class="list-unstyled">
                                            <li><a href="#" class="active"><i class="material-icons">inbox</i>Inbox</a></li>
                                            <li><a href="#"><i class="material-icons">send</i>Sent</a></li>
                                            <li><a href="#"><i class="material-icons">mail_outline</i>Drafts</a></li>
                                            <li><a href="#"><i class="material-icons">error</i>Spam</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#"><i class="material-icons">delete_outline</i>Trash</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="email-list">
                                        <ul class="list-unstyled">
                                            <li class="active">
                                                <a href="#">
                                                    <div class="email-list-item">
                                                        <div class="email-author">
                                                            <img src="{{ asset('lime/theme/assets/images/avatars/avatar3.png') }}" alt="">
                                                            <span class="author-name">Kelurahan Setempat</span>
                                                            <span class="email-date">5m ago</span>
                                                        </div>
                                                        <div class="email-info">
                                                            <span class="email-subject">
                                                               Pengiriman Bansos Terbaru
                                                            </span>
                                                            <span class="email-text">
                                                                Halo Selamat siang Jono
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mail-container">
                                        <div class="mail-header">
                                            <div class="mail-title">
                                                Pengiriman Bansos Terbaru
                                            </div>
                                            <div class="mail-actions">
                                                <button class="btn btn-secondary">Reply</button>
                                                <button class="btn btn-secondary">Forwawrd</button>
                                                <button class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                        <div class="mail-info">
                                            <div class="mail-author">
                                                <img src="{{ asset('lime/theme/assets/images/avatars/avatar3.png') }}" alt="">
                                                <div class="mail-author-info">
                                                    <span class="mail-author-name">Lurah Setempat</span>
                                                    <span class="mail-author-address">LurahSetempat@gmail.com</span>
                                                </div>
                                            </div>
                                            <div class="mail-other-info">
                                                <span>18:01</span>
                                            </div>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="mail-text">
                                            <p>Selamat Siang Jono,<br><br>
                                                Selamat Siang, Yang terhormat RW 03<br><br>
                                                Ini adalah daftar orang-orang yang berhak mendapatkan Bansos. Tolong urus ya:
                                             </p>
                                             
                                             <ol>
                                                 <li>Bambang</li>
                                                 <li>Sutejo</li>
                                                 <li>Arip</li>
                                                 <li>Wiliam</li>
                                                 <li>Danfort</li>
                                                 <li>Jihan</li>
                                                 <li>Siti</li>
                                                 <li>Sulaiman</li>
                                                 <li>Rehan</li>
                                                 <li>Nabil</li>
                                             </ol>
                                             
                                             <p>
                                                Jika Ada kendala atau pertanyaan silahkan balas chat Kembali
                                                <br>
                                                <br>
                                                Terima Kasih, Selamat Siang.
                                                <br>
                                             </p>
                                             
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lime-footer">
                <div class="container-fluid">
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
        <script src="{{ asset('lime/theme/assets/plugins/chartjs/chart.min.js')}}"></script>
        <script src="{{ asset("lime/theme/assets/plugins/apexcharts/dist/apexcharts.min.js")}}"></script>
        <script src="{{ asset('lime/theme/assets/js/lime.min.js')}}"></script>
        <script src="{{ asset('lime/theme/assets/js/pages/dashboard.js')}}"></script>
    </body>
</html>