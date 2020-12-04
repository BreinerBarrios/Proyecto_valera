<h1 class="page-header">
    <?php echo $emp->id_empleado != null ? $emp->nombre : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=empleado">Empleado</a></li>
  <li class="active"><?php echo $emp->id_empleado != null ? $emp->apellido : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-empleado" action="?c=Empleado&a=Editar"method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_empleado" value="<?php echo $emp->id_empleado; ?>" />
    
   
     
 
<div class="row">

<div class="col-md-6">
        <div class="form-group">
          <label>Empleado</label>
          <input  type="number" name="id_empleado" value="<?php echo $emp->id_empleado; ?>" class="form-control" placeholder="Ingrese el id del vale." required data-validacion-tipo="requerido|min:20" />
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Nombre</label>
          <input  type="text" name="nombre"  class="form-control" placeholder="Ingrese el id del vale." required data-validacion-tipo="requerido|min:20" />
     </div>
      </div>
      
      <div class="col-md-6">
        <div class="form-group">
          <label>Apellido</label>
          <input  type="text" name="apellido"  class="form-control" placeholder="Ingrese el id del vale." required data-validacion-tipo="requerido|min:20" />
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Telefono</label>
          <input  type="number" name="telefono" value="<?php echo $emp->telefono; ?>" class="form-control" placeholder="Ingrese el id del vale." required data-validacion-tipo="requerido|min:20" />
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Dirección</label>
          <input  type="text" name="direccion"  class="form-control" placeholder="Ingrese el id del vale." required data-validacion-tipo="requerido|min:20" />
        </div>
      </div>

      
      <div class="col-md-6">
        <div class="form-group">
          <label>Correo_electronico</label>
          <input  type="email" name="correo_electronico"  class="form-control" placeholder="Ingrese el id del vale." required data-validacion-tipo="requerido|min:20" />
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Identificación</label>
          <input  type="number" name="identificacion" value="<?php echo $emp->identificacion; ?>" class="form-control" placeholder="Ingrese el id del vale." required data-validacion-tipo="requerido|min:20" />
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Número valera</label>
          <input  type="number" name="id_valera" value="<?php echo $emp->id_valera; ?>" class="form-control" placeholder="Ingrese el id del vale." required data-validacion-tipo="requerido|min:20" />
        </div>
      </div>

      
    <div class="col-md-6">
    <div class="form-group">
        <label>Contraseña</label>
        <input type="text" name="contrasena" value="<?php echo $emp->contrasena; ?>" class="form-control" placeholder="Ingrese la Contraseña del empleado." required data-validacion-tipo="requerido|min:10" />
    </div>
    </div>
    
    <div class="col-md-6">
    <div class="form-group">
        <label>Contraseña</label>
        <input type="text" name="contrasena" value="<?php echo $emp->contrasena; ?>" class="form-control" placeholder="Ingrese la Contraseña del empleado." required data-validacion-tipo="requerido|min:10" />
    </div>
    </div>




    

    <hr />
    <div class="text-right">
     <button class="btn btn-success">Guardar</button>
     <a href="index.php?c=empleado" class="btn btn-danger">Volver</a>
    </div>
</form>


