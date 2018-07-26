<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
  <link rel="shortcut icon" href="{{asset('img/icono-esnea-color.png')}}">
  <title>ESNEA • @yield('page_title')</title>

  <!-- Fuente Anton y Lato -->
  <link href="https://fonts.googleapis.com/css?family=Anton|Lato" rel="stylesheet">
  <!-- Íconos -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

  <!-- Estilos -->
  @include('frontend.layouts.styles')
  <!-- Estilos personalizados de cada página -->
  @yield('page_styles')

 </head>
 <body>
  @yield('page_banner')
  <div class="container-fluid">
   @include('frontend.layouts.navbars.navbar')
   @yield('content')
   @include('frontend.layouts.footer.footer')
  </div>
  <!-- Scripts Generales -->
  @include('frontend.layouts.scripts')
  <!-- Scripts personalizado de la página -->
  @yield('page_scripts')
 </body>
</html>
