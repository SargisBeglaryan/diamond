<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    {{-- Scripts Here  --}}
    <!-- Latest compiled and minified CSS -->
    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel="alternate" type="application/rss+xml" title="Diamond &raquo; Feed" href="https://pakwebzone.com/diamond/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Diamond &raquo; Comments Feed" href="https://pakwebzone.com/diamond/comments/feed/" />
    <link rel="shortcut icon" href="https://pakwebzone.com/diamond/wp-content/uploads/2018/05/favicon.jpg" type="image/x-icon" />

    <link rel="apple-touch-icon" href="https://pakwebzone.com/diamond/wp-content/uploads/2018/05/favicon.jpg">

    <link rel="apple-touch-icon" sizes="114x114" href="https://pakwebzone.com/diamond/wp-content/uploads/2018/05/favicon.jpg">

    <link rel="apple-touch-icon" sizes="72x72" href="https://pakwebzone.com/diamond/wp-content/uploads/2018/05/favicon.jpg">

    <link rel="apple-touch-icon" sizes="144x144" href="https://pakwebzone.com/diamond/wp-content/uploads/2018/05/favicon.jpg">
    <link rel="alternate" type="application/rss+xml" title="Diamond &raquo; Home Comments Feed" href="https://pakwebzone.com/diamond/sample-page/feed/" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Javascript Files -->
    <!--<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
            window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/pakwebzone.com\/diamond\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.8"}};
            !function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
        </script>
<style type="text/css">
img.wp-smiley,
img.emoji {
    display: inline !important;
    border: none !important;
    box-shadow: none !important;
    height: 1em !important;
    width: 1em !important;
    margin: 0 .07em !important;
    vertical-align: -0.1em !important;
    background: none !important;
    padding: 0 !important;
}
</style>
<link rel='stylesheet' id='contact-form-7-css' href='https://pakwebzone.com/diamond/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css' href='https://pakwebzone.com/diamond/wp-content/plugins/revslider/public/assets/css/settings.css?ver=5.4.6.2' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>
<link rel='stylesheet' id='avada-stylesheet-css' href='https://pakwebzone.com/diamond/wp-content/themes/Avada/assets/css/style.min.css?ver=5.5.1' type='text/css' media='all' />
<!--[if lte IE 9]>
<link rel='stylesheet' id='avada-IE-fontawesome-css'  href='https://pakwebzone.com/diamond/wp-content/themes/Avada/includes/lib/assets/fonts/fontawesome/font-awesome.min.css?ver=5.5.1' type='text/css' media='all' />
<![endif]-->
<!--[if IE]>
<link rel='stylesheet' id='avada-IE-css'  href='https://pakwebzone.com/diamond/wp-content/themes/Avada/assets/css/ie.css?ver=5.5.1' type='text/css' media='all' />
<![endif]-->
<link rel='stylesheet' id='fusion-dynamic-css-css' href='https://pakwebzone.com/diamond/wp-content/uploads/fusion-styles/fusion-2.min.css?timestamp=1538261498&#038;ver=4.9.8' type='text/css' media='all' />
<script type='text/javascript' src='https://pakwebzone.com/diamond/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='https://pakwebzone.com/diamond/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript' src='https://pakwebzone.com/diamond/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js?ver=5.4.6.2'></script>
<script type='text/javascript' src='https://pakwebzone.com/diamond/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js?ver=5.4.6.2'></script>
<link rel='https://api.w.org/' href='https://pakwebzone.com/diamond/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://pakwebzone.com/diamond/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://pakwebzone.com/diamond/wp-includes/wlwmanifest.xml" />
<meta name="generator" content="WordPress 4.9.8" />
<link rel='shortlink' href='https://pakwebzone.com/diamond/' />
<link rel="alternate" type="application/json+oembed" href="https://pakwebzone.com/diamond/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fpakwebzone.com%2Fdiamond%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://pakwebzone.com/diamond/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fpakwebzone.com%2Fdiamond%2F&#038;format=xml" />
<meta name="generator" content="Powered by Slider Revolution 5.4.6.2 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
<style type="text/css">.post-content p {
    text-align: justify;
    margin-top: 0;
    margin-bottom: 20px;
}
.stitle {
    background: #00000070;
    text-align: center !important;
    padding: 10px !important;
}</style>
<script type="text/javascript">function setREVStartSize(e){
    try{ var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;                   
        if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})                  
    }catch(d){console.log("Failure at Presize of Slider:"+d)}
};</script>
<style type="text/css" id="wp-custom-css">
            .fusion-logo img{
    max-width: 200px;
}
span.menu-text {
    text-transform: uppercase;
}
#content.full-width {
    background: #fff !important;
    width: 100%;
}
.fusion-header {
    max-height: 150px !important;
}
.fusion-contact-info {
    line-height: 44px;
    font-size: 16px !important;
    color: #fff !important;
    font-weight: bold;
}
.fusion-contact-info a {
    line-height: 44px;
    font-size: 16px !important;
    color: #fff !important;
    font-weight: bold;
}       </style>
<script type="text/javascript">
        var doc = document.documentElement;
        doc.setAttribute('data-useragent', navigator.userAgent);
    </script>
    @yield('style')
</head>

<body>
    @include('layouts.header')

<main>
    @yield('content')
</main>

<footer>
    @yield('scripts')
</footer>

</body>


</html>
