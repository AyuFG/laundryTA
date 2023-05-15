    @if(auth()->user()->roles_id == 1)
    <section class="p-3 bg-dark bottom-0 fixed-bottom">
        <a href="/super" class="d-flex flex-column align-items-center text-decoration-none fw-bold">
            <i class="fa-solid fa-house"></i>
            <span>Beranda</span>
        </a>
    </section>
    @elseif(auth()->user()->roles_id == 2)
    <section class="p-3 bg-dark bottom-0 fixed-bottom">
        <a href="/admin" class="d-flex flex-column align-items-center text-decoration-none fw-bold">
            <i class="fa-solid fa-house"></i>
            <span>Beranda</span>
        </a>
    </section>
    @elseif(auth()->user()->roles_id == 3)
    <section class="p-3 bottom-0 fixed-bottom" style="background-color: #24A384">
        <a href="/member" class="d-flex flex-column align-items-center text-decoration-none fw-bold" style="color: #f1f1f1;">
            <i class="fa-solid fa-house"></i>
            <span>Beranda</span>
        </a>
    </section>
    @else
    <section class="p-3 bottom-0 fixed-bottom">
        <a href="/" class="d-flex flex-column align-items-center text-decoration-none fw-bold" style="color: #f1f1f1;">
            <i class="fa-solid fa-house"></i>
            <span>Beranda</span>
        </a>
    </section>
    @endif