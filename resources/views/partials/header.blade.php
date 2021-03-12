<header>

  <div class="logo">
    <img src="{{ asset('img/logo.png')}}" alt="logo">
  </div>

  <div class="main_menu">
    <nav>
      <ul>
        <li>
          <a href="{{route('paginaHome')}}" class="{{(Request::route()->getName() == 'paginaHome') ? 'active' : ''}}">Home</a>
        </li>
        <li>
          <a href="{{route('paginaProdotti')}}" class="{{(Request::route()->getName() == 'paginaProdotti') ? 'active' : ''}}">Prodotti</a>
        </li>
        <li>
          <a href="{{route('paginaNotizie')}}" class="{{(Request::route()->getName() == 'paginaNotizie') ? 'active' : ''}}">Notizie</a>
        </li>
      </ul>
    </nav>
  </div>

</header>