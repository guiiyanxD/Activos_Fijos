<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
 
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  
</head>
<body>
<div class="responsive-container">
   <div class="row">
     <div class="col s12 light-blue darken-4">
             <div class="navbar">
              <nav class="light-blue darken-4">
                  <div class="col s12 nav-wrapper container">
                      <a href="#!" class="brand-logo right">Sistema Activos Fijos</a>
                      <a href="" data-target="responsive-menu" class="sidenav-trigger">
                          <i class="material-icons">menu</i>
                      </a>
                      <ul class="left left hide-on-med-and-down ">
                          <li><a href="">Altas</a></li>
                          <li><a href="">Bajas</a></li>
                          <li><a href="">Traslados</a></li>
                          <li><a href="">Usuarios</a></li>
                       <li>
                           <a href="#" class="dropdown-trigger" data-target="id_drop">
                              Activos Fijos
                               <i class="material-icons right">arrow_drop_down</i>
                           </a>
                           <ul id="id_drop" class="dropdown-content">
                               <li><a href="#">Gestionar Activos Fijos</a></li>
                               <li><a href="#">Gestionar Revaluo</a></li>
                               <li class="divider"></li>
                               <li><a href="#">Gestionar Depreciacion</a></li>
                           </ul>
                       </li>
                  </div>
              </nav>
          </div>
     
          <ul class="sidenav" id="responsive-menu">
            <li><a href="">Altas</a></li>
            <li><a href="">Bajas</a></li>
            <li><a href="">Traslados</a></li>
            <li><a href="">Usuarios</a></li>
              <li>
                  <a href="#" class="dropdown-trigger" data-target="id_dropm">
                      Activos Fijos
                      <i class="material-icons right">arrow_drop_down</i>
                  </a>
                  <ul id="id_dropm" class="dropdown-content">
                    <li><a href="#">Gestionar Activos Fijos</a></li>
                    <li><a href="#">Gestionar Revaluo</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Gestionar Depreciacion</a></li>
                  </ul>
              </li>
          </ul>
        </div>
 
       
        <div class="col s12 grey lighten-4 ">
           <div class="responsive-section container">  @yield('contenido')</div>
        </div>
   

  </div>

  

</div>
</body>
<script>$(document).ready(function(){
  $('select').formSelect();
});;</script>



<script>
  document.addEventListener('DOMContentLoaded', function() {
  let sidenav = document.querySelectorAll('.sidenav');
  let instancia_sidenav = M.Sidenav.init(sidenav,{});    
  let dropdowns = document.querySelectorAll('.dropdown-trigger');
  let instancia_dropwdown = M.Dropdown.init(dropdowns, {
  hover:false});
});
</script>
</html>