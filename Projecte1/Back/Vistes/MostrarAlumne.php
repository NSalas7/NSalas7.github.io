<?php include_once "Capçalera.php"; ?>

<p>
  <br>
</p>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gestio Excursions</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- css -->
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css"/>

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"/>

  <link rel="stylesheet" href="https://cdn.datatables.net/select/1.2.7/css/select.bootstrap4.min.css"/>

  <!-- js -->

  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

  <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
<!-- Logo del nom de la pagina -->
  <link rel="icon" type="image/png" href="IMG/logo1_negre.png">
</head>
<body>
 
<div class="container">

	<div class="row">
		<div class="col">
			<table id="taula" class="table table-striped table-bordered">
			    <thead>
			        <tr>
			            <th>Id</th>
			            <th>Nom</th>
			            <th>Primer Llinatge</th>
			            <th>Segon Llinatge</th>
			            <th>Correu</th>
			            <th>Contrasenya</th>
			        </tr>
			    </thead>
			</table>
		</div>
	</div>
	<br>
</div>

<script>
	
	$(document).ready(function() {
	    var t = $('#taula').DataTable( {
	    	ajax: {
		    	 url: '../../API/Controladors/Alumne/veureAlumne.php',
		    	 dataSrc: '',
		    	 type:"POST",
		    	 },
	    	 /*columns:  [
				 { data: 'id' },
				 { data:'nom' },
				 { data:'duracio' },
				 { data:'public' },
				 { data:'bus' }
				],*/
			language: {
                url: "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
            },
		    select: true
		});
	});

</script>

<p>
  <br>
</p>
</body>
</html>