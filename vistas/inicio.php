
<title>Bienvenido al inicio </title>
<!-- dark -->
<ul class="nav nav-tabs bg-dark justify-content-end menu">
  <li class="nav-item">
    <button type="button" class="btn btn-raised btn-success" id="new-dream">Sueño Nuevo</button>
  </li>
</ul>
<div class="contenedor-errores">
  <ul  class="errores nav nav-tabs"></ul>
</div>
<div class="container contenedor-general">

  <div class="row">
      <div id="inventario-izq"  class="col-md-3 col-sm menu-herramientas">
        inventario-izq
      </div>
      <div id="inventario-central"  class="col-md-6 col-sm menu-herramientas">
        <form id="formulario" action="#" method="POST" enctype="multipart/form-data">
          <button type="submit" id="calcular" class="calculo btn btn-raised btn-primary ">Calcular</button>
          <div class="elemento">
        		<h4>Monto Alquiler<br>
        		<input type="number" name="alquiler" id="alquiler" required>
        	</div>
        	<div class="elemento">
        		<h4>Monto bonificacion<br>
        		<input type="number" name="bonificacion" id="bonificacion" required>
        	</div>
        	<div class="elemento">
        		<h4>Monto impuestos<br>
        		<input type="number" name="impuestos" id="impuestos" required>
        	</div>
        	<div class="elemento">
        		<h4>Monto comision inmobiliaria<br>
        		<input type="number" name="comision" id="comision" required>
        	</div>
        	<div class="elemento">
        		<h4>Monto gas<br>
        		<input type="number" name="gas" id="gas" required>
        	</div>
        	<div class="elemento">
        		<h4>Monto internet<br>
        		<input type="number" name="internet" id="internet" required>
        	</div>
        	<div class="elemento">
        		<h4>Monto luz<br>
        		<input type="number" name="luz" id="luz" required>
        	</div>
        </form>
      </div>
      <div id="inventario-der"  class="col-md-3 col-sm menu-herramientas">
        inventario-der
      </div>
      <div class="boton-flotante">
        <i class="material-icons">add</i>
      </div>
    </div>
</div>
