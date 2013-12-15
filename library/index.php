<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">


    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap-responsive.css">
    <!-- jQueryの読み込み -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Google Tag Manager -->
        <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MXLPBM"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MXLPBM');</script>
    <!-- End Google Tag Manager -->

    <meta name="title" content="イタリアン　NE'Co" />
    <meta name="robots" content="index, follow" />
    <meta name="description" content="早稲田にあるイタリアンレストラン、NE'Co" />
    <meta name="keywords" content="イタリアン 猫 パスタ" />
    <meta name="language" content="ja" />
    <title>イタリアン　NE'Co</title>

    <!-- <meta property="og:title" content="イタリアン　NE'Co
    " />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://neco-w.com/" />
    <meta property="og:image" content="images/test.png" />
 -->
    <meta name="og:site_name" content="MapsTD" />
    <meta name="og:url" content="http://neco-w.com/" />
    <meta name="og:image" content="http://neco-w.com/images/img_42.png"/>
    <meta name="og:type" content="website" />
    <meta name="og:title" content="イタリアン　NE'Co" />
    <meta name="og:description" content="早稲田にあるイタリアンレストラン、NE'Co"/>

    <link rel="shortcut icon" href="" />
</head>

<style>
body{
    background: #ccc;

}
div.fb-like-box,
div.fb-like-box iframe[style],
div.fb-like-box span {
    width: 100% !important;
}

</style>
<?php
    //モバイル判定のライブラリを読み込む
    require_once 'library/Mobile_Detect.php';

    $detect = new Mobile_Detect();
    // var_dump($detect->isMobile());
    // $ua=$_SERVER['HTTP_USER_AGENT'];
    // if((strpos($ua,'iPhone')!==false)||(strpos($ua,'iPod')!==false)||(strpos($ua,'Android')!==false))
    // {
    //     var_dump('モバイルー');

    // }
    // else
    // {
    //     var_dump('pc');
    // }

?>



<body style="background-image: url(images/bg_01.png);">
    <div class="container">

        <!-- ヘッダー -->
        <!-- モバイルの場合 -->
        <?php if($detect->isMobile()): ?>
            <div id="header" style="height:175px;margin-top: 20px">
                <div style="text-align: center;">
                    <a href="/"><img width='40%' src="images/rogo_03.png" ></a>
                </div>
                <br>
                <div >
                    <div style='float: left;width: 25%'><a href="/"><img src="images/img_07.png"></a></div>
                    <div style='float: left;width: 25%'><a href="/"><img src="images/img_09.png"></a></div>
                    <div style='float: left;width: 25%'><a href="/"><img src="images/img_11.png"></a></div>
                    <div style='float: left;width: 25%'><a href="/"><img src="images/img_13.png"></a></div>
                </div>
                <br><br>
                <div style="text-align: center;">
                    <!-- <div style='float: left;'> -->
                        <a href="https://www.facebook.com/pages/%E3%82%A4%E3%82%BF%E3%83%AA%E3%82%A2%E3%83%B3NECo/556483371053588" target="_blank">
                            <img width='' src="images/img_15.png" >
                        </a>
                        <a href="https://twitter.com/neco_waseda" target="_blank"><img width='' src="images/img_17.png"></a>
                        <a href="mailto:info@neco-w.com"><img width='' src="images/img_19.png"></a>

                    <!-- </div> -->
                    <!-- <div style='float: left;'>
                        <a href="https://twitter.com/neco_waseda" target="_blank"><img width='' src="images/img_17.png"></a>
                    </div>
                    <div style='float: left;'><a href="mailto:info@neco-w.com"><img width='' src="images/img_19.png"></a></div> -->
                </div>
            </div>
        <?php else: ?>
            <div id="header" style="height:105px;background-image: url(images/rogo.png);background-size:100% 100%;margin-top:20px">
                <br><br>
                <div style="width: 55%;margin-left: 20%;float: left">
                    <div style='float: left;width: 25%'><a href="/index.php"><img src="images/img_07.png"></a></div>
                    <div style='float: left;width: 25%'><a href="/menu.php"><img src="images/img_09.png"></a></div>
                    <div style='float: left;width: 25%'><a href="/party.php"><img src="images/img_11.png"></a></div>
                    <div style='float: left;width: 25%'><a href="/contact.php"><img src="images/img_13.png"></a></div>
                </div>
                <div style="width: 15%;margin-left: 2%;block: inline;float: left">
                    <a href="https://www.facebook.com/pages/%E3%82%A4%E3%82%BF%E3%83%AA%E3%82%A2%E3%83%B3NECo/556483371053588" target="_blank" width='30%'>
                        <img width='' src="images/img_15.png" >
                    </a>
                    &nbsp;
                    <a href="https://twitter.com/neco_waseda" target="_blank" width='30%'>
                        <img width='' src="images/img_17.png">
                    </a>
                    &nbsp;
                    <a href="mailto:info@neco-w.com" width='30%'>
                        <img  src="images/img_19.png">
                    </a>
                </div>
            </div>

        <?php endif; ?>

        <!--　コンテンツ -->
        <!-- モバイルの場合 -->
        <?php if($detect->isMobile()): ?>
            <div>
                <div>
                    <br>
                    <!-- about -->
                    <img src="images/img_25.png" width="375px" style="">

                </div>
                <div>
                    <br>
                    <!--ご飯の画像 -->
                    <img src="images/img_23.png" width="385px" height="280px">
                </div>
                <br>
                <div style="background-color: rgba(252,255,207,0.55);height:190px;padding-left: 20px;">
                    <br>
                    <img src="images/news_28.png" style="">
                    <br><br>
                    <p style="font-size: 0.8rem;">
                        2013.10.1   HPリニューアル<br>
                        2013.10.2   OPEN<br>
                    <p>
                </div>
            </div>

        <!-- PCの場合 -->
        <?php else: ?>
            <div class="row-fluid">
                <div class="span6 text-center" style="height:400px;">
                    <br>
                    <!--ご飯の画像 -->
                    <img src="images/img_23.png" width="500px" height="520px">
                </div>

                <div class="span6">
                    <div class="row-fluid">

                        <div style="height:150px">
                            <br>
                            <!-- about -->
                            <img src="images/img_25.png" width="375px" style="">

                        </div>
                        <br><br>
                        <div style="background-color: rgba(252,255,207,0.55);height:154px;padding-left: 20px;">
                            <br>
                            <img src="images/news_28.png" style="">
                            <br><br>
                            <p style="font-size: 0.8rem;">
                            	2013.10.14  グランドオープン<br>
                            	2013.10.10  HPリニューアル<br>
                                2013.10.7   ランチ営業開始<br>
                            <p>
                        </div>

                    </div>
                </div>
            </div>
        <?php endif; ?>

        <!--3段目 -->
        <!-- モバイルの場合 -->
        <?php if($detect->isMobile()): ?>
            <br>
            <div>
                <!-- イタリアンNE'CO　-->
                <div class="" style="float: left;width: 45%;">
                    <img src="images/img_32.png" width="165px" style="">

                    <p style="font-size: 1.0rem;padding: 10px">
                        電話: 03-6273-9207
                    </p>
                    <img src="images/img_42.png" width="159px" style="">
                    <p style="font-size: 1.0rem;padding: 10px 0 0 10px">
                        169-0051 <br>
                        東京都新宿区西早稲田1-17-5<br>
                        ランチ    :   11:30〜15:00＊<br>
                        ディナー  :   17:30〜23:00＊<br>
                    </p>
                    <p style="font-size: 10px; font-size: 0.6rem;padding:0 0 0 10px">
                        ＊ラストオーダーは30分前になります
                    </p>
                    <p style="font-size: 10px; font-size: 0.6rem;padding:0 0 0 10px">
                        定休日    :   日曜
                    </p>
                </div>

                <!-- 地図 -->
                <div class="" style="float: left;width: 45%;margin-left: 5%">
                    <div>
                        <img src="images/img_34.png" width="165px" style="">
                    </div>
                    <br>
                    <div>
                        <img src="images/img_39.png" width="215px" height="368px" style="">
                    </div>
                </div>
            </div>
            <!--　ソーシャルプラグイン -->
            <div>
                <img src="images/img_30.png" width="165px"style="">
                <br><br>
                <div style="background-color: white;">
                    <div class="fb-like-box" data-href="https://www.facebook.com/pages/%E3%82%A4%E3%82%BF%E3%83%AA%E3%82%A2%E3%83%B3NECo/556483371053588" data-width="330" data-height="The pixel height of the plugin" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>
                <div>
            </div>

            <br>

        <?php else: ?>
            <div class="row-fluid">

                <!-- イタリアンNE'CO　-->
                <div class="span4" style="">
                    <img src="images/img_32.png" width="165px" style="">

                    <p style="font-size: 1.0rem;padding: 10px">
                        電話: 03-6273-9207
                    </p>
                    <img src="images/img_42.png" width="159px" style="">
                    <p style="font-size: 1.0rem;padding: 10px 0 0 10px;margin:0;">
                        169-0051 <br>
                        東京都新宿区西早稲田1-17-5<br>
                        ランチ    :   11:30〜15:00＊<br>
                        ディナー  :   17:30〜23:00＊<br>
                    </p>
                    <p style="font-size: 12x; font-size: 0.8rem;padding:0 0 0 10px;margin:0;">
                        ＊ラストオーダーは30分前になります
                    </p>
                    <p style="font-size: 16px; font-size: 1.0rem;padding:0 0 0 10px">
                        定休日    :   日曜
                    </p>
                </div>

                <!-- 地図 -->
                <div class="span4" style="">
                    <div>
                    <a href="https://www.google.co.jp/maps/preview?authuser=0#!q=%E6%9D%B1%E4%BA%AC%E9%83%BD%E6%96%B0%E5%AE%BF%E5%8C%BA%E8%A5%BF%E6%97%A9%E7%A8%B2%E7%94%B01-17-5&data=!1m4!1m3!1d9137!2d139.7203523!3d35.7091601!4m15!2m14!1m13!1s0x60188d1afb7d461b%3A0x2013257f8587ae6!3m8!1m3!1d4570!2d139.7059363!3d35.6908751!3m2!1i990!2i1083!4f13.1!4m2!3d35.7113304!4d139.7197662" target="_blank" width='80%'>
                        <img src="images/img_34.png" width="165px" style="">
                    </a>
                    </div>
                    <br>
                    <div>
                        <img src="images/img_40.png" width="335px" height="368px" style="">
                    </div>
                </div>

                <!--　ソーシャルプラグイン -->
                <div class="span4" style="">
                    <img src="images/img_30.png" width="165px" style="">
                    <br><br>
                    <div style="background-color: white;">
                        <div class="fb-like-box" data-href="https://www.facebook.com/pages/%E3%82%A4%E3%82%BF%E3%83%AA%E3%82%A2%E3%83%B3NECo/556483371053588" data-width="330" data-height="The pixel height of the plugin" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>
                    <div>
                </div>

            </div>

        <?php endif; ?>








    </div>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1&appId=535275489825821";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div align="center">
Copyright © 2013 イタリアン NE'Co All Rights Reserved.
</div>
</body>



</html>
