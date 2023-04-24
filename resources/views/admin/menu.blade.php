    @if(auth()->user()->roles_id == 1)
    <section class="pt-3 pb-2 px-3 bg-dark bottom-0 fixed-bottom">
    <div class="navbar p-0 d-lg-block d-xl-none" id="mobile-footer-bar">
        <ul class="container-fluid footer-bar">
            <a href="/super" class="d-flex flex-column align-items-center text-decoration-none fw-bold" style="color: #f1f1f1;">
                <i class="fa-solid fa-house"></i>
                <span>Beranda</span>
            </a>
            <a href="/super/chart" class="d-flex flex-column align-items-center text-decoration-none fw-bold" style="color: #f1f1f1;">
                <i class="fa-solid fa-line-chart"></i>
                <span>Chart</span>
            </a>
            <a href="/super/laporan" class="d-flex flex-column align-items-center text-decoration-none fw-bold" style="color: #f1f1f1;">
                <i class="fa-solid fa-bar-chart" aria-hidden="true"></i>
                <span>Laporan</span>
            </a>
            <a href="/super/transaksi" class="d-flex flex-column align-items-center text-decoration-none fw-bold" style="color: #f1f1f1;">
                <i class="fa-solid fa-receipt"></i>
                <span>Transaksi</span>
            </a>
        </ul>
    </div>
    </section>
    @elseif(auth()->user()->roles_id == 2)
    <section class="pt-3 pb-2 px-3 bg-dark bottom-0 fixed-bottom">
        <div class="navbar p-0 d-lg-block d-xl-none" id="mobile-footer-bar">
            <ul class="container-fluid footer-bar">
                <a href="/super" class="d-flex flex-column align-items-center text-decoration-none fw-bold" style="color: #f1f1f1;">
                    <i class="fa-solid fa-house"></i>
                    <span>Beranda</span>
                </a>
                <a href="/super/chart" class="d-flex flex-column align-items-center text-decoration-none fw-bold" style="color: #f1f1f1;">
                    <i class="fa-solid fa-line-chart"></i>
                    <span>Chart</span>
                </a>
                <a href="/super/laporan" class="d-flex flex-column align-items-center text-decoration-none fw-bold" style="color: #f1f1f1;">
                    <i class="fa-solid fa-bar-chart" aria-hidden="true"></i>
                    <span>Laporan</span>
                </a>
                <a href="/super/transaksi" class="d-flex flex-column align-items-center text-decoration-none fw-bold" style="color: #f1f1f1;">
                    <i class="fa-solid fa-receipt"></i>
                    <span>Transaksi</span>
                </a>
            </ul>
        </div>
        </section>
    @endif