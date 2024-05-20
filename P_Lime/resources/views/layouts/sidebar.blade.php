<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Link ke file CSS Anda -->
    <link rel="stylesheet" href="path/to/your/css/file.css">
    <!-- Gaya CSS langsung -->
    <style>
        .active {
            color: #037afb; /* atau menggunakan rgba(3,122,251,255) */
        }
    </style>
</head>

<div class="lime-sidebar">
    <div class="lime-sidebar-inner slimscroll">
        <ul class="accordion-menu">
            <li class="sidebar-title">
                POV General / Belum Terpisah
            </li>
            <li>
                <a href="{{ asset('home') }}" class="{{ Request::path() === 'home' ? 'active' : '' }}">
                    <i class="material-icons">dashboard</i>Dashboard
                </a>
            </li>

            <li class="page {{ Request::is('laporan*') ? 'active' : '' }}">
                <a href="#"><i class="material-icons">person_outline</i>Laporan<i class="material-icons has-sub-menu">keyboard_arrow_left</i></a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ route('laporan.create') }}" class="{{ Request::routeIs('laporan.create') ? 'active' : '' }}">Membuat Laporan</a>
                    </li>
                    <li>
                        <a href="{{ route('laporan.view') }}" >View Laporan</a>
                    </li>
                </ul>
            </li>
            

            <li class="page {{ Request::is('acara*') ? 'active' : '' }}">
                <a href="#"><i class="material-icons">inbox</i>Acara<i class="material-icons has-sub-menu">keyboard_arrow_left</i></a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ route('umkm.register') }}" class="{{ Request::routeIs('umkm.register') ? 'active' : '' }}">UMKM Register</a>
                    </li>
                    <li>
                        <a href="{{ route('acara.manage') }}" class="{{ Request::routeIs('acara.manage') ? 'active' : '' }}">Manage</a>
                    </li>
                    <li>
                        <a href="{{ route('acara.view') }}" class="{{ Request::routeIs('acara.view') ? 'active' : '' }}">View</a>
                    </li>
                </ul>
            </li>
            <li class="page {{ Request::is('acara*') ? 'active' : '' }}">
                <a href="#"><i class="material-icons">done_all</i>Bansos<i class="material-icons has-sub-menu">keyboard_arrow_left</i></a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ route('bansos.informasi') }}">Informasi Terbaru Bansos</a>
                    </li>
                    <li>
                        <a href="{{ route('bansos.pengajuan') }}">Pengajuan Bansos</a>
                    </li>
                    <li>
                        <a href="{{ route('bansos.manage') }}">Manage Bansos</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('citizen.index') }}"><i class="material-icons {{ Request::routeIs('citizen.index') ? 'active' : '' }}">person</i>Citizen</a>
            </li>
            <li class="sidebar-title">
                Sekretaris
            </li>
            <li>
                <a href="{{ route('iuran.index') }}"><i class="material-icons">cloud_queue</i>Iuran</a>
            </li>

            <li class="sidebar-title">
                RW
            </li>
            <li>
                <a href="{{ route('bansos.lurah') }}"><i class="material-icons">inbox</i>Mailbox</a>
            </li>
            <li class="sidebar-title">
                Warga
            </li>
            <li>
                <a href="{{ route('dashboard.warga') }}" class="{{ Request::routeIs('dashboard.warga') ? 'active' : '' }}">
                    <i class="material-icons">dashboard</i>Dashboard_warga
                </a>
            </li>



        </ul>
    </div>
</div>
