<!DOCTYPE html>
<html lang="es">

<head>

   @section('head')
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>SGOG</title>

        <!-- Normalize V8.0.1 -->
        <link rel="stylesheet" href="{{URL::asset('css/normalize.css') }}">

        <!-- Bootstrap V4.3 -->

        <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css') }}">
        <!-- Bootstrap Material Design V4.0 -->
        <link rel="stylesheet" href="{{URL::asset('css/bootstrap-material-design.min.css') }}">
        <!-- Font Awesome V5.9.0 -->
        <link rel="stylesheet" href="{{URL::asset('css/all.css') }}">
        <!-- Sweet Alerts V8.13.0 CSS file -->
        <link rel="stylesheet" href="{{URL::asset('css/sweetalert2.min.css') }}">
        <!-- Sweet Alert V8.13.0 JS file-->
        <script src="{{URL::asset('js/sweetalert2.min.js') }}"></script>
        <!-- jQuery Custom Content Scroller V3.1.5 -->
        <link rel="stylesheet" href="{{URL::asset('css/jquery.mCustomScrollbar.css') }}">
        <!-- General Styles -->
        <link rel="stylesheet" href="{{URL::asset('css/style.css') }}">
        <!-- Block Styles -->
        <link rel="stylesheet" href="{{URL::asset('css/blockStyle.css') }}">

        <!--=============================================
        =            Include JavaScript files           =
        ==============================================-->
        <!-- jQuery V3.4.1 -->
        <script src="{{URL::asset('js/jquery-3.4.1.min.js') }}"></script>
        <!-- popper -->
        <script src="{{URL::asset('js/popper.min.js') }}"></script>
        <!-- Bootstrap V4.3 -->
        <script src="{{URL::asset('js/bootstrap.min.js') }}"></script>
        <!-- jQuery Custom Content Scroller V3.1.5 -->
        <script src="{{URL::asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <!-- Bootstrap Material Design V4.0 -->
        <script src="{{URL::asset('js/bootstrap-material-design.min.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('body').bootstrapMaterialDesign();
            });
        </script>

        <script src="{{URL::asset('js/main.js') }}"></script>
        <script src="{{URL::asset('js/validacionesFormularios.js') }}"></script>


   @show

</head>

<body>

    <!-- Main container -->

        <main class="full-box main-container">

            <!-- Nav lateral -->
            <section class="full-box nav-lateral">

                <div class="full-box nav-lateral-bg show-nav-lateral"></div>
                <div class="full-box nav-lateral-content">
                    <figure class="full-box nav-lateral-avatar">
                        <i class="far fa-times-circle show-nav-lateral"></i>
                        <img src="{{URL::asset('./assets/avatar/Avatar.png') }}" class="img-fluid" alt="Avatar">

                        <figcaption class="roboto-medium text-center">
                            Vicedecano de Extensión y Residencia <br><small class="roboto-condensed-light"></small>
                        </figcaption>
                    </figure>
                    <div class="full-box nav-lateral-bar"></div>
                    <nav class="full-box nav-lateral-menu">
                        <ul>
                            <!--<li>
                                <a href="home.html"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Home</a>
                            </li>-->

                            <li>
                                <a href="#" class="nav-btn-submenu"><i class="fas fa-users fa-fw"></i> &nbsp; Guardia Estudiantil<i class="fas fa-chevron-down"></i></a>
                                <ul>
                                    <li>
                                        <a href="{{route('guardiaEstudiantil.create')}}"><i class="fas fa-plus fa-fw"></i> &nbsp; Planificar Guardia Estudiantil</a>
                                    </li>

                                    @section('listar')
                                    <li>
                                        <a href="client-list.html"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Listar Guardia Estudiantil</a>
                                    </li>
                                    @endsection



                                    <li>
                                        <a href="client-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Guardia Estudiantil</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="company.html"><i class="fas fa-store-alt fa-fw"></i> &nbsp; Cumplimiento de Guardia Estudiantil</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </section>


                        <!-- Page navbar -->
                        <section class="full-box page-content">
                            <nav class="full-box navbar-info">

                                <a href="#" class="float-left show-nav-lateral">
                                    <i class="fas fa-exchange-alt"></i>
                                </a>
                                <!--<a href="user-update.html">
                                <i class="fas fa-user-cog"></i>
                                </a>-->
                                <a href="/home/brian/vscode-projects/ISW/indexLogin.html" class="btn-exit-system">
                                    <i class="fas fa-power-off"></i>
                                </a>
                            </nav>
                            @section('container')
                                @yield('contenedor')
                                <div class="full-box page-header">
                                    <h3 class="text-left">
                                        <i class="fab fa-dashcube fa-fw"></i> &nbsp; Sistema de Gestión de Guardia Obrero-Estudiantil
                                    </h3>
                                    <p class="text-justify">
                                        Universidad de Ciencias Informáticas (UCI)
                                    </p>
                                </div>
                            @show
                        </section>


                    <div>
                        @yield('body')
                    </div>

        </main>



</body>

</html>
