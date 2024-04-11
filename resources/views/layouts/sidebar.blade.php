<aside class="main-sidebar sidebar-dark-primary elevation-4">
<div class="brand-link">
</div>
<div class="sidebar">
<div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
        <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
</div>
<div class="info">
<a href="#" class="d-block">Alexander Pierce</a>
</div>
    </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">Admin</li>
                <li class="nav-item"> 
                    <a href="{!! route('product.list')!!}" class="nav-link {{ \Request::routeIs('product.list') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-file"></i>
                        <p>เมนูเช็คสถานะ</p>
                    </a>
                </li>
                <li class="nav-item"> 
                    <a href="{!! route('product.create')!!}" class="nav-link {{ \Request::routeIs('product.create') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-file-import"></i>
                        <p>เมนูรับเข้าสินค้า</p>
                    </a>
                </li>
                <li class="nav-item"> 
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-flag"></i>
                        <p>เมนูรายงานสินค้ามีปัญหา</p>
                    </a>
                </li>
                <li class="nav-header">Checker</li>
                <li class="nav-item"> 
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-box"></i>
                        <p>เมนูดูสินค้า</p>
                    </a>
                </li>
                <li class="nav-item"> 
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-check"></i>
                        <p>เมนูตรวจสอบสินค้า</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>