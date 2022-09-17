<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="/"><img src="logo/UNY.PNG" alt="UNY" width="50"></a>
      <button class="navbar-toggler" 
      type="button" 
      data-bs-toggle="collapse" 
      data-bs-target="#navbarNavAltMarkup" 
      aria-controls="navbarNavAltMarkup" 
      aria-expanded="false" 
      aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ ($title === "Beranda") ? 'active' : '' }}" href="/">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title === "Ajukan") ? 'active' : '' }}" href="/ajukan">Ajukan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title === "Unduh Aplikasi") ? 'active' : '' }}" href="/unduhaplikasi">Unduh Aplikasi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title === "Panduan") ? 'active' : '' }}" href="/panduan">Panduan Aplikasi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title === "FAQ") ? 'active' : '' }}" href="/faq">FAQ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title === "Kebijakan Privasi") ? 'active' : '' }}" href="/kebijakanprivasi">Kebijakan Privasi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title === "Kontak") ? 'active' : '' }}" href="/kontak">Kontak</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>
