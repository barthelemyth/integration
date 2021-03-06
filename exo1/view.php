<!DOCTYPE html>
<html  dir="ltr" lang="fr" xml:lang="fr">

<head>
    <title>Intégration PA126 - Novembre 2018: M02 - Typography</title>
    <link rel="shortcut icon" href="https://e.3wa.fr/theme/image.php/aardvark/theme/1535981697/favicon" />
	<link rel="apple-touch-icon-precomposed" href="https://e.3wa.fr/theme/image.php/aardvark/theme/1535981697/apple-touch-icon" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({1:[function(e,n,t){function r(){}function o(e,n,t){return function(){return i(e,[c.now()].concat(u(arguments)),n?null:this,t),n?void 0:this}}var i=e("handle"),a=e(3),u=e(4),f=e("ee").get("tracer"),c=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,n){s[n]=o(d+n,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,o="function"==typeof n;return i(l+"tracer",[c.now(),e,t],r),function(){if(f.emit((o?"":"no-")+"fn-start",[c.now(),r,o],t),o)try{return n.apply(this,arguments)}catch(e){throw f.emit("fn-err",[arguments,this,e],t),e}finally{f.emit("fn-end",[c.now()],t)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=o(l+n)}),newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),i("err",[e,c.now()])}},{}],2:[function(e,n,t){function r(e,n){if(!o)return!1;if(e!==o)return!1;if(!n)return!0;if(!i)return!1;for(var t=i.split("."),r=n.split("."),a=0;a<r.length;a++)if(r[a]!==t[a])return!1;return!0}var o=null,i=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var u=navigator.userAgent,f=u.match(a);f&&u.indexOf("Chrome")===-1&&u.indexOf("Chromium")===-1&&(o="Safari",i=f[1])}n.exports={agent:o,version:i,match:r}},{}],3:[function(e,n,t){function r(e,n){var t=[],r="",i=0;for(r in e)o.call(e,r)&&(t[i]=n(r,e[r]),i+=1);return t}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],4:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(o<0?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=r},{}],5:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function o(e){function n(e){return e&&e instanceof r?e:e?f(e,u,i):i()}function t(t,r,o,i){if(!d.aborted||i){e&&e(t,r,o);for(var a=n(o),u=v(t),f=u.length,c=0;c<f;c++)u[c].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(e,n){h[e]=v(e).concat(n)}function m(e,n){var t=h[e];if(t)for(var r=0;r<t.length;r++)t[r]===n&&t.splice(r,1)}function v(e){return h[e]||[]}function g(e){return p[e]=p[e]||o(t)}function w(e,n){c(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var h={},y={},b={on:l,addEventListener:l,removeEventListener:m,emit:t,get:g,listeners:v,context:n,buffer:w,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",f=e("gos"),c=e(3),s={},p={},d=n.exports=o();d.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(o.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){o.buffer([e],r),o.emit(e,n,t)}var o=e("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!E++){var e=x.info=NREUM.info,n=l.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();c(y,function(n,t){e[n]||(e[n]=t)}),f("mark",["onload",a()+x.offset],null,"api");var t=l.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function o(){"complete"===l.readyState&&i()}function i(){f("mark",["domContent",a()+x.offset],null,"api")}function a(){return O.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-x.offset}var u=(new Date).getTime(),f=e("handle"),c=e(3),s=e("ee"),p=e(2),d=window,l=d.document,m="addEventListener",v="attachEvent",g=d.XMLHttpRequest,w=g&&g.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:g,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var h=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1099.min.js"},b=g&&w&&w[m]&&!/CriOS/.test(navigator.userAgent),x=n.exports={offset:u,now:a,origin:h,features:{},xhrWrappable:b,userAgent:p};e(1),l[m]?(l[m]("DOMContentLoaded",i,!1),d[m]("load",r,!1)):(l[v]("onreadystatechange",o),d[v]("onload",r)),f("mark",["firstbyte",u],null,"api");var E=0,O=e(5)},{}]},{},["loader"]);</script>
<meta name="keywords" content="moodle, Intégration PA126 - Novembre 2018: M02 - Typography" />
<link rel="stylesheet" type="text/css" href="https://e.3wa.fr/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.css" /><script id="firstthemesheet" type="text/css">/** Required in order to fix style inclusion problems in IE with YUI **/</script><link rel="stylesheet" type="text/css" href="https://e.3wa.fr/theme/styles.php/aardvark/1535981697/all" />
<script type="text/javascript">
//<![CDATA[
var M = {}; M.yui = {};
M.pageloadstarttime = new Date();
M.cfg = {"wwwroot":"https:\/\/e.3wa.fr","sesskey":"p982KtccDz","loadingicon":"https:\/\/e.3wa.fr\/theme\/image.php\/aardvark\/core\/1535981697\/i\/loading_small","themerev":"1535981697","slasharguments":1,"theme":"aardvark","jsrev":"1535981697","admin":"admin","svgicons":true};var yui1ConfigFn = function(me) {if(/-skin|reset|fonts|grids|base/.test(me.name)){me.type='css';me.path=me.path.replace(/\.js/,'.css');me.path=me.path.replace(/\/yui2-skin/,'/assets/skins/sam/yui2-skin')}};
var yui2ConfigFn = function(me) {var parts=me.name.replace(/^moodle-/,'').split('-'),component=parts.shift(),module=parts[0],min='-min';if(/-(skin|core)$/.test(me.name)){parts.pop();me.type='css';min=''}
if(module){var filename=parts.join('-');me.path=component+'/'+module+'/'+filename+min+'.'+me.type}else{me.path=component+'/'+component+'.'+me.type}};
YUI_config = {"debug":false,"base":"https:\/\/e.3wa.fr\/lib\/yuilib\/3.17.2\/","comboBase":"https:\/\/e.3wa.fr\/theme\/yui_combo.php?","combine":true,"filter":null,"insertBefore":"firstthemesheet","groups":{"yui2":{"base":"https:\/\/e.3wa.fr\/lib\/yuilib\/2in3\/2.9.0\/build\/","comboBase":"https:\/\/e.3wa.fr\/theme\/yui_combo.php?","combine":true,"ext":false,"root":"2in3\/2.9.0\/build\/","patterns":{"yui2-":{"group":"yui2","configFn":yui1ConfigFn}}},"moodle":{"name":"moodle","base":"https:\/\/e.3wa.fr\/theme\/yui_combo.php?m\/1535981697\/","combine":true,"comboBase":"https:\/\/e.3wa.fr\/theme\/yui_combo.php?","ext":false,"root":"m\/1535981697\/","patterns":{"moodle-":{"group":"moodle","configFn":yui2ConfigFn}},"filter":null,"modules":{"moodle-core-handlebars":{"condition":{"trigger":"handlebars","when":"after"}},"moodle-core-formchangechecker":{"requires":["base","event-focus","moodle-core-event"]},"moodle-core-actionmenu":{"requires":["base","event","node-event-simulate"]},"moodle-core-dragdrop":{"requires":["base","node","io","dom","dd","event-key","event-focus","moodle-core-notification"]},"moodle-core-lockscroll":{"requires":["plugin","base-build"]},"moodle-core-blocks":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification"]},"moodle-core-dock":{"requires":["base","node","event-custom","event-mouseenter","event-resize","escape","moodle-core-dock-loader","moodle-core-event"]},"moodle-core-dock-loader":{"requires":["escape"]},"moodle-core-formautosubmit":{"requires":["base","event-key"]},"moodle-core-chooserdialogue":{"requires":["base","panel","moodle-core-notification"]},"moodle-core-maintenancemodetimer":{"requires":["base","node"]},"moodle-core-notification":{"requires":["moodle-core-notification-dialogue","moodle-core-notification-alert","moodle-core-notification-confirm","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-core-notification-dialogue":{"requires":["base","node","panel","escape","event-key","dd-plugin","moodle-core-widget-focusafterclose","moodle-core-lockscroll"]},"moodle-core-notification-alert":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-confirm":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-exception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-ajaxexception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-popuphelp":{"requires":["moodle-core-tooltip"]},"moodle-core-tooltip":{"requires":["base","node","io-base","moodle-core-notification-dialogue","json-parse","widget-position","widget-position-align","event-outside","cache-base"]},"moodle-core-languninstallconfirm":{"requires":["base","node","moodle-core-notification-confirm","moodle-core-notification-alert"]},"moodle-core-event":{"requires":["event-custom"]},"moodle-core-checknet":{"requires":["base-base","moodle-core-notification-alert","io-base"]},"moodle-core_availability-form":{"requires":["base","node","event","event-delegate","panel","moodle-core-notification-dialogue","json"]},"moodle-backup-confirmcancel":{"requires":["node","node-event-simulate","moodle-core-notification-confirm"]},"moodle-backup-backupselectall":{"requires":["node","event","node-event-simulate","anim"]},"moodle-calendar-info":{"requires":["base","node","event-mouseenter","event-key","overlay","moodle-calendar-info-skin"]},"moodle-course-modchooser":{"requires":["moodle-core-chooserdialogue","moodle-course-coursebase"]},"moodle-course-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-course-coursebase","moodle-course-util"]},"moodle-course-categoryexpander":{"requires":["node","event-key"]},"moodle-course-formatchooser":{"requires":["base","node","node-event-simulate"]},"moodle-course-toolboxes":{"requires":["node","base","event-key","node","io","moodle-course-coursebase","moodle-course-util"]},"moodle-course-util":{"requires":["node"],"use":["moodle-course-util-base"],"submodules":{"moodle-course-util-base":{},"moodle-course-util-section":{"requires":["node","moodle-course-util-base"]},"moodle-course-util-cm":{"requires":["node","moodle-course-util-base"]}}},"moodle-course-management":{"requires":["base","node","io-base","moodle-core-notification-exception","json-parse","dd-constrain","dd-proxy","dd-drop","dd-delegate","node-event-delegate"]},"moodle-form-passwordunmask":{"requires":[]},"moodle-form-shortforms":{"requires":["node","base","selector-css3","moodle-core-event"]},"moodle-form-showadvanced":{"requires":["node","base","selector-css3"]},"moodle-form-dateselector":{"requires":["base","node","overlay","calendar"]},"moodle-question-searchform":{"requires":["base","node"]},"moodle-question-preview":{"requires":["base","dom","event-delegate","event-key","core_question_engine"]},"moodle-question-qbankmanager":{"requires":["node","selector-css3"]},"moodle-question-chooser":{"requires":["moodle-core-chooserdialogue"]},"moodle-availability_completion-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_date-form":{"requires":["base","node","event","io","moodle-core_availability-form"]},"moodle-availability_grade-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_group-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_grouping-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_profile-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-qtype_ddimageortext-dd":{"requires":["node","dd","dd-drop","dd-constrain"]},"moodle-qtype_ddimageortext-form":{"requires":["moodle-qtype_ddimageortext-dd","form_filepicker"]},"moodle-qtype_ddmarker-form":{"requires":["moodle-qtype_ddmarker-dd","form_filepicker","graphics","escape"]},"moodle-qtype_ddmarker-dd":{"requires":["node","event-resize","dd","dd-drop","dd-constrain","graphics"]},"moodle-qtype_ddwtos-dd":{"requires":["node","dd","dd-drop","dd-constrain"]},"moodle-mod_assign-history":{"requires":["node","transition"]},"moodle-mod_attendance-groupfilter":{"requires":["base","node"]},"moodle-mod_forum-subscriptiontoggle":{"requires":["base-base","io-base"]},"moodle-mod_quiz-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-base","moodle-mod_quiz-util-page","moodle-mod_quiz-util-slot","moodle-course-util"]},"moodle-mod_quiz-questionchooser":{"requires":["moodle-core-chooserdialogue","moodle-mod_quiz-util","querystring-parse"]},"moodle-mod_quiz-randomquestion":{"requires":["base","event","node","io","moodle-core-notification-dialogue"]},"moodle-mod_quiz-autosave":{"requires":["base","node","event","event-valuechange","node-event-delegate","io-form"]},"moodle-mod_quiz-quizbase":{"requires":["base","node"]},"moodle-mod_quiz-quizquestionbank":{"requires":["base","event","node","io","io-form","yui-later","moodle-question-qbankmanager","moodle-core-notification-dialogue"]},"moodle-mod_quiz-repaginate":{"requires":["base","event","node","io","moodle-core-notification-dialogue"]},"moodle-mod_quiz-toolboxes":{"requires":["base","node","event","event-key","io","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-slot","moodle-core-notification-ajaxexception"]},"moodle-mod_quiz-modform":{"requires":["base","node","event"]},"moodle-mod_quiz-util":{"requires":["node","moodle-core-actionmenu"],"use":["moodle-mod_quiz-util-base"],"submodules":{"moodle-mod_quiz-util-base":{},"moodle-mod_quiz-util-slot":{"requires":["node","moodle-mod_quiz-util-base"]},"moodle-mod_quiz-util-page":{"requires":["node","moodle-mod_quiz-util-base"]}}},"moodle-message_airnotifier-toolboxes":{"requires":["base","node","io"]},"moodle-filter_glossary-autolinker":{"requires":["base","node","io-base","json-parse","event-delegate","overlay","moodle-core-event","moodle-core-notification-alert","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-filter_mathjaxloader-loader":{"requires":["moodle-core-event"]},"moodle-editor_atto-rangy":{"requires":[]},"moodle-editor_atto-editor":{"requires":["node","transition","io","overlay","escape","event","event-simulate","event-custom","node-event-html5","node-event-simulate","yui-throttle","moodle-core-notification-dialogue","moodle-core-notification-confirm","moodle-editor_atto-rangy","handlebars","timers","querystring-stringify"]},"moodle-editor_atto-plugin":{"requires":["node","base","escape","event","event-outside","handlebars","event-custom","timers","moodle-editor_atto-menu"]},"moodle-editor_atto-menu":{"requires":["moodle-core-notification-dialogue","node","event","event-custom"]},"moodle-report_eventlist-eventfilter":{"requires":["base","event","node","node-event-delegate","datatable","autocomplete","autocomplete-filters"]},"moodle-report_loglive-fetchlogs":{"requires":["base","event","node","io","node-event-delegate"]},"moodle-gradereport_grader-gradereporttable":{"requires":["base","node","event","handlebars","overlay","event-hover"]},"moodle-gradereport_history-userselector":{"requires":["escape","event-delegate","event-key","handlebars","io-base","json-parse","moodle-core-notification-dialogue"]},"moodle-tool_capability-search":{"requires":["base","node"]},"moodle-tool_lp-dragdrop-reorder":{"requires":["moodle-core-dragdrop"]},"moodle-tool_monitor-dropdown":{"requires":["base","event","node"]},"moodle-assignfeedback_editpdf-editor":{"requires":["base","event","node","io","graphics","json","event-move","event-resize","transition","querystring-stringify-simple","moodle-core-notification-dialog","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-atto_accessibilitychecker-button":{"requires":["color-base","moodle-editor_atto-plugin"]},"moodle-atto_accessibilityhelper-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_align-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_bold-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_charmap-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_clear-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_collapse-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_emoticon-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_equation-button":{"requires":["moodle-editor_atto-plugin","moodle-core-event","io","event-valuechange","tabview","array-extras"]},"moodle-atto_html-button":{"requires":["moodle-editor_atto-plugin","event-valuechange"]},"moodle-atto_image-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_indent-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_italic-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_link-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-usedfiles":{"requires":["node","escape"]},"moodle-atto_managefiles-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_media-button":{"requires":["moodle-editor_atto-plugin","moodle-form-shortforms"]},"moodle-atto_noautolink-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_orderedlist-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_rtl-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_strike-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_subscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_superscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_table-button":{"requires":["moodle-editor_atto-plugin","moodle-editor_atto-menu","event","event-valuechange"]},"moodle-atto_title-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_underline-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_undo-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_unorderedlist-button":{"requires":["moodle-editor_atto-plugin"]}}},"gallery":{"name":"gallery","base":"https:\/\/e.3wa.fr\/lib\/yuilib\/gallery\/","combine":true,"comboBase":"https:\/\/e.3wa.fr\/theme\/yui_combo.php?","ext":false,"root":"gallery\/1535981697\/","patterns":{"gallery-":{"group":"gallery"}}}},"modules":{"core_filepicker":{"name":"core_filepicker","fullpath":"https:\/\/e.3wa.fr\/lib\/javascript.php\/1535981697\/repository\/filepicker.js","requires":["base","node","node-event-simulate","json","async-queue","io-base","io-upload-iframe","io-form","yui2-treeview","panel","cookie","datatable","datatable-sort","resize-plugin","dd-plugin","escape","moodle-core_filepicker"]},"core_comment":{"name":"core_comment","fullpath":"https:\/\/e.3wa.fr\/lib\/javascript.php\/1535981697\/comment\/comment.js","requires":["base","io-base","node","json","yui2-animation","overlay","escape"]},"mathjax":{"name":"mathjax","fullpath":"https:\/\/cdnjs.cloudflare.com\/ajax\/libs\/mathjax\/2.7.1\/MathJax.js?delayStartupUntil=configured"}}};
M.yui.loader = {modules: {}};

//]]>
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40931321-7', 'auto');
  ga('send', 'pageview');

</script>    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /> 
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type='text/css' />
</head>
<body  id="page-mod-folder-view" class="format-topics  path-mod path-mod-folder gecko dir-ltr lang-fr yui-skin-sam yui3-skin-sam e-3wa-fr pagelayout-incourse course-880 context-58015 cmid-45519 category-333 has-region-side-pre used-region-side-pre has-region-side-post empty-region-side-post side-pre-only">

<div class="skiplinks">
    <a href="#maincontent" class="skip">Passer au contenu principal</a>
</div><script type="text/javascript" src="https://e.3wa.fr/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.js&amp;rollup/1535981697/mcore-min.js"></script><script type="text/javascript" src="https://e.3wa.fr/lib/javascript.php/1535981697/lib/javascript-static.js"></script>
<script type="text/javascript">
//<![CDATA[
document.body.className += ' jsenabled';
//]]>
</script>



<header role="banner" class="navbar navbar-fixed-top moodle-has-zindex">
    <nav role="navigation" class="navbar-inner">
        <div class="container-fluid">
            <a class="brand" title="Accueil" href="https://e.3wa.fr/">3WA</a>            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span></a>            <div class="usermenu"><div class="moodle-actionmenu nowrap-items" id="action-menu-0" data-enhance="moodle-core-actionmenu">

        <ul class="menubar" id="action-menu-0-menubar" role="menubar">

            <!--

            --><!--

            --><li role="presentation"><a href="#" class="toggle-display textmenu" id="action-menu-toggle-0" title="" role="menuitem"><span class="userbutton"><span class="usertext">barthelemy thomas</span><span class="avatars"><span class="avatar current"><img src="https://e.3wa.fr/theme/image.php/aardvark/core/1535981697/u/f2" alt="Avatar barthelemy thomas" title="Avatar barthelemy thomas" class="userpicture defaultuserpic" width="35" height="35" role="presentation" /></span></span></span><b class="caret"></b></a></li>

        </ul>


        <ul class="menu  align-tr-br" id="action-menu-0-menu" data-rel="menu-content" aria-labelledby="action-menu-toggle-0" role="menu" data-align="tr-br">
            <li role="presentation">    <a href="https://e.3wa.fr/my/" class="icon menu-action" role="menuitem" data-title="mymoodle,admin" aria-labelledby="actionmenuaction-1"><img class="iconsmall" alt="" src="https://e.3wa.fr/theme/image.php/aardvark/core/1535981697/i/course"/><span class="menu-action-text" id="actionmenuaction-1">Tableau de bord</span></a>




</li><li role="presentation">
<span class="filler">&nbsp;</span>


</li><li role="presentation">    <a href="https://e.3wa.fr/user/profile.php?id=3816" class="icon menu-action" role="menuitem" data-title="profile,moodle" aria-labelledby="actionmenuaction-2"><img class="iconsmall" alt="" src="https://e.3wa.fr/theme/image.php/aardvark/core/1535981697/i/user"/><span class="menu-action-text" id="actionmenuaction-2">Profil</span></a>




</li><li role="presentation">    <a href="https://e.3wa.fr/grade/report/overview/index.php" class="icon menu-action" role="menuitem" data-title="grades,grades" aria-labelledby="actionmenuaction-3"><img class="iconsmall" alt="" src="https://e.3wa.fr/theme/image.php/aardvark/core/1535981697/t/grades"/><span class="menu-action-text" id="actionmenuaction-3">Notes</span></a>




</li><li role="presentation">    <a href="https://e.3wa.fr/message/index.php" class="icon menu-action" role="menuitem" data-title="messages,message" aria-labelledby="actionmenuaction-4"><img class="iconsmall" alt="" src="https://e.3wa.fr/theme/image.php/aardvark/core/1535981697/t/message"/><span class="menu-action-text" id="actionmenuaction-4">Messages personnels</span></a>




</li><li role="presentation">    <a href="https://e.3wa.fr/user/preferences.php" class="icon menu-action" role="menuitem" data-title="preferences,moodle" aria-labelledby="actionmenuaction-5"><img class="iconsmall" alt="" src="https://e.3wa.fr/theme/image.php/aardvark/core/1535981697/t/preferences"/><span class="menu-action-text" id="actionmenuaction-5">Préférences</span></a>




</li><li role="presentation">
<span class="filler">&nbsp;</span>


</li><li role="presentation">    <a href="https://e.3wa.fr/login/logout.php?sesskey=p982KtccDz" class="icon menu-action" role="menuitem" data-title="logout,moodle" aria-labelledby="actionmenuaction-6"><img class="iconsmall" alt="" src="https://e.3wa.fr/theme/image.php/aardvark/core/1535981697/a/logout"/><span class="menu-action-text" id="actionmenuaction-6">Déconnexion</span></a>




</li>
        </ul>
</div></div>            <div class="popover-region collapsed popover-region-messages"
    id="nav-message-popover-container" data-userid="3816"
    data-region="popover-region">
    <div class="popover-region-toggle nav-link"
        data-region="popover-region-toggle"
        aria-role="button"
        aria-controls="popover-region-container-5bf3d0a800da45bf3d0a7efd4b34"
        aria-haspopup="true"
        aria-label="Afficher la fenêtre des messages sans nouveau message"
        tabindex="0">
                <img class="smallicon" alt=" Ouvrir/fermer le menu messages " title=" Ouvrir/fermer le menu messages " src="https://e.3wa.fr/theme/image.php/aardvark/core/1535981697/t/message"/>
        <div class="count-container hidden" data-region="count-container"></div>

    </div>
    <div 
        id="popover-region-container-5bf3d0a800da45bf3d0a7efd4b34"
        class="popover-region-container"
        data-region="popover-region-container"
        aria-expanded="false"
        aria-hidden="true"
        aria-label="Fenêtre de notification"
        role="region">
        <div class="popover-region-header-container">
            <h3 class="popover-region-header-text" data-region="popover-region-header-text">Messages personnels</h3>
            <div class="popover-region-header-actions" data-region="popover-region-header-actions">        <div class="newmessage-link">
            <a href="https://e.3wa.fr/message/index.php?contactsfirst=1">Nouveau message
            </a>
        </div>
        <a class="mark-all-read-button"
           href="#"
           role="button"
           title="Tout marquer comme lu"
           data-action="mark-all-read">
            <span class="normal-icon"><img class="smallicon" alt=" Tout marquer comme lu " title=" Tout marquer comme lu " src="https://e.3wa.fr/theme/image.php/aardvark/core/1535981697/t/markasread"/></span>
            <span class="loading-icon"><img class="smallicon" alt=" Chargement " title=" Chargement " src="https://e.3wa.fr/theme/image.php/aardvark/core/1535981697/y/loading"/></span>
        </a>
        <a href="https://e.3wa.fr/message/edit.php?id=3816"
           title="Préférences des messages">
            <img class="smallicon" alt=" Préférences des messages " title=" Préférences des messages " src="https://e.3wa.fr/theme/image.php/aardvark/core/1535981697/i/settings"/>
        </a>
</div>
        </div>
        <div class="popover-region-content-container" data-region="popover-region-content-container">
            <div class="popover-region-content" data-region="popover-region-content">
                        <div class="messages" data-region="messages" role="log" aria-busy="false" aria-atomic="false" aria-relevant="additions"></div>
        <div class="empty-message" data-region="empty-message" tabindex="0">Aucun message</div>

            </div>
            <span class="loading-icon"><img class="smallicon" alt=" Chargement " title=" Chargement " src="https://e.3wa.fr/theme/image.php/aardvark/core/1535981697/y/loading"/></span>
        </div>
                <a class="see-all-link"
                    href="https://e.3wa.fr/message/index.php">
                    <div class="popover-region-footer-container">
                        <div class="popover-region-seeall-text">Tout afficher</div>
                    </div>
                </a>
    </div>
</div><div class="popover-region collapsed popover-region-notifications"
    id="nav-notification-popover-container" data-userid="3816"
    data-region="popover-region">
    <div class="popover-region-toggle nav-link"
        data-region="popover-region-toggle"
        aria-role="button"
        aria-controls="popover-region-container-5bf3d0a8019905bf3d0a7efd4b35"
        aria-haspopup="true"
        aria-label="Afficher la fenêtre des notifications sans nouvelle notification"
        tabindex="0">
                <img class="smallicon" alt=" Ouvrir/fermer le menu notifications " title=" Ouvrir/fermer le menu notifications " src="https://e.3wa.fr/theme/image.php/aardvark/core/1535981697/i/notifications"/>
        <div class="count-container hidden" data-region="count-container"></div>

    </div>
    <div 
        id="popover-region-container-5bf3d0a8019905bf3d0a7efd4b35"
        class="popover-region-container"
        data-region="popover-region-container"
        aria-expanded="false"
        aria-hidden="true"
        aria-label="Fenêtre de notification"
        role="region">
        <div class="popover-region-header-container">
            <h3 class="popover-region-header-text" data-region="popover-region-header-text">Notifications</h3>
            <div class="popover-region-header-actions" data-region="popover-region-header-actions">        <a class="mark-all-read-button"
           href="#"
           title="Tout marquer comme lu"
           data-action="mark-all-read"
           role="button">
            <span class="normal-icon"><img class="smallicon" alt=" Tout marquer comme lu " title=" Tout marquer comme lu " src="https://e.3wa.fr/theme/image.php/aardvark/core/1535981697/t/markasread"/></span>
            <span class="loading-icon"><img class="smallicon" alt=" Chargement " title=" Chargement " src="https://e.3wa.fr/theme/image.php/aardvark/core/1535981697/y/loading"/></span>
        </a>
        <a href="https://e.3wa.fr/message/notificationpreferences.php?userid=3816"
           title="Préférences de notification">
            <img class="smallicon" alt=" Préférences de notification " title=" Préférences de notification " src="https://e.3wa.fr/theme/image.php/aardvark/core/1535981697/i/settings"/>
        </a>
</div>
        </div>
        <div class="popover-region-content-container" data-region="popover-region-content-container">
            <div class="popover-region-content" data-region="popover-region-content">
                        <div class="all-notifications"
            data-region="all-notifications"
            role="log"
            aria-busy="false"
            aria-atomic="false"
            aria-relevant="additions"></div>
        <div class="empty-message" tabindex="0" data-region="empty-message">Vous n'avez pas de notification</div>

            </div>
            <span class="loading-icon"><img class="smallicon" alt=" Chargement " title=" Chargement " src="https://e.3wa.fr/theme/image.php/aardvark/core/1535981697/y/loading"/></span>
        </div>
                <a class="see-all-link"
                    href="https://e.3wa.fr/message/output/popup/notifications.php">
                    <div class="popover-region-footer-container">
                        <div class="popover-region-seeall-text">Tout afficher</div>
                    </div>
                </a>
    </div>
</div>                        <div class="nav-collapse collapse">
                <ul class="nav"><li><a title="Formation Développeur Intégrateur Web" href="https://3wa.fr">3W Academy</a></li><li><a title="Information Gratuite sur le Métier de Développeur Web" href="https://3wa.fr/inscription-a-la-prochaine-reunion-dinformation-porte-ouverte/">Contact</a></li><li><a title="Apprendre Gratuitement HTML et CSS" href="https://apprendre-html.3wa.fr/">Cours en Ligne</a></li></ul>                <ul class="nav pull-right">
                    <li></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="container-fluid clearfix">
</div>

<div id="page" class="container-fluid">
    <header id="page-header" class="clearfix"><div class="page-context-header"><div class="page-header-headings"><h1>Intégration PA126 - Novembre 2018</h1></div></div><div class="clearfix" id="page-navbar"><div class="breadcrumb-nav"><span class="accesshide" id="navbar-label">Chemin de la page</span><nav aria-labelledby="navbar-label"><ul class="breadcrumb"><li><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="https://e.3wa.fr/my/"><span itemprop="title">Tableau de bord</span></a></span> <span class="divider"> <span class="accesshide " ><span class="arrow_text">/</span>&nbsp;</span><span class="arrow sep">&#x25BA;</span> </span></li><li><span tabindex="0">Mes cours</span> <span class="divider"> <span class="accesshide " ><span class="arrow_text">/</span>&nbsp;</span><span class="arrow sep">&#x25BA;</span> </span></li><li><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="https://e.3wa.fr/course/index.php?categoryid=333"><span itemprop="title">Promotion PA126 - Novembre 2018</span></a></span> <span class="divider"> <span class="accesshide " ><span class="arrow_text">/</span>&nbsp;</span><span class="arrow sep">&#x25BA;</span> </span></li><li><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" title="Intégration PA126 - Novembre 2018" href="https://e.3wa.fr/course/view.php?id=880"><span itemprop="title">Intégration PA126 - Novembre 2018</span></a></span> <span class="divider"> <span class="accesshide " ><span class="arrow_text">/</span>&nbsp;</span><span class="arrow sep">&#x25BA;</span> </span></li><li><span tabindex="0">Intégration : HTML - CSS</span> <span class="divider"> <span class="accesshide " ><span class="arrow_text">/</span>&nbsp;</span><span class="arrow sep">&#x25BA;</span> </span></li><li><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" title="Dossier" href="https://e.3wa.fr/mod/folder/view.php?id=45519"><span itemprop="title">M02 - Typography</span></a></span></li></ul></nav></div><div class="breadcrumb-button"></div></div><div id="course-header"></div></header>    <div id="page-content" class="row-fluid">
        <div id="region-main-box" class="span9 desktop-first-column">
            <div class="row-fluid">
                <section id="region-main" class="span8 pull-right">
                    <span class="notifications" id="user-notifications"></span><div role="main"><span id="maincontent"></span><h2>M02 - Typography</h2><div id="intro" class="box generalbox"><div class="no-overflow"><h1>INSTRUCTIONS</h1>

<p>Comprendre le fonctionnement de la typographie sur le Web.</p>

<h2>HTML</h2>

<ul>
<li>Utilisation des balises sémantiques basique</li>
</ul>

<h2>CSS</h2>

<ul>
<li>Largeur du site à 50%</li>
<li>Police utilisé :

<ul>
<li>Titre : Blacksword</li>
<li>Texte : Cardo</li>
</ul></li>
<li>Taille de police :

<ul>
<li>par défaut : 1.4em / line-height : 50px / text-indent : 25px</li>
<li>h1 : 4em</li>
<li>h2 : 2.5em / word-spacing : 25px</li>
<li>h3 : 1.5em / word-spacing : 10px</li>
</ul></li>
</ul>

<h2>BONUS</h2>

<p>Limiter la taille du contenu à 800px minimum</p>
</div></div><div class="box generalbox foldertree"><div id="folder_tree0" class="filemanager"><ul><li><div class="fp-filename-icon"><span class="fp-icon"><img class="smallicon" alt="" src="https://e.3wa.fr/theme/image.php/aardvark/core/1535981697/f/folder-24"/></span><span class="fp-filename"></span></div><ul><li><span class="fp-filename-icon"><a href="https://e.3wa.fr/pluginfile.php/58015/mod_folder/content/0/M02%20-%20Typography.zip?forcedownload=1"><span class="fp-icon"><img class="smallicon" alt="M02 - Typography.zip" title="M02 - Typography.zip" src="https://e.3wa.fr/theme/image.php/aardvark/core/1535981697/f/archive-24"/></span><span class="fp-filename">M02 - Typography.zip</span></a></span></li></ul></li></ul></div></div><div class="box generalbox folderbuttons"><div class="singlebutton"><form method="post" action="https://e.3wa.fr/mod/folder/download_folder.php"><div><input type="submit" value="Télécharger le dossier" /><input type="hidden" name="id" value="45519" /><input type="hidden" name="sesskey" value="p982KtccDz" /></div></form></div></div></div>                </section>
                <aside id="block-region-side-pre" class="span4 desktop-first-column block-region" data-blockregion="side-pre" data-droptarget="1"><a class="skip skip-block" id="fsb-1" href="#sb-1">Passer Informations Générales</a><div id="inst1653" class="block_html  block" role="complementary" data-block="html" data-instanceid="1653" aria-labelledby="instance-1653-header" data-dockable="1"><div class="header"><div class="title"><div class="block_action"></div><h2 id="instance-1653-header">Informations Générales</h2></div></div><div class="content"><div class="no-overflow"><ul>
<li><a href="https://assets.3wa.fr/moodle/3WA_Reglement_Interieur_2017.pdf" target="_blank">Règlement Intérieur 3W Academy</a></li>
</ul></div></div></div><span class="skip-block-to" id="sb-1"></span><a class="skip skip-block" id="fsb-2" href="#sb-2">Passer Navigation</a><div id="inst4" class="block_navigation  block" role="navigation" data-block="navigation" data-instanceid="4" aria-labelledby="instance-4-header" data-dockable="1"><div class="header"><div class="title"><div class="block_action"></div><h2 id="instance-4-header">Navigation</h2></div></div><div class="content"><ul class="block_tree list" role="tree" data-ajax-loader="block_navigation/nav_loader"><li class="type_unknown depth_1 contains_branch" aria-labelledby="label_1_1"><p class="tree_item branch navigation_node" role="treeitem" aria-expanded="true" aria-owns="random5bf3d0a7efd4b1_group" data-collapsible="false"><a tabindex="-1" id="label_1_1" href="https://e.3wa.fr/my/">Tableau de bord</a></p><ul id="random5bf3d0a7efd4b1_group" role="group"><li class="type_setting depth_2 item_with_icon" aria-labelledby="label_2_2"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_2_2" href="https://e.3wa.fr/?redirect=0"><img class="smallicon navicon" alt="" src="https://e.3wa.fr/theme/image.php/aardvark/core/1535981697/i/navigationitem"/><span class="item-content-wrap">Accueil du site</span></a></p></li><li class="type_course depth_2 contains_branch" aria-labelledby="label_2_3"><p class="tree_item branch" role="treeitem" aria-expanded="false" aria-owns="random5bf3d0a7efd4b3_group"><span tabindex="-1" id="label_2_3" title="3W Academy">Pages du site</span></p><ul id="random5bf3d0a7efd4b3_group" role="group" aria-hidden="true"><li class="type_custom depth_3 item_with_icon" aria-labelledby="label_3_5"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_3_5" href="https://e.3wa.fr/badges/view.php?type=1"><img class="smallicon navicon" alt="" src="https://e.3wa.fr/theme/image.php/aardvark/core/1535981697/i/navigationitem"/><span class="item-content-wrap">Badges de site</span></a></p></li><li class="type_custom depth_3 item_with_icon" aria-labelledby="label_3_6"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_3_6" href="https://e.3wa.fr/calendar/view.php?view=month"><img class="smallicon navicon" alt="" src="https://e.3wa.fr/theme/image.php/aardvark/core/1535981697/i/navigationitem"/><span class="item-content-wrap">Calendrier</span></a></p></li><li class="type_activity depth_3 item_with_icon" aria-labelledby="label_3_8"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_3_8" title="Forum" href="https://e.3wa.fr/mod/forum/view.php?id=10618"><img class="smallicon navicon" alt="Forum" title="Forum" src="https://e.3wa.fr/theme/image.php/aardvark/forum/1535981697/icon"/><span class="item-content-wrap">Brèves</span></a></p></li></ul></li><li class="type_system depth_2 contains_branch" aria-labelledby="label_2_9"><p class="tree_item branch" role="treeitem" aria-expanded="true" aria-owns="random5bf3d0a7efd4b7_group"><span tabindex="-1" id="label_2_9">Mes cours</span></p><ul id="random5bf3d0a7efd4b7_group" role="group"><li class="type_unknown depth_3 contains_branch" aria-labelledby="label_3_10"><p class="tree_item branch canexpand" role="treeitem" aria-expanded="true" aria-owns="random5bf3d0a7efd4b8_group"><span tabindex="-1" id="label_3_10">Promotion PA126 - Novembre 2018</span></p><ul id="random5bf3d0a7efd4b8_group" role="group"><li class="type_course depth_4 contains_branch" aria-labelledby="label_4_11"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_881" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_881" data-node-key="881" data-node-type="20"><a tabindex="-1" id="label_4_11" title="Développement PA126 - Novembre 2018" href="https://e.3wa.fr/course/view.php?id=881">Développement PA126 - Novembre 2018</a></p></li><li class="type_course depth_4 contains_branch" aria-labelledby="label_4_12"><p class="tree_item branch" role="treeitem" aria-expanded="true" aria-owns="random5bf3d0a7efd4b9_group"><a tabindex="-1" id="label_4_12" title="Intégration PA126 - Novembre 2018" href="https://e.3wa.fr/course/view.php?id=880">Intégration PA126 - Novembre 2018</a></p><ul id="random5bf3d0a7efd4b9_group" role="group"><li class="type_unknown depth_5 contains_branch" aria-labelledby="label_5_13"><p class="tree_item branch" role="treeitem" aria-expanded="false" aria-owns="random5bf3d0a7efd4b10_group"><a tabindex="-1" id="label_5_13" href="https://e.3wa.fr/user/index.php?id=880">Participants</a></p><ul id="random5bf3d0a7efd4b10_group" role="group" aria-hidden="true"><li class="type_user depth_6 item_with_icon" aria-labelledby="label_6_14"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_6_14" href="https://e.3wa.fr/user/view.php?id=3816&amp;course=880"><img class="smallicon navicon" alt="" src="https://e.3wa.fr/theme/image.php/aardvark/core/1535981697/i/navigationitem"/><span class="item-content-wrap">barthelemy thomas</span></a></p></li></ul></li><li class="type_setting depth_5 item_with_icon" aria-labelledby="label_5_15"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_5_15" href="https://e.3wa.fr/badges/view.php?type=2&amp;id=880"><img class="smallicon navicon" alt="Badges" title="Badges" src="https://e.3wa.fr/theme/image.php/aardvark/core/1535981697/i/badge"/><span class="item-content-wrap">Badges</span></a></p></li><li class="type_setting depth_5 item_with_icon" aria-labelledby="label_5_16"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_5_16" href="https://e.3wa.fr/admin/tool/lp/coursecompetencies.php?courseid=880"><img class="smallicon navicon" alt="" src="https://e.3wa.fr/theme/image.php/aardvark/core/1535981697/i/competencies"/><span class="item-content-wrap">Compétences</span></a></p></li><li class="type_structure depth_5 contains_branch" aria-labelledby="label_5_17"><p class="tree_item branch" role="treeitem" aria-expanded="true" aria-owns="random5bf3d0a7efd4b14_group"><span tabindex="-1" id="label_5_17">Intégration : HTML - CSS</span></p><ul id="random5bf3d0a7efd4b14_group" role="group"><li class="type_activity depth_6 item_with_icon" aria-labelledby="label_6_18"><p class="tree_item hasicon" role="treeitem"><a href="https://e.3wa.fr/mod/url/view.php?id=45459" id="label_6_18" class="" tabindex="-1" title="URL"><img class="smallicon navicon" alt="URL" title="URL" src="https://e.3wa.fr/theme/image.php/aardvark/url/1535981697/icon"/><span class="item-content-wrap">Planning de la Session</span></a></p></li><li class="type_activity depth_6 item_with_icon" aria-labelledby="label_6_19"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_6_19" title="URL" href="https://e.3wa.fr/mod/url/view.php?id=45460"><img class="smallicon navicon" alt="URL" title="URL" src="https://e.3wa.fr/theme/image.php/aardvark/url/1535981697/icon"/><span class="item-content-wrap">Forum de la 3W Academy</span></a></p></li><li class="type_activity depth_6 item_with_icon current_branch" aria-labelledby="label_6_78"><p class="tree_item hasicon active_tree_node" role="treeitem"><a tabindex="-1" id="label_6_78" title="Dossier" href="https://e.3wa.fr/mod/folder/view.php?id=45519"><img class="smallicon navicon" alt="Dossier" title="Dossier" src="https://e.3wa.fr/theme/image.php/aardvark/folder/1535981697/icon"/><span class="item-content-wrap">M02 - Typography</span></a></p></li><li class="type_activity depth_6 item_with_icon" aria-labelledby="label_6_81"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_6_81" title="Dossier" href="https://e.3wa.fr/mod/folder/view.php?id=45522"><img class="smallicon navicon" alt="Dossier" title="Dossier" src="https://e.3wa.fr/theme/image.php/aardvark/folder/1535981697/icon"/><span class="item-content-wrap">M01 - Hello World (corrigé)</span></a></p></li><li class="type_activity depth_6 item_with_icon" aria-labelledby="label_6_82"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_6_82" title="Dossier" href="https://e.3wa.fr/mod/folder/view.php?id=45523"><img class="smallicon navicon" alt="Dossier" title="Dossier" src="https://e.3wa.fr/theme/image.php/aardvark/folder/1535981697/icon"/><span class="item-content-wrap">M01 - Hello world</span></a></p></li><li class="type_activity depth_6 item_with_icon" aria-labelledby="label_6_83"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_6_83" title="Fichier" href="https://e.3wa.fr/mod/resource/view.php?id=47221"><img class="smallicon navicon" alt="Fichier" title="Fichier" src="https://e.3wa.fr/theme/image.php/aardvark/core/1535981697/f/pdf-24"/><span class="item-content-wrap">Cours - HTML 1 - Présentation</span></a></p></li><li class="type_activity depth_6 item_with_icon" aria-labelledby="label_6_84"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_6_84" title="Fichier" href="https://e.3wa.fr/mod/resource/view.php?id=47222"><img class="smallicon navicon" alt="Fichier" title="Fichier" src="https://e.3wa.fr/theme/image.php/aardvark/core/1535981697/f/pdf-24"/><span class="item-content-wrap">Cours - HTML 2 - Le document HTML 5</span></a></p></li><li class="type_activity depth_6 item_with_icon" aria-labelledby="label_6_85"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_6_85" title="Fichier" href="https://e.3wa.fr/mod/resource/view.php?id=47223"><img class="smallicon navicon" alt="Fichier" title="Fichier" src="https://e.3wa.fr/theme/image.php/aardvark/core/1535981697/f/pdf-24"/><span class="item-content-wrap">Cours - HTML 3 - Les principales balises</span></a></p></li><li class="type_activity depth_6 item_with_icon" aria-labelledby="label_6_88"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_6_88" title="Fichier" href="https://e.3wa.fr/mod/resource/view.php?id=47226"><img class="smallicon navicon" alt="Fichier" title="Fichier" src="https://e.3wa.fr/theme/image.php/aardvark/core/1535981697/f/pdf-24"/><span class="item-content-wrap">Cours - CSS 1 - Présentation</span></a></p></li><li class="type_activity depth_6 item_with_icon" aria-labelledby="label_6_89"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_6_89" title="Fichier" href="https://e.3wa.fr/mod/resource/view.php?id=47227"><img class="smallicon navicon" alt="Fichier" title="Fichier" src="https://e.3wa.fr/theme/image.php/aardvark/core/1535981697/f/pdf-24"/><span class="item-content-wrap">Cours - CSS 2 - La mise en forme du texte</span></a></p></li></ul></li></ul></li></ul></li></ul></li></ul></li></ul></div></div><span class="skip-block-to" id="sb-2"></span></aside>            </div>
        </div>
        <aside id="block-region-side-post" class="span3 pull-right block-region" data-blockregion="side-post" data-droptarget="1"></aside>    </div>

    <script type="text/javascript">
//<![CDATA[
var require = {
    baseUrl : 'https://e.3wa.fr/lib/requirejs.php/1535981697/',
    // We only support AMD modules with an explicit define() statement.
    enforceDefine: true,
    skipDataMain: true,
    waitSeconds : 0,

    paths: {
        jquery: 'https://e.3wa.fr/lib/javascript.php/1535981697/lib/jquery/jquery-3.1.0.min',
        jqueryui: 'https://e.3wa.fr/lib/javascript.php/1535981697/lib/jquery/ui-1.12.1/jquery-ui.min',
        jqueryprivate: 'https://e.3wa.fr/lib/javascript.php/1535981697/lib/requirejs/jquery-private'
    },

    // Custom jquery config map.
    map: {
      // '*' means all modules will get 'jqueryprivate'
      // for their 'jquery' dependency.
      '*': { jquery: 'jqueryprivate' },

      // 'jquery-private' wants the real jQuery module
      // though. If this line was not here, there would
      // be an unresolvable cyclic dependency.
      jqueryprivate: { jquery: 'jquery' }
    }
};

//]]>
</script>
<script type="text/javascript" src="https://e.3wa.fr/lib/javascript.php/1535981697/lib/requirejs/require.min.js"></script>
<script type="text/javascript">
//<![CDATA[
require(['core/first'], function() {
;
require(["media_videojs/loader"], function(loader) {
    loader.setUp(function(videojs) {
        videojs.options.flash.swf = "https://e.3wa.fr/media/player/videojs/videojs/video-js.swf";
videojs.addLanguage("fr",{
 "Play": "Lecture",
 "Pause": "Pause",
 "Current Time": "Temps actuel",
 "Duration Time": "Durée",
 "Remaining Time": "Temps restant",
 "Stream Type": "Type de flux",
 "LIVE": "EN DIRECT",
 "Loaded": "Chargé",
 "Progress": "Progression",
 "Fullscreen": "Plein écran",
 "Non-Fullscreen": "Fenêtré",
 "Mute": "Sourdine",
 "Unmute": "Son activé",
 "Playback Rate": "Vitesse de lecture",
 "Subtitles": "Sous-titres",
 "subtitles off": "Sous-titres désactivés",
 "Captions": "Sous-titres transcrits",
 "captions off": "Sous-titres transcrits désactivés",
 "Chapters": "Chapitres",
 "Close Modal Dialog": "Fermer la boîte de dialogue modale",
 "Descriptions": "Descriptions",
 "descriptions off": "descriptions désactivées",
 "Audio Track": "Piste audio",
 "You aborted the media playback": "Vous avez interrompu la lecture de la vidéo.",
 "A network error caused the media download to fail part-way.": "Une erreur de réseau a interrompu le téléchargement de la vidéo.",
 "The media could not be loaded, either because the server or network failed or because the format is not supported.": "Cette vidéo n'a pas pu être chargée, soit parce que le serveur ou le réseau a échoué ou parce que le format n'est pas reconnu.",
 "The media playback was aborted due to a corruption problem or because the media used features your browser did not support.": "La lecture de la vidéo a été interrompue à cause d'un problème de corruption ou parce que la vidéo utilise des fonctionnalités non prises en charge par votre navigateur.",
 "No compatible source was found for this media.": "Aucune source compatible n'a été trouvée pour cette vidéo.",
 "The media is encrypted and we do not have the keys to decrypt it.": "Le média est chiffré et nous n'avons pas les clés pour le déchiffrer.",
 "Play Video": "Lire la vidéo",
 "Close": "Fermer",
 "Modal Window": "Fenêtre modale",
 "This is a modal window": "Ceci est une fenêtre modale",
 "This modal can be closed by pressing the Escape key or activating the close button.": "Ce modal peut être fermé en appuyant sur la touche Échap ou activer le bouton de fermeture.",
 ", opens captions settings dialog": ", ouvrir les paramètres des sous-titres transcrits",
 ", opens subtitles settings dialog": ", ouvrir les paramètres des sous-titres",
 ", opens descriptions settings dialog": ", ouvrir les paramètres des descriptions",
 ", selected": ", sélectionné"
});

    });
});;
function legacy_activity_onclick_handler_1(e) { e.halt(); window.open('https://e.3wa.fr/mod/url/view.php?id=45459&redirect=1', '', 'width=620,height=450,toolbar=no,location=no,menubar=no,copyhistory=no,status=no,directories=no,scrollbars=yes,resizable=yes'); return false; };
function legacy_activity_onclick_handler_2(e) { e.halt(); window.open('https://e.3wa.fr/mod/url/view.php?id=45484&redirect=1', '', 'width=800,height=600,toolbar=no,location=no,menubar=no,copyhistory=no,status=no,directories=no,scrollbars=yes,resizable=yes'); return false; };
function legacy_activity_onclick_handler_3(e) { e.halt(); window.open('https://e.3wa.fr/mod/url/view.php?id=45491&redirect=1', '', 'width=800,height=600,toolbar=no,location=no,menubar=no,copyhistory=no,status=no,directories=no,scrollbars=yes,resizable=yes'); return false; };
function legacy_activity_onclick_handler_4(e) { e.halt(); window.open('https://e.3wa.fr/mod/url/view.php?id=45496&redirect=1', '', 'width=800,height=600,toolbar=no,location=no,menubar=no,copyhistory=no,status=no,directories=no,scrollbars=yes,resizable=yes'); return false; };
function legacy_activity_onclick_handler_5(e) { e.halt(); window.open('https://e.3wa.fr/mod/url/view.php?id=45509&redirect=1', '', 'width=800,height=600,toolbar=no,location=no,menubar=no,copyhistory=no,status=no,directories=no,scrollbars=yes,resizable=yes'); return false; };
function legacy_activity_onclick_handler_6(e) { e.halt(); window.open('https://e.3wa.fr/mod/url/view.php?id=45510&redirect=1', '', 'width=800,height=600,toolbar=no,location=no,menubar=no,copyhistory=no,status=no,directories=no,scrollbars=yes,resizable=yes'); return false; };

    require(['core/yui'], function(Y) {
            Y.on('click', legacy_activity_onclick_handler_1, '#label_6_18', null);
    });
;
require(["block_navigation/navblock"], function(amd) { amd.init("4"); });;
require(["block_settings/settingsblock"], function(amd) { amd.init("5", null); });;

require(['core/yui'], function(Y) {
    M.util.init_skiplink(Y);
});
;

require(['core/yui'], function(Y) {
    Y.use('moodle-core-actionmenu', function() {
        M.core.actionmenu.init();
    });
});
;

require(['jquery', 'message_popup/message_popover_controller'], function($, controller) {
    var container = $('#nav-message-popover-container');
    var controller = new controller(container);
    controller.registerEventListeners();
    controller.registerListNavigationEventListeners();
});
;

require(['jquery', 'message_popup/notification_popover_controller'], function($, controller) {
    var container = $('#nav-notification-popover-container');
    var controller = new controller(container);
    controller.registerEventListeners();
    controller.registerListNavigationEventListeners();
});
;
require(["core/notification"], function(amd) { amd.init(58015, []); });;
require(["core/log"], function(amd) { amd.setConfig({"level":"warn"}); });
});
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
M.yui.add_module({"mod_folder":{"name":"mod_folder","fullpath":"https:\/\/e.3wa.fr\/lib\/javascript.php\/1535981697\/mod\/folder\/module.js","requires":[]}});

//]]>
</script>
<script type="text/javascript" src="https://e.3wa.fr/theme/javascript.php/aardvark/1535981697/footer"></script>
<script type="text/javascript">
//<![CDATA[
M.str = {"moodle":{"lastmodified":"Modifi\u00e9 le","name":"Nom","error":"Erreur","info":"Information","yes":"Oui","no":"Non","viewallcourses":"Afficher tous les cours","morehelp":"Plus d'aide","loadinghelp":"Chargement...","cancel":"Annuler","confirm":"Confirmer","areyousure":"En \u00eates-vous bien s\u00fbr\u00a0?","closebuttontitle":"Fermer","unknownerror":"Erreur inconnue"},"repository":{"type":"Type","size":"Taille","invalidjson":"Cha\u00eene JSON non valide","nofilesattached":"Aucun fichier joint","filepicker":"S\u00e9lecteur de fichiers","logout":"D\u00e9connexion","nofilesavailable":"Aucun fichier disponible","norepositoriesavailable":"D\u00e9sol\u00e9, aucun de vos d\u00e9p\u00f4ts actuels ne peut retourner de fichiers dans le format requis.","fileexistsdialogheader":"Le fichier existe","fileexistsdialog_editor":"Un fichier de ce nom a d\u00e9j\u00e0 \u00e9t\u00e9 joint au texte que vous modifiez.","fileexistsdialog_filemanager":"Un fichier de ce nom a d\u00e9j\u00e0 \u00e9t\u00e9 joint","renameto":"Renommer \u00e0 {$a}","referencesexist":"Ce fichier est utilis\u00e9 comme source par {$a} alias.","select":"S\u00e9lectionnez"},"admin":{"confirmdeletecomments":"Voulez-vous vraiment supprimer des commentaires\u00a0?","confirmation":"Confirmation"},"block":{"addtodock":"D\u00e9placer vers le dock","undockitem":"Retirer cet \u00e9l\u00e9ment du dock","dockblock":"Mettre le bloc {$a} dans le dock","undockblock":"\u00d4ter du dock le bloc {$a}","undockall":"Tout retirer du dock","hidedockpanel":"Cacher le panneau du dock","hidepanel":"Cacher le dock"},"langconfig":{"thisdirectionvertical":"btt"}};
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
(function() {setTimeout("fix_column_widths()", 20);
Y.use("moodle-core-dock-loader",function() {M.core.dock.loader.initLoader();
});
Y.use("moodle-filter_mathjaxloader-loader",function() {M.filter_mathjaxloader.configure({"mathjaxconfig":"\n\nMathJax.Hub.Config({\n    config: [\"Accessible.js\", \"Safe.js\"],\n    errorSettings: { message: [\"!\"] },\n    skipStartupTypeset: true,\n    messageStyle: \"none\"\n});\n","lang":"fr"});
});
M.util.help_popups.setup(Y);
Y.use("moodle-core-popuphelp",function() {M.core.init_popuphelp();
});
M.util.init_block_hider(Y, {"id":"inst1653","title":"Informations G\u00e9n\u00e9rales","preference":"block1653hidden","tooltipVisible":"Cacher bloc Informations G\u00e9n\u00e9rales","tooltipHidden":"Afficher bloc Informations G\u00e9n\u00e9rales"});
M.util.init_block_hider(Y, {"id":"inst4","title":"Navigation","preference":"block4hidden","tooltipVisible":"Cacher bloc Navigation","tooltipHidden":"Afficher bloc Navigation"});
 M.util.js_pending('random5bf3d0a7efd4b38'); Y.use('mod_folder', function(Y) { M.mod_folder.init_tree(Y, "folder_tree0", false);  M.util.js_complete('random5bf3d0a7efd4b38'); });
 M.util.js_pending('random5bf3d0a7efd4b39'); Y.on('domready', function() { M.util.js_complete("init");  M.util.js_complete('random5bf3d0a7efd4b39'); });
})();
//]]>
</script>

</div>

	<footer id="page-footer">
	<div class="row-fluid">
    	<!-- Widget 1 -->
    	<div class="span4">
    		<div id="footer-left" class="block-region">
    			<div class="region-content">
       			 <div class="logininfo">Connecté sous le nom « <a href="https://e.3wa.fr/user/profile.php?id=3816" title="Consulter le profil">barthelemy thomas</a> » (<a href="https://e.3wa.fr/login/logout.php?sesskey=p982KtccDz">Déconnexion</a>)</div><p class="helplink"></p>			        		</div>
        	</div>
    	</div>

    	<!-- widget 2 -->
    	<div class="span4">
    		<div id="footer-middle" class="block-region">
    			<div class="region-content">
                		</div>
        	</div>
    	</div>

    	<!-- Widget 3 -->
    	<div class="span4">
    		<div id="footer-right" class="block-region">
    			<div class="region-content">
				

				       			
								
								
				
				
															
								
								
								
								
				<a href="https://twitter.com/3WAcademy "><span class="footer-icon twitter"><i class="fa fa-twitter"></i></span></a> 				
				<a href="https://fr-fr.facebook.com/3WAcademy "><span class="footer-icon facebook"><i class="fa fa-facebook"></i></span></a> 				
				<a href="https://3wa.fr "><span class="footer-icon website"><i class="fa fa-globe"></i></span></a> 				
				
				
				
				
				
        		</div>
        	</div>
    	</div>
	</div>

	<div class="footerlinks">
	<p>
	
	
	<a href="">&copy; 2018 3W Academy</a> | 
<a href="http://moodle.org/plugins/view.php?plugin=theme_aardvark">Based on an original theme created by Shaun Daubney</a> | <a href="http://moodle.org">moodle.org</a> 
    	</p>
    	
    
	</div>
</footer>
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"7f134d7039","applicationID":"17908100","transactionName":"Z1VXZ0BUW0FWURcPV14fYEFbGlhdUx0FCVRUVUccRFxQRRlCCxY=","queueTime":0,"applicationTime":95,"atts":"SxJUEQhOSE8=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>
</html>
