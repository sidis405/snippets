<nav class="nav has-shadow">
  <div class="container">
    <div class="nav-left">
      <a class="nav-item" href="/">
        <h3>{{ config('app.name', 'Laravel') }}</h3>
      </a>
    {{--   <a class="nav-item is-tab is-hidden-mobile is-active">Home</a>
      <a class="nav-item is-tab is-hidden-mobile">Features</a>
      <a class="nav-item is-tab is-hidden-mobile">Pricing</a>
      <a class="nav-item is-tab is-hidden-mobile">About</a> --}}
    </div>
    <span class="nav-toggle">
      <span></span>
      <span></span>
      <span></span>
    </span>
    <div class="nav-right nav-menu">
    {{--   <a class="nav-item is-tab is-hidden-tablet is-active">Home</a>
      <a class="nav-item is-tab is-hidden-tablet">Features</a>
      <a class="nav-item is-tab is-hidden-tablet">Pricing</a>
      <a class="nav-item is-tab is-hidden-tablet">About</a> --}}
      @if (Auth::guest())
          <a class="nav-item" href="{{ url('/auth/github') }}">
              <span class="icon">
                <i class="fa fa-github"></i>
              </span>
              <span>Login with GitHub</span>
            </a>
      @else
            <a href="{{ url('/@'. Auth::user()->username) }}" class="nav-item is-tab">
            <figure class="image is-16x16" style="margin-right: 8px;">
              <img src="{{ Auth::user()->avatar }}">
            </figure>
        {{ Auth::user()->name }}</a>
            
            <a href="{{ url('/logout') }}"  class="nav-item is-tab"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
            
      @endif
      
    </div>
  </div>
</nav>