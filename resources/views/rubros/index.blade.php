@extends('layouts.plantillabase');

@section('contenido')
  
<div class="row">
  <form class="col s12">
  <div class="row card-panel">
     <div class="col s12 center"> <h4>Gestionar Rubro</h4></div>
     
                <div class="row">
                  <div class="col s12"><br></div>
                         
                  <div class="col s12 green lighten-4 center" >
                    @if (session('info'))
                    <span>¡{{session('info')}}!</span>
                     
                      @endif
                  </div>
                  <div class="col s12"><br></div>
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
                              <th>Nombre</th>
                              <th>Descripcion</th>
                              <th>Coeficiente</th>
                              <th>Vida Util</th>
                              <th>Deprecia</th>
                              <th>Actualiza</th>
                              
                             </tr>
                          </thead>
                      <tbody>
                          
                          

                                              <tr>
                        <td>3</td>
                        <td>Equipos Informaticos</td>
                        <td>3</td>
                        <td>1</td>
                        <td>5</td>
                        <td>100</td>
                        <td>0</td>
                     
                                                     
                        
                        <td>
                           <a class="btn btn-primary blue darken-1">  <i class="material-icons">edit</i></a>
                           <button class="btn btn-primary red darken-1" onclick="return confirm('¿Esta seguro que desea Eliminar el Registro?')">  <i class="material-icons">delete</i></button>
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


