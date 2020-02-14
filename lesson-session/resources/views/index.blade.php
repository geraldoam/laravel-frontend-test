<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/7afebb249a.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet"> 
</head>
<body>
  
        <!-- Navbar --->

        <nav class="navbar navbar-expand-md navbar-dark navbarColor shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Lesson Sesson') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="btn btn-secondary navbarSpaceButton" href="{{ route('login') }}" >{{ __('Entrar') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="btn navbarSpaceButton navbarButtonRegister" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                </li>
                            @endif
                        @else

                                <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{ route('painel') }}">
                                        {{ __('Painel de Controle') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Sair da Conta') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>




    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid jumbotronStyle">
      <div class="container">
        <h1 class="display-2">Lesson Session</h1>
        <p class="display-5 lead jumbotronGray text-roboto">Para professores e alunos</p>
      </div>
    </div>



    <!--- Media Objects --->
    <ul class="list-unstyled container">

      <li class="media">
        <i class="fas fa-lock fa-3x mediaIconSize"></i>
        <div class="media-body">
          <h5 class="mt-0 mb-1 mediaColorTitle fontRaleway">Segurança</h5>
          <h6 class="mt-2 mb-5 mediaColorText">Seus dados são protegidos com criptografia.<h6>
      </li>

      <li class="media">
        <i class="fas fa-book fa-3x mediaIconSize"></i>
        <div class="media-body">
          <h5 class="mt-0 mb-1 mediaColorTitle fontRaleway">Educação</h5>
          <h6 class="mt-2 mb-5 mediaColorText">Banco de questões online ao qual evita o gasto com papel e maior implementação da tecnologia na instituição.<h6>
      </li>

      <li class="media">
        <i class="fas fa-child fa-3x mediaIconSize"></i>
        <div class="media-body">
          <h5 class="mt-0 mb-1 mediaColorTitle fontRaleway">Código Aberto</h5>
          <h6 class="mt-2 mb-5 mediaColorText">Você que gosta de programação e tecnologia pode contribuir para o projeto, que é Open Source, o tornando um site mais seguro e intuitivo.<h6>
      </li>

    </ul>



    <!--- Card --->
    
  <center>

    <div class="container row">

      <div class="col-sm-6">
        <div class="card cardSettings cardColorSettings">
          <div class="card-header"><i class="fas fa-code cardIconColors"></i></div>
          <div class="card-body">
            <h5 class="card-title cardTitleColor">Sabe programação e quer contribuir?</h5>
            <p class="card-text cardTextColor">É fácil, o nosso site possui o <a style="color: #4ea3bb">código aberto</a>, para que você possa contribuir e saber o que acontece nos bastidores.</p>
            <div class="button_cont" align="center">
              <a class="btn btn-sm example_e" href="https://github.com/i386angel/laravel-projects" target="_blank" rel="nofollow noopener">Contribuir</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="card cardSettings cardColorSettings">
          <div class="card-header cardIconColors"><i class="fas fa-th-large"></i></div>
          <div class="card-body">
            <h5 class="card-title cardTitleColor">Fácil e Rápido!</h5>
            <p class="card-text cardTextColor">A arquitetura do site foi elaborada para atender melhor o público jovem, com tendências minimalistas.</p>
            <div class="button_cont" align="center">
              <a class="btn btn-sm example_e" href="{{ route('info.team') }}"  rel="nofollow noopener">Equipe</a>
            </div>
          </div>
        </div>
      </div>

    </div> 


    <div class="container row">
      

      <div class="col-sm-6">
        <div class="card cardSettings cardColorSettings">
          <div class="card-header cardIconColors"><i class="fas fa-desktop"></i></i></div>
          <div class="card-body">
            <h5 class="card-title cardTitleColor">Tecnologias atualizadas!</h5>
            <p class="card-text cardTextColor">O site Lesson Session utiliza tecnologias atualizadas, ou seja, nós visamos em segurança e qualidade.</p>
     
            <div class="button_cont" align="center"><a class="btn btn-sm example_e" href="{{ route('info.technologies') }}"  rel="nofollow noopener">Tecnologias</a></div>

          </div>
        </div>
      </div>


      <div class="col-sm-6">
        <div class="card cardSettings cardColorSettings">
          <div class="card-header"><i class="fas fa-graduation-cap cardIconColors"></i></div>
          <div class="card-body">
            <h5 class="card-title cardTitleColor">Chega de carregar peso!</h5>
            <p class="card-text cardTextColor">Convide seu professor ou diretor para utilizar o site, fazendo assim com que diminua os gastos em sua instituição. Compartilhe!</p>


            <div class="button_cont" align="center"><a class="btn btn-sm example_e" href="{{ route('info.share') }}"  rel="nofollow noopener">Compartilhar</a></div>

          </div>
        </div>
      </div>

    </div>

  </center>


  <footer class="container footerPropriets">
    <p class="float-right"><a href="#"></a></p>
    <p>&copy; 2020 &middot; <a href="https://github.com/i386angel" class="badge badge-primary footerButtonColors">GitHub</a> &middot; <a href="#" class="badge badge-primary footerButtonColors">Termos</a></p>
  </footer>


  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>