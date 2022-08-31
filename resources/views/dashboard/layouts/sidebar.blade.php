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
            My Post
          </a>
        </li>
      </ul>

      {{-- @can('auth') --}}
      <h6 class="sidebar-heaading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Administrator</span>
      </h6>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is ('dashboard/categories*')? 'active' : '' }}" href="/dashboard/categories">
            <span data-feather="grid"></span>
            News Categories
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
            Services
          </a>
        </li>
      </ul>
      {{-- @endcan --}}
    </div>
  </nav>