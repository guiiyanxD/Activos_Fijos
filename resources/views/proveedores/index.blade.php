@extends('layouts.plantillabase');

@section('contenido')
  
<div class="row">
  <form class="col s12">
  <div class="row card-panel">
     <div class="col s12 center"> <h4>Gestionar Proveedores</h4></div>
     
                <div class="row">
                      
                      <div class="col l4 s12">
                        <input placeholder="Ingrese el codigo" id="id" type="text" class="validate"required>
                        <label for="id"></label>
                      </div>
                      <div class="col l2 s12 center">
                        <button class="btn waves-effect waves-light light-blue darken-4" type="submit" name="action">Buscar
                          <i class="material-icons">search</i>
                        </button>
                      </div>
                  
                      <div class="col l3 s12 center">
                        <button class="btn btn-primary ">  <i class="material-icons">add_circle</i>Crear Nuevo</button>
                      </div>
               
                  <div class="col s12"><h5> Listado Proveedores</h5></div>
                  <div class="col s12">
                    <table class="responsive-table centered highlight">
                        <thead>
                            <tr>
                              <th>ID</th>
                              <th>Nombres</th>
                              <th>Apellido Paterno</th>
                              <th>Apellido Materno</th>
                              <th>Direccion</th>
                              <th>Movil</th>
                              <th>Estado</th>
                             </tr>
                          </thead>
                      <tbody>
                          
                          <tr>
                               <td>1</td>
                               <td>Diego</td>
                               <td>Fernandez</td>
                               <td>Sandi</td>
                               <td>Av. prefecto Rivas calle Choretti nro 109</td>
                               <td>6097266</td>
                               <td>Activo</td>
                                                        
                               
                               <td>
                                  <a class="btn btn-primary blue darken-1">  <i class="material-icons">edit</i></a>
                                  <button class="btn btn-primary red darken-1">  <i class="material-icons">delete</i></button>
                               </td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>Leonardo</td>
                            <td>Saavedra</td>
                            <td>Lema</td>
                            <td>Av.Santos Dumont calle Holanda nro 100</td>
                            <td>60974416</td>
                            <td>Activo</td>
                                                     
                            
                            <td>
                               <a class="btn btn-primary blue darken-1">  <i class="material-icons">edit</i></a>
                               <button class="btn btn-primary red darken-1">  <i class="material-icons">delete</i></button>
                            </td>
                       </tr>
                       <tr>
                        <td>3</td>
                        <td>Laura</td>
                        <td>Arias</td>
                        <td>Torrez</td>
                        <td>Av. España calle ayacucho nro 204</td>
                        <td>6887266</td>
                        <td>Activo</td>
                                                 
                        
                        <td>
                           <a class="btn btn-primary blue darken-1">  <i class="material-icons">edit</i></a>
                           <button class="btn btn-primary red darken-1">  <i class="material-icons">delete</i></button>
                        </td>
                   </tr>
                              
                            </tbody>
                    </table>
                  </div>
                </div>
    


</div>
    </form>
  </div>    

        
    
@endsection
