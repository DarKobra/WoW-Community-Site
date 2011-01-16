<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo WoW_Locale::GetLocale(LOCALE_DOUBLE); ?>" lang="<?php echo WoW_Locale::GetLocale(LOCALE_DOUBLE); ?>">
<?php
WoW_Template::LoadTemplate('block_header');
?>
<body class="<?php echo WoW_Template::GetPageData('body_class'); ?>">
    <div id="wrapper">
        <div id="header">
            <div id="search-bar">
                <form action="/wow/search" method="get" id="search-form">
                    <div>
                        <input type="submit" id="search-button" value="" tabindex="41" /> <input type="text" name="q" id="search-field" maxlength="200" tabindex="40" alt="<?php echo WoW_Locale::GetString('template_search_site');?>" value="<?php echo WoW_Locale::GetString('template_search_site'); ?>" />
                    </div>
                </form>
            </div>
            <h1 id="logo"><a href="/wow/">World of Warcraft</a></h1>
            <div class="header-plate-wrapper header-plate">
<?php
WoW_Template::PrintMainMenu();
if(WoW_Account::IsLoggedIn()) {
    WoW_Template::LoadTemplate('block_user_meta_auth');
}
else {
    WoW_Template::LoadTemplate('block_user_meta');
}
?>
            </div>
        </div>
<?php
// <div id="content"> starts here!
switch(WoW_Template::GetPageIndex()) {
    case 'index':
    default:
        WoW_Template::LoadTemplate('content_index');
        break;
    case 'item':
        WoW_Template::LoadTemplate('content_item_info');
        break;
    case 'character_profile_simple':
        WoW_Template::LoadTemplate('content_character_profile_simple');
        break;
    case 'character_talents':
        WoW_Template::LoadTemplate('content_character_talents');
        break;
    case '404':
        WoW_Template::LoadTemplate('content_404');
        break;
}
WoW_Template::LoadTemplate('block_footer', true);
WoW_Template::LoadTemplate('block_service', true);
?>
    </div>
<?php
WoW_Template::LoadTemplate('block_js_messages', true);
?>
<script type="text/javascript" src="/wow/static/local-common/js/menu.js?v15"></script>
<script type="text/javascript" src="/wow/static/js/wow.js?v4"></script>
<script type="text/javascript">
//<![CDATA[
    friendData = [
    ];
    $(function(){
        //
        Menu.initialize('/data/menu.json');
        Search.init('/ta/lookup');
    });
//]]>
</script>
<!--[if lt IE 8]> <script type="text/javascript" src="/wow/static/local-common/js/third-party/jquery.pngFix.pack.js?v15"></script>
<script type="text/javascript">$('.png-fix').pngFix();</script>
<![endif]-->
<script type="text/javascript" src="/wow/static/local-common/js/cms.js?v15?v4"></script>
<?php
switch(WoW_Template::GetPageData('page')) {
    case 'character_profile':
        echo '<script type="text/javascript" src="/wow/static/js/profile.js?v4"></script>
<script type="text/javascript" src="/wow/static/js/character/summary.js?v4"></script>';
        break;
    case 'character_talents':
        echo '<script type="text/javascript" src="/wow/static/js/profile.js?v4"></script>
<script type="text/javascript" src="/wow/static/js/character/talent.js?v6"></script>
<script type="text/javascript" src="/wow/static/js/tool/talent-calculator.js?v6"></script>';
        break;
    case 'item':
        echo '<script type="text/javascript" src="/wow/static/local-common/js/table.js?v15"></script>
<script type="text/javascript" src="/wow/static/local-common/js/filter.js?v15"></script>
<script type="text/javascript" src="/wow/static/js/item/item.js?v6"></script>';
        break;
}
?>

<script type="text/javascript">
//<![CDATA[
    Core.load("/wow/static/local-common/js/third-party/jquery-ui-1.8.6.custom.min.js?v15");
    Core.load("/wow/static/local-common/js/overlay.js?v15");
    Core.load("/wow/static/local-common/js/search.js?v15");
    Core.load("/wow/static/local-common/js/third-party/jquery.mousewheel.min.js?v15");
    Core.load("/wow/static/local-common/js/third-party/jquery.tinyscrollbar.min.js?v15");
    Core.load("/wow/static/local-common/js/login.js?v15", false, function() {
        Login.embeddedUrl = '/login/login.frag';
    });
//]]>
</script>
</body>
</html>