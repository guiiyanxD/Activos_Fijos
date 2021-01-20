
@extends('layouts.plantillabase');

  

@section('contenido')
<div class="row">
  <div class="col s2"></div>
    <form class="col s8" action="{{route('proveedores.update',$proveedore)}}" method="POST">
      @csrf
      @method('put')
      <div class="row card-panel center">
        <div class="col s12 "> <h4>Formulario de Proveedor</h4></div>
              <div class="input-field col s12">
                <input disabled name="codigo" type="text" value="{{$proveedore->id_proveedor}}" class="validate"required>
                <label for="codigo">Codigo:</label>
                </div>
               <div class="input-field col s12">
               <input disabled name="nombres" type="text" value="{{$proveedore->nombre}}"  class="validate"required>
               <label for="nombres">Nombre de Empresa:</label>
               </div>
               <div class="input-field col l6 s12">
                 <i class="material-icons prefix">edit_location</i>
               <input name="direccion" type="text" value="" class="validate"required>
             
               <label for="direccion">Direccion:</label>
               </div>
               <div class="input-field col l6 s12">
                 <i class="material-icons prefix">phone_iphone</i>
                   <input name="movil" type="number" value="" class="validate"required>
                  
                   <label for="movil">Movil:</label>
               </div>
               
                                   
                       <div class="input-field col l6 s12">
                         <i class="material-icons prefix">phone</i>
                           <input name="telefono" type="number" value="" class="validate"required>
                           
                           <label for="telefono">Telefono:</label>
                         </div>

                         <div class="col s4"></div>
                         <div class="input-field col l6 s12">
                           <i class="material-icons prefix">email</i>
                           <input name="email" type="email"value="" class="validate" required>
                           <label for="email">e-mail:</label>
                          
                         </div>

                                            
                         <div class="input-field col l4 s12">
                          
                           <select name="estado" value="{{$proveedore->estado_id}}" required>
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
