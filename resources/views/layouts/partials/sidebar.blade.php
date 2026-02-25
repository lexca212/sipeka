<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="#" class="brand-link text-center">
        <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <div class="sidebar">
        <nav>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            Master Data
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Users</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pengacara') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Pengacara</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('jenisperkara') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Jenis Perkara</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                           DATA PERKARA
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('client.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Client</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('perkara.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Perkara</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('laporanperkara') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Laporan Perkara</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>

</aside>