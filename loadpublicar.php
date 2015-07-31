<?php
		session_start();
		if (isset($_SESSION['usr'])){
			echo '<div class="widget footer-widgets message-widget">
								<h4>Publica un Aviso</h4>
								<form action = "aviso.php" method="post" enctype="multipart/form-data" id="footer-contact" class="contact-work-form">
									<input name = "nombre" type = "text" placeholder="Nombre" required/>
									<input name = "email" type = "text" placeholder="Email" required/>
									<textarea name="aviso" type="text" placeholder="¡Escribe tu aviso aquí!" required></textarea>
									<button type="submit">
										<i class="fa fa-envelope"></i> Enviar Aviso
									</button>
									<div class="msg"></div>
									<div class="msg"></div>
									<div class="msg"></div>
									<div class="msg"></div>
									
								</form>
							</div>';

		}	
	
?>