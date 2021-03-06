 
@extends('layouts.plantillabase');

  

@section('contenido')
  
<div class="row">
  <div class="col s2"></div>
    <form class="col s8" action="{{route('rubros.update',$rubro)}}" method="POST">
     @csrf
     @method('put')
  <div class="row card-panel center">
       <div class="col s12 "> <h4>Registro de Rubro</h4></div>
              <div class="input-field col s12">
                <input disabled name="codigo" type="text" value="{{$rubro->id_rubro}}"class="validate"required>
                <label for="codigo">Codigo de Rubro:</label>
   
              <div class="input-field col s12">
              <input disabled name="nombre" type="text" value="{{$rubro->nombre}}" class="validate"required>
              <label for="nombre">Nombre del Rubro:</label>
              
              </div>
              <div class="input-field col s12">
                <input name="descripcion" type="text" value="{{$rubro->descripcion}}"class="validate"required>
                <label for="descripcion">Descripcion:</label>
                
                </div>
              <div class="input-field col l6 s12">
              <input name="coeficiente" type="number" value="{{$rubro->coeficiente}}" class="validate"required>
              <label for="coeficiente">Coeficiente de Depreciacion:</label>
             
              </div>
              <div class="input-field col l6 s12">
                  <input name="vida" type="number" value="{{$rubro->vida_util}}"class="validate"required>
                  <label for="vida">Vida Util:</label>
                 
              </div>
              
               <div class="input-field col l6 s12">
                  <input name="depreciacion" type="number" value="{{$rubro->depreciar}}" class="validate"required>
                  <label for="depreciacion">Depreciacion:</label>
                 
                </div>
                <div class="input-field col l6 s12">
                  <input name="actualizacion" type="number" value="{{$rubro->actualiza}}" class="validate"required>
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