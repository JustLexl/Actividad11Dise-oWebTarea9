<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <span class="navbar-brand">Activity 11</span>
    </div>
    <ul class="nav navbar-nav">
      <li class="{{ Request::is('/') ? 'active' : '' }}">
        <a href="{{ url('/') }}">Home</a>
      </li>
      <li class="{{ Request::is('photos') ? 'active' : '' }}">
        <a href="{{ url('photos') }}">Photos</a>
      </li>
      <li class="{{ Request::is('contact') ? 'active' : '' }}">
        <a href="{{ url('contact') }}">Contact</a>
      </li>
    </ul>
  </div>
</nav>