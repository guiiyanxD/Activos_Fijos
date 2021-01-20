
@extends('layouts.plantillabase');

  

@section('contenido')
  
<div class="row">
    <div class="col s2"></div>
      <form class="col s8">
    <div class="row card-panel center">
         <div class="col s12 "> <h4>Formulario de Proveedor</h4></div>
                <div class="input-field col s12">
                <input id disabled="id" type="text" class="validate"required>
                <label for="id">Codigo:</label>
                </div>
                <div class="input-field col s12">
                <input placeholder="Ingrese su nombre completo" id="nombres" type="text" class="validate"required>
                <label for="nombres">Nombres:</label>
                </div>
                <div class="input-field col s12">
                <input id="apellido_paterno" type="text" class="validate"required>
                <label for="apellido_paterno">Apellido Paterno:</label>
                </div>
                <div class="input-field col s12">
                    <input id="apellido_materno" type="text" class="validate"required>
                    <label for="apellido_materno">Apellido Materno:</label>
                </div>
                
                 <div class="input-field col s12">
                    <input id="direccion" type="text" class="validate"required>
                    <label for="direccion">Direccion:</label>
                  </div>
                        <div class="input-field col l4 s12">
                           
                            <select>
                              <option value="" disabled selected>Seleccionar</option>
                              <option value="1">Activo</option>
                              <option value="2">Inactivo</option>
                             
                            </select>
                            <label>Estado:</label>
                          
                        </div>
                        <div class="input-field col l6 s12">
                            <input id="movil" type="text" class="validate"required>
                            <label for="movil">Movil:</label>
                          </div>
                          <div class="col s4"></div>
                      
                      
                        <div class="col  l4 s12 center">
                          <a class="btn waves-effect waves-light red darken-1">Cancelar<i class="material-icons">cancel</i></a>
                        </div>
                        <div class="col  l4 s12 center">
                            <button class="btn waves-effect waves-light " type="submit" name="action">Guardar Datos
                              <i class="material-icons">save</i>
                            </button>
                          </div>

                    
      
        
      </div>
    </form>
</div>

        
    
@endsection




