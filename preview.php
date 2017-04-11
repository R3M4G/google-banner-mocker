<?php

$logo = 'company-logo.png';
if ( isset($_GET['logo']) )
$logo = $_GET['logo'];

class Banner {
    var $id = 1;
    var $heading;
    var $text1;
    var $text2;
    var $img_width;
    var $img_height;
    function __construct()
    {
        $this->heading = "";
        $this->text1 = "Nemo enim ipsam volup tatem quia voluptas";
        $this->text2 = "Quis autem vel eum iure reprehe";
        $this->buttonText = "Se ejendommen";
    }

}
$contentBannerSetup = new Banner();
$customerAssets = "assets";
$_filename = "xxx.jpg";

$bannerTypes = array("skyscraper", "wide-skyscraper", "half-page",
                      "vertical-rectangle", "small-square", "portrait", "mobile-leaderboard",
                      "banner", "square", "large-rectangle", "inline-rectangle", "large-leaderboard", "leaderboard", "billboard", "large-mobile", "netboard"
                  );



?>
<html>
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/assets/js/lib/jquery.boxfit.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/screen.css">

    <script>
    $(document).ready(function(){
        //$('.title-area h1').boxfit({ multiline: true, maximum_font_size: 24 });
        $('.wrapper > div').on('click', function(e){
            window.alert('Width: '+$(this).width()+' Height: '+$(this).height());
        })
    })
    </script>
</head>

<body>
    <?php foreach($bannerTypes as $banner) { ?>
    <?php echo "<!--" . $banner. "-->";?>
    <div class="vertical wrapper business" contentAdSetupHasContentBannerSetupId="<?=$contentBannerSetup->id;?>">
        <?php
        echo "<p>$banner</p>";
        ?>
        <div id="<?=$banner;?>">
            <div class="title-area">
                <div class="table">
                    <h1 class="table-cell"><?=$contentBannerSetup->text1;?></h1>
                </div>
            </div>
            <div class="banner-image">
                <!-- <img src="<?=$_filename;?>" style="width: <?=$contentBannerSetup->img_width;?>px; height: <?=$contentBannerSetup->img_height;?>px;" /> -->
            </div>
            <div class="subtitle-container">
                <h3><?=$contentBannerSetup->text2;?></h3>
            </div>
            <div class="logo-area">
                <div class="inner absolute">
                    <div class="table">
                        <div class="table-cell">
                            <img class="company-logo" src="<?=$customerAssets;?>/img/<?=$logo;?>" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-button">
                <p><?=$contentBannerSetup->buttonText;?></p>
            </div>
        </div>
    </div>
    <?php } ?>

</body>
</html>
