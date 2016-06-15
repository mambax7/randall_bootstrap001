<?php
include_once XOOPS_ROOT_PATH . '/modules/tadtools/language/' . $xoopsConfig['language'] . '/theme_common.php';

/**自訂設定之語系**/
define("TF_SHOW_VAR", "Display themes vars.");
define("TF_SHOW_VAR_DESC", "Display all variable of tad_themes module that you could use it to design theme.");
define("TF_MENU_PIN", "Using the pegs feature navigation bar");
define("TF_MENU_PIN_DESC", "Select \"Yes\", the picture moves down, the navigation bar will automatically maintain at the top.");
define("TF_HEADER_STYLE", "Logo-free graphs may change the page style set");
define("TF_HEADER_STYLE_DESC", "Can use CSS to control the appearance of the page contents");
define("TF_FONT_FAMILY", "Theme fonts");
define("TF_FONT_FAMILY_DEFAULT", "\"Helvetica Neue\",Helvetica,Arial,sans-serif");
define("TF_FONT_FAMILY_DESC", "CSS font-family setup.ex:" . TF_FONT_FAMILY_DEFAULT);
define("TF_FONT_SLOGAN", "The Middle columns of information");
define("TF_FONT_SLOGAN_DEFAULT", "<h3>Welcome to our Web site (Site administrators can modify the background text here)</h3>");
define("TF_FONT_SLOGAN_DESC", "Join the Middle columns of information content");
define("TF_FOOTER_BGCOLOR", "Footer background color");
define("TF_FOOTER_BGCOLOR_DESC", "Set footer background color.");
define("TF_FOOTER_IMG", "Footer backgorund image");
define("TF_FOOTER_IMG_DESC", "Please upload a background image.");
define("TF_FOOTER_STYLE", "Custom styles");
define("TF_FOOTER_STYLE_DESC", "You can design footer style by CSS.");
define("TF_TOPMENU", "Top Menu");
define("TF_TOPMENU_DEFAULT", '[{"name":"Home","url":"index.php"},\n{"name":"News","url":"/modules/tadnews/"},\n{"name":"Photos","url":"/modules/tadgallery/"},\n{"name":"Files","url":"/modules/tad_uploader/"},\n{"name":"Contact us","url":"/modules/ugm_contact_us/"}]');
define("TF_TOPMENU_DESC", 'json content：[{"name":"item name","url":"item url"},{...},{...}]');
//以下為wnmhi自訂語系
define("WNMHI_USER_ADMIN", "Backstage management");
define("WMNHI_USER_WELCOME", "Welcome");
define("WMNHI_SYSTEM_CONFIG", "Preferences");
define("WMNHI_SYSTEM_MODADM", "Online install");
define("WMNHI_THEME_ADMIN", "Theme setup");
define("WMNHI_THEME_UNDEBUG", "Unable debug");
define("WMNHI_USER_BLOCK", "Blocks setup");
define("WMNHI_USER_NEWMSG", "New message");
define("WMNHI_USER_NOTICE", "Notifications");
define("WMNHI_USER", "Profil");
define("WMNHI_LOGOUT", "Logout");
define("WMNHI_LOGIN", "Login");
define("WMNHI_HELLO", "How are you!");
define("WMNHI_USER_LOGO", "Transform your management of scenery from the background logo");
define("WMNHI_SLIDE_PICTURE", "Site administrators can manage the background scenery setting screen, upload your favorite pictures");
