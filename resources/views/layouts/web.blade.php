<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Cheetos | Dashboard | @yield('title')</title>

   <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/adminx.css') }}" media="screen" />
<body>
   <div class="adminx-container">
      <nav class="navbar navbar-expand justify-content-between fixed-top">
        <a class="navbar-brand mb-0 h1 d-none d-md-block" href="/">
          Cheetos
        </a>

        <form class="form-inline form-quicksearch d-none d-md-block mx-auto">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-icon">
                <i data-feather="search"></i>
              </div>
            </div>
            <input type="text" class="form-control" id="search" placeholder="Type to search...">
          </div>
        </form>

        <div class="d-flex flex-1 d-block d-md-none">
          <a href="#" class="sidebar-toggle ml-3">
            <i data-feather="menu"></i>
          </a>
        </div>

        <ul class="navbar-nav d-flex justify-content-end mr-2">
          <!-- Notificatoins -->
          <li class="nav-item dropdown d-flex align-items-center mr-2">
            <a class="nav-link nav-link-notifications" id="dropdownNotifications" data-toggle="dropdown" href="#">
              <i class="oi oi-bell display-inline-block align-middle"></i>
              <span class="nav-link-notification-number">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-notifications" aria-labelledby="dropdownNotifications">
              <div class="notifications-header d-flex justify-content-between align-items-center">
                <span class="notifications-header-title">
                  Notifications
                </span>
                <a href="#" class="d-flex"><small>Mark all as read</small></a>
              </div>

              <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action unread">
                  <p class="mb-1">Invitation for <strong>Lunch</strong> on <strong>Jan 12th 2018</strong> by <strong>Laura</strong></p>

                  <div class="mb-1">
                    <button type="button" class="btn btn-primary btn-sm">Accept invite</button>
                    <button type="button" class="btn btn-outline-danger btn-sm">Decline</button>
                  </div>

                  <small>1 hour ago</small>
                </a>

                <a href="#" class="list-group-item list-group-item-action">
                  <p class="mb-1"><strong class="text-success">Goal completed</strong><br />1,000 new members today</p>
                  <small>3 days ago</small>
                </a>

                <a href="#" class="list-group-item list-group-item-action">
                  <p class="mb-1 text-danger"><strong>System error detected</strong></p>
                  <small>3 days ago</small>
                </a>

                <a href="#" class="list-group-item list-group-item-action">
                  <p class="mb-1">Your task <strong>Design Draft</strong> is due today.</p>
                  <small>4 days ago</small>
                </a>
              </div>

              <div class="notifications-footer text-center">
                <a href="#"><small>View all notifications</small></a>
              </div>
            </div>
          </li>
          <!-- Notifications -->
          <li class="nav-item dropdown">
            <a class="nav-link avatar-with-name" id="navbarDropdownMenuLink" data-toggle="dropdown" href="#">
              <img src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg" class="d-inline-block align-top" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">My Profile</a>
              <a class="dropdown-item" href="#">My Tasks</a>
              <a class="dropdown-item" href="#">Settings</a>
              <div class="dropdown-divider"></div>
              <a href="/logoutAdmin" class="nav-item" style="margin-left: 25px;">Logout <i class="bi bi-box-arrow-right"></i></a>
            </div>
          </li>
        </ul>
      </nav>

      <!-- expand-hover push -->
      <!-- Sidebar -->
      <div class="adminx-sidebar expand-hover push">
        <ul class="sidebar-nav">
          <li class="sidebar-nav-item">
            <a href="/dashboard" class="sidebar-nav-link {{ ($title === "dashboard") ? 'active' : '' }}">
              <span class="sidebar-nav-icon">
                <i data-feather="home"></i>
              </span>
              <span class="sidebar-nav-name">
                Dashboard
              </span>
              <span class="sidebar-nav-end">

              </span>
            </a>
          </li>

          <li class="sidebar-nav-item">
            <a href="/dashboard/product" class="sidebar-nav-link {{ ($title === "produk") ? 'active' : '' }}">
              <span class="sidebar-nav-icon">
                <i data-feather="layers"></i>
              </span>
              <span class="sidebar-nav-name">
                Product
              </span>
              <span class="sidebar-nav-end">

              </span>
            </a>
          </li>

          <li class="sidebar-nav-item">
            <a href="/dashboard/useradmin" class="sidebar-nav-link {{ ($title === "user") ? 'active' : '' }}">
              <span class="sidebar-nav-icon">
                <i data-feather="users"></i>
              </span>
              <span class="sidebar-nav-name">
                User & Admin
              </span>
              <span class="sidebar-nav-end">

              </span>
            </a>
          </li>

          <li class="sidebar-nav-item">
            <a href="/dashboard/contact" class="sidebar-nav-link {{ ($title === "contact") ? 'active' : '' }}">
              <span class="sidebar-nav-icon">
                <i data-feather="message-circle"></i>
              </span>
              <span class="sidebar-nav-name">
                Contact
              </span>
              <span class="sidebar-nav-end">

              </span>
            </a>
          </li>

          <li class="sidebar-nav-item">
            <a href="/dashboard/transaction" class="sidebar-nav-link {{ ($title === "transaction") ? 'active' : '' }}">
              <span class="sidebar-nav-icon">
                <span class="oi oi-briefcase"></span>
              </span>
              <span class="sidebar-nav-name">
                Transaction
              </span>
              <span class="sidebar-nav-end">

              </span>
            </a>
          </li>
          
        </ul>
      </div><!-- Sidebar End -->

      @yield('content')
   
   <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
   <script src="{{ asset('dist/js/vendor.js') }}"></script>
   <script src="{{ asset('dist/js/adminx.js') }}"></script>
</html>