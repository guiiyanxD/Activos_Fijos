 
@extends('layouts.plantillabase');
@section('contenido')
  
<div class="row">
    <div class="col s2"></div>
      <form class="col s8" action="{{route('rubros.update',$rubro)}}" method="POST">
        @csrf

    <div class="row card-panel center">
         <div class="col s12 "> <h4>Registro de Rubro</h4></div>
                <div class="input-field col l6 s12">
                <input  disabled name="codigo" type="text" value="{{old('codigo',$rubro->codigo)}}">
                <label for="codigo">Codigo:</label>
                
                </div>
                <div class="input-field col s12">
                <input placeholder disabled="Ingrese el nombre del Rubro" name="nombre" type="text" value="{{old('nombre',$rubro->nombre)}}">
                <label for="nombre">Nombre del Rubro:</label>
                </div>
                <div class="input-field col l6 s12">
                <input name="coeficiente" type="text" value="{{old('coeficiente',$rubro->coeficiente)}}">
                <label for="coeficiente">Coeficiente de Depreciacion:</label>
                @error('coeficiente')
                <br>
                <small>*{{$message}}</small>
                <br>
                @enderror
                </div>
                <div class="input-field col l6 s12">
                    <input name="vida" type="text" value="{{old('vida',$rubro->vida)}}">
                    <label for="vida">Vida Util:</label>
                    @error('vida')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                    @enderror
                </div>
                
                 <div class="input-field col l6 s12">
                    <input name="depreciacion" type="text" value="{{old('depreciacion',$rubro->depreciacion)}}">
                    <label for="depreciacion">Depreciacion:</label>
                    @error('depreciacion')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                    @enderror
                  </div>
                  <div class="input-field col l6 s12">
                    <input name="actualizacion" type="text" value="{{old('actualizacion',$rubro->actualizacion)}}">
                    <label for="actualizacion">Actualizacion:</label>
                    @error('actualizacion')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                    @enderror
                  </div>
                        <div class="input-field col l6 s12">
                           
                            <select>
                              <option value="" disabled selected>Seleccionar</option>
                              <option value="1">Categoria 1</option>
                              <option value="2">Categoria 2</option>
                             
                            </select>
                            <label>Categoria:</label>
                          
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