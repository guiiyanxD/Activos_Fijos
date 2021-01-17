@extends('layouts.plantillabase');

@section('contenido')
  
<div class="row">
  <form class="col s12">
<div class="row card-panel">
     <div class="col s12 center"> <h4>Formulario de Traslado</h4></div>
     
                <div class="row">
                  <div class="col s12"><h5> Activos Fijos</h5></div>
                  <div class="col s4">
                    <input placeholder="Ingrese el codigo" id="depa" type="text" class="validate"required>
                    <label for="depa"></label>
                  </div>
                  <div class="col s4">
                    <button class="btn waves-effect waves-light light-blue darken-4" type="submit" name="action">Buscar
                      <i class="material-icons">search</i>
                    </button>
                  </div>
                  <div class="col s12">
                    <table class="responsive-table centered highlight">
                      <thead>
                        <tr>
                            <th>Codigo </th>
                            <th>Nombre</th>
                            <th>Estado </th>
                            <th>Departamento Origen</th>
                        </tr>
                  
                      </thead>
                      <tbody>
                          
                          <tr>
                               <td>898</td>
                               <td>787</td>
                               <td>787</td>
                               <td>787</td>
                               
                               
                               <td>
                                  <a class="btn btn-primary blue darken-1">  <i class="material-icons">check</i>Asignar</a>
                                  <button class="btn btn-primary red darken-1">  <i class="material-icons">delete</i>Borrar</button>
                               </td>
                          </tr>
                              
                            </tbody>
                    </table>
                  </div>
                </div>
     <div class="row">
  <div class="col s12"><h5>Departamento de Destino</h5></div>
  <div class="col s4">
    <input placeholder="Ingrese el codigo" id="depa" type="text" class="validate"required>
    <label for="depa"></label>
  </div>
  <div class="col s4">
    <button class="btn waves-effect waves-light light-blue darken-4" type="submit" name="action">Buscar
      <i class="material-icons">search</i>
    </button>
  </div>
  <div class="col s12">
    <table class="responsive-table centered highlight">
      <thead>
        <tr>
            <th>Codigo </th>
            <th>Departamento</th>
            <th>Estado </th>
            <th>Edificio</th>
            <th>Calle</th>
            <th>Ciudad</th>
            <th>Pais</th>
        </tr>
  
      </thead>
      <tbody>
          
          <tr>
               <td>898</td>
               <td>787</td>
               <td>787</td>
               <td>787</td>
               <td>787</td>
               <td>787</td>
               <td>787</td>
               
               <td>
                  <a class="btn btn-primary blue darken-1">  <i class="material-icons">check</i>Asignar</a>
                  <button class="btn btn-primary red darken-1">  <i class="material-icons">delete</i>Borrar</button>
               </td>
          </tr>
              
            </tbody>
    </table>
  </div>
</div>
<div class="row">
  <div class="col s12"><h5>Responsables</h5></div>
  <div class="col s4">
    <input placeholder="Ingrese el codigo" id="id" type="text" class="validate"required>
    <label for="id"></label>
  </div>
  <div class="col s4">
    <button class="btn waves-effect waves-light light-blue darken-4" type="submit" name="action">Buscar
      <i class="material-icons">search</i>
    </button>
  </div>
  <div class="col s12">
    <table class="responsive-table centered highlight">
      <thead>
        <tr>
            <th>ID Responsable</th>
            <th>Nombres</th>
            <th>Apellido Paterno </th>
            <th>Apellido Materno</th>
            <th>Estado</th>
         </tr>
  
      </thead>
      <tbody>
          
          <tr>
               <td>898</td>
               <td>787</td>
               <td>787</td>
               <td>787</td>
               <td>787</td>
               
               
               <td>
                  <a class="btn btn-primary blue darken-1">  <i class="material-icons">check</i>Asignar</a>
                  <button class="btn btn-primary red darken-1" >  <i class="material-icons">delete</i>Borrar</button>
               </td>
          </tr>
              
            </tbody>
    </table>
  </div>
</div>
<div class="row">
  <div class="col s12"><h5>Lista de Movimientos</h5></div>
  <div class="col s4">
    <input placeholder="Ingrese el codigo" id="codigo" type="text" class="validate"required>
    <label for="codigo"></label>
  </div>
  <div class="col s4">
    <button class="btn waves-effect waves-light light-blue darken-4" type="submit" name="action">Buscar
      <i class="material-icons">search</i>
    </button>
  </div>
  <div class="col s12">
    <table class="responsive-table centered highlight">
      <thead>
        <tr>
          <th>Nro Movimiento</th>
          <th>Codigo Activo</th>
          <th>Nombre Activo</th>
          <th>Departamento</th>
          <th>Responsable</th>
          <th>Usuario</th>
          <th>Fecha</th>
         </tr>
      </thead>
  
      <tbody>
        
      </tbody>
    </table>
  </div>
</div>
  <div class="row">
    <div class="col l6 s12 right">
      <button class="btn waves-effect waves-light  btn-large" type="submit" name="action">Guardar Datos
        <i class="material-icons">save</i>
      </button>
    </div>
    <div class="col l6 s12 left">
      <a class="btn disabled btn-large">Cancelar<i class="material-icons">cancel</i></a>
    </div>
  </div>

</div>
    </form>
  </div>    

        
    
@endsection

