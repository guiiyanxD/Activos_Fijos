
@section('contenido')
  
<div class="row">
      <form class="col s12">
    <div class="row card-panel">
         <div class="col s12 center"> <h4>Formulario de Usuario</h4></div>
                <div class="input-field col l4 s12">
                <input placeholder="Ingrese su nombre completo" id="nombres" type="text" class="validate"required>
                <label for="nombres">Nombres:</label>
                </div>
                <div class="input-field col l4 s12">
                <input id="apellido_paterno" type="text" class="validate"required>
                <label for="apellido_paterno">Apellido Paterno:</label>
                </div>
                <div class="input-field col l4 s12">
                    <input id="apellido_materno" type="text" class="validate"required>
                    <label for="apellido_materno">Apellido Materno:</label>
                </div>
                <div class="input-field col l4 s12">
                    <input disabled id ="codigo" type="text" class="validate"required>
                    <label for="codigo">Codigo:</label>
                  </div>
                  <div class="input-field col l4 s12">
                    <input id="correo" type="text" class="validate"required>
                    <label for="correo">Correo Electronico:</label>
                  </div>
                  <div class="input-field col l4 s12">
                      <input id="password" type="text" class="validate"required>
                      <label for="password">Password:</label>
                    </div>
                          <div class="input-field col l4 s12">
                            <input id="celular" type="text" class="validate"required>
                            <label for="celular">Contacto:</label>
                          </div>
                          <div class="input-field col l4 s12">
                           
                            <select>
                              <option value="" disabled selected>Seleccionar</option>
                              <option value="1">Activado</option>
                              <option value="2">Inactivo</option>
                             
                            </select>
                            <label>Estado:</label>
                          
                        </div>
                        <div class="input-field col l4 s12">
                           
                                <select>
                                  <option value="" disabled selected>Asignar Rol</option>
                                  <option value="1">Administrador</option>
                                  <option value="2">Tecnico</option>
                                  <option value="3">Cliente</option>
                                </select>
                                <label>Rol:</label>
                              
                            </div>
                        <div class="col l6 s12 right">
                          <button class="btn waves-effect waves-light " type="submit" name="action">Guardar Datos
                            <i class="material-icons">save</i>
                          </button>
                        </div>
                        <div class="col l6 s12 left">
                          <a class="btn disabled">Cancelar<i class="material-icons">cancel</i></a>
                        </div>

                    
      
        
      </div>
    </form>
</div>

        
    
@endsection



