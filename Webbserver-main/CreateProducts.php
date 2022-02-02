<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>lägg till produkt</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<nav>
        <ul>
          <li><a href="products.html">Start</a></li>
        </ul>
</nav>
  <div class="header">
  	<h2>Lägg till produkt</h2>
  </div>
	
  <form method="post" action="CreateProducts.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Vara</label>
  	  <input type="text" name="Vara" value="<?php echo $Vara; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Beskrivning</label>
  	  <input type="Beskrivning" name="Beskrivning" value="<?php echo $Beskrivning; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Pris</label>
  	  <input type="Pris" name="pris">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="produkt">lägg till produkt</button>
  	</div>
  </form>
</body>
</html>