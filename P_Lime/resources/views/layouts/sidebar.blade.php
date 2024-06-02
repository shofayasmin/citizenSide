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
            color: #037afb;
        }
    </style>
</head>

<div class="lime-sidebar">
    <div class="lime-sidebar-inner slimscroll">
        <ul class="accordion-menu">
            <li class="sidebar-title">
                Dashboard
            </li>
            @can('rw')
            {{-- <li class="sidebar-title">
                RW
            </li> --}}
            {{-- <li>
                <a href="{{ route('bansos.lurah') }}" class="{{ Request::routeIs('bansos.lurah') ? 'active' : '' }}">
                    <i class="material-icons">inbox</i>Mailbox</a>
            </li> --}}
            <li>
                <a href="{{ route('dashboard.rw') }}" class="{{ Request::routeIs('dashboard.rw') ? 'active' : '' }}">
                    <i class="material-icons">dashboard</i>Dashboard
                </a>
            </li>
            @endcan
            @can('citizen')
            <li>
                <a href="{{ asset('home') }}" class="{{ Request::path() === 'home' ? 'active' : '' }}">
                    <i class="material-icons">dashboard</i>Dashboard
                </a>
            </li>
            @endcan

            <li class="page {{ Request::is('laporan*') ? 'active-page' : '' }}">
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
            

            <li class="page {{ Request::is('acara*') || Request::is('umkm*') ? 'active-page' : '' }}">
                <a href="#"><i class="material-icons">inbox</i>Acara<i class="material-icons has-sub-menu">keyboard_arrow_left</i></a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ route('umkm.register') }}" >UMKM Register</a>
                    </li>
                    <li>
                        <a href="{{ route('acara.manage') }}" >Manage</a>
                    </li>
                    <li>
                        <a href="{{ route('acara.view') }}" >View</a>
                    </li>
                </ul>
            </li>

            <li class="page {{ Request::is('Bansos*') ? 'active-page' : '' }}">
                <a href="#"><i class="material-icons">done_all</i>Bansos<i class="material-icons has-sub-menu">keyboard_arrow_left</i></a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ route('bansos.informasi') }}">Informasi Terbaru Bansos</a>
                    </li>
                    {{-- <li>
                        <a href="{{ route('bansos.pengajuan') }}">Pengajuan Bansos</a>
                    </li> --}}
                    <li>
                        <a href="{{ route('bansos.manage') }}">Manage Bansos</a>
                    </li>
                </ul>
            </li>

            @can('sekretaris')
            <li class="sidebar-title">
                Sekretaris
            </li>

            <li class="page {{ Request::is('iuran*') ? 'active-page' : '' }}">
                <a href="#"><i class="material-icons">done_all</i>Keuangan<i class="material-icons has-sub-menu">keyboard_arrow_left</i></a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ route('iuran.income') }}">Pemasukan</a>
                    </li>
                    <li>
                        <a href="{{ route('iuran.expenditure') }}">Pengeluaran</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="{{ route('citizen.index') }}"><i class="material-icons {{ Request::routeIs('citizen.index') ? 'active' : '' }}">person</i>Citizen</a>
            </li>
            @endcan

            

            @can('citizen')
            <li class="sidebar-title">
                Warga
            </li>
            <li>
                <a href="{{ route('dashboard.warga') }}" class="{{ Request::routeIs('dashboard.warga') ? 'active' : '' }}">
                    <i class="material-icons">dashboard</i>Dashboard_warga
                </a>
            </li>
            @endcan

            <li class="sidebar-title">
                SPK
            </li>
            <li>
                <a href="{{ route('spk.promethee') }}" class="{{ Request::routeIs('spk.promethee') ? 'active' : '' }}">
                    <i class="material-icons">calculate</i>promethee
                </a>
            </li>



        </ul>
    </div>
</div>
