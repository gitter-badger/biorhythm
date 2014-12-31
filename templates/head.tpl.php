<title><?php echo $head_title; ?></title>
<meta charset="utf-8">
<meta name="robots" content="index, follow">
<meta name="viewport" content="width=device-width, height=device-height, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="description" content="<?php echo $head_description; ?>">
<meta name="keywords" content="<?php echo ($keywords != '') ? $keywords.', ': ''; ?>nhip sinh hoc, nhipsinhhoc, nhịp sinh học, chu ky sinh hoc cua nguoi, nhip sinh hoc co the nguoi, nhịp sinh học là gì, nhip sinh hoc hom nay, nhip sinh hoc voi suc khoe, nhip sinh hoc cua ban, nhip sinh hoc cua con nguoi, nhip sinh hoc hang ngay, nhip sinh hoc cua co the la gi, nhip sinh hoc 12 cung hoang dao, biorhythm, биоритм, biorritmo, 生物节律, バイオリズム, xem biểu đồ sinh học, xem ngay tot xau, dong ho sinh hoc, phan mem nhip sinh hoc, xem tu vi, cach tinh nhip sinh hoc, sinh hoc, boi nhip sinh hoc, nhip sinh hoc theo thang, bieu do nhip sinh hoc, bói nhịp sinh học, biểu đồ nhịp sinh học, bieu do sinh hoc, xem ngay sinh, xem ngay, xem ngày sinh, xem ngày, tu vi, tử vi<?php echo (isset($_GET['fullname']) && $_GET['fullname'] != '') ? ', '.$_GET['fullname']: ''; ?>, bmi, tính chỉ số bmi, tinh chi so bmi">
<meta name="author" content="Tung Pham">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo str_replace('&', '&amp;', current_url()); ?>">
<meta property="og:title" content="<?php echo $head_title; ?>">
<meta property="og:description" content="<?php echo $head_description; ?>">
<meta property="og:image" content="<?php echo 'http://nhipsinhhoc.vn/img/img_desc_'.((has_dob() && is_birthday()) ? 'birthday': 'logo').'.png'; ?>">
<link rel="stylesheet" href="/min/b=css&amp;f=fonts.css,normalize.css,install-button.css,jquery.listnav.css,jquery.contextMenu.css,bootstrap.css,m-styles.css,default.css,ui-blue/jquery-ui.css,nprogress.css&amp;380" />
<link rel="stylesheet" href="/min/f=css/print.css" media="print" />
<link rel="icon" href="/favicon.ico" />
<link rel="apple-touch-icon" href="/app-icons/apple-touch-icon-iphone.png">
<link rel="apple-touch-icon" sizes="76x76" href="/app-icons/apple-touch-icon-ipad.png">
<link rel="apple-touch-icon" sizes="120x120" href="/app-icons/apple-touch-icon-iphone-retina.png">
<link rel="apple-touch-icon" sizes="152x152" href="/app-icons/apple-touch-icon-ipad-retina.png">
<link rel="canonical" href="<?php echo str_replace('&', '&amp;', current_url()); ?>" />
<link rel="alternate" hreflang="x-default" href="<?php echo current_default_url(); ?>" />
<link rel="alternate" hreflang="vi" href="<?php echo current_url_lang('vi'); ?>" />
<link rel="alternate" hreflang="en" href="<?php echo current_url_lang('en'); ?>" />
<link rel="alternate" hreflang="ru" href="<?php echo current_url_lang('ru'); ?>" />
<link rel="alternate" hreflang="es" href="<?php echo current_url_lang('es'); ?>" />
<link rel="alternate" hreflang="zh" href="<?php echo current_url_lang('zh'); ?>" />
<link rel="alternate" hreflang="ja" href="<?php echo current_url_lang('ja'); ?>" />
<link rel="chrome-webstore-item" href="<?php echo chrome_webstore_item(); ?>" />
<!--[if lt IE 9]>
<script src="/min/?f=js/html5shiv.js"></script>
<![endif]-->
<?php
include $template_path.'hide_adsense.tpl.php';
?>
<script src="//load.sumome.com/" data-sumo-site-id="d6a90f146e44f9d4df9ec075ab9c4cea8875988b572eec66f07aabe20c88250c" async></script>