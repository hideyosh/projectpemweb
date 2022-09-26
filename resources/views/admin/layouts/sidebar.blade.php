<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading"></div>
                <a class="nav-link mb-2 {{ Route::is('home') ? 'active' : '' }}" href="{{ route('home') }}">
                    <div class="sb-nav-link-icon"><i class="bi bi-columns"></i></div>
                    Dashboard
                </a>
                <a class="nav-link collapsed mb-2
                {{ Route::is('user.index','user.create','user.edit','user.show','basicuser.index') ? 'active' : '' }}"
                href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon" ><i class="fas fa-user"></i></div>
                        User
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse mb-2" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('user.index') }}">Admin</a>
                        <a class="nav-link" href="{{ route('basicuser.index') }}">Basic User</a>
                    </nav>
                </div>
                <a class="nav-link mb-2  {{ Route::is('product.index','product.create','product.edit','product.show') ? 'active' : '' }}" href="{{ route('product.index') }}">
                    <div class="sb-nav-link-icon"><i class="bi bi-bag-fill"></i></div>
                    Product
                </a>
                <a class="nav-link mb-2 {{ Route::is('order.index','order.create','order.edit','order.show') ? 'active' : '' }}" href="{{ route('order.index') }}">
                    <div class="sb-nav-link-icon"><i class="bi bi-cart-fill"></i></div>
                    Order
                </a>
                <a class="nav-link mb-2 {{ Route::is('transaksi.create','transaksi.index','transaksi.edit','transaksi.show')  ? 'active' : ''  }}" href="{{ route('transaksi.index') }}">
                    <div class="sb-nav-link-icon"><i class="bi bi-wallet"></i></div>
                    Transaction
                </a>
                <a class="nav-link" href="tables.html">
                    <div class="sb-nav-link-icon"><i class="bi bi-file-earmark-text"></i></div>
                    Report
                </a>
            </div>
        </div>
    </nav>
</div>
