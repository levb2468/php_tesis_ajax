 <div class="page-header">
              <h1>Forms <small>General forms elements</small></h1>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="pull-right">
          <a href="<?php echo base_url($controller.'/load_list')?>" class="btn btn-info btn-sm">
              <span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>
            </a>
        </div>
              </div>
            </div>
    
            <div class="row">
              <div class="col-md-12">
                  <div class="panel panel-default">
                        <div class="panel-heading">Actualizacion del Cliente</div>
                        <div class="panel-body">
                        	<form action="<?php echo base_url($controller.'/action_update')?>" method="POST" role="form">
		   		<legend>Datos del Cliente | <?php echo $controller?></legend>

		   		<div class="form-group">
		   			<label for="">Nombre</label>
		   			<input type="hidden" value="<?php echo $item->id ?>" class="form-control" id="cliente_id" name="cliente_id">
		   			<input type="text" value="<?php echo $item->name ?>" class="form-control" id="name" name="name" placeholder="Nombre">
		   		</div>
		   		<div class="form-group">
		   			<label for="">Apellido</label>
		   			<input type="text" value="<?php echo $item->last_name ?>" class="form-control" id="last_name" name="last_name" placeholder="Apellidos">
		   		</div>
		   		
		   		<div class="form-group">
		   			<label for="">Sexo</label>
		   			<select name="sex" id="sex" class="form-control">
		   			
<option value="">--SELECCIONE--</option>
<option value="M" <?php echo ($item->sex=='M')?'selected':'' ?>>MASCULINO</option>
<option value="F" <?php echo ($item->sex=='F')?'selected':'' ?>>FEMENINO</option>
</select>
		   	    </div>
		   	    <div class="form-group">
		   			<label for="">Dni</label>
		   			<input type="text" value="<?php echo $item->dni ?>" class="form-control" id="dni" name="dni" placeholder="Dni" maxlength="8">
		   		</div>
		   	    <div class="form-group">
		   			<label for="">Direccion</label>
		   			<input type="text" value="<?php echo $item->address ?>" class="form-control" id="address" name="address" placeholder="Direccion">
		   		</div>

		   		<div class="form-group">
		   			<label for="">Distrito</label>
		   			<select name="district_id" id="district_id" class="form-control">
		   				<option value="">--SELECCIONE--</option>
		   				<option value="1" <?php echo ($item->district_id==1)?'selected':'' ?> >ATE</option>
		   				<option value="2" <?php echo ($item->district_id==2)?'selected':'' ?> >EL AGUSTINO</option>

		   			</select>
		   		</div>
		   		
		   	
		   		
		   	
		   		<button type="submit" class="btn btn-primary btn-update"><span class="glyphicon glyphicon-send" aria-hidden="true"> GUARDAR</span></button>
		   		<a href="<?php echo base_url($controller.'/load_list')?>" class="btn btn-warning">
   					<span class="glyphicon glyphicon-repeat" aria-hidden="true"> CANCELAR</span>
   				</a>
		   	</form>
          



                        
                        </div>
                    </div>
                </div>
            </div>

