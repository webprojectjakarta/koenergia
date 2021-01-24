<ul class="nav">
  <li class="nav-item nav-profile">
    <div class="nav-link">
      <div class="user-wrapper">
        <div class="profile-image">
          @if(Auth::user()->gambar == '')

          <img src="{{asset('images/user/default.png')}}" alt="profile image">
          @else

          <img src="{{asset('images/user/'. Auth::user()->gambar)}}" alt="profile image">
          @endif
        </div>
        <div class="text-wrapper">
          <p class="profile-name">{{Auth::user()->name}}</p>
          <div>
            <small class="designation text-muted" style="text-transform: uppercase;letter-spacing: 1px;">{{ Auth::user()->level }}</small>
            <span class="status-indicator online"></span>
          </div>
        </div>
      </div>
    </div>
  </li>
  <li class="nav-item"> 
    <a class="nav-link" href="{{url('/admin')}}">
      <i class="menu-icon mdi mdi-television"></i>
      <span class="menu-title">Home</span>
    </a>
  </li>
  <li class="nav-item"> 
    <a class="nav-link" href="{{route('user.index')}}">
    <i class="menu-icon mdi mdi-content-copy"></i>
      <span class="menu-title">Data User</span>
    </a>
  </li>
  <li class="nav-item"> 
    <a class="nav-link" href="{{route('adminBlog.index')}}">
      <i class="menu-icon mdi mdi-blogger"></i>
      <span class="menu-title">Blog</span>
    </a>
  </li>
  <li class="nav-item"> 
    <a class="nav-link" href="{{route('adminProject.index')}}">
      <i class="menu-icon mdi mdi-chart-areaspline"></i>
      <span class="menu-title">Project</span>
    </a>
  </li>
  <li class="nav-item"> 
    <a class="nav-link" href="{{route('adminPartner.index')}}">
      <i class="menu-icon mdi mdi-briefcase"></i>
      <span class="menu-title">Partnership</span>
    </a>
  </li>
  <li class="nav-item"> 
    <a class="nav-link" href="{{route('adminCarier.index')}}">
      <i class="menu-icon mdi mdi-briefcase"></i>
      <span class="menu-title">Kontribusi</span>
    </a>
  </li>
  <li class="nav-item"> 
    <a class="nav-link" href="{{route('adminContribusi.index')}}">
      <i class="menu-icon mdi mdi-briefcase"></i>
      <span class="menu-title">Careers</span>
    </a>
  </li>
</li>