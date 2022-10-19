<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is ('dashboard')? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is ('dashboard/posts*')? 'active' : '' }}" href="/dashboard/posts">
            <span data-feather="file-text"></span>
            Article
          </a>
        </li>
      </ul>

      {{-- @can('auth') --}}
      {{-- <h6 class="sidebar-heaading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Administrator</span>
      </h6> --}}
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is ('dashboard/categories*')? 'active' : '' }}" href="/dashboard/categories">
            <span data-feather="grid"></span>
            Article Categories
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is ('dashboard/sliders*')? 'active' : '' }}" href="/dashboard/sliders">
            <span data-feather="layout"></span>
            Sliders
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is ('dashboard/services*')? 'active' : '' }}" href="/dashboard/services">
            <span data-feather="layers"></span>
            Scope
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is ('dashboard/abouts*')? 'active' : '' }}" href="/dashboard/abouts">
            <span data-feather="flag"></span>
            About Us
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is ('dashboard/projects*')? 'active' : '' }}" href="/dashboard/projects">
            <span data-feather="folder-minus"></span>
            Project
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is ('dashboard/clients*')? 'active' : '' }}" href="/dashboard/clients">
            <span data-feather="users"></span>
            Client
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is ('dashboard/profiles*')? 'active' : '' }}" href="/dashboard/profiles">
            <span data-feather="user"></span>
            Profile
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is ('dashboard/contact*')? 'active' : '' }}" href="/dashboard/contact">
            <span data-feather="book"></span>
            Contact
          </a>
        </li>
        <li class="nav-item">
          <div class="nav-item text-nowrap">
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="nav-link px-3 border-0"> Logout <span data-feather="log-out"></span></button>
          </form>
          </div>
        </li>
      </ul>
      {{-- @endcan --}}
    </div>
  </nav>