<nav class="sidebar">
    <div class="sidebar-header">
      <a href="{{route('admin.dashboard')}}" class="sidebar-brand">
        Diet<span>Bite</span>
      </a>
      <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="sidebar-body">
      <ul class="nav">
     
        <li class="nav-item">
          <a href="{{route('admin.dashboard')}}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">Dashboard</span>
          </a>
        </li>
     
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#customers" role="button" aria-expanded="false" aria-controls="customers">
            <i class="link-icon" data-feather="users"></i>
            <span class="link-title">Customers</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="customers">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{route('customers.create')}}" class="nav-link">Create Customer</a>
              </li>
              <li class="nav-item">
                {{-- <a href="{{route('customers.index')}}" class="nav-link">Customers</a> --}}
                <a href="#" class="nav-link">Customers</a>
              </li>
            </ul>
          </div>
        </li>
   
<hr>
<form id="logout-form" action="{{ route('admin.logout') }}" method="get">
  @csrf
  <button class="btn btn-primary nav-link" type="submit">
      {{ __('Logout') }}
  </button>
</form>
      </ul>
    </div>
  </nav>