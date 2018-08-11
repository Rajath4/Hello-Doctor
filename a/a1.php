 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
	  
				 <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>

				  <!-- Modal Structure -->
				  <div id="modal1" class="modal modal-fixed-footer">
					<div class="modal-content">
					  <h4>Modal Header</h4>
					  <p>A bunch of text</p>
					</div>
					<div class="modal-footer">
					  <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
					</div>
				  </div>
      
				
  <!-- script to open modal -->
<script>
    $(document).ready(function(){
        $('.modal').modal();
        $('#modal1').modal('open');

    });
</script>
	
	  
    </body>
  </html>