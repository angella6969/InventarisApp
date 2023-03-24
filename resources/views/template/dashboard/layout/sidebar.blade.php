<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home" class="align-text-bottom"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/inventarisasi*') ? 'active' : '' }}" href="/dashboard/inventarisasi">
            <span data-feather="file" class="align-text-bottom"></span>
            Inventarisasi
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/kategori*') ? 'active' : '' }}" href="/dashboard/kategori">
            <span data-feather="file" class="align-text-bottom"></span>
            Kategori
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/User*') ? 'active' : '' }}" href="#">
            <span data-feather="file" class="align-text-bottom"></span>
            Users
          </a>
        </li>
      </ul>
    </div>
  </nav>