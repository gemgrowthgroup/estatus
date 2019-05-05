<!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">{{ config('app.name', 'Laravel') }}</div>
            </a>

            <!-- Divider -->
             <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Accounts
            </div>

            <!-- Nav Item - Agency Level Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="/super/agencies">
                    <i class="far fa-fw fa-building"></i>
                    <span>Agency</span>
                </a>
                {{-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAgency" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="far fa-fw fa-building"></i>
                    <span>Agency</span>
                </a>
                <div id="collapseAgency" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Transactions:</h6>
                        <a class="collapse-item" href="/agencies">All Agencies</a>
                        <a class="collapse-item" href="/agencies/create">Create Agency</a>
                         <h6 class="collapse-header">Utilities:</h6>
                        <a class="collapse-item" href="/admins">All Admins</a>
                        <a class="collapse-item" href="/admins/create">Add Admins</a>
                    </div>
                </div> --}}
            </li>

            <!-- Nav Item - Vehicles Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Vehicles</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Transactions:</h6>
                        <a class="collapse-item" href="/super/history">History</a>
                        <a class="collapse-item" href="/super/transactions">Requests</a>
                         <h6 class="collapse-header">Utilities:</h6>
                        <a class="collapse-item" href="/super/vehicles">Vehicles</a>
                        <a class="collapse-item" href="/super/brands">Car Brands</a>
                        <a class="collapse-item" href="/super/brands">Drivers</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Personnel Collapse Menu -->
            <li class="nav-item">
                <a href="/super/users" class="nav-link">
                    <i class="fas fa-fw fa-user"></i>
                    <span>User Management</span>
                </a>
                {{-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePersonnel" aria-expanded="true" aria-controls="collapsePersonnel">
                    <i class="fas fa-fw fa-user"></i>
                    <span>User Management</span>
                </a>
                <div id="collapsePersonnel" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Agents:</h6>
                        <a class="collapse-item" href="/users/add">Add Users</a>
                        <a class="collapse-item" href="/users">All Users</a>
                    </div>
                </div> --}}
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Other
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Reports</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Vehicle:</h6>
                        <a class="collapse-item" href="#">Summary Report</a>
                        <a class="collapse-item" href="#">Accounts Payable</a>
                        <a class="collapse-item" href="#">Usage History</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Personnel:</h6>
                        <a class="collapse-item" href="#">Summary Report</a>
                        <a class="collapse-item" href="#">Activity Report</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-envelope fa-fw"></i>
                    <span>Messages</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-clock fa-fw"></i>
                    <span>Subscription</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->