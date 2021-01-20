@extends('layouts.plantillabase');

  

@section('contenido')
  
<div class="row">
    <div class="col s2"></div>
      <form class="col s8" action="{{route('rubros.store')}}" method="POST">
       @csrf
    <div class="row card-panel center">
         <div class="col s12 "> <h4>Registro de Rubro</h4></div>
     
                <div class="input-field col s12">
                <input placeholder="Ingrese el nombre del Rubro" name="nombre" type="text" value="{{old('nombre')}}"class="validate"required>
                <label for="nombre">Nombre del Rubro:</label>
                
                </div>
                <div class="input-field col s12">
                  <input name="descripcion" type="text" value="{{old('descripcion')}}"class="validate"required>
                  <label for="descripcion">Descripcion:</label>
                  
                  </div>
                <div class="input-field col l6 s12">
                <input name="coeficiente" type="number" value="{{old('coeficiente')}}"class="validate"required>
                <label for="coeficiente">Coeficiente de Depreciacion:</label>
               
                </div>
                <div class="input-field col l6 s12">
                    <input name="vida" type="number" value="{{old('vida')}}"class="validate"required>
                    <label for="vida">Vida Util:</label>
                   
                </div>
                
                 <div class="input-field col l6 s12">
                    <input name="depreciacion" type="number" value="{{old('depreciacion')}}" class="validate"required>
                    <label for="depreciacion">Depreciacion:</label>
                   
                  </div>
                  <div class="input-field col l6 s12">
                    <input name="actualizacion" type="number" value="{{old('actualizacion')}}" class="validate"required>
                    <label for="actualizacion">Actualizacion:</label>
                   
                  </div>
                        
                        
                      <div class="col s12"></div>
                      <div class="col s4"></div>
                        <div class="col  l4 s12 center">
                          <a class="btn waves-effect waves-light red darken-1">Cancelar<i class="material-icons">cancel</i></a>
                        </div>
                        <div class="col l4 s12 center">
                            <button class="btn waves-effect waves-light " type="submit" name="action">Guardar Datos
                              <i class="material-icons">save</i>
                            </button>
                          </div>

                    
      
        
      </div>
    </form>
</div>

        
    
@endsection

