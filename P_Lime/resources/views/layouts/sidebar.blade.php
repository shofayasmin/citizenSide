<div class="lime-sidebar">
    <div class="lime-sidebar-inner slimscroll">
        <ul class="accordion-menu">
            <li class="sidebar-title">
                Apps
            </li>
            <li>
                <a href="{{asset('/home')}}" class="active"><i class="material-icons">dashboard</i>Dashboard</a>
            </li>
            <li>
                <a href="profile.html"><i class="material-icons">person_outline</i>Laporan</a>
            </li>

            <li class="page">
                <a href="#"><i class="material-icons">inbox</i>Acara<i class="material-icons has-sub-menu">keyboard_arrow_left</i></a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ route('acara.manage') }}">Manage</a>
                    </li>
                    <li>
                        <a href="{{ route('acara.view') }}">View</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="todo.html"><i class="material-icons">done_all</i>Bansos</a>
            </li>
            <li>
                <a href="file-manager.html"><i class="material-icons">cloud_queue</i>Iuran</a>
            </li>
            <li>
                <a href="{{ route('citizen.index') }}"><i class="material-icons">person</i>Citizen</a>
            </li>
        </ul>
    </div>
</div>
