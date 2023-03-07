<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <?php
            if(session('level')=='admin'){
                ?>
                <li class="nav-item active">
                <a class="nav-link" href="/petugas">
                    <i class="fas fa-fw fa-solid fa-user"></i>
                    <span>Petugas</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="/masyarakat">
                    <i class="fas fa-fw fa-solid fa-users"></i>
                    <span>Masyarakat</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="/tanggapan">
                    <i class="fas fa-fw fa-solid fa-users"></i>
                    <span>Tanggapan</span></a>
            </li>

                        <li class="nav-item active">
                <a class="nav-link" href="/pengaduan">
                    <i class="fas fa-fw fa-solid fa-comments"></i>
                    <span>Pengaduan</span></a>
            </li>

            <?php
            }
            ?>
            <?php 
            if(session('nik')!=null) {
                ?>
            <li class="nav-item active">
                <a class="nav-link" href="/pengaduan">
                    <i class="fas fa-fw fa-solid fa-comments"></i>
                    <span>Pengaduan</span></a>
            </li>
            <?php
            }
            ?>

            <?php if(!empty(session('logged_in'))) : ?>
            <li class="nav-item active">
                <a class="nav-link" href="/logout">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>
            <?php endif?>

            <!-- Nav Item - Utilities Collapse Menu -->
            
            
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            

            <!-- Nav Item - Pages Collapse Menu -->


            <!-- Nav Item - Charts -->
            

            <!-- Nav Item - Tables -->
            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            
            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div>

        </ul>