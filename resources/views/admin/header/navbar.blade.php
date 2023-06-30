<nav class="navbar navbar-expand-lg bg-body-tertiary">

    <div class="container-fluid">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">

        <ul class="navbar-nav w-100 d-flex justify-content-between">

          <li class="nav-item">
            <a class="nav-link text-primary fw-semibold" href="#"><i class="fa-solid fa-house-user"></i> | Gestisci attività</a>
          </li>

          {{-- da vedersi solo con profilo di tipo admin --}}
          <li class="nav-item">
            <a class="nav-link text-primary fw-semibold" href="#"><i class="fa-solid fa-screwdriver-wrench"></i> | Gestisci categorie</a>
          </li>
          {{-- da vedersi solo con profilo di tipo admin --}}

          <li class="nav-item">
            <a class="nav-link text-primary fw-semibold" href="#"><i class="fa-solid fa-money-bill-wave"></i> | Controlla ordini</a>
          </li>

        </ul>

      </div>

    </div>

</nav>

