@extends('layouts.plantillabase');

  

@section('contenido')

<div class="row">
    <div class="col s2"></div>
      <form class="col s8" action="{{route('proveedores.store')}}" method="POST">
        @csrf
    <div class="row card-panel center">
         <div class="col s12 "> <h4>Formulario de Proveedor</h4></div>
                <div class="input-field col s12">
                <input name="nombres" type="text" value="{{old('nombres')}}" class="validate"required>
                <label for="nombres">Nombre de Empresa:</label>
                </div>
                <div class="input-field col l6 s12">
                  <i class="material-icons prefix">edit_location</i>
                <input name="direccion" type="text" value="{{old('direccion')}}"class="validate"required>
              
                <label for="direccion">Direccion:</label>
                </div>
                <div class="input-field col l6 s12">
                  <i class="material-icons prefix">phone_iphone</i>
                    <input name="movil" type="number" value="{{old('movil')}}" class="validate"required>
                   
                    <label for="movil">Movil:</label>
                </div>
                
                                    
                        <div class="input-field col l6 s12">
                          <i class="material-icons prefix">phone</i>
                            <input name="telefono" type="number" value="{{old('telefono')}}" class="validate"required>
                            
                            <label for="telefono">Telefono:</label>
                          </div>

                          <div class="col s4"></div>
                          <div class="input-field col l6 s12">
                            <i class="material-icons prefix">email</i>
                            <input name="email" type="email"value="{{old('email')}}" class="validate" required>
                            <label for="email">e-mail:</label>
                           
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

