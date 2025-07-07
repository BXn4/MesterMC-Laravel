 <!-- Desktop navbar -->
    <nav class="navbar navbar-dark navbar-expand-lg mt-3 p-2 d-none d-xl-block">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center w-100">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('assets/images/logo2.png') }}" alt="MesterMC">
                </a>

                <div class="d-flex flex-row">
                    <a class="nav-link" href="#">Főoldal</a>
                    <a class="nav-link" href="#download">Letöltés</a>
                    <a class="nav-link" href="#gyik">GYIK</a>
                </div>

                <a href="{{ url('/login') }}" class="btn btn-mc"><img src="{{ asset('assets/images/belepes.png') }}" alt="Bányaközpont belépés" style="width: 150px;"></a>
            </div>
        </div>
    </nav>

    <!-- Mobile navbar -->
    <nav class="navbar-mobile d-flex d-xl-none">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/images/logo2.png') }}" alt="MesterMC">
        </a>
    </nav>
