@extends('layouts.layout')

@section('content')

<title>Lesson Session - Painel</title>

<body>
    
<div>
    <div class="container card text-center panelStyle">

          <div class="card-header">
            <i class="fas fa-user"></i>
          </div>
          <div class="card-body">
            <h5 class="card-title display-4">Olá, {{ Auth::user()->name }}!</h5>
            <p class="card-text lead">Selecione a área que deseja explorar abaixo.</p>

           <div class="container panelContainerButtons">
                <div>
                    <a href="#" class="btn panelButton btn-block formSpace">Professores</a>
                </div>

                <div>
                    <a href="#" class="btn panelButton btn-block formSpace">Turmas</a>
                </div>

                <div>
                    <a href="#" class="btn panelButton btn-block formSpace">Exercícios</a>
                </div>  

                <div>
                    <a href="#" class="btn panelButton btn-block formSpace">Provas</a>
                </div>  
            </div>
          </div>

          <div class="card-footer text-muted">
            Painel de Controle
          </div>

    </div>
</div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
@endsection
