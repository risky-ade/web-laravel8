<nav class="nav-bar">
  <div class="logo">
    <h1>
      <img width="50" height="40" src="/img/logonew.png" alt="">
      <a class="navbar-brand fw-bold text-dark" href="/home"> Citra Mandiri Sukses</a>
    </h1>
  </div>
        <ul class="nav-ul">
            <li>
            <a class="nav-link {{ ($active === "home") ? 'active' : " " }}"  href="/home">Home</a>
            </li>
            <li>
            <a class="nav-link {{ ($active === "about") ? 'active' : " " }}" href="/about">About</a>
            </li>
            <li>
              <a class="nav-link {{ ($active === "project") ? 'active' : " " }}" href="/project">Project</a>
            </li>
            <li>
                <a class="nav-link {{ ($active === "client") ? 'active' : " " }}" href="/client">Client</a>
            </li>
            <li>
            <a class="nav-link {{ ($active === "posts") ? 'active' : " " }}" href="/posts">Article</a>
            </li>
            <li>
            <a class="nav-link {{ ($active === "categories") ? 'active' : " " }}" href="/categories">Categories</a>
            </li>
        </ul>

        <div class="menu-toggle">
          <input type="checkbox" />
          <span></span>
          <span></span>
          <span></span>
        </div>
        {{-- <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Welcome back, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                        </form>
                      </li>
                    </ul>
                  </li>
                @else
                <li class="nav-item">
                    <a href="/login" class="nav-link{{ ($active === "login") ? 'active' : " " }}">
                        <i class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>

                @endauth
            </ul> --}}
      
      </nav>
