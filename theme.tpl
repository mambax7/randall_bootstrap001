<!DOCTYPE html>
<html lang="<{$xoops_langcode}>">
<head>
    <!--目前$_SESSION['bootstrap']="<{php}>echo $_SESSION['bootstrap'];<{/php}>"; -->
    <!--將目前的資料夾名稱，設定為樣板標籤變數 theme_name-->
    <{assign var=theme_name value=$xoTheme->folderName}>

    <!--載入由使用者設定的各項佈景變數-->
    <{includeq file="$xoops_rootpath/modules/tadtools/themes_common/get_var.tpl"}>

    <{includeq file="$xoops_rootpath/modules/tadtools/themes_common/meta.tpl"}>
    <!-- 網站的標題及標語 -->
    <title><{$xoops_sitename}> - <{$xoops_pagetitle}></title>

    <{includeq file="$xoops_rootpath/modules/tadtools/themes3_tpl/link_css.tpl"}>
    <link rel="stylesheet" href="<{xoImgUrl css/orman.css}>" type="text/css" media="screen" />
    <link rel="stylesheet" href="<{xoImgUrl css/nivo-slider.css}>" type="text/css" media="screen" />

    <!-- 給模組套用的樣板標籤 -->
    <{$xoops_module_header}>

    <!-- 局部套用的樣式，如果有載入完整樣式 theme_css.tpl 那就不需要這一部份 -->
    <{includeq file="$xoops_rootpath/modules/tadtools/themes3_tpl/theme_css.tpl"}>

    <style type="text/css">
    body{
      font-family:<{$font_family}>;
    }
    </style>

  </head>
  <body id="home">

    <div id="templatemo_wrapper">
         <!--頁首-->
        <div id="templatemo_header">
          <div id="site_title" <{if !$logo_img}>style="<{$header_style}>;height:80px; margin-top: 20px; position: static;"<{/if}>>
            <{if $logo_img}>
              <img src="<{$logo_img}>" alt="<{$xoops_sitename}>" title="<{$xoops_sitename}>" style="position:absolute; z-index:10;" class="img-circle">
            <{else}>
              <{$xoops_sitename}>
            <{/if}>
          </div>
        </div>

        <!--滑動圖片-->
        <{if $slide_width > 0}>
          <{includeq file="$theme_name/includeq/wnmhi_slider.tpl"}>
        <{/if}>

        <div id="templatemo_pin">
            <!--導覽列-->
           <{includeq file="$xoops_rootpath/modules/tadtools/themes3_tpl/menu/nav-pills/menu.tpl"}>
            <!--中間資訊列-->
          <div id="templatemo_twitter">
            <{if $xoops_isadmin || $xoops_isuser}>
              <{$font_slogan}>
            <{else}>
              <h2><{$xoops_slogan}></h2>
            <{/if}>
          </div>
            <!--內容區-->
          <div id="templatemo_main">
           <{includeq file="$xoops_rootpath/modules/tadtools/themes3_tpl/$theme_type.tpl"}>
          </div>

          <div id="gotop"><{$smarty.const.THEME_MODULE1}> <i class="icon-chevron-up icon-white"></i></div>
        </div>

    </div>

        <script type="text/javascript">
           $(function() {
             $("ul.navigation > li:has(ul) > a").append('<div class="arrow-bottom"></div>');
             $("ul.navigation > li ul li:has(ul) > a").append('<div class="arrow-right"></div>');

             // http://fundesigner.net/gototop-tutorail/

             $("#gotop").click(function(){
                  jQuery("html,body").animate({
                      scrollTop:0
                  },1000);
              });
              $(window).scroll(function() {
                  if ( $(this).scrollTop() > 500){
                      $('#gotop').fadeIn("fast");
                  } else {
                      $('#gotop').stop().fadeOut("fast");
                  }
              });
           });
        </script>
            <!--頁尾-->
      <div id="templatemo_bottom_wrapper" style="background:<{$footer_bgcolor}>">
        <div id="templatemo_bottom" style="<{$footer_style}>">

              <div class="row">
                <div class="col-sm-12">
                <{if $xoops_isadmin}>
                  <a href="<{$xoops_url}>/modules/system/admin.php?fct=preferences&op=show&confcat_id=3" class="block_config"></a>
                <{/if}>
                </div>
              </div>
              <{$xoops_footer}>
          </div>
      </div>


    <!-- 載入 BootStrap所需的javascript -->
    <{includeq file="$xoops_rootpath/modules/tadtools/themes3_tpl/bootstrap_js.tpl"}>

    <!-- 載入自訂的javascript -->
    <{includeq file="$xoops_rootpath/modules/tadtools/themes3_tpl/my_js.tpl"}>

    <!-- 是否顯示樣板變數資訊 -->
    <{if $show_var==1}>
    <{includeq file="$xoops_rootpath/modules/tadtools/themes_common/show_var.tpl"}>
    <{/if}>
  </body>

</html>