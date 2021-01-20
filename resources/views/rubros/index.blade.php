@extends('layouts.plantillabase');

@section('contenido')
  
<div class="row">
  <form class="col s12">
  <div class="row card-panel">
     <div class="col s12 center"> <h4>Gestionar Rubro</h4></div>
     
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
               
                  <div class="col s12"><h5> Listado de Rubros</h5></div>
                  <div class="col s12">
                    <table class="responsive-table centered highlight">
                        <thead>
                            <tr>
                              <th>Codigo</th>
                              <th>Descripcion</th>
                              <th>Coeficiente</th>
                              <th>Vida Util</th>
                              <th>Deprecia</th>
                              <th>Actualiza</th>
                              <th>Categoria</th>
                             </tr>
                          </thead>
                      <tbody>
                          
                          <tr>
                               <td>1</td>
                               <td>Construcciones</td>
                               <td>0.2</td>
                               <td>10</td>
                               <td>500</td>
                               <td>0</td>
                               <td>Tangible</td>
                                                            
                               
                               <td>
                                  <a class="btn btn-primary blue darken-1">  <i class="material-icons">edit</i>Editar</a>
                                  <button class="btn btn-primary red darken-1">  <i class="material-icons">delete</i>Eliminar</button>
                               </td>
                          </tr>

                          <tr>
                            <td>2</td>
                            <td>Mobiliario</td>
                            <td>0.2</td>
                            <td>15</td>
                            <td>200</td>
                            <td>0</td>
                            <td>Tangible</td>
                                                         
                            
                            <td>
                               <a class="btn btn-primary blue darken-1">  <i class="material-icons">edit</i>Editar</a>
                               <button class="btn btn-primary red darken-1">  <i class="material-icons">delete</i>Eliminar</button>
                            </td>
                       </tr>
                       <tr>
                        <td>3</td>
                        <td>Equipos Informaticos</td>
                        <td>0.1</td>
                        <td>5</td>
                        <td>100</td>
                        <td>0</td>
                        <td>Tangible</td>
                                                     
                        
                        <td>
                           <a class="btn btn-primary blue darken-1">  <i class="material-icons">edit</i>Editar</a>
                           <button class="btn btn-primary red darken-1">  <i class="material-icons">delete</i>Eliminar</button>
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
