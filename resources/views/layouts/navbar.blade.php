<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2c3e50;">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'MyProject') }}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/profile/Muhammad Alvin/2317051040/B') }}">Tentang Saya</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/user/contact') }}">Kontak</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
