<?php 
		
		if ( (isset($_POST["civ"])) && (isset($_POST["nom_"])) && (isset($_POST["mail"])) && (isset($_POST["to"])) && (isset($_POST["subject"])) && (isset($_POST["message"])) ){
	
			$from="Envoyé par ".$_POST["civ"]." ".$_POST["nom_"];
			$subject=$_POST["subject"];
			$message=$_POST["message"];
			$message = wordwrap($message, 70);
			
			if( $_POST["to"]=="Chef des travaux" ){
				$to="na@chefdestravaux.com";
			}
			elseif( $_POST["to"]=="Secretariat chef des travaux" ){
				$to="na@secretariatct.com";
			}
			elseif( $_POST["to"]=="Responsable section SIO"){
				$to="na@resp.com";
			}
			
			mail($to,$subject,$message,$from."\n");
			
			echo '<div id="confirm" class="alert alert-success">Your message was successfully send</div>';
			
		}
	?>