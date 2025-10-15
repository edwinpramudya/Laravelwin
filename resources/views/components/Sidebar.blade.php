<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link" href="{{ url('admin') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                   data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Informasi Perusahaan
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('admin.visimisi.index') }}">Visi and Mision</a>
                        <a class="nav-link" href="{{ route('admin.company.index') }}">Company overview</a>
                        <a class="nav-link" href="{{ route('admin.strukturteam.index') }}">Team structure</a>
                        <a class="nav-link" href="{{ route('admin.product-types.index') }}">Product types</a>
                        <a class="nav-link" href="{{ route('admin.berita.index') }}">News</a>
                        <a class="nav-link" href="{{ route('admin.kontak.index') }}">Contact</a>
                        <a class="nav-link" href="{{ route('admin.karir.index') }}">Career</a>
                    </nav>
                </div>
                
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{ optional(auth()->user())->name ?? 'guest' }}
        </div>
    </nav>
</div>
