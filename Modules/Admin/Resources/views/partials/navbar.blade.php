<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
      <a class="navbar-brand" href="#">Highland</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{-- @if($title==='Home')active@endif --}}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{-- @if($title==='About')active@endif --}}" href="/about">About</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link @if($title==='Blog')active@endif" href="/blog">Blog</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link {{-- @if($title==='Bussiness')active@endif --}}" href="/bussiness">Bussiness</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/package">Package</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>