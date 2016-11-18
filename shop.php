<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <style>

        </style>
    </head>
    <body>
        <!--  -->
        <div id="pageSidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
            </a>
            <ul>
                <li>
                    <a>option1</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a>option1</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a>option1</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a>option1</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a>option1</a>
                </li>
            </ul>
        </div>
        <!--  -->
        <div id="mainPage" class="">
            <nav class="mb_d_no">
            </nav>

            <header class="header site_width">
                <div class="content_width">
                    <!-- mobile display -->
                    <span class="glyphicon glyphicon-menu-hamburger d-no mb_d_ib" aria-hidden="true" style="" onclick="openNav()" ></span>
                    <span class="glyphicon glyphicon-search d-no mb_d_ib"></span>
                    <!-- mobile display end -->
                    <img src="limitstyle_logo.png" class='' />
                    <div class="d-ib v-m header_set_position m-t-7 pull-right">
                        <input type="text" name="search" placeholder="請輸入" class="form-control w-p-50 d-ib mb_d_no">
                        <span class="glyphicon glyphicon-search mb_d_no"></span>
                        <span class="glyphicon glyphicon-shopping-cart">
                            <p class="d-ib mb_d_no">
                                2件商品
                            </p>
                        </span>
                        <span class="glyphicon glyphicon-user">
                            <p class="d-ib mb_d_no">
                                登入
                            </p>
                        </span>
                    </div>
                </div>
            </header>

            <menu>
            </menu>

            <section class="site_width w-p-100 page_slider" role="廣告輪播">
                <!-- slider js -->
                <ul class='bxslider'>
                    <li><img src="slider.png" alt="無圖片" title="Sysmax TOP鍵盤文具收納架，鍵盤、文具輕鬆收納，節省桌面空間"  class="w-p-100"></li>
                    <li><img src="slider.png" alt="無圖片" title="Sysmax TOP鍵盤文具收納架，鍵盤、文具輕鬆收納，節省桌面空間"  class="w-p-100"></li>
                    <li><img src="slider.png" alt="無圖片" title="Sysmax TOP鍵盤文具收納架，鍵盤、文具輕鬆收納，節省桌面空間"  class="w-p-100"></li>
                    <li><img src="slider.png" alt="無圖片" title="Sysmax TOP鍵盤文具收納架，鍵盤、文具輕鬆收納，節省桌面空間"  class="w-p-100"></li>
                    <li><img src="slider.png" alt="無圖片" title="Sysmax TOP鍵盤文具收納架，鍵盤、文具輕鬆收納，節省桌面空間"  class="w-p-100"></li>
                </ul>
            </section>

            <section class="site_width page_info bg_e2e2e2 t-center" role="宣傳區塊">
                <img src="leftpart.png" class="d-ib w-p-20 mb_leftpart"  />
                <div class="d-ib t-center v-m">
                    <p class="cl_55C1BF font-20">
                        <span "mb_d_bl">Limitstyle 好設計</span>
                        <span class="mb_d_bl overflow-x">解決居家生活困擾</span>
                    </p>
                    <p class="mb_d_no">
                        特別嚴選
                        <img src="limitstyle_icon.png" class="w-p-10" />
                        獨家設計
                        <img src="limitstyle_icon.png" class="w-p-10" />
                        社群調查
                    </p>
                </div>
                <img src="rightpart.png" class="d-ib w-p-20"  />
            </section>

            <section class="d-no mb_d_bl m-tb-25 t-center" role="mobile only">
                <p class="mb_d_b">
                    特別嚴選
                    <img src="limitstyle_icon.png" class="w-p-10" />
                    獨家設計
                    <img src="limitstyle_icon.png" class="w-p-10" />
                    社群調查
                </p>
            </section>

            <section class="site_width page_products row">
                <div class="content_width">
                    <div class="product_sidebar mb_d_no">
                        <h5 class="sidebar_title font-26 ">所有商品</h2>
                        <ul class="sidebar_list">
                            <li class="sidebar_item">
                                <a href="#" class="category_link">居家用品</a>
                            </li>
                            <li class="sidebar_item">
                                <a href="#" class="category_link m-t-10">辦公文具</a>
                            </li>
                            <li class="sidebar_item">
                                <a href="#" class="category_link m-t-10">3C周邊</a>
                            </li>
                            <li class="sidebar_item">
                                <a href="#" class="category_link m-t-10">旅行外出</a>
                            </li>
                            <li class="sidebar_item">
                                <a href="#" class="category_link m-t-10">個人配件</a>
                            </li>
                            <li class="sidebar_item">
                                <a href="#" class="category_link m-t-10">主題推薦</a>
                            </li>
                            <li class="sidebar_item">
                                <a href="#" class="category_link m-t-10">嚐鮮預購</a>
                            </li>
                            <li class="sidebar_item">
                                <a href="#" class="category_link m-t-10">主題推薦</a>
                            </li>
                            <li class="sidebar_item">
                                <a href="#" class="category_link m-t-10">新機專區</a>
                            </li>
                        </ul>

                        <h5 class="m-t-40 filter_title">篩選條件</h5>
                        <table>
                            <td class="d-bl">
                                <input type="checkbox" class="d-ib" /> 篩選條件
                            </td>
                            <td class="d-bl">
                                <input type="checkbox" class="d-ib" /> 篩選條件
                            </td>

                        </table>
                    </div>

                    <div class="product_cool_design">
                        <div class="product_list_title">
                            <p class="d-ib font-26 m-l-25">熱銷好設計</p>
                            <img src="limitstyle_icon.png" class="w-p-5 d-ib" />
                            <p class="d-ib font-20">
                                大家都說好用的必敗好商品！
                            </p>
                        </div>
                        <div class="product_list">
                            <?php
                            for($i=1; $i<=9; $i++){
                             ?>
                            <div class="product_item_block">
                                <div class="product_item">
                                    <img src="png_recommend.png" class="w-p-100" />
                                    <p class="font-21 m-l-10 ">
                                        兩用門後掛架
                                    </p>
                                    <p class="font-14 cl_95989A m-l-10">
                                        靈活運用衣櫃門板空間增加5倍收納量
                                    </p>
                                    <div class="w-p-100 p-lr-10">
                                        <a href="#" class="btn_buy font-14">
                                            直購品
                                        </a>
                                        <p class="cl_F16EAA pull-right m-b-5 font-18">
                                            TWD 199
                                        </p>
                                        <div class="clear">

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <?php }?>
                            <div class="clear">

                            </div>
                        </div>

                            <div class="w-p-100">
                                <p class="d-ib font-26 ">嚐鮮預購</p>
                                <img src="limitstyle_icon.png" class="w-p-10 d-ib" />
                                <p class="d-ib font-20">
                                    適合嚐鮮喜歡追求新事物的你
                                </p>
                            </div>

                            <div class="product_list">
                                <?php
                                for($i=1; $i<=3; $i++){
                                 ?>
                                <div class="product_item_block">
                                    <div class="product_item">
                                        <img src="png_recommend.png" class="w-p-100" />
                                        <p class="font-21 m-l-10 ">
                                            兩用門後掛架
                                        </p>
                                        <p class="font-14 cl_95989A m-l-10">
                                            靈活運用衣櫃門板空間增加5倍收納量
                                        </p>
                                        <div class="w-p-100 p-lr-10">
                                            <a href="#" class="btn_buy font-14">
                                                直購品
                                            </a>
                                            <p class="cl_F16EAA pull-right m-b-5 font-18">
                                                TWD 199
                                            </p>
                                            <div class="clear">

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <?php }?>
                                <div class="clear">

                                </div>
                            </div>

                            <a href="#" class="pull-right link_more font-20 m-t-40 m-b-40 ">
                                看更多嚐鮮預購<span class="glyphicon glyphicon-chevron-right " aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="site_width bg_f7f7f7 page_comment row">
                <div class="content_width ">
                    <p class="font-26 m-t-40 m-b-40 m-l-50">
                        買過的人怎麼說
                    </p>

                    <div class="d-fl-sb">

                        <a href="#" class="m-t-60">
                            <span class="glyphicon glyphicon-chevron-left cl_95989A font-50 d-ib"></span>
                        </a>

                        <div class="d-ib">
                            <div class="d-ib">
                                <img src="png_recommend.png" class="d-bl v-m w-p-65" />
                            </div>

                            <div class="d-ib">
                                <p class="font-21">
                                    兩用門後掛架
                                </p>
                                <p class="font-14">
                                    TWD 239
                                </p>
                                <p class="font-16">
                                    靈活運用衣櫃門板空間增加5倍收納...
                                </p>
                                <p class="avg_score cl_F16EAA t-center font-25 m-l-52">
                                    平均4.5顆星
                                </p>
                            </div>
                        </div>

                        <div class="m-b-40">
                            <div class="d-fl-ai">
                                <!-- <div class="w-p-20 d-ib"> -->
                                    <img src="png_photo.png" class="w-p-30" />
                                <!-- </div> -->
                                <div class="m-l-20 d-ib">
                                    <p>
                                        Sandyxsxsdwed Lu
                                    </p>
                                    <p>
                                        兩用門後掛架兩用門後掛架兩用門後掛架兩xx...
                                    </p>
                                    <p class="pull-right">
                                        - 30分鐘前
                                    </p>
                                </div>
                            </div>
                            <div class="d-fl-ai">
                                <!-- <div class="w-p-20 d-ib"> -->
                                    <img src="png_photo.png" class="w-p-30" />
                                <!-- </div> -->
                                <div class="m-l-20 d-ib">
                                    <p>
                                        Sandyxsxsdwed Lu
                                    </p>
                                    <p>
                                        兩用門後掛架兩用門後掛架兩用門後掛架兩xx...
                                    </p>
                                    <p class="pull-right">
                                        - 30分鐘前
                                    </p>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="m-t-60">
                            <span class="glyphicon glyphicon-chevron-right cl_95989A font-50" aria-hidden="true"></span>
                        </a>

                    </div>
                </div>
            </section>

            <section class="site_width page_topics row">
                <div class="content_width ">
                    <div class="m-t-40">
                        <p class="d-ib font-26 m-r-10 m-l-40">主題推薦</p>
                        <img src="limitstyle_icon.png" class="w-p-5 d-ib" />
                        <p class="d-ib font-20 cl_95989A m-l-10">
                            不知道該從何選起？從你的日常生活下手就對了！
                        </p>
                    </div>

                    <div class="w-p-100 t-center">
                        <div class="topics_recommend ">
                            <img src="png_topic.png" class="w-p-100" />
                            <p class="topic_title ">
                                開學季搬新家<br />
                                怎樣收納才聰明有風格
                            </p>
                            <p class="p-lr-40 m-t-20 cl_95989A">
                                開學了！新生活的展開是否也同時伴隨著搬家的挑戰呢？新空間的配置與調整最適合在搬家時重新規劃了，里米斯小編幫大家整理出有聰明收納需求的好商品，組合應用出最適合你的居家生活空間！...
                            </p>
                            <div class="t-center">
                                <a href="#" class=" btn topic_link">看更多</a>
                            </div>
                        </div>

                        <div class="topics_recommend ">
                            <img src="png_topic.png" class="w-p-100" />
                            <p class="topic_title ">
                                開學季搬新家<br />
                                怎樣收納才聰明有風格
                            </p>
                            <p class="p-lr-40 m-t-20 cl_95989A">
                                開學了！新生活的展開是否也同時伴隨著搬家的挑戰呢？新空間的配置與調整最適合在搬家時重新規劃了，里米斯小編幫大家整理出有聰明收納需求的好商品，組合應用出最適合你的居家生活空間！...
                            </p>
                            <a href="#" class=" btn topic_link">看更多</a>
                        </div>

                        <div class="topics_recommend ">
                            <img src="png_topic.png" class="w-p-100" />
                            <p class="topic_title ">
                                開學季搬新家<br />
                                怎樣收納才聰明有風格
                            </p>
                            <p class="p-lr-40 m-t-20 cl_95989A">
                                開學了！新生活的展開是否也同時伴隨著搬家的挑戰呢？新空間的配置與調整最適合在搬家時重新規劃了，里米斯小編幫大家整理出有聰明收納需求的好商品，組合應用出最適合你的居家生活空間！...
                            </p>
                            <a href="#" class=" btn topic_link">看更多</a>
                        </div>
                    </div>

                    <a href="#" class="pull-right m-t-20 font-20 cl_7E7E7E">看更多主題<span class="glyphicon glyphicon-menu-right"></span></a>
                </div>
            </section>

            <section class="page_viewed site_width row m-b-40">
                <!-- <div class="content_width"> -->
                    <p class="font-26 m-t-40 m-b-40 m-l-100">
                        最近瀏覽過商品
                    </p>
                    <div class="d-fl-ai overflow-x">
                        <a href="#" class="d-ib m-r-20">
                            <span class="glyphicon glyphicon-chevron-left cl_95989A font-50" aria-hidden="true"></span>
                        </a>

                        <div class="d-ib w-p-12 ">
                            <img src="png_recommend.png" class="w-p-80 m-b-20"/>
                            <a class="d-bl">兩用門後掛架</a>
                        </div>
                        <div class="d-ib w-p-12">
                            <img src="png_recommend.png" class="w-p-80 m-b-20"/>
                            <a class="d-bl">兩用門後掛架</a>
                        </div>
                        <div class="d-ib w-p-12">
                            <img src="png_recommend.png" class="w-p-80 m-b-20"/>
                            <a class="d-bl">兩用門後掛架</a>
                        </div>
                        <div class="d-ib w-p-12">
                            <img src="png_recommend.png" class="w-p-80 m-b-20"/>
                            <a class="d-bl">兩用門後掛架</a>
                        </div>
                        <div class="d-ib w-p-12">
                            <img src="png_recommend.png" class="w-p-80 m-b-20"/>
                            <a class="d-bl">兩用門後掛架</a>
                        </div>
                        <div class="d-ib w-p-12">
                            <img src="png_recommend.png" class="w-p-80 m-b-20"/>
                            <a class="d-bl">兩用門後掛架</a>
                        </div>

                        <a href="#" class="d-ib">
                            <span class="glyphicon glyphicon-chevron-right cl_95989A font-50" aria-hidden="true"></span>
                        </a>
                    </div>
                <!-- </div> -->
            </section>

            <section class="site_width bg_f7f7f7 page_bottom" >
                <div class="content_width row">
                    <div class="row mb_center">
                        <div class="customer_service col-sm-3 ">
                          <h4>客服中心</h4>
                          <a href="#" class="d-bl">常見問與答</a>
                          <a href="#" class="d-bl">預購商品生產進度</a>
                          <a href="#" class="d-bl">聯絡我們</a>
                        </div>

                        <div class="buy_cool_design col-sm-3">
                          <h4>購買好設計</h4>
                          <a href="#" class="d-bl">居家用品</a>
                          <a href="#" class="d-bl">辦公文具</a>
                          <a href="#" class="d-bl">3C 周邊</a>
                          <a href="#" class="d-bl">個人配件</a>
                          <a href="#" class="d-bl">旅行外出</a>
                          <a href="#" class="d-bl">嚐鮮預購</a>
                        </div>

                        <div class="breaking_news col-sm-3">
                          <h4 >最新消息</h4>
                          <a href="#">
                              <img src='png_fb.png' />
                          </a>
                        </div>

                        <div class="get_discount col-sm-3">
                          <h4 class="">取得 Limit Style 優惠</h4>
                          <div class="">
                              <input type="text" name="search" placeholder="輸入 email 訂閱獨家優惠" class="form-control w-p-65 d-ib input_discount">
                              <a href="#" class="btn bg_63CCCA cl_fff w-p-25 d-ib btn_subscribe">訂閱</a>
                          </div>
                        </div>

                        <!-- <div class="col-sm-12 w-p-100 m-t-50 d-no mb_d_bl">
                            <p class="">
                                © 2016 LimitStyle Inc. All Rights Reserved.    LimitStyle 由里米斯股份有限公司所經營
                                <span class="d-bl"><a href="#" class="d-ib">服務條款</a> I <a href="#" class="d-ib">隱私權條款</a></span>
                            </p>
                        </div> -->
                    </div>
                </div>
            </section>

            <footer class="site_width" id="footer">
                <!-- <div class="d-bl w-p-100 cl_f7f7f7 m-t-50 "> -->
                    <div class="pull-right">
                        © 2016 LimitStyle Inc. All Rights Reserved.    LimitStyle 由里米斯股份有限公司所經營
                        <span class="d-bl"><a href="#" class="d-ib">服務條款</a> I <a href="#" class="d-ib">隱私權條款</a></span>
                    </div>
                <!-- </div> -->
            </footer>
        </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <link href="https://rawgit.com/stevenwanderski/bxslider-4/master/dist/jquery.bxslider.css" rel="stylesheet" />
    <!-- <link href="css/jquery.bxslider.css" rel="stylesheet" />   -->
    <script src="https://rawgit.com/stevenwanderski/bxslider-4/master/dist/jquery.bxslider.min.js"></script>
    <!-- <script src="css/jquery.bxslider.min.js"></script> -->
    <script>
        function openNav() {
            document.getElementById("pageSidenav").style.width = "250px";
            document.getElementById("mainPage").style.marginLeft = "250px";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
        }

        function closeNav() {
            document.getElementById("pageSidenav").style.width = "0";
            document.getElementById("mainPage").style.marginLeft= "0";
            document.body.style.backgroundColor = "white";
        }
    </script>
    <script>
        $(document).ready(function(){
            $('.bxslider').bxSlider({
                captions: true
            });
        });
    </script>
</html>
