    <?php  
    session_start();  
      
    if(!$_SESSION['uid'])  
    {  
      
        header("Location: login.php");//redirect to login page to secure the welcome page without login access.  
    }  
      
    ?> 
<!DOCTYPE html>
<html class="no-js" lang="en-IN">
<head>
    <title>Dell Official Site | Dell India</title>
        <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="generator" content="ver:1.0.0.2927,gen @ 11/08/19 09:45:18" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" /> 
    <meta http-equiv="x-dns-prefetch-control" content="on" />
    <meta name="TITLE" content="Dell Official Site | Dell India" /> 
    <meta name="description" content="Dell provides technology solutions, services &amp;amp; support. Buy Laptops, Touch Screen PCs, Desktops, Servers, Storage, Monitors, Gaming &amp;amp; Accessories" />
    <meta name="keywords" content="dell, dell India, dell computers" /> 
    <meta name="CHANNEL" content="http://www.dell.com" /> 
    <meta name="og:url" content="http://www.dell.com" /> 
    <meta name="twitter:url" content="http://www.dell.com" /> 
    <meta name="SMch" content="1;172.16.1.74:61020" /> 
    <meta name="dc" content="dell" /> 

        <!-- preconnect (DNS, TCP, TLS) - limited modern browser support (Firefox 54+, Chrome 49+, Opera 47+, Android Browser 46+, Chrome for Android 59+) -->
    <link rel="preconnect" href="//i.dell.com" />
    <link rel="preconnect" href="//nsm.dell.com" />
    <link rel="preconnect" href="//sm.dell.com" />
    <link rel="preconnect" href="//dpm.demdex.net" />
    <link rel="preconnect" href="//nexus.ensighten.com" />
    <link rel="preconnect" href="//nexus.dell.com" />
    <link rel="preconnect" href="//cdnssl.clicktale.net" />
    <link rel="preconnect" href="//c.evidon.com" />
    <!-- dns-prefetch (DNS Lookup only) - wider browser support (IE11, Edge, Firefox 54+, Chrome 49+, Safari 10.1+, Opera 47+, Chrome For Android 59+) -->
    <link rel="dns-prefetch" href="//i.dell.com" />


    <link rel="dns-prefetch" href="//nsm.dell.com" />
    <link rel="dns-prefetch" href="//sm.dell.com" />
    <link rel="dns-prefetch" href="//recommendations.production.p13n.dell.com" />
    <link rel="dns-prefetch" href="//dellinc.tt.omtrdc.net" />
    <link rel="dns-prefetch" href="//dpm.demdex.net" />
    <link rel="dns-prefetch" href="//nexus.dell.com" />
    <link rel="dns-prefetch" href="//nexus.ensighten.com" />
    <link rel="dns-prefetch" href="//cdnssl.clicktale.net" />
    <link rel="dns-prefetch" href="//c.evidon.com" />
    <link rel="preload" as="font" href="//fcs.dellcdn.com/fonts/roboto-normal.woff2" type="font/woff2" crossorigin="anonymous" />
    <link rel="canonical" href="https://www.dell.com/en-in" />
    <link rel="stylesheet" href="//afcs.dellcdn.com/csb/homepage/bundles/1.0.0.2927/css/styles.min.css" />
    <link rel="stylesheet" href="bootstrap/css/font-awesome-5.css"/>


<script>
    Dell = window.Dell || {};
    Dell.Metrics = Dell.Metrics || {};
    Dell.Metrics.sc = Dell.Metrics.sc || {};
    window.Dell.Metrics.sc = {"country":"in","language":"en","segment":"gen","customerset":"incorp1","pagename":"dell.com responsive homepage","applicationname":"homepage","s_account":"dellglobalonline","dc":"dell","cms":"stp","prod":"true","module":"csb_homepage"};
</script>

    <script src="//afcs.dellcdn.com/tnt/adobebundle/explore/toggle/adobebundle_toggle.min.js"></script>
    <script>var dellScriptLoader = (function () {
    "use strict";

    var scriptsArray = [];
    var urlRegex = /^(https:\/\/www\.|https:\/\/|\/\/|\/)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/; //exit if not a url or an array

    function scriptsArrayCopy() {
        return JSON.parse(JSON.stringify(scriptsArray));
    }

    function load(scripts) {
        //check for valid url
        function isValidUrl(url) {
            return typeof url === "string" && urlRegex.test(url);
        }

        //check for array
        function isValidArray(scripts) {
            return Array.isArray(scripts);
        }

        if (!(isValidUrl(scripts) || isValidArray(scripts))) {
            return;
        }

        //single url being passed
        if (isValidUrl(scripts)) {
            scriptsArray.push(scripts);
            return;
        }

        //handling of array
        if (isValidArray(scripts)) {
            for (var i = 0; i < scripts.length; ++i) {
                var _script = scripts[i];

                //if array of strings
                if (typeof _script === "string" && isValidUrl(_script)) {
                    scriptsArray.push({ url: _script });
                    return;
                }

                //if array of objects with url and order
                if (_script.hasOwnProperty("url") && _script.hasOwnProperty("order") && !isNaN(Number(_script.order))) {
                    _script.order = Number(_script.order);
                    scriptsArray.push(_script);
                    return;
                }

                //if array of objects with only url
                if (_script.hasOwnProperty("url") && isValidUrl(_script.url)) {
                    scriptsArray.push(_script);
                    return;
                }
            }
        }
    }

    return Object.freeze({
        load: load,
        scriptsArrayCopy: scriptsArrayCopy
    });
})();
</script>

</head>
<style>
    
   
       .floating {  
    animation-name: floating;
    animation-duration: 3s;
    animation-iteration-count: infinite;
    animation-timing-function: ease-in-out;
    margin-left: 30px;
    margin-top: 5px;
}

@keyframes floating {
    from { transform: translate(0,  0px); }
    65%  { transform: translate(0, 15px); }
    to   { transform: translate(0, -0px); }    
}

.bottomright {
     position: fixed;
     bottom: 30px;
     right: 30px;
}

#chat {
  border-radius: 50%;
}


</style>
<body namespace="homepage">
    <h1 class="hmp-visually-hidden"></h1>
        <style>[component=masthead] .cart-menu-behavior .mh-cart-trigger-wrap,[component=masthead].mh-show-cart-dropdown .mh-cart-trigger-wrap{background:#fff}[component=masthead] .cart-menu-behavior .mh-cart-trigger-wrap>.mh-cart-trigger,[component=masthead].mh-show-cart-dropdown .mh-cart-trigger-wrap>.mh-cart-trigger{color:#007db8}[component=masthead] .cart-menu-behavior .mh-cart-trigger-wrap .cf-masthead-icon,[component=masthead].mh-show-cart-dropdown .mh-cart-trigger-wrap .cf-masthead-icon{fill:#007db8}[component=masthead] .cart-menu-behavior .mh-ct-dropdown-wrap{left:auto;right:0;position:relative;display:block}@media only screen and (min-width:320px) and (max-width:766px){[component=masthead] .cart-menu-behavior .mh-ct-dropdown-wrap{left:0;position:absolute}}[component=masthead].mh-show-cart-dropdown .mh-ct-dropdown-wrap{left:auto;right:0;position:relative;display:block}@media only screen and (min-width:320px) and (max-width:766px){[component=masthead].mh-show-cart-dropdown .mh-ct-dropdown-wrap{left:0;position:absolute}}[component=masthead] .mh-ct-dropdown-wrap{display:none;position:relative}[component=masthead] a.mh-cart-trigger{display:-webkit-box;display:-ms-flexbox;display:flex;height:66px;-webkit-box-align:center;-ms-flex-align:center;align-items:center;position:relative;padding:10px;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;font-size:12px}@media only screen and (min-width:767px){[component=masthead] a.mh-cart-trigger{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;padding-top:0;padding-bottom:0;font-size:14px}}@media only screen and (min-width:320px) and (max-width:766px){[component=masthead] a.mh-cart-trigger{padding:10px 5px}[component=masthead] a.mh-cart-trigger>span:nth-child(2){display:block;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;max-width:42px}}[component=masthead] .mh-ct-icon-wrap{width:25px;margin-right:5px;position:relative}[component=masthead] .mh-ct-icon-wrap svg{width:26px;height:20px}[component=masthead] [mh-show-bubble=true]:before{content:attr(mh-bubble-count);border-radius:50%;background:#444;width:17px;height:17px;position:absolute;right:-7px;top:13px;color:#fff;font-weight:700;font-size:10px;text-align:center;line-height:17px}[component=masthead] .mh-ct-dropdown .mh-ct-dd-content>h2 .mh-ct-st-item-count,[component=masthead] .mh-saved-carts-count{color:#aaa}@media only screen and (min-width:767px){[component=masthead] [mh-show-bubble=true]:before{top:-9px;right:-3px}}[component=masthead] .mh-ct-dropdown{font-size:14px;position:absolute;right:0;top:100%;text-align:left;min-height:100px;width:320px;background-color:#fff;border:1px solid #cce7f3;border-top:0;border-bottom:4px solid #007db8;padding:15px 15px 0;z-index:999}@media only screen and (min-width:320px) and (max-width:766px){[component=masthead] .mh-ct-dropdown{width:100%}}[component=masthead] .mh-ct-dropdown .mh-ct-dd-content>h2{font-size:16px;margin:0 0 7px;font-weight:400}[component=masthead] .mh-ct-dropdown .mh-ct-dd-content>button{width:100%}[component=masthead] .mh-ct-dd-content{display:none}[component=masthead] .mh-ct-dd-content.mh-ct-dd-show{display:block}[component=masthead] .mh-ct-subtotal-wrap{font-size:13px;margin-bottom:10px;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;display:-webkit-box;display:-ms-flexbox;display:flex}[component=masthead] .mh-ct-subtotal-wrap>span{display:block}[component=masthead] .mh-ct-carts-wrap{margin:9px 0 0;padding:0}[component=masthead] .mh-ct-carts-wrap>li{border-top:1px solid #aaa;padding:10px 14px}[component=masthead] div.mh-shadow-box{display:none}[component=masthead] .mh-ct-loading{height:202px}[component=masthead] .mh-ct-loading .mh-shadow-box{display:block;background-color:transparent}[component=masthead] .mh-ct-loading .mh-ct-dd-content{display:none}[component=locale].mh-top-country{position:relative}[component=locale] #mh-footer-country-toggle{white-space:nowrap}[component=locale] .mh-locale.mh-locale-top img{margin-top:4px;margin-right:3px;margin-left:2px}[component=locale] .mh-locale.mh-locale-top ul{height:250px;min-width:268px;width:268px;overflow-y:scroll;right:0;top:25px}[component=locale] .mh-locale.mh-local-bottom{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start}[component=locale] .mh-locale.mh-local-bottom>div:nth-child(1){cursor:pointer;margin-bottom:0}[component=locale] .mh-locale.mh-local-bottom>div:nth-child(1)>div{padding-top:2px;font-size:14px;height:22px;display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex;word-break:keep-all}[component=locale] .mh-locale.mh-local-bottom>div:nth-child(1) img{width:18px;margin-top:4px;margin-right:3px;margin-left:2px;height:11px}[component=locale] .mh-locale.mh-local-bottom>div:nth-child(1) ul{-webkit-margin-before:-290px;margin-block-start:-290px;margin-top:-290px;min-width:268px;width:268px;overflow-y:scroll;float:left;top:35px;height:250px}[component=locale] .mh-locale.mh-local-bottom>div:nth-child(2){margin-left:5px;margin-right:5px}[component=locale] .mh-locale.mh-local-bottom>div:nth-child(3)>div:nth-child(1){font-size:14px;max-height:24px;word-break:keep-all;cursor:pointer;display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex;padding-top:2px}[component=locale] .mh-locale.mh-local-bottom>div:nth-child(3)>div:nth-child(1) span{display:inline-block;margin-left:5px}[component=locale] .mh-locale.mh-local-bottom>div:nth-child(3)>div:nth-child(2) ul{overflow-y:hidden;position:absolute;margin:0 auto;width:auto;bottom:27px;left:-10px}[component=locale] .mh-locale{font-size:14px;word-break:keep-all;-ms-user-select:none;user-select:none;-webkit-user-select:none;-moz-user-select:none}[component=locale] .mh-locale a{display:block;padding:3px 10px;clear:both;font-weight:400;font-size:14px;text-decoration:none;line-height:1.42857143;color:#444!important}[component=locale] .mh-locale a:hover{text-decoration:none;background-color:#cce7f3;color:#333}[component=locale] .mh-locale a:focus{text-decoration:none;background-color:#eee;color:#333;outline-color:#eee}[component=locale] .mh-locale .modal-container{position:relative}[component=locale] .mh-locale ul{display:none;position:absolute;background-color:#fff;border-bottom:1px solid rgba(0,0,0,.15);border-left:1px solid rgba(0,0,0,.15);border-right:none;-webkit-box-shadow:rgba(0,0,0,.176) 0 6px 12px 0;box-shadow:rgba(0,0,0,.176) 0 6px 12px 0;color:#007db8;cursor:pointer;float:right;line-height:20px;list-style-type:none;overflow-x:hidden;-webkit-text-size-adjust:100%;-moz-text-size-adjust:100%;-ms-text-size-adjust:100%;text-size-adjust:100%;visibility:visible;z-index:999;-webkit-box-direction:normal;-webkit-tap-highlight-color:transparent;margin-bottom:0;padding-bottom:1px;padding-left:0}[component=locale] .mh-locale>div{-webkit-box-flex:0;-ms-flex:0 1 auto;flex:0 1 auto}[component=locale] .mh-locale .chevron{border-left:6px solid transparent;border-right:6px solid transparent;border-top:6px solid #aaa;border-bottom:0;margin-top:5px}[component=masthead] ul{padding-left:0;margin:0;list-style:none}[component=masthead] .mh-img-menu-trigger,[component=masthead] .mh-list-item-2,[component=masthead] .mh-no-js li{position:relative}[component=masthead] .mh-site-nav-wrap{font-size:14px;display:none}@media only screen and (min-width:991px){[component=masthead] .mh-site-nav-wrap{display:block}}[component=masthead] .mh-site-nav-wrap a{text-decoration:none;color:#007db8}[component=masthead] .mh-site-nav-wrap a:visited{color:#007db8}[component=masthead] .mh-site-nav-wrap a:hover{text-decoration:none}[component=masthead] .mh-site-nav-wrap .mh-top-nav-link:hover{text-decoration:underline}[component=masthead] a,[component=masthead] div.mh-top-wrap a{text-decoration:none}[component=masthead] .mh-site-nav-wrap .mh-list-item-2-trigger{color:#fff;padding:7px 20px;display:block;border:0;background:0 0}[component=masthead] .mh-site-nav-wrap .mh-list-item-2-trigger:visited{color:#fff}[component=masthead] .mh-site-nav{display:-webkit-box;display:-ms-flexbox;display:flex}[component=masthead] .mh-site-nav button{border:0;background:0 0;padding:0;font-size:14px}[component=masthead] .mh-measuring-menu .mh-tier2,[component=masthead] .mh-measuring-menu .mh-tier3{display:block;visibility:hidden;left:-9999em}[component=masthead] .mh-tier2,[component=masthead] .mh-tier3,[component=masthead] .mh-tier4{width:225px;top:100%;left:0;display:none;position:absolute;background:#fff;-webkit-box-shadow:0 6px 12px rgba(0,0,0,.175);box-shadow:0 6px 12px rgba(0,0,0,.175);border-left:1px solid #cce7f3;border-right:1px solid #cce7f3;border-bottom:4px solid #007db8}[component=masthead] .mh-tier2 .mh-nav-hover,[component=masthead] .mh-tier3 .mh-nav-hover,[component=masthead] .mh-tier4 .mh-nav-hover{background-color:#fff;-webkit-transition:background 50ms linear;transition:background 50ms linear}[component=masthead] .mh-tier2 .mh-nav-hover:hover,[component=masthead] .mh-tier3 .mh-nav-hover:hover,[component=masthead] .mh-tier4 .mh-nav-hover:hover{background-color:#cce7f3}[component=masthead] .mh-list-item-2.mh-open-menu,[component=masthead] .mh-list-item-2:focus,[component=masthead] .mh-list-item-2:hover{background:#fff}[component=masthead] .mh-list-item-2.mh-open-menu>.mh-list-item-2-trigger,[component=masthead] .mh-list-item-2:focus>.mh-list-item-2-trigger,[component=masthead] .mh-list-item-2:hover>.mh-list-item-2-trigger{color:#007db8}[component=masthead] .mh-list-item-2.mh-open-menu>.mh-dropdown-menu,[component=masthead] .mh-list-item-2:focus>.mh-dropdown-menu,[component=masthead] .mh-list-item-2:hover>.mh-dropdown-menu{display:block}[component=masthead] a.mh-has-children{background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' version='1.1' id='Layer_1' x='0px' y='0px' viewBox='0 0 17.3 32' enable-background='new 0 0 100 100' xml:space='preserve' height='100px' width='100px'%3E%3Cg%3E%3Cpath style='fill:rgb(0, 125, 184)' d='M16.9,15.1L2.3,0.4c-0.5-0.5-1.4-0.5-1.9,0s-0.5,1.4,0,1.9L14.1,16L0.4,29.7c-0.5,0.5-0.5,1.4,0,1.9s1.4,0.5,1.9,0 l14.7-14.7C17.5,16.4,17.5,15.6,16.9,15.1L16.9,15.1z'/%3E%3C/g%3E%3C/svg%3E");background-size:14px 15px;background-repeat:no-repeat;background-position:right 8px center;padding-right:28px}[component=masthead] .mh-has-content{width:90%;display:inline-block}.mh-has-been-focused [component=masthead] .mh-level-2-children.mh-open-menu .mh-tier3{display:block;left:100%;top:0}.mh-has-been-focused [component=masthead] .mh-level-2-children.mh-open-menu .mh-tier3.mh-img-menu-wrap{display:-webkit-box;display:-ms-flexbox;display:flex;width:auto}[component=masthead] .mh-level-2-children.mh-open-menu .mh-tier3,[component=masthead] .mh-level-2-children:focus .mh-tier3,[component=masthead] .mh-level-2-children:hover .mh-tier3{display:block;left:100%;top:0}[component=masthead] .mh-level-2-children.mh-open-menu .mh-tier3.mh-img-menu-wrap,[component=masthead] .mh-level-2-children:focus .mh-tier3.mh-img-menu-wrap,[component=masthead] .mh-level-2-children:hover .mh-tier3.mh-img-menu-wrap{display:-webkit-box;display:-ms-flexbox;display:flex;width:auto;-webkit-box-shadow:6px 6px 6px rgba(0,0,0,.175);box-shadow:6px 6px 6px rgba(0,0,0,.175);border:0;border-right:1px solid #cce7f3;padding-left:1px;-webkit-box-align:stretch;-ms-flex-align:stretch;align-items:stretch}[component=masthead] .mh-level-2-children.mh-open-menu .mh-tier3.mh-img-menu-wrap>li,[component=masthead] .mh-level-2-children:focus .mh-tier3.mh-img-menu-wrap>li,[component=masthead] .mh-level-2-children:hover .mh-tier3.mh-img-menu-wrap>li{border-bottom:4px solid #007db8}[component=masthead] .mh-level-2-children.mh-open-menu .mh-tier3.mh-img-menu-wrap>li:first-child,[component=masthead] .mh-level-2-children:focus .mh-tier3.mh-img-menu-wrap>li:first-child,[component=masthead] .mh-level-2-children:hover .mh-tier3.mh-img-menu-wrap>li:first-child{border-left:1px solid #cce7f3}[component=masthead] .mh-level-2-children.mh-open-menu .mh-img-menu-wrap,[component=masthead] .mh-level-2-children:focus .mh-img-menu-wrap,[component=masthead] .mh-level-2-children:hover .mh-img-menu-wrap{top:0}[component=masthead] .mh-level-2-children.mh-img-menu-bottom{position:static}[component=masthead] .mh-level-2-children.mh-img-menu-bottom .mh-img-menu-wrap{bottom:-4px;top:auto}.mh-has-been-focused [component=masthead] .mh-level-3-children.mh-open-menu .mh-tier4,[component=masthead] .mh-level-3-children.mh-open-menu .mh-tier4,[component=masthead] .mh-level-3-children:focus .mh-tier4,[component=masthead] .mh-level-3-children:hover .mh-tier4{display:block;left:100%;top:0}[component=masthead] .mh-image-item{padding:20px 10px;border-right:1px solid #eee;min-width:200px}[component=masthead] .mh-image-item:last-child{border-right:0}[component=masthead] .mh-image-item>a{text-align:center;display:block}[component=masthead] .mh-image-item>a>span{display:block}[component=masthead] .mh-image-item>a .mh-img-caption{color:#007db8;font-size:18px;margin:8px 0 5px}[component=masthead] .mh-image-item>a .mh-img-subtitle{color:#444}[component=masthead] .mh-tier3-link,[component=masthead] .mh-tier4-link{display:block;padding:7px 20px 8px}[component=masthead] .mh-tier4-link{padding-right:10px}[component=masthead] a.mh-skip-main{left:-999px;position:absolute;top:auto;width:1px;height:1px;overflow:hidden;z-index:-999}[component=masthead] a.mh-skip-main:active,[component=masthead] a.mh-skip-main:focus{color:#fff;background-color:#000;left:auto;top:auto;width:30%;height:auto;overflow:auto;margin:10px 35%;padding:5px;border-radius:15px;border:4px solid #007db8;text-align:center;font-size:1.2em;z-index:999}#mh-skip-nav-target{line-height:0!important;height:0;width:0;overflow:hidden}[component=masthead]#dell-masthead{background-color:#007db8;position:relative;-webkit-box-sizing:border-box;box-sizing:border-box}[component=masthead] div.mh-top-wrap{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;height:66px;padding-right:0}[component=masthead] .mh-tw-left-col,[component=masthead] .mh-tw-left-col>div,[component=masthead] .mh-tw-right-col,[component=masthead] .mh-tw-right-col>div{height:100%}[component=masthead] .mh-tw-left-col>div:last-child,[component=masthead] .mh-tw-right-col>div:last-child{margin-right:0}[component=masthead] .mh-tw-left-col{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-flex:2;-ms-flex:2 1 auto;flex:2 1 auto;margin-right:30px}[component=masthead] .mh-tw-right-col{display:-webkit-box;display:-ms-flexbox;display:flex}[component=masthead] .mh-tw-home-wrap{-ms-flex-line-pack:center;align-content:center;padding-top:13px;padding-left:0;margin-right:10px}@media only screen and (min-width:991px){[component=masthead]#dell-masthead{z-index:901}[component=masthead] div.mh-top-wrap{padding-right:15px}[component=masthead] .mh-tw-home-wrap{padding-left:20px}}[component=masthead] .mh-tw-home-wrap a{display:block;width:40px}[component=masthead] .mh-tw-home-wrap svg{height:40px;width:40px}[component=masthead] .mh-tw-search-wrap{-webkit-box-flex:2;-ms-flex:2 1 auto;flex:2 1 auto;padding-top:19px}[component=masthead] .mh-tw-country-wrap{padding:25px 10px 0;display:none}@media only screen and (min-width:991px){[component=masthead] .mh-tw-country-wrap{display:block}}[component=masthead] .mh-tw-country-wrap .mh-top-country .mh-top-flag-icon{display:-webkit-box;display:-ms-flexbox;display:flex}[component=masthead] .mh-tw-country-wrap .mh-top-country .mh-top-flag-icon>div:first-child{margin-right:5px}[component=masthead] .mh-cart-trigger,[component=masthead] .mh-hamburger-trigger,[component=masthead] .mh-mobile-search-button,[component=masthead] .mh-sign-in-button-wrap{padding-left:5px;padding-right:5px}@media only screen and (min-width:767px){[component=locale] .mh-locale.mh-local-bottom>div:nth-child(1) ul{float:right;right:-5px}[component=masthead] .mh-cart-trigger,[component=masthead] .mh-hamburger-trigger,[component=masthead] .mh-mobile-search-button,[component=masthead] .mh-sign-in-button-wrap{padding-left:0;padding-right:0}}[component=masthead] .mh-tw-hamburger-wrap{display:block;height:100%;padding-bottom:1px}[component=masthead] .mh-tw-hamburger-wrap>div{height:100%}[component=masthead] .mh-tw-hamburger-wrap>span{display:block}[component=masthead] .mh-tw-hamburger-wrap svg{width:22px;height:21px}@media only screen and (min-width:991px){[component=masthead] .mh-tw-hamburger-wrap{display:none}}[component=masthead] button.mh-hamburger-trigger{background:0 0;border:0;display:-webkit-box;display:-ms-flexbox;display:flex;height:100%;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding:10px 15px;-webkit-box-align:center;-ms-flex-align:center;align-items:center;margin-right:0}[component=masthead] button.mh-hamburger-trigger:focus{outline:0}@media only screen and (min-width:320px) and (max-width:766px){[component=masthead] button.mh-hamburger-trigger{padding:10px 14px 10px 10px}[component=masthead] button.mh-hamburger-trigger>span{display:block}[component=masthead] button.mh-hamburger-trigger>span:last-child{font-size:12px;white-space:nowrap;min-width:36px;max-width:42px;overflow:hidden;text-overflow:ellipsis}}@media only screen and (min-width:767px){[component=masthead] button.mh-hamburger-trigger:focus{outline:1px}[component=masthead] button.mh-hamburger-trigger{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row}[component=masthead] button.mh-hamburger-trigger>span:first-child{margin-right:5px}}[component=masthead] button.mh-hamburger-trigger>span{display:block}[component=masthead] button.mh-hamburger-trigger>span:last-child{font-size:12px}[component=masthead] .mh-shadow-line-blue{border-top:1px solid #1387bd;display:none}@media only screen and (min-width:991px){[component=masthead] .mh-shadow-line-blue{display:block}}[component=masthead] .mh-shadow{position:relative;height:10px;overflow:hidden;margin-bottom:-9px}[component=masthead] .mh-shadow:before{content:"";position:absolute;width:80%;left:10%;height:10px;top:-12px;display:block;border-radius:50%;-webkit-box-shadow:0 0 18px rgba(0,0,0,.5);box-shadow:0 0 18px rgba(0,0,0,.5)}[component=masthead] .mh-tw-hamburger-button-wrap{cursor:pointer;color:#fff;fill:#fff}[component=masthead] .mh-tw-hamburger-button-wrap svg{color:#fff;fill:#fff}[component=masthead] .mh-tw-hamburger-button-wrap button{cursor:pointer;color:#fff}[component=masthead] .mh-hover-behavior{cursor:pointer;color:#fff;fill:#fff}[component=masthead] .mh-hover-behavior svg{color:#fff;fill:#fff}[component=masthead] .mh-hover-behavior:hover,[component=masthead] .mh-hover-behavior:hover svg{color:#cce7f3;fill:#cce7f3}[component=masthead] .mh-hover-behavior:hover button{color:#cce7f3}[component=masthead] .mh-hover-behavior button{cursor:pointer;color:#fff}.mh-nav-shadow-box{position:fixed;top:0;right:0;bottom:0;left:0;opacity:.5;background-color:#000;z-index:900;display:none}.mh-show-shadow-box .mh-nav-shadow-box,body.mh-open-mobile-pane .mh-nav-shadow-box{display:block}body{-webkit-transition:right .2s ease-in;transition:right .2s ease-in;position:relative;right:0}@supports (-webkit-overflow-scrolling:touch){body{cursor:pointer}}body.mh-open-mobile-pane{right:276px;overflow:hidden;position:fixed}body.mh-open-mobile-pane .mh-mobile-pane{width:276px}.mh-show-hamburger .mh-top-wrap .mh-tw-hamburger-button-wrap{background:#fff}.mh-show-hamburger .mh-top-wrap .mh-tw-hamburger-button-wrap .mh-hamburger-icon{fill:#007db8}.mh-show-hamburger .mh-top-wrap .mh-tw-hamburger-button-wrap .mh-mobile-hamburger-label{color:#007db8}[component=masthead] .mh-mobile-pane{position:fixed;top:0;bottom:0;right:0;width:0;-webkit-transition:width .2s ease-in;transition:width .2s ease-in;z-index:1000}@media only screen and (min-width:991px){body.mh-open-mobile-pane{right:0}[component=masthead] .mh-mobile-pane{display:none}}[component=masthead] .mh-mobile-pane:before{content:"";left:0;top:0;bottom:0;width:5px;z-index:5;opacity:.8;position:absolute;background:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,.65)),to(rgba(0,0,0,0)));background:linear-gradient(to right,rgba(0,0,0,.65) 0,rgba(0,0,0,0) 100%)}[component=masthead] .mh-mobile-pane:focus-within{width:276px}[component=masthead] .mh-hidden-menu-trigger{height:66px;width:80px;border:0;display:block;position:absolute;background:0 0;top:0;left:-80px;z-index:1001}@media only screen and (min-width:991px){[component=masthead] .mh-hidden-menu-trigger{display:none}}[component=masthead] .mh-mn-tier2,[component=masthead] .mh-mn-tier3{height:0;overflow:hidden}[component=masthead] .mh-mn-tier1>li.mh-mn-open>.mh-mn-tier2,[component=masthead] .mh-mn-tier2.mh-height-auto,[component=masthead] .mh-mn-tier2>li.mh-mn-open>.mh-mn-tier3,[component=masthead] .mh-mn-tier3.mh-height-auto,[component=masthead] .mh-mn-tier3>li.mh-mn-open>ul{height:auto}[component=masthead] .mh-mn-tier1>li.mh-mn-open>.mh-mn-has-children:after{border-bottom:6px solid #007db8;border-top:0}[component=masthead] .mh-mn-tier2>li{background:#fff}[component=masthead] .mh-mn-tier2>li>.mh-mn-has-children:after{border-top:6px solid #aaa}[component=masthead] .mh-mn-tier2>li.mh-mn-open>.mh-mn-has-children:after{border-bottom:6px solid #aaa;border-top:0}[component=masthead] .mh-mn-tier2>li.mh-mn-open>.mh-mn-tier3>li{padding-left:15px;border-left:4px solid #007db8}[component=masthead] .mh-mn-tier2>li.mh-mn-open>.mh-mn-tier3>li>a{border-bottom-style:dotted}[component=masthead] .mh-mn-tier3>li.mh-mn-open>.mh-mn-has-children:after{border-bottom:6px solid #aaa;border-top:0}[component=masthead] .mh-mobile-navigation{width:276px;background-color:#eee;color:#444;position:absolute;top:0;bottom:0;left:0;right:0;overflow:hidden;overflow-y:auto}[component=masthead] .mh-mobile-navigation ul{margin-left:0;padding-left:0;list-style:none}[component=masthead] .mh-mobile-navigation ul a{display:block;padding:10px 20px 9px;text-decoration:none;border-bottom:1px solid #aaa;line-height:20px}[component=masthead] .mh-mobile-navigation .mh-mn-has-children{position:relative}[component=masthead] .mh-mobile-navigation .mh-mn-has-children:after{content:"";border-left:6px solid transparent;border-right:6px solid transparent;border-top:6px solid #007db8;border-bottom:0;position:absolute;right:10px;top:50%;margin-top:-4px}[component=masthead] .mh-si-button{background-color:transparent;border:0;display:-webkit-box;display:-ms-flexbox;display:flex;color:#fff;height:100%;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding:10px}[component=masthead] .my-acct-menu-behavior .mh-sign-in-button-wrap,[component=masthead].mh-show-ma-dropdown .mh-sign-in-button-wrap{background-color:#fff}[component=masthead] .mh-si-button:focus{outline-width:0}@media only screen and (min-width:767px){[component=masthead] .mh-si-button{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;padding-top:0;padding-bottom:0}}@media only screen and (min-width:320px) and (max-width:766px){[component=masthead] .mh-si-button{padding:10px 0}}@media only screen and (min-width:991px){[component=masthead] .mh-si-button:focus{outline-width:1px}}[component=masthead] .mh-si-button:hover{color:#cce7f3}[component=masthead] .my-acct-menu-behavior .mh-si-button,[component=masthead] .my-acct-menu-behavior .mh-si-button:hover,[component=masthead].mh-show-ma-dropdown .mh-si-button,[component=masthead].mh-show-ma-dropdown .mh-si-button:hover{color:#007db8}[component=masthead] .mh-si-button:hover .mh-si-icon{fill:#cce7f3}[component=masthead] .my-acct-menu-behavior .mh-si-button:hover .mh-si-icon,[component=masthead] .my-acct-menu-behavior .mh-si-icon,[component=masthead].mh-show-ma-dropdown .mh-si-button:hover .mh-si-icon,[component=masthead].mh-show-ma-dropdown .mh-si-icon{fill:#007db8}[component=masthead] .mh-si-button>span{display:block}[component=masthead] .mh-si-label{white-space:nowrap;overflow:hidden;text-overflow:ellipsis;display:block;max-width:42px;font-size:12px;min-width:36px}[component=masthead] .mh-sign-in-button-wrap{height:66px;position:relative}@media only screen and (min-width:320px) and (max-width:767px){[component=masthead] .mh-sign-in-button-wrap{position:inherit}}[component=masthead] .my-acct-menu-behavior .mh-sign-in-button-wrap .mh-ma-dropdown{left:0;right:0;position:fixed;width:100%}@media only screen and (min-width:767px){[component=masthead] .mh-si-label{max-width:180px;font-size:14px}[component=masthead] .my-acct-menu-behavior .mh-sign-in-button-wrap .mh-ma-dropdown{position:absolute;left:auto;width:320px}}@media only screen and (min-width:320px) and (max-width:767px){[component=masthead] .my-acct-menu-behavior .mh-sign-in-button-wrap .mh-ma-dropdown{position:absolute}}[component=masthead].mh-show-ma-dropdown .mh-sign-in-button-wrap .mh-ma-dropdown{left:0;right:0;position:fixed;width:100%}@media only screen and (min-width:767px){[component=masthead].mh-show-ma-dropdown .mh-sign-in-button-wrap .mh-ma-dropdown{position:absolute;left:auto;width:320px}}@media only screen and (min-width:320px) and (max-width:767px){[component=masthead].mh-show-ma-dropdown .mh-sign-in-button-wrap .mh-ma-dropdown{position:absolute}}[component=masthead] .mh-si-icon-wrap{width:18px;margin-right:5px;position:relative;line-height:normal}[component=masthead] .mh-si-icon-wrap svg{width:20px;height:20px}[component=masthead] .mh-si-icon-wrap:before{content:"✓";display:none;color:#fff;width:15px;height:15px;font-size:10px;font-weight:700;background-color:#6ea204;text-align:center;border-radius:50%;position:absolute;top:-7px;right:-7px;line-height:15px}[component=masthead] .mh-si-icon{fill:#fff}[component=masthead].mh-si-state-is-hot .mh-si-icon-wrap{position:relative}[component=masthead].mh-si-state-is-hot .mh-si-icon-wrap:before{display:block}[component=masthead] .mh-signin{display:none}@media only screen and (min-width:767px){[component=masthead] .mh-signin{display:-webkit-box;display:-ms-flexbox;display:flex}[component=masthead] div.mh-ma-dropdown{width:320px}}[component=masthead] .mh-visibly-hidden{position:absolute;left:-9999em}[component=masthead].mh-si-state-is-cold .mh-si-hot-state{display:none}[component=masthead].mh-si-state-is-cold .mh-si-cold-state,[component=masthead].mh-si-state-is-hot .mh-si-hot-state{display:block}[component=masthead].mh-si-state-is-hot .mh-si-cold-state{display:none}[component=masthead] div.mh-ma-dropdown{font-size:14px;text-align:left;width:320px;background-color:#fff;border:1px solid #cce7f3;border-top:1px solid #fff;border-bottom:4px solid #007db8;z-index:990;color:#444;padding:8px 15px 0}[component=masthead] div.mh-ma-dropdown ul{padding-left:16px;list-style:disc}[component=masthead] div.mh-ma-dropdown>h2{font-size:inherit;font-weight:400;margin:0 0 10px}[component=masthead] div.mh-ma-dropdown a{display:block;color:#007db8}[component=masthead] div.mh-ma-dropdown a:visited{color:#007db8}[component=masthead] div.mh-ma-dropdown .mh-btn{margin-bottom:10px}[component=masthead] div.mh-ma-dropdown a.mh-btn-primary{color:#fff}[component=masthead] .mh-ma-bullets{padding-left:16px;margin-bottom:10px}[component=masthead] .mh-ma-bullets>li{padding-bottom:7px;line-height:120%}[component=masthead] .mh-si-links.mh-first{border-top:0;padding-top:0}[component=masthead] .mh-si-links{border-top:1px solid #ccc;padding:10px 0}[component=masthead] .mh-si-links:last-child{padding-bottom:0}[component=masthead] .mh-search-wrap{-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-flex:1;-ms-flex:1;flex:1;background:#fff;height:28px;position:relative;-webkit-box-shadow:inset 1px 1px 2px rgba(0,0,0,.75);box-shadow:inset 1px 1px 2px rgba(0,0,0,.75);width:100%}[component=masthead] .mh-search-wrap .mh-search-input{height:100%;display:block;border:0;width:100%;padding:5px 80px 5px 5px;border-radius:0;outline:0}[component=masthead] .mh-search-wrap .mh-search-btn{position:absolute;display:block;padding:2px 12px;color:#fff;right:1px;top:1px;line-height:21px;bottom:1px;border-radius:2px;height:auto;background-image:-webkit-gradient(linear,left top,left bottom,from(#118fd6),to(#0f6eca));background-image:linear-gradient(to bottom,#118fd6,#0f6eca);cursor:pointer}[component=masthead] .mh-search-wrap .mh-search-btn:hover{background:#0f6eca}[component=masthead] .mh-top-wrap .mh-search-wrap{display:none}@media only screen and (min-width:767px){[component=masthead] .mh-top-wrap .mh-search-wrap{display:block}}[component=masthead] .mh-top-wrap .mh-mobile-search-icon{display:none}[component=masthead] .mh-mobile-search-button-wrap{display:block;height:100%}@media only screen and (min-width:767px){[component=masthead] .mh-mobile-search-button-wrap{display:none}}[component=masthead] .mh-mobile-search-button-wrap .mh-search-icon-wrap svg{width:27px;height:23px}[component=masthead] .mh-mobile-search-label{font-size:12px;display:block;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;max-width:42px}.mh-btn,.mh-btn-default{margin-bottom:0;font-size:14px}[component=masthead] .mh-mobile-search-button{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:10px 15px;height:100%;background:0 0;border:0;outline:0;min-width:49px}@media only screen and (min-width:320px) and (max-width:766px){[component=masthead] .mh-mobile-search-button{padding:10px 0}}[component=masthead].mh-show-mobile-search .mh-top-wrap .mh-search-wrap{display:-webkit-box;display:-ms-flexbox;display:flex;border:1px solid #ccc;height:auto}[component=masthead].mh-show-mobile-search .mh-top-wrap .mh-mobile-search-button-wrap{background:#fff}[component=masthead].mh-show-mobile-search .mh-top-wrap .mh-mobile-search-button-wrap .mh-masthead-icon{fill:#007db8}[component=masthead].mh-show-mobile-search .mh-top-wrap .mh-mobile-search-button-wrap .mh-mobile-search-label{color:#007db8}[component=masthead].mh-show-mobile-search .mh-top-wrap .mh-search-button-label{display:none}[component=masthead].mh-show-mobile-search .mh-top-wrap .mh-mobile-search-icon{display:block}[component=masthead].mh-show-mobile-search .mh-top-wrap .mh-mobile-search-icon>svg{width:21px;height:21px}[component=masthead].mh-show-mobile-search .mh-top-wrap .mh-search-input{height:30px}[component=masthead].mh-show-mobile-search .mh-top-wrap .mh-search-input:focus{-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);border-color:#66afe9}[component=masthead].mh-show-mobile-search .mh-top-wrap .mh-tw-search-wrap{display:block;position:absolute;top:100%;height:auto;left:0;right:0;background-color:#fff;border:1px solid #cce7f3;border-top:1px solid #fff;border-bottom:4px solid #007db8;padding:10px 15px;z-index:990}@media only screen and (min-width:767px){[component=masthead].mh-show-mobile-search .mh-top-wrap .mh-tw-search-wrap{display:none}}.autocomplete-suggestions{-webkit-box-shadow:2px 2px 5px rgba(0,0,0,.5);box-shadow:2px 2px 5px rgba(0,0,0,.5);border-bottom:3px solid #007db8;margin:0;background:#fff;color:#007db8;padding:4px 0 10px;line-height:30px;z-index:999;cursor:pointer}.autocomplete-suggestion{padding-left:14px}.autocomplete-selected{background:#f0f0f0}.mh-btn{display:inline-block;font-weight:400;text-align:center;vertical-align:middle;border-radius:2px;cursor:pointer;background-image:none;border:1px solid transparent;white-space:nowrap;padding:6px 12px;line-height:1.42857143}a.mh-btn-success,button.mh-btn-success{color:#fff;background-image:-webkit-gradient(linear,left top,left bottom,from(#6ea204),to(#499b1e));background-image:linear-gradient(to bottom,#6ea204,#499b1e);border-color:rgba(0,0,0,.1) rgba(0,0,0,.1) rgba(0,0,0,.25);-webkit-box-shadow:inset 0 2px 4px rgba(0,0,0,.15),0 1px 2px rgba(0,0,0,.05);box-shadow:inset 0 2px 4px rgba(0,0,0,.15),0 1px 2px rgba(0,0,0,.05);text-shadow:0 -1px 0 rgba(0,0,0,.25)}a.mh-btn-success.active,a.mh-btn-success:active,a.mh-btn-success:hover{color:#fff;background-color:#285709;border-color:#224301}.mh-btn-primary.active,a.mh-btn-primary.active,a.mh-btn-primary:active,a.mh-btn-primary:hover{color:#fff;background-color:#00447c;border-color:#00537b}.mh-btn-primary,a.mh-btn-primary{color:#fff;background-color:#007db8;border-color:#007db8}.mh-btn-primary:visited,a.mh-btn-primary:visited{color:#fff}.mh-btn-default{padding:7px 11px;line-height:20px;text-shadow:0 1px 1px rgba(255,255,255,.75);background-image:-webkit-gradient(linear,left top,left bottom,from(#fefefe),to(#edf1f3));background-repeat:repeat-x;background-color:#f7f9fa;background-image:linear-gradient(to bottom,#fefefe,#edf1f3);border:1px solid #ccc;border-radius:2px;-webkit-box-shadow:none;box-shadow:none;color:#007db8}.cf-dell-text{color:#007db8}[component=masthead] *{-webkit-box-sizing:border-box;box-sizing:border-box}[component=masthead] .mh-container{margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px;width:100%}@media only screen and (min-width:991px){[component=masthead] .mh-container{width:970px}}@media only screen and (min-width:1200px){[component=masthead] .mh-container{width:1170px}}[component=masthead] .mh-shadow-box{position:absolute;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;background-color:rgba(0,0,0,.2);background-repeat:no-repeat;background-position:50% 50%;z-index:100000;top:0;left:0;right:0;bottom:0;background-image:url(//i.dell.com/sites/csimages/Awards_Imagery/all/ui-icons_loader.gif)};
        </style>

<header id="dell-masthead" class="vertical-fill mh-si-state-is-cold" country="in" lang="en" segment="gen" cust-set="incorp1" region="ap" srch-svc="//pilot.search.dell.com/" cust-srv="//www.dell.com/csbapi/en-in/personalization" country-svc="//www.dell.com/csbapi/masthead/countrylist/in/en" persist-srch="false" grey-out-disabled="false" sign-in-flyout-enabled="false" is-homepage="true" cart-service="//www.dell.com/csbapi/en-in/cart" is-p1-nod="false" is-p2-nod="false" component="masthead">
    <div class="mh-top-wrap mh-container">
        <div class="mh-tw-left-col">
            <div class="mh-tw-home-wrap mh-hover-behavior">
                <a href="//www.dell.com/en-in?~ck=mn" class="cf-dell-home" aria-label="//www.dell.com/en-in?~ck=mn">
                    <svg version="1.1" xmlns="//www.w3.org/2000/svg" xmlns:xlink="//www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve">
                    <path class="mh-masthead-icon" d="M4.7,4.7L4.7,4.7M16,0c8.8,0,16,7.2,16,16l0,0c0,8.8-7.2,16-16,16l0,0C7.2,32,0,24.8,0,16l0,0C0,7.2,7.2,0,16,0L16,0 M27.3,4.7L27.3,4.7 M16,1.7c-3.9,0-7.5,1.6-10.1,4.2l0,0C3.3,8.5,1.7,12.1,1.7,16l0,0c0,3.9,1.6,7.5,4.2,10.1l0,0c2.6,2.6,6.2,4.2,10.1,4.2l0,0c3.9,0,7.5-1.6,10.1-4.2l0,0c2.6-2.6,4.2-6.1,4.2-10.1l0,0c0-3.9-1.6-7.5-4.2-10.1l0,0C23.5,3.3,19.9,1.7,16,1.7L16,1.7 M25.8,17.3h2.4v2h-4.8v-6.9h2.4V17.3zM18,16.9L14,20l-3.6-2.8c-0.5,1.3-1.8,2.1-3.2,2.1H4.1v-6.9h3.1c1.6,0,2.8,1,3.2,2.1l3.6-2.8l1.3,1.1l-3.3,2.6l0.6,0.5l3.3-2.6l1.3,1.1L14,16.9l0.6,0.5l3.3-2.6v-2.4h2.4v4.9h2.4v2H18L18,16.9L18,16.9zM8.4,15.9c0-0.9-0.6-1.5-1.5-1.5H6.4v2.9h0.5C7.7,17.3,8.4,16.9,8.4,15.9z" /></svg>
                </a>
            </div>
            <div class="mh-tw-search-wrap">
                <div class="mh-search-wrap" role="search">

    <input type="text" class="mh-search-input" autocomplete="off" placeholder="What can we help you find?" aria-label="Search" />
    <button class="mh-btn mh-btn-primary mh-search-btn">
        <span class="mh-search-button-label">Search</span>
        <span class="mh-mobile-search-icon">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 43 32" width="43" height="32">
                <path class="mh-masthead-icon" style="fill:white;" d="M36.523 27.225l-9.613-9.493c1.133-1.782 1.789-3.892 1.789-6.154 0-6.394-5.231-11.577-11.682-11.577-6.453 0-11.684 5.184-11.684 11.577s5.231 11.579 11.684 11.579c2.113 0 4.094-0.561 5.805-1.533l9.693 9.574c1.092 1.080 2.873 1.068 3.981-0.027 1.105-1.098 1.117-2.863 0.027-3.945zM9.441 11.577c0-4.146 3.391-7.507 7.576-7.507 4.184 0 7.574 3.361 7.574 7.507 0 4.147-3.391 7.507-7.574 7.507-4.186 0-7.576-3.36-7.576-7.507z"></path>
            </svg>
        </span>
    </button>
</div>

            </div>
        </div>
        <div class="mh-tw-right-col">
            <div class="mh-tw-mobile-search-wrap">
                <div class="mh-mobile-search-button-wrap  mh-hover-behavior">
                    <button class="mh-mobile-search-button" tabindex="0">
                        <span class="mh-search-icon-wrap">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 43 32" width="43" height="32">
                                <path class="mh-masthead-icon" d="M36.523 27.225l-9.613-9.493c1.133-1.782 1.789-3.892 1.789-6.154 0-6.394-5.231-11.577-11.682-11.577-6.453 0-11.684 5.184-11.684 11.577s5.231 11.579 11.684 11.579c2.113 0 4.094-0.561 5.805-1.533l9.693 9.574c1.092 1.080 2.873 1.068 3.981-0.027 1.105-1.098 1.117-2.863 0.027-3.945zM9.441 11.577c0-4.146 3.391-7.507 7.576-7.507 4.184 0 7.574 3.361 7.574 7.507 0 4.147-3.391 7.507-7.574 7.507-4.186 0-7.576-3.36-7.576-7.507z"></path>
                            </svg>
                        </span>
                        <span>
                            <span class="mh-mobile-search-label">Search</span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="mh-tw-sign-in-wrap">
                <div class="mh-sign-in-button-wrap">
    <button class="mh-si-button" tabindex="0" aria-expanded="false">
        <span class="mh-si-icon-wrap">
            <svg version="1.1" xmlns="//www.w3.org/2000/svg" width="30.5" height="32" xmlns:xlink="//www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 30.5 32" xml:space="preserve">

            <path class="mh-si-icon" d="M15.6,0c4.3,0,7.8,3.5,7.8,7.7c0,4.3-3.5,7.8-7.8,7.8c-4.3,0-7.7-3.5-7.7-7.8C7.9,3.5,11.3,0,15.6,0z M30.5,32H0v-5.6c0-4.3,3.5-7.8,7.8-7.8h15c4.3,0,7.8,3.5,7.8,7.8V32z" /></svg>
        </span>
        <span>
            <a href="logout.php"><span class="mh-si-label" mh-sign-in-label="Sign In"> <font color="white">Log Out</font> </a></span>
        </span>
    </button>

    
<div class="mh-ma-dropdown mh-visibly-hidden">
    <h2 class="mh-si-cold-state">My Account</h2>
    <ul class="mh-ma-bullets mh-si-cold-state">
                <li>Place orders quickly and easily</li>
                <li>View orders and track your shipping status</li>
                <li>Create and access a list of your products</li>
    </ul>
    <div class="mh-si-links-wrap">
                        <a href="#" class="mh-btn mh-btn-primary mh-si-cold-state mh-sign-in-btn">Sign In</a>
                        <a href="#" class="mh-btn mh-btn-default mh-si-cold-state create-acct-btn">Create an account</a>
                    <a href="#">Premier Sign In</a>
                    <a href="//www.dell.com/content/public/xdbredirect.aspx?link=global:nav:partnerprogram:signin&amp;~ck=mn" class="mh-si-links mh-si-cold-state ">Partner Program Sign In</a>
                    <a href="//www.dell.com/en-in/myaccount/?~ck=mn" class="mh-si-links mh-si-hot-state mh-first">My Account</a>
                    <a href="//www.dell.com/support/orders?~ck=mn" class="mh-si-links mh-si-hot-state ">Order Status</a>
                    <a href="//www.dell.com/support/assets-online/?~ck=mn" class="mh-si-links mh-si-hot-state ">My Products</a>
                    <a href="//www.dell.com/Identity/global/Login/75814991-4252-4cc4-a977-670cc21309a7?~ck=mn" class="mh-si-links mh-si-hot-state ">Premier Sign In</a>
                    <a href="//www.dell.com/content/public/xdbredirect.aspx?link=global:nav:partnerprogram:signin&amp;~ck=mn" class="mh-si-links mh-si-hot-state ">Partner Program Sign In</a>
                        <a href="//www.dell.com/en-in/security/authentication/signoutreturntoreferrer?~ck=mn" class="mh-btn mh-btn-default mh-si-hot-state mh-sign-out-btn">Sign Out</a>
    </div>

</div>
</div>
            </div>
            <div class="mh-tw-cart-wrap">
                    <div id="mh-cart" class="mh-cart-trigger-wrap" tabindex="0">

     <a href="https://www.dell.com/en-in/cart/allcarts?~ck=mn" data-show-cart-flyout="False" role="link" aria-label="Cart" class="mh-cart-trigger mh-hover-behavior">
        <span class="mh-ct-icon-wrap" mh-show-bubble="false" mh-bubble-count="">
            <svg version="1.1" xmlns="//www.w3.org/2000/svg" xmlns:xlink="//www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 43 32" width="43" height="32" xml:space="preserve">
            <path class="cf-masthead-icon" d="M36.6,17.4l5-12c0.1-0.3,0.1-0.6-0.1-0.8c-0.2-0.2-0.5-0.4-0.8-0.4l-30.3,0L9,0.8C8.9,0.8,8.9,0,7.2,0H3.8c-1,0-2-0.2-2.6,1C1.1,1.2,1,1.4,1,1.7v0c0,0,0,0,0,0c0,0.2,0.1,0.5,0.1,0.7c0.1,0.2,0.2,0.3,0.3,0.5c0,0,0,0.1,0.1,0.1c0.4,0.5,1,0.9,1.8,0.9h3.5c0,0,0,0,0,0l10.5,20.7c-1.4,0.6-2.4,2-2.4,3.6c0,2.1,1.7,3.9,3.9,3.9c2.1,0,3.9-1.7,3.9-3.9c0-0.2,0-1.9,0-2.1l8.5,0c0,0.1,0,1.9,0,2.1c0,2.1,1.7,3.9,3.9,3.9c2.1,0,3.9-1.7,3.9-3.9c0-1.7-1.2-3.2-2.8-3.7c-0.1,0-0.1-0.1-0.2-0.1c-0.2-0.7-0.8-1.2-1.5-1.2l-14.3,0l-2.7-5.2l18.2,0C36.1,17.9,36.4,17.7,36.6,17.4L36.6,17.4z" /></svg>
        </span>
        <span>Cart</span>
    </a>

    
</div>
            </div>

            <div class="mh-tw-country-wrap mh-hover-behavior">
                
    <div class="mh-top-country" component="locale">
        <div id="mh-top-countryselector" class="mh-locale mh-locale-top">
            <div id="mh-top-countrytoggle" class="mh-top-flag-icon">
                <div>
                    <img src="https://cdn.pixabay.com/photo/2016/08/24/17/07/india-1617463__340.png" alt="IND" height="11px" width="18px />
                </div>
                <div class="mh-top-country-code">IND</div>
            </div>
            <ul id="mh-top-countrylist" class="mh-locale-menu mh-locale-menu-top" data-country-service="//www.dell.com/csbapi/masthead/countrylist/in/en"></ul>
        </div>
    </div>

            </div>
            <div class="mh-tw-hamburger-wrap">
                <div class="mh-tw-hamburger-button-wrap ">
                    <button class="mh-hamburger-trigger ">
                        <span class="mh-hb-icon-wrap">
                            <svg version="1.1" xmlns="//www.w3.org/2000/svg" xmlns:xlink="//www.w3.org/1999/xlink" width="32" height="32" x="0px" y="0px" viewBox="0 0 43 32" xml:space="preserve">
                            <path class="mh-hamburger-icon" d="M3.393 0h35.88v6.347h-35.88zM3.393 12.826h35.88v6.347h-35.88zM3.393 25.653h35.88v6.347h-35.88z"></path></svg>
                        </span>
                        <span class="mh-mobile-hamburger-label">Menu</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="mh-shadow-line-blue">
        <div class="mh-container mh-shadow"></div>
    </div>
    <div class="mh-site-nav-wrap mh-container">
         

<nav role="navigation" class="mh-no-js">
    <a class="mh-skip-main" href="#mh-skip-nav-target">Skip to main content</a>
    <ul class="mh-site-nav">
            <li class="mh-list-item-2" data-testid="header-navigation-menu-t1-item">
                <button class="mh-list-item-2-trigger" aria-haspopup="true" id="l1_0" tabindex="0">
                    Products
                </button>
            <ul style="position: absolute; z-index: 1000;" class="mh-tier2  mh-dropdown-menu" aria-labelledby="l1_0" data-testid="header-navigation-menu-t2-item">


        <li class="mh-level-2-children mh-img-menu-trigger">
            <a href="javascript:;" class="mh-tier3-link mh-has-children mh-nav-hover" id="l2_0" tabindex="0" data-testid="header-navigation-menu-t1-sub-item">
                <span class="mh-has-content"> Laptops</span>
            </a>

            <ul style="position: absolute; z-index: 1000;" class="mh-tier3 mh-img-menu-wrap" aria-labelledby="l2_0" data-testid="header-navigation-menu-t3-item">
                    <li class="mh-image-item mh-nav-hover">
                        <a href="//www.dell.com/en-in/shop/scc/sc/laptops?~ck=mn" tabindex="0" data-testid="header-navigation-menu-t3-item">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' %3E%3Crect x='1' y='1' width='-3' height='-3'/%3E%3C/svg%3E" mh-lazy-src="//i.dell.com/sites/csimages/Merchandizing_Imagery/en/20135-home-inspiron-15-5570-115x75-v3.png" mh-lazy-prior="low" alt="View all Laptops for Home" width="115" height="75" onerror="this.style.display = 'none'" />
                            <span class="mh-img-caption">For Home</span>
                            <span class="mh-img-subtitle">View all Laptops for Home</span>
                        </a>
                    </li>
                    
                    <li class="mh-image-item mh-nav-hover">
                        <a href="//www.dell.com/en-in/work/shop/scc/sc/laptops?~ck=mn" tabindex="0" data-testid="header-navigation-menu-t3-item">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' %3E%3Crect x='1' y='1' width='-3' height='-3'/%3E%3C/svg%3E" mh-lazy-src="//i.dell.com/sites/csimages/Merchandizing_Imagery/en/Masthead-LT-For-Work-115x75.png" mh-lazy-prior="low" alt="View all Laptops for Work" width="115" height="75" onerror="this.style.display = 'none'" />
                            <span class="mh-img-caption">For Work</span>
                            <span class="mh-img-subtitle">View all Laptops for Work</span>
                        </a>
                    </li>
                    
            </ul>

        </li>
    
        <li class="mh-level-2-children mh-img-menu-trigger">
            <a href="javascript:;" class="mh-tier3-link mh-has-children mh-nav-hover" id="l2_1" tabindex="0" data-testid="header-navigation-menu-t1-sub-item">
                <span class="mh-has-content"> Desktops &amp; All-in-One PCs</span>
            </a>

            <ul style="position: absolute; z-index: 1000;" class="mh-tier3 mh-img-menu-wrap" aria-labelledby="l2_1" data-testid="header-navigation-menu-t3-item">
                    <li class="mh-image-item mh-nav-hover">
                        <a href="//www.dell.com/en-in/shop/scc/sc/desktops?~ck=mn" tabindex="0" data-testid="header-navigation-menu-t3-item">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' %3E%3Crect x='1' y='1' width='-3' height='-3'/%3E%3C/svg%3E" mh-lazy-src="//i.dell.com/sites/csimages/Merchandizing_Imagery/en/20135-home-desktop-inspiron-3670-aio-3477-115x75-v2.png" mh-lazy-prior="low" alt="View all Desktops &amp; All-in-One PCs for Home" width="115" height="75" onerror="this.style.display = 'none'" />
                            <span class="mh-img-caption">For Home</span>
                            <span class="mh-img-subtitle">View all Desktops &amp; All-in-One PCs for Home</span>
                        </a>
                    </li>
                    
                    <li class="mh-image-item mh-nav-hover">
                        <a href="//www.dell.com/en-in/work/shop/scc/sc/desktops?~ck=mn" tabindex="0" data-testid="header-navigation-menu-t3-item">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' %3E%3Crect x='1' y='1' width='-3' height='-3'/%3E%3C/svg%3E" mh-lazy-src="//i.dell.com/sites/csimages/Merchandizing_Imagery/en/Masthead-DT-For-Work-115x75.png" mh-lazy-prior="low" alt="View all Desktops &amp; All-in-One PCs for Work" width="115" height="75" onerror="this.style.display = 'none'" />
                            <span class="mh-img-caption">For Work</span>
                            <span class="mh-img-subtitle">View all Desktops &amp; All-in-One PCs for Work</span>
                        </a>
                    </li>
                    
            </ul>

        </li>
    
        <li class="mh-level-2-children mh-img-menu-trigger">
            <a href="javascript:;" class="mh-tier3-link mh-has-children mh-nav-hover" id="l2_2" tabindex="0" data-testid="header-navigation-menu-t1-sub-item">
                <span class="mh-has-content"> Tablets &amp; 2-in-1 Laptops</span>
            </a>

            <ul class="mh-tier3 mh-img-menu-wrap" aria-labelledby="l2_2" data-testid="header-navigation-menu-t3-item">
                    <li class="mh-image-item mh-nav-hover">
                        <a href="//www.dell.com/en-in/shop/scc/sc/dell-tablets?~ck=mn" tabindex="0" data-testid="header-navigation-menu-t3-item">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' %3E%3Crect x='1' y='1' width='-3' height='-3'/%3E%3C/svg%3E" mh-lazy-src="//i.dell.com/sites/csimages/Merchandizing_Imagery/en/20135-home-notebook-inspiron-7373-115x75-v1.png" mh-lazy-prior="low" alt="View all 2-in-1 Laptops for Home" width="115" height="75" onerror="this.style.display = 'none'" />
                            <span class="mh-img-caption">For Home</span>
                            <span class="mh-img-subtitle">View all 2-in-1 Laptops for Home</span>
                        </a>
                    </li>
                    
                    <li class="mh-image-item mh-nav-hover">
                        <a href="//www.dell.com/en-in/work/shop/scc/sc/dell-tablets?~ck=mn" tabindex="0" data-testid="header-navigation-menu-t3-item">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' %3E%3Crect x='1' y='1' width='-3' height='-3'/%3E%3C/svg%3E" mh-lazy-src="//i.dell.com/sites/csimages/Merchandizing_Imagery/en/Masthead-2in1-For-Work-115x75.png" mh-lazy-prior="low" alt="View all Tablets &amp; 2-in-1 Laptops for Work" width="115" height="75" onerror="this.style.display = 'none'" />
                            <span class="mh-img-caption">For Work</span>
                            <span class="mh-img-subtitle">View all Tablets &amp; 2-in-1 Laptops for Work</span>
                        </a>
                    </li>
                    
            </ul>

        </li>
    
        <li class="mh-level-2-children mh-img-menu-trigger">
            <a href="javascript:;" class="mh-tier3-link mh-has-children mh-nav-hover" id="l2_3" tabindex="0" data-testid="header-navigation-menu-t1-sub-item">
                <span class="mh-has-content"> Gaming</span>
            </a>

            <ul style="position: absolute; z-index: 1000;" class="mh-tier3 mh-img-menu-wrap" aria-labelledby="l2_3" data-testid="header-navigation-menu-t3-item">
                    <li class="mh-image-item mh-nav-hover">
                        <a href="//www.dell.com/en-in/gaming/alienware?~ck=mn" tabindex="0" data-testid="header-navigation-menu-t3-item">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' %3E%3Crect x='1' y='1' width='-3' height='-3'/%3E%3C/svg%3E" mh-lazy-src="//i.dell.com/sites/content/DellMicroContent/Responsive_Images/english/_values/mast-alienware-pcs2.png" mh-lazy-prior="low" alt="View all Gaming Laptops &amp; Desktops" width="115" height="75" onerror="this.style.display = 'none'" />
                            <span class="mh-img-caption">Alienware PCs</span>
                            <span class="mh-img-subtitle">View all Gaming Laptops &amp; Desktops</span>
                        </a>
                    </li>
                    
                    <li class="mh-image-item mh-nav-hover">
                        <a href="//www.dell.com/en-in/shop/gaming-and-games/cp/game?~ck=mn" tabindex="0" data-testid="header-navigation-menu-t3-item">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' %3E%3Crect x='1' y='1' width='-3' height='-3'/%3E%3C/svg%3E" mh-lazy-src="//i.dell.com/sites/csimages/Merchandizing_Imagery/en/20135-home-desktop-inspiron-5680-notebook-g-5587-115x75-v2.png" mh-lazy-prior="low" alt="View all Gaming PCs &amp; Accessories" width="115" height="75" onerror="this.style.display = 'none'" />
                            <span class="mh-img-caption">Dell Gaming</span>
                            <span class="mh-img-subtitle">View all Gaming PCs &amp; Accessories</span>
                        </a>
                    </li>
                    
            </ul>

        </li>
    
    <li>
        <a href="//www.dell.com/en-in/work/shop/scc/sc/workstations?~ck=mn" class="mh-tier3-link mh-nav-hover" tabindex="0" data-testid="header-navigation-menu-t1-sub-item">
            Workstations
        </a>
    </li>
    <li>
        <a href="//www.dell.com/en-in/work/shop/ecat/enterprise-products?~ck=mn" class="mh-tier3-link mh-nav-hover" tabindex="0" data-testid="header-navigation-menu-t1-sub-item">
            Servers &amp; Storage
        </a>
    </li>
    <li>
        <a href="//www.dell.com/en-in/work/shop/scc/sc/networking-products?~ck=mn" class="mh-tier3-link mh-nav-hover" tabindex="0" data-testid="header-navigation-menu-t1-sub-item">
            Networking
        </a>
    </li>
        <li class="mh-level-2-children mh-img-menu-trigger">
            <a href="javascript:;" class="mh-tier3-link mh-has-children mh-nav-hover" id="l2_7" tabindex="0" data-testid="header-navigation-menu-t1-sub-item">
                <span class="mh-has-content"> Monitors</span>
            </a>

            <ul style="position: absolute; z-index: 1000;" class="mh-tier3 mh-img-menu-wrap" aria-labelledby="l2_7" data-testid="header-navigation-menu-t3-item">
                    <li class="mh-image-item mh-nav-hover">
                        <a href="//www.dell.com/en-in/shop/monitors-monitor-accessories/ac/4009?~ck=mn" tabindex="0" data-testid="header-navigation-menu-t3-item">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' %3E%3Crect x='1' y='1' width='-3' height='-3'/%3E%3C/svg%3E" mh-lazy-src="//i.dell.com/sites/csimages/Merchandizing_Imagery/en/Monitor-Home.png" mh-lazy-prior="low" alt="View all Monitors for Home" width="115" height="75" onerror="this.style.display = 'none'" />
                            <span class="mh-img-caption">For Home</span>
                            <span class="mh-img-subtitle">View all Monitors for Home</span>
                        </a>
                    </li>
                    
                    <li class="mh-image-item mh-nav-hover">
                        <a href="//www.dell.com/en-in/work/shop/monitors-monitor-accessories/ac/4009?~ck=mn" tabindex="0" data-testid="header-navigation-menu-t3-item">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' %3E%3Crect x='1' y='1' width='-3' height='-3'/%3E%3C/svg%3E" mh-lazy-src="//i.dell.com/sites/csimages/Merchandizing_Imagery/en/Monitor-Work.png" mh-lazy-prior="low" alt="View all Monitors for Work" width="115" height="75" onerror="this.style.display = 'none'" />
                            <span class="mh-img-caption">For Work</span>
                            <span class="mh-img-subtitle">View all Monitors for Work</span>
                        </a>
                    </li>
                    
            </ul>

        </li>
    
        <li class="mh-level-2-children mh-img-menu-trigger">
            <a href="javascript:;" class="mh-tier3-link mh-has-children mh-nav-hover" id="l2_8" tabindex="0" data-testid="header-navigation-menu-t1-sub-item">
                <span class="mh-has-content"> Electronics &amp; Accessories</span>
            </a>

            <ul style="position: absolute; z-index: 1000;" class="mh-tier3 mh-img-menu-wrap" aria-labelledby="l2_8" data-testid="header-navigation-menu-t3-item">
                    <li class="mh-image-item mh-nav-hover">
                        <a href="//www.dell.com/en-in/shop/accessories?~ck=mn" tabindex="0" data-testid="header-navigation-menu-t3-item">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' %3E%3Crect x='1' y='1' width='-3' height='-3'/%3E%3C/svg%3E" mh-lazy-src="//i.dell.com/sites/csimages/Merchandizing_Imagery/en/ENA-home.png" mh-lazy-prior="low" alt="View all Electronics &amp; Accessories for Home" width="115" height="75" onerror="this.style.display = 'none'" />
                            <span class="mh-img-caption">For Home</span>
                            <span class="mh-img-subtitle">View all Electronics &amp; Accessories for Home</span>
                        </a>
                    </li>
                    
                    <li class="mh-image-item mh-nav-hover">
                        <a href="//www.dell.com/en-in/work/shop/accessories?~ck=mn" tabindex="0" data-testid="header-navigation-menu-t3-item">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' %3E%3Crect x='1' y='1' width='-3' height='-3'/%3E%3C/svg%3E" mh-lazy-src="//i.dell.com/sites/csimages/Merchandizing_Imagery/en/ENA-work.png" mh-lazy-prior="low" alt="View all Electronics &amp; Accessories for Work" width="115" height="75" onerror="this.style.display = 'none'" />
                            <span class="mh-img-caption">For Work</span>
                            <span class="mh-img-subtitle">View all Electronics &amp; Accessories for Work</span>
                        </a>
                    </li>
                    
            </ul>

        </li>
    

                                   
            </ul style="position: absolute; z-index: 1000;">
                <a href="javascript:;" class="mh-close-focus" aria-hidden="true"></a>
            </li>
            
            <li class="mh-list-item-2" data-testid="header-navigation-menu-t1-item">
                <button class="mh-list-item-2-trigger" aria-haspopup="true" id="l1_1" tabindex="0">
                    Solutions
                </button>
            <ul style="position: absolute; z-index: 1000;" class="mh-tier2  mh-dropdown-menu" aria-labelledby="l1_1" data-testid="header-navigation-menu-t2-item">


    <li>
        <a href="//www.dell.com/en-in/work/learn/large-enterprise-solutions?~ck=mn" class="mh-tier3-link mh-nav-hover" tabindex="0" data-testid="header-navigation-menu-t1-sub-item">
            View All Solutions
        </a>
    </li>
        <li class="mh-level-2-children mh-list-menu-trigger">
            <a href="javascript:;" class="mh-tier3-link mh-has-children mh-nav-hover" id="l2_2" tabindex="0" data-testid="header-navigation-menu-t1-sub-item">
                <span class="mh-has-content"> Industries</span>
            </a>

            <ul style="position: absolute; z-index: 1000;" class="mh-tier3 mh-list-menu-wrap" aria-labelledby="l2_2" data-testid="header-navigation-menu-t3-item">
                    
                    <li class=" mh-list-menu-trigger">
                        <a href="//www.dell.com/en-in/work/learn/education?~ck=mn" class="mh-tier3-link mh-nav-hover " data-testid="header-navigation-menu-t3-item">Education</a>
                        
                    </li>
                    
                    <li class=" mh-list-menu-trigger">
                        <a href="//www.dell.com/en-in/work/learn/government?~ck=mn" class="mh-tier3-link mh-nav-hover " data-testid="header-navigation-menu-t3-item">Government</a>
                        
                    </li>
                    
                    <li class=" mh-list-menu-trigger">
                        <a href="//www.dell.com/en-in/work/learn/healthcare?~ck=mn" class="mh-tier3-link mh-nav-hover " data-testid="header-navigation-menu-t3-item">Healthcare</a>
                        
                    </li>
                    
                    <li class=" mh-list-menu-trigger">
                        <a href="//www.dell.com/en-in/work/learn/oem-industry-solutions?~ck=mn" class="mh-tier3-link mh-nav-hover " data-testid="header-navigation-menu-t3-item">Original Equipment Manufacturers</a>
                        
                    </li>
            </ul>

        </li>
    
    <li>
        <a href="//www.dell.com/en-in/work/learn/business-intelligence-big-data?~ck=mn" class="mh-tier3-link mh-nav-hover" tabindex="0" data-testid="header-navigation-menu-t1-sub-item">
            Big Data
        </a>
    </li>
    <li>
        <a href="//www.dell.com/en-in/work/learn/dell-cloud-computing?~ck=mn" class="mh-tier3-link mh-nav-hover" tabindex="0" data-testid="header-navigation-menu-t1-sub-item">
            Cloud
        </a>
    </li>
        <li class="mh-level-2-children mh-list-menu-trigger">
            <a href="//www.dell.com/en-in/work/learn/data-center?~ck=mn" class="mh-tier3-link mh-has-children mh-nav-hover" id="l2_5" tabindex="0" data-testid="header-navigation-menu-t1-sub-item">
                <span class="mh-has-content"> Data Centre</span>
            </a>

            <ul style="position: absolute; z-index: 1000;" class="mh-tier3 mh-list-menu-wrap" aria-labelledby="l2_5" data-testid="header-navigation-menu-t3-item">
                    
                    <li class=" mh-list-menu-trigger">
                        <a href="//www.dell.com/en-in/work/learn/data-center?~ck=mn" class="mh-tier3-link mh-nav-hover " data-testid="header-navigation-menu-t3-item">View All Data Centre</a>
                        
                    </li>
                    
                    <li class=" mh-list-menu-trigger">
                        <a href="//www.dell.com/en-in/work/learn/server-technology?~ck=mn" class="mh-tier3-link mh-nav-hover " data-testid="header-navigation-menu-t3-item">Data Centre - Servers</a>
                        
                    </li>
                    
                    <li class=" mh-list-menu-trigger">
                        <a href="//www.dell.com/en-in/work/learn/dell-storage?~ck=mn" class="mh-tier3-link mh-nav-hover " data-testid="header-navigation-menu-t3-item">Data Centre - Storage</a>
                        
                    </li>
                    
                    <li class=" mh-list-menu-trigger">
                        <a href="//www.dell.com/en-in/work/learn/networking?~ck=mn" class="mh-tier3-link mh-nav-hover " data-testid="header-navigation-menu-t3-item">Data Centre - Networking</a>
                        
                    </li>
                    
                    <li class=" mh-list-menu-trigger">
                        <a href="//www.dell.com/en-in/work/learn/modular-infrastructure?~ck=mn" class="mh-tier3-link mh-nav-hover " data-testid="header-navigation-menu-t3-item">Data Centre - Modular Infrastructure</a>
                        
                    </li>
                    
                    <li class=" mh-list-menu-trigger">
                        <a href="//www.dell.com/en-in/work/learn/converged-infrastructure?~ck=mn" class="mh-tier3-link mh-nav-hover " data-testid="header-navigation-menu-t3-item">Data Centre - Converged Infrastructure</a>
                        
                    </li>
                    
                    <li class=" mh-list-menu-trigger">
                        <a href="//www.dell.com/en-in/work/learn/high-performance-computing?~ck=mn" class="mh-tier3-link mh-nav-hover " data-testid="header-navigation-menu-t3-item">High Performance Computing</a>
                        
                    </li>
                    
                    <li class=" mh-list-menu-trigger">
                        <a href="//www.dell.com/en-in/work/learn/enterprise-systems-management?~ck=mn" class="mh-tier3-link mh-nav-hover " data-testid="header-navigation-menu-t3-item">OpenManage Systems Management</a>
                        
                    </li>
                    
                    <li class=" mh-list-menu-trigger">
                        <a href="//www.dell.com/en-in/work/learn/data-center-managed-services?~ck=mn" class="mh-tier3-link mh-nav-hover " data-testid="header-navigation-menu-t3-item">Data Centre Managed Services</a>
                        
                    </li>
                    
                    <li class=" mh-list-menu-trigger">
                        <a href="//www.dell.com/en-in/work/learn/extreme-scale-infrastructure?~ck=mn" class="mh-tier3-link mh-nav-hover " data-testid="header-navigation-menu-t3-item">Extreme Scale Infrastructure</a>
                        
                    </li>
            </ul>

        </li>
    
    <li>
        <a href="//www.dell.com/en-in/work/learn/virtual-client?~ck=mn" class="mh-tier3-link mh-nav-hover" tabindex="0" data-testid="header-navigation-menu-t1-sub-item">
            Desktop Virtualization
        </a>
    </li>
    <li>
        <a href="//www.dell.com/en-in/work/learn/internet-of-things-solutions?~ck=mn" class="mh-tier3-link mh-nav-hover" tabindex="0" data-testid="header-navigation-menu-t1-sub-item">
            Internet of Things
        </a>
    </li>
    <li>
        <a href="//www.dell.com/en-in/work/learn/mobility-dell-mobility-solutions?~ck=mn" class="mh-tier3-link mh-nav-hover" tabindex="0" data-testid="header-navigation-menu-t1-sub-item">
            Mobile
        </a>
    </li>
    <li>
        <a href="//www.dell.com/en-in/work/learn/security?~ck=mn" class="mh-tier3-link mh-nav-hover" tabindex="0" data-testid="header-navigation-menu-t1-sub-item">
            Security
        </a>
    </li>
    <li>
        <a href="//www.dell.com/en-in/work/learn/by-service-type-training-services?~ck=mn" class="mh-tier3-link mh-nav-hover" tabindex="0" data-testid="header-navigation-menu-t1-sub-item">
            Training &amp; Certification
        </a>
    </li>
        <li class="mh-level-2-children mh-list-menu-trigger">
            <a href="javascript:;" class="mh-tier3-link mh-has-children mh-nav-hover" id="l2_11" tabindex="0" data-testid="header-navigation-menu-t1-sub-item">
                <span class="mh-has-content"> Dell EMC Solutions</span>
            </a>

            <ul style="position: absolute; z-index: 1000;" class="mh-tier3 mh-list-menu-wrap" aria-labelledby="l2_11" data-testid="header-navigation-menu-t3-item">
                    
                    <li class=" mh-list-menu-trigger">
                        <a href="https://www.dellemc.com/hi-in/products-solutions/solutions.htm?~ck=mn" class="mh-tier3-link mh-nav-hover " data-testid="header-navigation-menu-t3-item">View All Dell EMC Solutions</a>
                        
                    </li>
                    
                    <li class=" mh-list-menu-trigger">
                        <a href="https://www.dellemc.com/hi-in/storage/discover-flash-storage/index.htm?~ck=mn" class="mh-tier3-link mh-nav-hover " data-testid="header-navigation-menu-t3-item">All-Flash</a>
                        
                    </li>
                    
                    <li class=" mh-list-menu-trigger">
                        <a href="https://www.dellemc.com/hi-in/converged-infrastructure/benefits.htm?~ck=mn" class="mh-tier3-link mh-nav-hover " data-testid="header-navigation-menu-t3-item">Converged Infrastructure</a>
                        
                    </li>
            </ul>

        </li>
    

                                   
            </ul>
                <a href="javascript:;" class="mh-close-focus" aria-hidden="true"></a>
            </li>
            
            <li class="mh-list-item-2" data-testid="header-navigation-menu-t1-item">
                <button class="mh-list-item-2-trigger" aria-haspopup="true" id="l1_2" tabindex="0"><a href="file:///Applications/index.html">
                    Services</a>
                </button>
            
            <li class="mh-list-item-2" data-testid="header-navigation-menu-t1-item">
                <button class="mh-list-item-2-trigger" aria-haspopup="true" id="l1_3" tabindex="0">
                    Support
                </button>
            <ul style="position: absolute; z-index: 1000;" class="mh-tier2  mh-dropdown-menu" aria-labelledby="l1_3" data-testid="header-navigation-menu-t2-item">


    <li>
        <a href="//www.dell.com/support/home/in/en/inbsd1?~ck=mn" class="mh-tier3-link mh-nav-hover" tabindex="0" data-testid="header-navigation-menu-t1-sub-item">
            View All Support
        </a>
    </li>
    <li>
        <a href="//www.dell.com/support/home/in/en/inbsd1?app=products&amp;~ck=mn" class="mh-tier3-link mh-nav-hover" tabindex="0" data-testid="header-navigation-menu-t1-sub-item">
            Product Support
        </a>
    </li>
    <li>
        <a href="//www.dell.com/support/home/in/en/inbsd1?app=knowledgebase&amp;~ck=mn" class="mh-tier3-link mh-nav-hover" tabindex="0" data-testid="header-navigation-menu-t1-sub-item">
            Knowledge Base
        </a>
    </li>
    <li>
        <a href="//www.dell.com/support/home/in/en/inbsd1?app=warranty&amp;~ck=mn" class="mh-tier3-link mh-nav-hover" tabindex="0" data-testid="header-navigation-menu-t1-sub-item">
            Warranty &amp; Contracts
        </a>
    </li>
    <li>
        <a href="//www.dell.com/support/incidents-online/in/en/inbsd1/srsearch?~ck=mn" class="mh-tier3-link mh-nav-hover" tabindex="0" data-testid="header-navigation-menu-t1-sub-item">
            Service Requests
        </a>
    </li>
    <li>
        <a href="//www.dell.com/support/Contents/in/en/inbsd1/category/eSupport-Order-support?~ck=mn" class="mh-tier3-link mh-nav-hover" tabindex="0" data-testid="header-navigation-menu-t1-sub-item">
            Order Support
        </a>
    </li>
    <li>
        <a href="//www.dell.com/support/contents/in/en/inbsd1/category/Contact-Information?~ck=mn" class="mh-tier3-link mh-nav-hover" tabindex="0" data-testid="header-navigation-menu-t1-sub-item">
            Contact Us
        </a>
    </li>

                                   
            </ul>
                <a href="javascript:;" class="mh-close-focus" aria-hidden="true"></a>
            </li>
            
            <li class="mh-list-item-2" data-testid="header-navigation-menu-t1-item">
                <button class="mh-list-item-2-trigger" aria-haspopup="true" id="l1_4" tabindex="0">
                    Deals
                </button>
            <ul style="position: absolute; z-index: 1000;" class="mh-tier2  mh-dropdown-menu" aria-labelledby="l1_4" data-testid="header-navigation-menu-t2-item">


        <li class="mh-level-2-children mh-img-menu-trigger">
            <a href="javascript:;" class="mh-tier3-link mh-has-children mh-nav-hover" id="l2_4" tabindex="0" data-testid="header-navigation-menu-t1-sub-item">
                <span class="mh-has-content"> Laptop Deals</span>
            </a>

            <ul class="mh-tier3 mh-img-menu-wrap" aria-labelledby="l2_4" data-testid="header-navigation-menu-t3-item">
                    <li class="mh-image-item mh-nav-hover">
                        <a href="//www.dell.com/en-in/shop/deals/popular-laptop-deals?~ck=mn" tabindex="0" data-testid="header-navigation-menu-t3-item">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' %3E%3Crect x='1' y='1' width='-3' height='-3'/%3E%3C/svg%3E" mh-lazy-src="//i.dell.com/sites/csimages/Merchandizing_Imagery/en/20135-home-inspiron-15-5570-115x75-v3.png" mh-lazy-prior="low" alt="View all Laptop Deals for Home" width="115" height="75" onerror="this.style.display = 'none'" />
                            <span class="mh-img-caption">For Home</span>
                            <span class="mh-img-subtitle">View all Laptop Deals for Home</span>
                        </a>
                    </li>
                    
                    <li class="mh-image-item mh-nav-hover">
                        <a href="//www.dell.com/en-in/work/shop/deals/laptop-deals?~ck=mn" tabindex="0" data-testid="header-navigation-menu-t3-item">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' %3E%3Crect x='1' y='1' width='-3' height='-3'/%3E%3C/svg%3E" mh-lazy-src="//i.dell.com/sites/csimages/Merchandizing_Imagery/en/Masthead-LT-For-Work-115x75.png" mh-lazy-prior="low" alt="View all Laptop Deals for Work" width="115" height="75" onerror="this.style.display = 'none'" />
                            <span class="mh-img-caption">For Work</span>
                            <span class="mh-img-subtitle">View all Laptop Deals for Work</span>
                        </a>
                    </li>
                    
            </ul>

        </li>
    
        <li class="mh-level-2-children mh-img-menu-trigger">
            <a href="javascript:;" class="mh-tier3-link mh-has-children mh-nav-hover" id="l2_5" tabindex="0" data-testid="header-navigation-menu-t1-sub-item">
                <span class="mh-has-content"> Desktop Deals</span>
            </a>

            <ul class="mh-tier3 mh-img-menu-wrap" aria-labelledby="l2_5" data-testid="header-navigation-menu-t3-item">
                    <li class="mh-image-item mh-nav-hover">
                        <a href="//www.dell.com/en-in/shop/deals/popular-desktop-deals?~ck=mn" tabindex="0" data-testid="header-navigation-menu-t3-item">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' %3E%3Crect x='1' y='1' width='-3' height='-3'/%3E%3C/svg%3E" mh-lazy-src="//i.dell.com/sites/csimages/Merchandizing_Imagery/en/20135-home-desktop-inspiron-3670-aio-3477-115x75-v2.png" mh-lazy-prior="low" alt="View all Desktop Deals for Home" width="115" height="75" onerror="this.style.display = 'none'" />
                            <span class="mh-img-caption">For Home</span>
                            <span class="mh-img-subtitle">View all Desktop Deals for Home</span>
                        </a>
                    </li>
                    
                    <li class="mh-image-item mh-nav-hover">
                        <a href="//www.dell.com/en-in/work/shop/deals/desktop-deals?~ck=mn" tabindex="0" data-testid="header-navigation-menu-t3-item">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' %3E%3Crect x='1' y='1' width='-3' height='-3'/%3E%3C/svg%3E" mh-lazy-src="//i.dell.com/sites/csimages/Merchandizing_Imagery/en/Masthead-DT-For-Work-115x75.png" mh-lazy-prior="low" alt="View all Desktop Deals for Work" width="115" height="75" onerror="this.style.display = 'none'" />
                            <span class="mh-img-caption">For Work</span>
                            <span class="mh-img-subtitle">View all Desktop Deals for Work</span>
                        </a>
                    </li>
                    
            </ul>

        </li>
    

                                   
            </ul>
                <a href="javascript:;" class="mh-close-focus" aria-hidden="true"></a>
            </li>
            
            
            <li class="mh-list-item-2" data-testid="header-navigation-menu-t1-item">
                <a href="https://www.dellretailstores.in/?~ck=mn" class="mh-list-item-2-trigger">
                    Find a Store
                </a>

            </li>
                    <li class="mh-list-item-2 virtualChatAnchor" style="display:none;" tabindex="0">
                <a href="javascript:;" class="mh-list-item-2-trigger virtualChatAnchor dellmetrics-masthead" data-testid="header-chat-with-ava-link" tabindex="-1">
                    <span data-testid="tier1_items">
                        <em> Chat with Ava</em>
                    </span>
                </a>
            </li>
    </ul>
</nav>



    </div>
    

<div class="mh-mobile-pane">
    <button class="mh-hidden-menu-trigger"></button>
    <div class="mh-mobile-navigation">
        <ul class="mh-mn-tier1" tabindex="0">
                <li>
                    <a href="javascript:;" id="mn1_0" role="button" class="mh-mn-has-children">
                        Products
                    </a>
                    <ul class="mh-mn-tier2" aria-labelledby="mn1_0">

    <li>
        <a href="javascript:;" id="mn2_0" role="button" class="mh-mn-has-children">
            Laptops
        </a>
        <ul class="mh-mn-tier3" aria-labelledby="mn2_0">
                <li>
                    <a href="//www.dell.com/en-in/shop/scc/sc/laptops?~ck=mn">
                        For Home
                    </a>
                </li>
                <li>
                    <a href="//www.dell.com/en-in/work/shop/scc/sc/laptops?~ck=mn">
                        For Work
                    </a>
                </li>
        </ul>
    </li>
    <li>
        <a href="javascript:;" id="mn2_0" role="button" class="mh-mn-has-children">
            Desktops &amp; All-in-One PCs
        </a>
        <ul class="mh-mn-tier3" aria-labelledby="mn2_0">
                <li>
                    <a href="//www.dell.com/en-in/shop/scc/sc/desktops?~ck=mn">
                        For Home
                    </a>
                </li>
                <li>
                    <a href="//www.dell.com/en-in/work/shop/scc/sc/desktops?~ck=mn">
                        For Work
                    </a>
                </li>
        </ul>
    </li>
    <li>
        <a href="javascript:;" id="mn2_0" role="button" class="mh-mn-has-children">
            Tablets &amp; 2-in-1 Laptops
        </a>
        <ul class="mh-mn-tier3" aria-labelledby="mn2_0">
                <li>
                    <a href="//www.dell.com/en-in/shop/scc/sc/dell-tablets?~ck=mn">
                        For Home
                    </a>
                </li>
                <li>
                    <a href="//www.dell.com/en-in/work/shop/scc/sc/dell-tablets?~ck=mn">
                        For Work
                    </a>
                </li>
        </ul>
    </li>
    <li>
        <a href="javascript:;" id="mn2_0" role="button" class="mh-mn-has-children">
            Gaming
        </a>
        <ul class="mh-mn-tier3" aria-labelledby="mn2_0">
                <li>
                    <a href="//www.dell.com/en-in/gaming/alienware?~ck=mn">
                        Alienware PCs
                    </a>
                </li>
                <li>
                    <a href="//www.dell.com/en-in/shop/gaming-and-games/cp/game?~ck=mn">
                        Dell Gaming
                    </a>
                </li>
        </ul>
    </li>
    <li>
        <a href="//www.dell.com/en-in/work/shop/scc/sc/workstations?~ck=mn" id="mn2_0" role="link" class="">
            Workstations
        </a>
        
    </li>
    <li>
        <a href="//www.dell.com/en-in/work/shop/ecat/enterprise-products?~ck=mn" id="mn2_0" role="link" class="">
            Servers &amp; Storage
        </a>
        
    </li>
    <li>
        <a href="//www.dell.com/en-in/work/shop/scc/sc/networking-products?~ck=mn" id="mn2_0" role="link" class="">
            Networking
        </a>
        
    </li>
    <li>
        <a href="javascript:;" id="mn2_0" role="button" class="mh-mn-has-children">
            Monitors
        </a>
        <ul class="mh-mn-tier3" aria-labelledby="mn2_0">
                <li>
                    <a href="//www.dell.com/en-in/shop/monitors-monitor-accessories/ac/4009?~ck=mn">
                        For Home
                    </a>
                </li>
                <li>
                    <a href="//www.dell.com/en-in/work/shop/monitors-monitor-accessories/ac/4009?~ck=mn">
                        For Work
                    </a>
                </li>
        </ul>
    </li>
    <li>
        <a href="javascript:;" id="mn2_0" role="button" class="mh-mn-has-children">
            Electronics &amp; Accessories
        </a>
        <ul class="mh-mn-tier3" aria-labelledby="mn2_0">
                <li>
                    <a href="//www.dell.com/en-in/shop/accessories?~ck=mn">
                        For Home
                    </a>
                </li>
                <li>
                    <a href="//www.dell.com/en-in/work/shop/accessories?~ck=mn">
                        For Work
                    </a>
                </li>
        </ul>
    </li>

                                            </ul>
                </li>
                <li>
                    <a href="javascript:;" id="mn1_1" role="button" class="mh-mn-has-children">
                        Solutions
                    </a>
                    <ul class="mh-mn-tier2" aria-labelledby="mn1_1">

    <li>
        <a href="//www.dell.com/en-in/work/learn/large-enterprise-solutions?~ck=mn" id="mn2_1" role="link" class="">
            View All Solutions
        </a>
        
    </li>
    <li>
        <a href="javascript:;" id="mn2_1" role="button" class="mh-mn-has-children">
            Industries
        </a>
        <ul class="mh-mn-tier3" aria-labelledby="mn2_1">
                <li>
                    <a href="//www.dell.com/en-in/work/learn/education?~ck=mn">
                        Education
                    </a>
                </li>
                <li>
                    <a href="//www.dell.com/en-in/work/learn/government?~ck=mn">
                        Government
                    </a>
                </li>
                <li>
                    <a href="//www.dell.com/en-in/work/learn/healthcare?~ck=mn">
                        Healthcare
                    </a>
                </li>
                <li>
                    <a href="//www.dell.com/en-in/work/learn/oem-industry-solutions?~ck=mn">
                        Original Equipment Manufacturers
                    </a>
                </li>
        </ul>
    </li>
    <li>
        <a href="//www.dell.com/en-in/work/learn/business-intelligence-big-data?~ck=mn" id="mn2_1" role="link" class="">
            Big Data
        </a>
        
    </li>
    <li>
        <a href="//www.dell.com/en-in/work/learn/dell-cloud-computing?~ck=mn" id="mn2_1" role="link" class="">
            Cloud
        </a>
        
    </li>
    <li>
        <a href="javascript:;" id="mn2_1" role="button" class="mh-mn-has-children">
            Data Centre
        </a>
        <ul class="mh-mn-tier3" aria-labelledby="mn2_1">
                <li>
                    <a href="//www.dell.com/en-in/work/learn/data-center?~ck=mn">
                        View All Data Centre
                    </a>
                </li>
                <li>
                    <a href="//www.dell.com/en-in/work/learn/server-technology?~ck=mn">
                        Data Centre - Servers
                    </a>
                </li>
                <li>
                    <a href="//www.dell.com/en-in/work/learn/dell-storage?~ck=mn">
                        Data Centre - Storage
                    </a>
                </li>
                <li>
                    <a href="//www.dell.com/en-in/work/learn/networking?~ck=mn">
                        Data Centre - Networking
                    </a>
                </li>
                <li>
                    <a href="//www.dell.com/en-in/work/learn/modular-infrastructure?~ck=mn">
                        Data Centre - Modular Infrastructure
                    </a>
                </li>
                <li>
                    <a href="//www.dell.com/en-in/work/learn/converged-infrastructure?~ck=mn">
                        Data Centre - Converged Infrastructure
                    </a>
                </li>
                <li>
                    <a href="//www.dell.com/en-in/work/learn/high-performance-computing?~ck=mn">
                        High Performance Computing
                    </a>
                </li>
                <li>
                    <a href="//www.dell.com/en-in/work/learn/enterprise-systems-management?~ck=mn">
                        OpenManage Systems Management
                    </a>
                </li>
                <li>
                    <a href="//www.dell.com/en-in/work/learn/data-center-managed-services?~ck=mn">
                        Data Centre Managed Services
                    </a>
                </li>
                <li>
                    <a href="//www.dell.com/en-in/work/learn/extreme-scale-infrastructure?~ck=mn">
                        Extreme Scale Infrastructure
                    </a>
                </li>
        </ul>
    </li>
    <li>
        <a href="//www.dell.com/en-in/work/learn/virtual-client?~ck=mn" id="mn2_1" role="link" class="">
            Desktop Virtualization
        </a>
        
    </li>
    <li>
        <a href="//www.dell.com/en-in/work/learn/internet-of-things-solutions?~ck=mn" id="mn2_1" role="link" class="">
            Internet of Things
        </a>
        
    </li>
    <li>
        <a href="//www.dell.com/en-in/work/learn/mobility-dell-mobility-solutions?~ck=mn" id="mn2_1" role="link" class="">
            Mobile
        </a>
        
    </li>
    <li>
        <a href="//www.dell.com/en-in/work/learn/security?~ck=mn" id="mn2_1" role="link" class="">
            Security
        </a>
        
    </li>
    <li>
        <a href="//www.dell.com/en-in/work/learn/by-service-type-training-services?~ck=mn" id="mn2_1" role="link" class="">
            Training &amp; Certification
        </a>
        
    </li>
    <li>
        <a href="javascript:;" id="mn2_1" role="button" class="mh-mn-has-children">
            Dell EMC Solutions
        </a>
        <ul class="mh-mn-tier3" aria-labelledby="mn2_1">
                <li>
                    <a href="https://www.dellemc.com/hi-in/products-solutions/solutions.htm?~ck=mn">
                        View All Dell EMC Solutions
                    </a>
                </li>
                <li>
                    <a href="https://www.dellemc.com/hi-in/storage/discover-flash-storage/index.htm?~ck=mn">
                        All-Flash
                    </a>
                </li>
                <li>
                    <a href="https://www.dellemc.com/hi-in/converged-infrastructure/benefits.htm?~ck=mn">
                        Converged Infrastructure
                    </a>
                </li>
        </ul>
    </li>

                                            </ul>
                </li>
                <li>
                    <a href="./all products/index.html" id="mn1_2" role="button" class="mh-mn-has-children">
                        Services
                    </a>
                   
                </li>
                <li>
                    <a href="javascript:;" id="mn1_3" role="button" class="mh-mn-has-children">
                        Support
                    </a>
                    <ul class="mh-mn-tier2" aria-labelledby="mn1_3">

    <li>
        <a href="//www.dell.com/support/home/in/en/inbsd1?~ck=mn" id="mn2_3" role="link" class="">
            View All Support
        </a>
        
    </li>
    <li>
        <a href="//www.dell.com/support/home/in/en/inbsd1?app=products&amp;~ck=mn" id="mn2_3" role="link" class="">
            Product Support
        </a>
        
    </li>
    <li>
        <a href="//www.dell.com/support/home/in/en/inbsd1?app=knowledgebase&amp;~ck=mn" id="mn2_3" role="link" class="">
            Knowledge Base
        </a>
        
    </li>
    <li>
        <a href="//www.dell.com/support/home/in/en/inbsd1?app=warranty&amp;~ck=mn" id="mn2_3" role="link" class="">
            Warranty &amp; Contracts
        </a>
        
    </li>
    <li>
        <a href="//www.dell.com/support/incidents-online/in/en/inbsd1/srsearch?~ck=mn" id="mn2_3" role="link" class="">
            Service Requests
        </a>
        
    </li>
    <li>
        <a href="//www.dell.com/support/Contents/in/en/inbsd1/category/eSupport-Order-support?~ck=mn" id="mn2_3" role="link" class="">
            Order Support
        </a>
        
    </li>
    <li>
        <a href="//www.dell.com/support/contents/in/en/inbsd1/category/Contact-Information?~ck=mn" id="mn2_3" role="link" class="">
            Contact Us
        </a>
        
    </li>

                                            </ul>
                </li>
                <li>
                    <a href="javascript:;" id="mn1_4" role="button" class="mh-mn-has-children">
                        Deals
                    </a>
                    <ul class="mh-mn-tier2" aria-labelledby="mn1_4">

    <li>
        <a href="javascript:;" id="mn2_4" role="button" class="mh-mn-has-children">
            Laptop Deals
        </a>
        <ul class="mh-mn-tier3" aria-labelledby="mn2_4">
                <li>
                    <a href="//www.dell.com/en-in/shop/deals/popular-laptop-deals?~ck=mn">
                        For Home
                    </a>
                </li>
                <li>
                    <a href="//www.dell.com/en-in/work/shop/deals/laptop-deals?~ck=mn">
                        For Work
                    </a>
                </li>
        </ul>
    </li>
    <li>
        <a href="javascript:;" id="mn2_4" role="button" class="mh-mn-has-children">
            Desktop Deals
        </a>
        <ul class="mh-mn-tier3" aria-labelledby="mn2_4">
                <li>
                    <a href="//www.dell.com/en-in/shop/deals/popular-desktop-deals?~ck=mn">
                        For Home
                    </a>
                </li>
                <li>
                    <a href="//www.dell.com/en-in/work/shop/deals/desktop-deals?~ck=mn">
                        For Work
                    </a>
                </li>
        </ul>
    </li>

                                            </ul>
                </li>
                <li>
                    <a href="https://www.dellretailstores.in/?~ck=mn" id="mn1_5" role="link" class="">
                        Find a Store
                    </a>
                    
                </li>
                            <li class="virtualChatAnchor" style="display:none;">
                    <a href="javascript:;" id="mh-mobile-ava" style="display:none;" class="virtualChatAnchor dellmetrics-masthead" data-testid="header-chat-with-ava-link" tabindex="-1">
                        <span data-testid="tier1_items">
                            <em> Chat with Ava</em>
                        </span>
                    </a>
                </li>
        </ul>
    </div>
</div>

<div id="mySidenav" class="sidenav">

  <a href="#" id="contact">Contact</a>


</div></div class="container">




  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    width: (100%-5px);
    height: : 70%;
    background-color: lightblue;
  }
  </style>

<div class="container">
  <h2></h2>
  <div id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li class="item1 active"></li>
      <li class="item2"></li>
      <li class="item3"></li>
      <li class="item4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="https://qph.fs.quoracdn.net/main-qimg-4b5fd2e361796732ff9fb119d383d945" width="700" height="290">
        <div class="carousel-caption">
          <h3>Get the latest to perform the fastest</h3>
        </div>
      </div>

      <div class="item">
        <img src="https://i.pinimg.com/originals/55/ff/af/55ffafc6dcb30c81d42cd063166b4c2c.jpg" alt="PCs" width="800" height="250">
        <div class="carousel-caption">
          <h3>India's #1 Leading Brand.</h3>
        </div>
      </div>
    
      <div class="item">
        <img src="https://www.windowscentral.com/sites/wpcentral.com/files/styles/w1600h900crop/public/field/image/2018/06/inspiron-15-7570-display-01.jpg?itok=G5yy2jez" alt="Dell" width="700" height="300">
        <div class="carousel-caption">
          <h3>PCs Laptops and more</h3>
          <p>Premium.Powerful.Productive</p>
        </div>
      </div>

      <div class="item">
        <img src="https://www.roche.com/.imaging/mte/roche-theme/16-9-medium-740-416/dam/com/careers/Countries/Germany/Service/Blog/de-ser-blog-customersupport.zip/de-ser-blog-customersupport-740.jpg/jcr:content/de-ser-blog-customersupport-740.jpg" alt="Laptops" width="700" height="300">
        <div class="carousel-caption">
         
        </div>
      </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

    
       </div>
   </div>
</div>

<script>
$(document).ready(function(){
  // Activate Carousel
  $("#myCarousel").carousel();
    
  // Enable Carousel Indicators
  $(".item1").click(function(){
    $("#myCarousel").carousel(0);
  });
  $(".item2").click(function(){
    $("#myCarousel").carousel(1);
  });
  $(".item3").click(function(){
    $("#myCarousel").carousel(2);
  });
  $(".item4").click(function(){
    $("#myCarousel").carousel(3);
  });
    
  // Enable Carousel Controls
  $(".left").click(function(){
    $("#myCarousel").carousel("prev");
  });
  $(".right").click(function(){
    $("#myCarousel").carousel("next");
  });
});
</script>

<div class="demo bottomright">
<div class="floating">
   <img id="chat" src="https://previews.123rf.com/images/fokaspokas/fokaspokas1803/fokaspokas180300761/97181760-chat-icon-white-flat-icon-with-long-shadow-in-circle-on-transparent-background.jpg" height="50" width="50">
</div>
</div>

<div background-color="white">
    <div class="dellhome-category-strip-module">
    <h2 title="Browse Popular Products">Browse Popular Products</h2>
    <div class="dellhome-category-strip-container">
                    <div class="dellhome-category-strip-categoryitem dellhome-modal" data-toggle="popover" data-original-title="" title="">
                        <a>
                            <img hp-lazy-prior="medium" onerror="this.style.display='none'" src="//i.dell.com/sites/imagecontent/app-merchandizing/responsive/HomePage/en/PublishingImages/150-x-120_laptop.jpg" class="dds__img-fluid dellhome-category-strip-item-img" alt="Laptops">
                            <h3 class="dellhome-header-link-text dds__h4">
                                Laptops
                            </h3>
                        </a>
                    </div>
                    <div class="dellhome-category-strip-categorypopup" data-content="popover">
<div class="dellhome-category-strip-modal">
    <img class="dellhome-modal-close" src="//afcs.dellcdn.com/csb/homepage/bundles/1.0.0.2927/images/close-gray.svg">
    <div class="dellhome-category-strip-modal-container">
        <div class="dellhome-category-strip-modal-item">
            <a href="https://www.dell.com/en-in/shop/laptops-2-in-1-pcs/sc/laptops" target="_self">
                <img src="//i.dell.com/das/dih.ashx/189w/sites/imagecontent/consumer/merchandizing/en/publishingimages/magnum-category/homepage/21507-home-inspiron-3147-xps-15-165x130.png" hp-lazy-prior="medium" onerror="this.style.display='none'" alt="View all Laptops for Home">
            </a>
            <a href="https://www.dell.com/en-in/shop/laptops-2-in-1-pcs/sc/laptops" target="_self">
                <h4>
                    For Home
                </h4>
                <p>
                    View all Laptops for Home
                </p>
            </a>
        </div>
        <div class="dellhome-category-strip-modal-item">
            <a href="https://www.dell.com/en-in/work/shop/business-laptop-notebook-computers/sc/laptops" target="_self">
                <img src="//i.dell.com/das/dih.ashx/189w/sites/imagecontent/business/smb/publishingimages/responsive/laptops-262x200.png" hp-lazy-prior="medium" onerror="this.style.display='none'" alt="View all Laptops for Work">
            </a>
            <a href="https://www.dell.com/en-in/work/shop/business-laptop-notebook-computers/sc/laptops" target="_self">
                <h4>
                    For Work
                </h4>
                <p>
                    View all Laptops for Work
                </p>
            </a>
        </div>
    </div>
</div>
</div>
</div>
                    <div class="dellhome-category-strip-categoryitem dellhome-modal" data-toggle="popover" data-original-title="" title="">
                        <a>
                            <img hp-lazy-prior="medium" onerror="this.style.display='none'" src="//i.dell.com/sites/imagecontent/app-merchandizing/responsive/HomePage/en/PublishingImages/150-x-120_Desktop.jpg" class="dds__img-fluid dellhome-category-strip-item-img" alt="Desktops &amp; AIOs">
                            <h3 class="dellhome-header-link-text dds__h4">
                                Desktops &amp; AIOs
                            </h3>
                        </a>
                    </div>
                    <div class="dellhome-category-strip-categorypopup" data-content="popover">
<div class="dellhome-category-strip-modal">
    <img class="dellhome-modal-close" src="//afcs.dellcdn.com/csb/homepage/bundles/1.0.0.2927/images/close-gray.svg">
    <div class="dellhome-category-strip-modal-container">
        <div class="dellhome-category-strip-modal-item">
            <a href="https://www.dell.com/en-in/shop/desktops-all-in-ones/sc/desktops" target="_self">
                <img src="//i.dell.com/das/dih.ashx/189w/sites/imagecontent/consumer/merchandizing/en/publishingimages/magnum-category/inspiron-3252-small-desktop-3650-169x149.png%20%20" hp-lazy-prior="medium" onerror="this.style.display='none'" alt="View all Desktops for Home">
            </a>
            <a href="https://www.dell.com/en-in/shop/desktops-all-in-ones/sc/desktops" target="_self">
                <h4>
                    For Home
                </h4>
                <p>
                    View all Desktops for Home
                </p>
            </a>
        </div>
        <div class="dellhome-category-strip-modal-item">
            <a href="https://www.dell.com/en-in/work/shop/business-pcs-desktop-computers/sc/desktops" target="_self">
                <img src="//i.dell.com/das/dih.ashx/189w/sites/imagecontent/business/smb/publishingimages/responsive/desktop-workstations-262x200.png" hp-lazy-prior="medium" onerror="this.style.display='none'" alt="View all Desktop for Work">
            </a>
            <a href="https://www.dell.com/en-in/work/shop/business-pcs-desktop-computers/sc/desktops" target="_self">
                <h4>
                    For Work
                </h4>
                <p>
                    View all Desktop for Work
                </p>
            </a>
        </div>
    </div>
</div>
</div>
                    <a class="dellhome-category-strip-categoryitem" href="//www.dell.com/en-in/work/shop/cty/sc/workstations?~ck=mn" target="_self">
                        <img src="//i.dell.com/sites/imagecontent/app-merchandizing/responsive/HomePage/en/PublishingImages/150-x-120_Workstation.jpg" hp-lazy-prior="medium" onerror="this.style.display='none'" class="dds__img-fluid dellhome-category-strip-item-img" alt="Workstations">
                        <h3 class="dellhome-header-link-text dds__h4">
                            Workstations
                        </h3>
                    </a>
                    <a class="dellhome-category-strip-categoryitem" href="//www.dell.com/en-in/work/shop/dell-poweredge-servers/sc/servers" target="_self">
                        <img src="//i.dell.com/sites/imagecontent/app-merchandizing/responsive/HomePage/en/PublishingImages/150-x-120_Servers.jpg" hp-lazy-prior="medium" onerror="this.style.display='none'" class="dds__img-fluid dellhome-category-strip-item-img" alt="Servers">
                        <h3 class="dellhome-header-link-text dds__h4">
                            Servers
                        </h3>
                    </a>
                    <div class="dellhome-category-strip-categoryitem dellhome-modal" data-toggle="popover" data-original-title="" title="">
                        <a>
                            <img hp-lazy-prior="medium" onerror="this.style.display='none'" src="//i.dell.com/sites/imagecontent/app-merchandizing/responsive/HomePage/en/PublishingImages/150-x-120_Monitor.jpg" class="dds__img-fluid dellhome-category-strip-item-img" alt="Monitors">
                            <h3 class="dellhome-header-link-text dds__h4">
                                Monitors
                            </h3>
                        </a>
                    </div>
                    <div class="dellhome-category-strip-categorypopup" data-content="popover">
<div class="dellhome-category-strip-modal">
    <img class="dellhome-modal-close" src="//afcs.dellcdn.com/csb/homepage/bundles/1.0.0.2927/images/close-gray.svg">
    <div class="dellhome-category-strip-modal-container">
        <div class="dellhome-category-strip-modal-item">
            <a href="https://www.dell.com/en-in/shop/monitors-monitor-accessories/ac/4009" target="_self">
                <img src="//i.dell.com/das/dih.ashx/189w/sites/imagecontent/app-merchandizing/responsive/homepage/en/publishingimages/24042-ena-monitor-s2718d-115x75.png" hp-lazy-prior="medium" onerror="this.style.display='none'" alt="Monitors &amp; Monitor Accessories">
            </a>
            <a href="https://www.dell.com/en-in/shop/monitors-monitor-accessories/ac/4009" target="_self">
                <h4>
                    For Home
                </h4>
                <p>
                    View all Monitors for Home
                </p>
            </a>
        </div>
        <div class="dellhome-category-strip-modal-item">
            <a href="https://www.dell.com/en-in/work/shop/monitors-monitor-accessories/ac/4009" target="_self">
                <img src="//i.dell.com/das/dih.ashx/189w/sites/csimages/merchandizing_imagery/all/monitors-for-work.png" hp-lazy-prior="medium" onerror="this.style.display='none'" alt="Monitors &amp; Monitor Accessories">
            </a>
            <a href="https://www.dell.com/en-in/work/shop/monitors-monitor-accessories/ac/4009" target="_self">
                <h4>
                    For Work
                </h4>
                <p>
                    View all Monitors for Work
                </p>
            </a>
        </div>
    </div>
</div>
</div>
                    <div class="dellhome-category-strip-categoryitem dellhome-modal" data-toggle="popover" data-original-title="" title="">
                        <a>
                            <img hp-lazy-prior="medium" onerror="this.style.display='none'" src="//i.dell.com/sites/imagecontent/app-merchandizing/responsive/HomePage/en/PublishingImages/150-x-120_Accessories.jpg" class="dds__img-fluid dellhome-category-strip-item-img" alt="PC Accessories">
                            <h3 class="dellhome-header-link-text dds__h4">
                                PC Accessories
                            </h3>
                        </a>
                    </div>
                    <div class="dellhome-category-strip-categorypopup" data-content="popover">
<div class="dellhome-category-strip-modal">
    <img class="dellhome-modal-close" src="//afcs.dellcdn.com/csb/homepage/bundles/1.0.0.2927/images/close-gray.svg">
    <div class="dellhome-category-strip-modal-container">
        <div class="dellhome-category-strip-modal-item">
            <a href="https://www.dell.com/en-in/shop/pc-accessories/ac/5436" target="_self">
                <img src="//i.dell.com/das/dih.ashx/189w/sites/csimages/merchandizing_imagery/all/ena-for-home.png" hp-lazy-prior="medium" onerror="this.style.display='none'" alt="PC Accessories">
            </a>
            <a href="https://www.dell.com/en-in/shop/pc-accessories/ac/5436" target="_self">
                <h4>
                    For Home
                </h4>
                <p>
                    View all PC Accessories for Home
                </p>
            </a>
        </div>
        <div class="dellhome-category-strip-modal-item">
            <a href="https://www.dell.com/en-in/work/shop/pc-accessories/ac/5436" target="_self">
                <img src="//i.dell.com/das/dih.ashx/189w/sites/csimages/merchandizing_imagery/all/ena-for-work.png" hp-lazy-prior="medium" onerror="this.style.display='none'" alt="PC Accessories">
            </a>
            <a href="https://www.dell.com/en-in/work/shop/pc-accessories/ac/5436" target="_self">
                <h4>
                    For Work
                </h4>
                <p>
                    View all PC Accessories for Work
                </p>
            </a>
        </div>
    </div>
</div>
</div>
        </div>
</div>


<style>[component=footer] *,[component=valueprop] *{-webkit-box-sizing:border-box;box-sizing:border-box}[component=footer] a,[component=valueprop] a{text-decoration:none}[component=footer] .mh-container,[component=valueprop] .mh-container{margin-top: 10px;margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px;width:100%}@media only screen and (min-width:991px){[component=footer] .mh-container,[component=valueprop] .mh-container{width:970px}}@media only screen and (min-width:1200px){[component=footer] .mh-container,[component=valueprop] .mh-container{width:1170px}}[component=footer] ul{margin:0;padding:0;list-style:none}[component=footer] .ft-contextual-links-wrap{background:#eee;border-top:1px solid rgba(0,0,0,.2)}@media only screen and (min-width:767px){[component=footer] .ft-contextual-links-wrap{padding:12px 10px}}[component=footer] .ft-contextual-links-wrap a{color:#444;line-height:normal}[component=footer] .ft-contextual-links-wrap a:visited{color:#444}[component=footer] .ft-contextual-links-wrap a:hover{color:#00447c}[component=footer] .ft-contextual-links-wrap .mh-container{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;padding:0}@media only screen and (min-width:767px){[component=footer] .ft-contextual-links-wrap .mh-container{padding:0 15px;-ms-flex-line-pack:center;align-content:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row}}[component=footer] .ft-contextual-links-wrap .mh-container>ul{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:nowrap;flex-wrap:nowrap;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}[component=footer] .ft-contextual-links-wrap .mh-container>ul>li{line-height:normal;padding:12px 20px;border-bottom:1px solid #aaa}@media only screen and (min-width:767px){[component=footer] .ft-contextual-links-wrap .mh-container>ul{-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row}[component=footer] .ft-contextual-links-wrap .mh-container>ul>li{margin-right:13px;padding:3px 0 0;border:0}}[component=footer] .ft-contextual-links-wrap .mh-container>ul>li:last-child{margin-right:0}[component=footer] .ft-contextual-links-wrap .footer-item-container{padding:12px 20px}[component=footer] .ft-contextual-links-wrap .footer-item-container .mh-locale.mh-local-bottom>div:nth-child(1) img{margin-left:0}[component=footer] .ft-legal-links-wrap{background:#007db8;padding:0}[component=footer] .ft-legal-links-wrap a{color:#eee;font-size:14px;display:inline}@media only screen and (min-width:767px){[component=footer] .ft-contextual-links-wrap .footer-item-container{padding:0}[component=footer] .ft-legal-links-wrap{padding:12px 10px}[component=footer] .ft-legal-links-wrap a{font-size:11px;padding:2px 6px}}[component=footer] .ft-legal-links-wrap a:visited{color:#eee}[component=footer] .ft-legal-links-wrap .mh-container{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:nowrap;flex-wrap:nowrap;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;padding:0}@media only screen and (min-width:767px){[component=footer] .ft-legal-links-wrap .mh-container{padding:0 15px;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row;-ms-flex-wrap:wrap;flex-wrap:wrap}}[component=footer] .ft-legal-links-wrap .mh-container>li{padding:10px 20px;border-bottom:1px solid #5eb0d7}@media only screen and (min-width:767px){[component=footer] .ft-legal-links-wrap .mh-container>li{margin-right:2px;border:0;padding:0}}[component=footer] .ft-legal-links-wrap .mh-container>li:last-child{margin-right:0}[component=footer] a.toolbar_feedback{background:url(https://afcs.dellcdn.com/content_home/img/feedback.gif) top 5px left no-repeat;padding-left:15px}@media only screen and (min-width:767px){[component=footer] a.toolbar_feedback{margin-left:10px;padding:2px 6px 2px 15px}}[component=footer] .ft-birdseed-wrap{background:#007db8;font-size:11px;color:#66b2d6;padding:20px;border-top:1px solid #1387bd}[component=footer] .ft-birdseed-wrap a,[component=footer] .ft-birdseed-wrap a:visited{color:#66b2d6}.cf-dell-text{color:#007db8}[component=valueprop] .ft-value-prop{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;border-color:#ccc;background-color:#eee}[component=valueprop] .ft-value-prop img{-ms-flex-item-align:center;align-self:center}[component=valueprop] .ft-value-prop a{border-top:1px solid #ccc;text-align:center;white-space:inherit}[component=valueprop] .ft-value-prop a:hover{background-color:#fff}[component=valueprop] .ft-value-prop span{font-weight:400}[component=valueprop] .ft-value-prop p{font-weight:100;color:#444}@media only screen and (max-width:767px){[component=valueprop] .ft-value-prop a{text-decoration:none;width:100%;height:100%;display:block;min-height:80px;border-top:1px solid #ddd;text-align:left;padding:0 15px}[component=valueprop] .ft-value-prop a:last-child{border-bottom-color:#ddd;border-bottom-style:solid;border-bottom-width:1px}[component=valueprop] .ft-value-prop div:first-child{float:left;-ms-flex-item-align:center;align-self:center;width:83px;text-align:center;padding:20px 20px 0 0;margin-bottom:15px}[component=valueprop] .ft-value-prop img{margin-left:auto;margin-right:auto;width:45px;height:35px}[component=valueprop] .ft-value-prop span{color:#007db8;display:block;margin-bottom:5px;font-size:14px;padding-top:12px}[component=valueprop] .ft-value-prop p{display:-webkit-box;display:-ms-flexbox;display:flex;line-height:16px;font-size:12px;margin-top:0;margin-bottom:16px}}@media only screen and (min-width:767px){[component=valueprop] .ft-value-prop a{height:inherit;max-width:33.33333%;-ms-flex:0 0 33.33333%;-webkit-box-flex:0;flex:0 0 33.33333%;border-right:1px solid #ddd;padding-left:15px;padding-right:15px}[component=valueprop] .ft-value-prop span{font-size:16px;margin-top:10px;margin-bottom:5px;display:block;color:#007db8}[component=valueprop] .ft-value-prop p{font-size:12px;line-height:20px;margin-top:0;margin-bottom:35px}[component=valueprop] .ft-value-prop img{margin-top:20px;width:45px;height:35px}}</style>


<footer id="mh-footer" component="footer">
    
    <nav class="ft-contextual-links-wrap">
        <div class="mh-container">
            <ul>
                    <li data-testid="footer-row1-links">
                        <a href="//www.dell.com/learn/in/en/incorp1/corp-comm?~ck=mn" class="">About Dell</a>
                    </li>
                    <li data-testid="footer-row1-links">
                        <a href="//jobs.dell.com/?~ck=mn" class="">Careers</a>
                    </li>
                    <li data-testid="footer-row1-links">
                        <a href="//www.dell.com/support/home/in/en/inbsd1?app=community&amp;~ck=mn" class="">Community</a>
                    </li>
                    <li data-testid="footer-row1-links">
                        <a href="//www.dell.com/content/public/xdbredirect.aspx?link=global:delltechnologies:events&amp;~ck=mn" class="">Events</a>
                    </li>
                    <li data-testid="footer-row1-links">
                        <a href="//www.dell.com/content/public/xdbredirect.aspx?link=global:nav:partners&amp;~ck=mn" class="">Partner Program</a>
                    </li>
                    <li data-testid="footer-row1-links">
                        <a href="//www.dell.com/identity/v2/discovery?cht=login&amp;c=in&amp;l=en&amp;~ck=mn" class="">Premier</a>
                    </li>
                    <li data-testid="footer-row1-links">
                        <a href="//www.dell.com/content/public/xdbredirect.aspx?link=global:dell_technologies&amp;~ck=mn" class="">Dell Technologies</a>
                    </li>
            </ul>
            <div>
                
    <div id="mh-footer-country" class="footer-item-container" component="locale">
        <div class="mh-locale mh-local-bottom">
            <div id="mh-footer-country-selector" class="modal-container" data-testid="footer-country-selector">
                <ul id="mh-footer-country-list" class="mh-locale-menu mh-locale-menu-bottom" data-country-service="//www.dell.com/csbapi/masthead/countrylist/in/en"></ul>
                <div id="mh-footer-country-toggle">
                    <img src="//i.dell.com/images/global/masthead/smlflags/in.gif" alt="India" />
                    India
                </div>
            </div>
        </div>
    </div>

            </div>

        </div>
    </nav>
    <nav class="ft-legal-links-wrap" data-testid="footer-row2">
        <ul class="mh-container">
                <li data-testid="footer-row2-links">
                    <a href="//www.dell.com/learn/in/en/incorp1/site-terms-of-use-copyright" class="">© 2019 Dell</a>
                </li>
                <li data-testid="footer-row2-links">
                    <a href="//www.dell.com/learn/in/en/incorp1/terms-of-sale" class="">Terms of Sale</a>
                </li>
                <li data-testid="footer-row2-links">
                    <a href="//www.dell.com/learn/in/en/incorp1/policies-privacy" class="">Privacy Statement</a>
                </li>
                <li data-testid="footer-row2-links">
                    <a href="//www.dell.com/learn/in/en/incorp1/terms" class="">Legal & Regulatory</a>
                </li>
                <li data-testid="footer-row2-links">
                    <a href="//www.dell.com/learn/in/en/incorp1/dell-environment-recycling" class="">Dell Recycling</a>
                </li>
                <li data-testid="footer-row2-links">
                    <a href="//www.dell.com/learn/in/en/incorp1/cr" class="">Corporate Social Responsibility</a>
                </li>
                <li data-testid="footer-row2-links">
                    <a href="//www.dell.com/support/contents/in/en/inbsd1/category/Contact-Information" class="">Contact Us</a>
                </li>
                <li data-testid="footer-row2-links">
                    <a href="//www.dell.com/feedback" class="toolbar_feedback opinionlabhtml">Feedback</a>
                </li>
        </ul>
    </nav>
    

</footer>


    <input type="hidden" id="language" value="en" />
    <input type="hidden" id="country" value="in" />
        <script>
    var MasterTmsUdo = {"CJ":{"CID":"","TYPE":"","DISCOUNT":"","OGID":"","CURRENCY":"","COUPON":"","CSEG":"","SEG":"GEN","PRODCAT":"","COUNTRY":"IN","LANG":"EN","REVENUE":"","DEVICE":"D","PLATFORM":"","PROMOID":"1","CATEGORY":"","CATEGORYPATH":"","DEALS":"","FAMILY":"","PRODUCT":"","ORDERCODE":"","ACCOUNTID":"","EMAILHASH":"","PRODUCTLIST":[]}};
</script>


    <script id="contact-drawer-script" src="//afcs.dellcdn.com/csb/contact-drawer/bundles/js/contact-drawer_v1.js" defer></script>
<script>
    window.addEventListener('DOMContentLoaded',
        function () {
            var Dell = window.Dell || {};
            Dell.ContactDrawer = Dell.ContactDrawer || {};
            if (!Dell.ContactDrawer.init) { return; }

            Dell.ContactDrawer.init({
                targetElementId: "chatDrawer",
                country: "in",
                language: "en",
                segment: "corp",
                pageId: "dell_com_homepage"
            });
        });
</script>
<div id="chatDrawer"></div>

    <script>
    var isBoomerangEnabled = true,
        userContextApiUrl = "//www.dell.com/csbapi/en-in/personalization/getusercontext";
    </script>
    <script shared-script-required="true" type="text/javascript">if (typeof dellScriptLoader !== 'undefined') dellScriptLoader.load([{"url":"//afcs.dellcdn.com/csb/homepage/bundles/1.0.0.2927/jsaddons/jquery-3.3.1.min.js","order":"0","crossorigin":false}])</script>
    <script shared-script-required="true" type="text/javascript">if (typeof dellScriptLoader !== 'undefined') dellScriptLoader.load([{"url":"//afcs.dellcdn.com/csb/homepage/bundles/1.0.0.2927/js/scripts.min.js","order":"2","crossorigin":false}])</script>

        <script shared-script-required="true" type="text/javascript">if (typeof dellScriptLoader !== 'undefined') dellScriptLoader.load([{"url":"//afcs.dellcdn.com/csb/homepage/bundles/1.0.0.2927/js/conversant.min.js","order":"3","crossorigin":false}])</script>
    <script shared-script-required="true" type="text/javascript">if (typeof dellScriptLoader !== 'undefined') dellScriptLoader.load([{"url":"//nexus.dell.com/dell/stpfooter/Bootstrap.js?v=9","order":"4","crossorigin":true}])</script>
    <script type="text/javascript">if (typeof dellScriptLoader !== 'undefined') dellScriptLoader.load([{"url":"//nexus.dell.com/dell/marketing/Bootstrap.js","order":"5","crossorigin":true}])</script>
    <script>(function initLoadScripts(win) {
    "use strict";
    var scriptsArray = typeof dellScriptLoader !== "undefined"
        && dellScriptLoader.hasOwnProperty("scriptsArrayCopy")
        && Array.isArray(dellScriptLoader.scriptsArrayCopy())
            ? orderArray(removeDuplicates(dellScriptLoader.scriptsArrayCopy()))
            : [];

    if (scriptsArray.length === 0) {
        return;
    }

    function stripCharacters(thisString, replaceWith) {
        if (typeof thisString !== "string") { return thisString; }

        var replaceWithThis = replaceWith && typeof arguments[1] === "string" ? arguments[1] : "_";

        //strip out everything that is NOT numeric or alphabetic character
        return thisString.replace(/[^a-zA-Z0-9 -]|\s/g, replaceWithThis);
    }

    function perfMetrics(trigger, key) {
        if (typeof trigger === "string"
            && typeof key === "string"
            && typeof performance !== "undefined"
            && typeof performance.mark === "function"
            && typeof Dell !== "undefined"
            && Dell.hasOwnProperty("perfmetrics")
            && Dell.perfmetrics.hasOwnProperty(trigger)) {
                var sensitizedKey = stripCharacters(key);

                Dell.perfmetrics[trigger](sensitizedKey);
        }
    }

    function removeDuplicates(urlArray) {
        var unique = {};
        var newArr = [];
        var max = urlArray.length;

        for (var i = 0; i < max; ++i) {
            var script = urlArray[i];
            //remove `.js` and everything after to make sure we are removing query parameters and/or markers to ensure no duplicates
            //then remove prefixes
            var sensitizedKey = script.url.replace(/(\.js).*/g, "").replace(/^(https:\/\/www\.|https:\/\/|\/\/|\/)/g, "");

            if (!unique[sensitizedKey]) {
                unique[sensitizedKey] = true;
                newArr.push(script);
            }
        }

        return newArr;
    }

    function orderArray(array) {
        return array.sort(function (a, b) {
            if (a.order === undefined) { return 1; }
            return a.order > b.order ? 1 : -1;
        });
    }

    (function loadScripts() {
        var scriptObject;
        var scriptTag;
        var pendingScripts = [];
        var firstScript = document.scripts[0];
        var documentHead = document.head;
        var fragment = document.createDocumentFragment();
        win.scriptOrder = []; 

        function scriptOnload(scriptObject) {
            perfMetrics("end", "script-load-" + scriptObject.url);
            win.scriptOrder.push(scriptObject);
        }
        // Watch scripts load in IE
        function stateChange() {
            // Execute as many scripts in order as we can
            var pendingScript;
            while (pendingScripts[0] && pendingScripts[0].readyState === 'loaded') {
                pendingScript = pendingScripts.shift();
                // avoid future loading events from this script (eg, if src changes)
                pendingScript.onreadystatechange = null;
                // can't just appendChild, old IE bug if element isn't closed
                firstScript.parentNode.insertBefore(pendingScript, firstScript);
            }
        }

        // loop through our script urls
        while (scriptObject = scriptsArray.shift()) {
            perfMetrics("start", "script-load-" + scriptObject.url);
            if ('async' in firstScript) { // modern browsers
                scriptTag = document.createElement('script');

                scriptTag.onload = scriptOnload(scriptObject);

                if (scriptObject.crossorigin) {
                    scriptTag.setAttribute("crossorigin", "anonymous");
                }

                scriptTag.async = false;
                scriptTag.src = scriptObject.url;
                fragment.appendChild(scriptTag);
            }
            else if (firstScript.readyState) { // IE<10
                // create a script and add it to our todo pile
                scriptTag = document.createElement('script');

                if (scriptObject.crossorigin) {
                    scriptTag.setAttribute("crossorigin", "anonymous");
                }

                pendingScripts.push(scriptTag);
                // listen for state changes
                scriptTag.onreadystatechange = stateChange;
                // must set src AFTER adding onreadystatechange listener
                // else we’ll miss the loaded event for cached scripts
                scriptTag.src = scriptObject.url;
            }
            else { // fall back to defer
                document.write('<script src="' + scriptObject.url + '" defer></' + 'script>');
            }
        }

        //modern browsers IE10 >= append script tags added to html fragment
        if ('async' in firstScript) {
                documentHead.appendChild(fragment);
        }
    })();
})(window);
</script>

<iframe src="https://webchat.botframework.com/embed/dell12-bot?s=ztlzGsdZAIM.JgxJBW7-46Ackm67MrKRZdLnt5GwsGpAjqjvb9hvROs" style="min-width: 400px; width: 100%; min-height: 500px;"></iframe>

</body>

</html>