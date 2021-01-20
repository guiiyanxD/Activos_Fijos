@extends('layouts.plantillabase');

  

@section('contenido')

<div class="row">
    <div class="col s2"></div>
      <form class="col s8" action="{{route('proveedores.store')}}" method="POST">
        @csrf
    <div class="row card-panel center">
         <div class="col s12 "> <h4>Formulario de Proveedor</h4></div>
                <div class="input-field col s12">
                <input placeholder="Ingrese su nombre completo" name="nombres" type="text" value="{{old('nombres')}}" class="validate"required>
                <label for="nombres">Nombres:</label>
                </div>
                <div class="input-field col l6 s12">
                <input name="apellido_paterno" type="text" value="{{old('apellido_paterno')}}"class="validate"required>
                <label for="apellido_paterno">Apellido Paterno:</label>
                </div>
                <div class="input-field col l6 s12">
                    <input name="apellido_materno" type="text" value="{{old('apellido_materno')}}" class="validate"required>
                    <label for="apellido_materno">Apellido Materno:</label>
                </div>
                
                                    
                        <div class="input-field col l6 s12">
                          <i class="material-icons prefix">contact_phone</i>
                            <input name="movil1" type="number" value="{{old('movil1')}}" class="validate"required>
                            <label for="movil1">Movil 1:</label>
                          </div>

                          <div class="col s4"></div>
                          <div class="input-field col l6 s12">
                            <i class="material-icons prefix">contact_phone</i>
                            <input name="movil2" type="number"value="{{old('movil2')}}" class="validate" required>
                            
                            <label for="movil2">Movil 2:</label>
                           
                          </div>

                                             
                          <div class="input-field col l4 s12">
                           
                            <select name="estado" value="{{old('estado')}}" required>
                              <option value="" disabled selected>Seleccionar</option>
                              <option value="1">Activo</option>
                              <option value="2">Inactivo</option>
                             
                            </select>
                            <label>Estado:</label>
                          
                        </div>
                        <div class="col s12"></div> 
                        <div class="col l4"></div>
                        
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

