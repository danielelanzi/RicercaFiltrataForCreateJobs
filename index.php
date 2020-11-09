<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Info -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<meta name="description" content="Ricerca filtrata per Create-Job">
	<meta name="author" content="Lanzi Daniele, 'The Network', Bootstrap & Jquery, VSCode & MacOS, Spotify & Sonos">
	<!-- Favicon -->
	<link rel="shortcut icon" type="icon" href="favicon.ico">
	
	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Inizio Script -->
	<script type="text/javascript">
		// Chiamata Ajax
		$(document).ready(function(){

			var scegli = '<option id="0">Scegli...</option>';
			var attendere = '<option id="0">Attendere...</option>';
			
			$("select#job").html(scegli);
			$("select#job").attr("disabled", "disabled");
			
			
			$("select#job_sector").change(function(){
				var job_sector = $("select#job_sector option:selected").attr('id');
				$("select#job").html(attendere);
				$("select#job").attr("disabled", "disabled");
				
				$.get("select_print.php", {id_job_sector:job_sector}, function(data){
					$("select#job").removeAttr("disabled"); 
					$("select#job").html(data);	
				});
			});	
		});
	</script>
	<!-- FINE SCRIPT -->

	<!-- CSS (da inserire se si utilzza un foglio di stile esterno)-->
	<!-- <link href="#" rel="stylesheet" type="text/css" /> -->

	<!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Inzio Styles Inline -->
	<style>
		.container {
			max-width: 960px;
		}

		.bd-placeholder-img {
				font-size: 1.125rem;
				text-anchor: middle;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
			}

		@media (min-width: 768px) {
				.bd-placeholder-img-lg {
				font-size: 3.5rem;
				}
			}
    </style>
	<!-- FINE STYLES -->

	<title>Ricerca Filtrata | Create-Job </title>
</head>
	<!-- Apro php -->
		<?php
		// Includiamo il file una volta sola
			include_once 'select_print.class.php';
			$opt = new SelectPrint();
		?>
<!-- Inizio codice HTML -->
<body class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-12 order-md-1">
		  <h4 class="mt-3 mb-3">Ricerca Candidato</h4>
		  <!-- Form By Bootstrap adapted & revisited -->
          <form action="?" id="myform" method="post" class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-12 mb-3">
                <label for="firstName">Nome</label>
                <input type="text" name="name" class="form-control" placeholder="inserisci il tuo nome" id="name">
              </div>
              <div class="col-md-12 mb-3">
                <label for="age">Et&agrave;</label>
                <select name="age" class="custom-select d-block w-100" id="age">
					<!-- Ho preferito effettuare una ricerca di età in base ai dati sul database -->
					<?php echo $opt->ShowAge(); ?>
                </select>
              </div>
              <div class="col-md-12 mb-3">
                <label for="provincia">Provincia</label>
                <select name="nome_provincia" class="custom-select d-block w-100" id="nome_provincia">
					<?php echo $opt->ShowProvince(); ?>
                </select>
              </div>
              <div class="col-md-12 mb-3">
                <label for="job_sector">Settore Lavoro</label>
                <select name="job_sector" class="custom-select d-block w-100" id="job_sector">
					<?php echo $opt->ShowJobSector(); ?>
                </select>
              </div>
              <div class="col-md-12 mb-3">
                <label for="job">Posizione Lavorativa</label>
                <select name="job" class="custom-select d-block w-100" id="job">
					<option>Scegli...</option>
                </select>
              </div>
            </div>
            <hr class="mb-4">
			<button class="btn btn-primary btn-lg btn-block" type="submit" value="cerca">Cerca</button>
          </form>
		  <div id="stampa">
		  <?php
			// echo $opt->PrintSearchUsers();
			echo $opt->PrintSearch();
          ?>
		  </div>
        </div>
      </div>
      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2020 Daniele Lanzi</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
	</div>
	<!-- Script Bootstrap -->
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="global.js"></script>
</body>
</html>