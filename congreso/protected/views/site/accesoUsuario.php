

<div id="portfolioSection">

	<div class="span6"><h1 class="cntr">Inicio de Sesión</h1>
	<br>
		
	</div>
	<div class="container"> 

	<form class="form-inline">
  <div class="control-group">
    
    <input type="email" class="form-control" id="" placeholder="Email" required>
  </div>
  <div class="control-group">
    
    <input type="password" class="form-control" id="" placeholder="Contraseña" required>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Recordar
    </label>
  </div>
  <button type="submit" class="btn btn-large btn-primary disabled">Iniciar</button>
</form>

		<div class="clr"></div>
		<a href="?r=site/index" class="btn btn-info">Regresar</a>
	</div>
</div>

<!-- array(
    array('username', 'required'),
    array('username', 'length', 'min'=>3, 'max'=>12),
    array('password', 'compare', 'compareAttribute'=>'password2', 'on'=>'register'),
    array('password', 'authenticate', 'on'=>'login'),
); -->