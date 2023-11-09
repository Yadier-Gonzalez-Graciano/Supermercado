<div id="addUser" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Agregar nuevo usuario</h4>
      </div>
      <div class="modal-body">
		<form name="formUser" onsubmit="register(); return false">
		  
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
		    <input id="nameComercial" type="text" class="form-control" name="nameComercial" placeholder="Nombre Comercial" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="rfc" type="text" class="form-control" name="rfc" placeholder="RFC" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
		    <input id="nameSocial" type="text" class="form-control" name="nameSocial" placeholder="Nombre social" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		    <input id="tipoProducto" type="text" class="form-control" name="tipoProducto" placeholder="Tipo Producto" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
		    <input id="direccion" type="text" class="form-control" name="direccion" placeholder="Direccion" required autocomplete="off">
		  </div>	
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
		    <input id="telefono" type="text" class="form-control" name="telefono" placeholder="Telefono" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		    <input id="correo" type="text" class="form-control" name="correo" placeholder="Correo" required autocomplete="off">
		  </div>			  
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Registrar</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
		</form>
      </div>
    </div>
  </div>
</div>


<div id="updateUser" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Actualizar informacion usuario </h4>        
      </div>
      <div class="modal-body">
		<form name="formUserUpdate" onsubmit="update(); return false">
		<input type="text" name="id" id="id" style="display: none;">
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
		    <input id="nameComercial" type="text" class="form-control" name="nameComercial" placeholder="Nombre Comercial" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="rfc" type="text" class="form-control" name="rfc" placeholder="RFC" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
		    <input id="nameSocial" type="text" class="form-control" name="nameSocial" placeholder="Nombre Social" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		    <input id="tipoProducto" type="text" class="form-control" name="tipoProducto" placeholder="Tipo Producto" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
		    <input id="direccion" type="text" class="form-control" name="direccion" placeholder="Direccion" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
		    <input id="telefono" type="text" class="form-control" name="telefono" placeholder="Telefono" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		    <input id="correo" type="text" class="form-control" name="correo" placeholder="Correo" required autocomplete="off">
		  </div>		  
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Actualizar</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
		</form>
      </div>
    </div>
  </div>
</div>