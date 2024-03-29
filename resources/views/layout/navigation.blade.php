<nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Biodata</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('/biodata')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/buku')}}">Book</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/user')}}">User</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/peminjam')}}">Peminjam</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/lokasi')}}">Lokasi Buku</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Cari</button>
        </form>
      </div>
    </div>
  </nav>
