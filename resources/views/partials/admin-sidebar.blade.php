<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-car"></i>
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
            Admin Area
        </div>
    
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link" href="/admin/transactions">
                <i class="fab fa-fw fa-buffer"></i>
                <span>Transactions</span>
            </a>
        </li>
        
    
        <li class="nav-item">
            <a class="nav-link" href="/admin/vehicles">
                <i class="fas fa-fw fa-car"></i>
                <span>Vehicles</span>
            </a>
            {{-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-car"></i>
                <span>Vehicles</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Assets:</h6>
                    <a class="collapse-item" href="/admin/assets">All Assets</a>
                    <a class="collapse-item" href="/admin/assets/create">Add Asset</a>
                     <h6 class="collapse-header">Vehicles:</h6>
                    <a class="collapse-item" href="/admin/vehicles">Vehicles</a>
                    <a class="collapse-item" href="/admin/vehicles/add">Add Vehicles</a>
                </div>
            </div> --}}
        </li>
    
        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link" href="/admin/users">
                <i class="fas fa-fw fa-user"></i>
                <span>User Accounts</span>
            </a>
            {{-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-user"></i>
                <span>Personnel</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Agents:</h6>
                    <a class="collapse-item" href="/agents">Agents</a>
                    <h6 class="collapse-header">Managers:</h6>
                    <a class="collapse-item" href="/managers">Managers</a>
                    <h6 class="collapse-header">admin:</h6>
                    <a class="collapse-item" href="/admins">admins</a>
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