<?php
include_once XOOPS_ROOT_PATH . '/modules/tadtools/language/' . $GLOBALS['xoopsConfig']['language'] . '/theme_common.php';

/**tad自訂設定之語系**/
define("TF_SHOW_VAR", "顯示佈景變數資訊");
define("TF_SHOW_VAR_DESC", "佈景開發時，會顯示所有 tad_themes 提供的控制變數及設定值");
define("TF_MENU_PIN", "是否使用導覽列的釘住功能");
define("TF_MENU_PIN_DESC", "選「是」時，在畫面往下移動時，導覽列會自動維持在最上方。");
define("TF_HEADER_STYLE", "無Logo圖可改變頁首樣式設定");
define("TF_HEADER_STYLE_DESC", "可使用CSS語法控制頁首內容的外觀");
define("TF_FONT_FAMILY", "佈景字型設定");
define("TF_FONT_FAMILY_DEFAULT", "\"Helvetica Neue\",Helvetica,Arial,\"微軟正黑體\",sans-serif");
define("TF_FONT_FAMILY_DESC", "輸入字型名稱，有空白的部份需要用\"\"包起來。如：" . TF_FONT_FAMILY_DEFAULT);
define("TF_FONT_SLOGAN", "中間資訊列");
define("TF_FONT_SLOGAN_DEFAULT", "<h3>歡迎光臨本網站(網站管理者可由後台修改這裏的文字)</h3>");
define("TF_FONT_SLOGAN_DESC", "加入中間資訊列內容");
define("TF_FOOTER_BGCOLOR", "頁尾底色");
define("TF_FOOTER_BGCOLOR_DESC", "頁尾底部的顏色");
define("TF_FOOTER_IMG", "頁尾底圖");
define("TF_FOOTER_IMG_DESC", "可自行上傳想要的底圖");
define("TF_FOOTER_STYLE", "頁尾內容樣式設定");
define("TF_FOOTER_STYLE_DESC", "可使用CSS語法控制頁尾內容的外觀");
define("TF_TOPMENU", "上方選單");
define("TF_TOPMENU_DEFAULT", '[{"name":"回首頁","url":"index.php"},\n{"name":"最新消息","url":"/modules/tadnews/"},\n{"name":"電子相簿","url":"/modules/tadgallery/"},\n{"name":"檔案下載","url":"/modules/tad_uploader/"},\n{"name":"聯絡我們","url":"/modules/ugm_contact_us/"}]');
define("TF_TOPMENU_DESC", '最多五項，以json格式撰寫：[{"name":"項目名稱","url":"對應網址"},{第二組設定...},{第三組設定...}]');
//以下為wnmhi自訂語系
define("WNMHI_USER_ADMIN", "後台管理");
define("WMNHI_USER_WELCOME", "歡迎：");
define("WMNHI_SYSTEM_CONFIG", "系統偏好設定");
define("WMNHI_SYSTEM_MODADM", "線上安裝更新");
define("WMNHI_THEME_ADMIN", "佈景");
define("WMNHI_THEME_UNDEBUG", "關除錯");
define("WMNHI_USER_BLOCK", "區塊");
define("WMNHI_USER_NEWMSG", "有新信");
define("WMNHI_USER_NOTICE", "通知");
define("WMNHI_USER", "查看帳號");
define("WMNHI_LOGOUT", "登出");
define("WMNHI_LOGIN", "登入");
define("WMNHI_HELLO", "您好!");
define("WMNHI_USER_LOGO", "從佈景管理的後台變換自己的logo");
define("WMNHI_SLIDE_PICTURE", "網站管理者可由佈景管理的後台設定畫面，上傳自己喜歡圖片");
