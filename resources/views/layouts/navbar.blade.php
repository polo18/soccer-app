<div class="site-mobile-menu site-navbar-target">
  <div class="site-mobile-menu-header">
    <div class="site-mobile-menu-close">
      <span class="icon-close2 js-menu-toggle"></span>
    </div>
  </div>
  <div class="site-mobile-menu-body"></div>
</div>


<header class="site-navbar py-4" role="banner">

  <div class="container">
    <div class="d-flex align-items-center">
      <div class="site-logo">
        <a href="#">
          <img src="images/logo_tr1.png" alt="Logo" height="50px">
          N'en rêvez pas, FET le!
        </a>
      </div>
      <div class="ml-auto">
        <nav class="site-navigation position-relative text-right" role="navigation">
          <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
            <li class="{{ Request::is('/') ? 'active' : '' }}">
              <a href="{{ route('home') }}" class="nav-link">Accueil</a>
            </li>
            <li class="{{ Request::is('matches') ? 'active' : '' }}">
              <a href="{{ route('matches') }}" class="nav-link">Matches</a>
            </li>
            <li class="{{ Request::is('players') ? 'active' : '' }}">
              <a href="{{ route('players') }}" class="nav-link">L'equipe</a>
            </li>
            <li class="{{ Request::is('blog') ? 'active' : '' }}">
              <a href="{{ route('blog') }}" class="nav-link">Blog</a>
            </li>
            {{--<li><a href="#" class="nav-link">Galeries</a></li>--}}
            <li class="{{ Request::is('shopping') ? 'active' : '' }}">
              <a href="{{ route('shopping') }}" class="nav-link">Boutique</a>
            </li>
            <li class="{{ Request::is('contact') ? 'active' : '' }}">
              <a href="{{ route('contact') }}" class="nav-link">Contact</a>
            </li>
          </ul>
        </nav>

        <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white"><span class="icon-menu h3 text-white"></span></a>
      </div>
    </div>
  </div>

</header>