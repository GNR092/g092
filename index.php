<?php 

 ?>
 
 <!--CODIGO HTML5 copia todo el codigo !!!!! pegarlo en blogguer en nueva entrada con edicion html.-->

<html xmlns:b="http://www.google.com/2005/gml/b" xmlns:data="http://www.google.com/2005/gml/data" xmlns:expr="http://www.google.com/2005/gml/expr" xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>
<link href="https://www.blogger.com/static/v1/widgets/1708208307-widget_css_bundle.css" rel="stylesheet" type="text/css"></link>
<link href="https://www.blogger.com/dyn-css/authorization.css?targetBlogID=3512129179211407069&amp;zx=6265f88e-55c4-47b9-acce-a50b5b7e5649" rel="stylesheet" type="text/css"></link>
<link rel="stylesheet" href="styless.css">
<script type="text/javascript">
if (window.jstiming) window.jstiming.load.tick('headEnd');
</script></head>
<body>
<div class="navbar section" id="navbar">
</div>
<!-- Lava Lamp Menu -->
<!-- Galería de videos -->
<!-- FIN galería de videos -->
<div class="margin">
<div id="player">
<audio controls="" id="audio" oncontextmenu="return false" ondragstart="return
false" onselectstart="return false" preload="auto" tabindex="0" type="audio/mpeg">
<!--<source src="https://docs.google.com/uc?export=download&id=0B_iYLIn2GEFSdGxvWkluWndrWVU" type="audio/mp3"></source>
        Hola, tu navegador no está actualizado y no puede mostrar este contenido.
    </audio>-->
</div>

<ul id="playlist" class="scrollp" oncontextmenu="return false" ondragstart="return
false" onselectstart="return false">
<li><a href="https://docs.google.com/uc?export=download&id=0B_iYLIn2GEFSdGxvWkluWndrWVU">Pegasus Fantasy - Mauren </a></li>
<li><a href="https://docs.google.com/uc?export=download&id=0B_iYLIn2GEFSZHNFVURCc1FXb00">Si tu lo deseas - Cesar Franco</a></li>
<li><a href="https://docs.google.com/uc?export=download&id=0B_iYLIn2GEFSV3NMSXBzSXExQUk">Dragon Screamer - DA PUMP</a></li>
<li><a href="https://docs.google.com/uc?export=download&id=0B_iYLIn2GEFSTHVmY3FLSHQ4REk">Sinfonica De Dragon Ball - Desconocido </a></li>
<li><a href="https://docs.google.com/uc?export=download&id=0B_iYLIn2GEFSU25qaDRLa1NXYVE">We Are!- One Piece </a></li>
<li><a href="https://docs.google.com/uc?export=download&id=0B_iYLIn2GEFSdGxvWkluWndrWVU">Pegasus Fantasy - Mauren </a></li>
<li><a href="https://docs.google.com/uc?export=download&id=0B_iYLIn2GEFSZHNFVURCc1FXb00">Si tu lo deseas - Cesar Franco</a></li>
<li><a href="https://docs.google.com/uc?export=download&id=0B_iYLIn2GEFSV3NMSXBzSXExQUk">Dragon Screamer - DA PUMP</a></li>
<li><a href="https://docs.google.com/uc?export=download&id=0B_iYLIn2GEFSTHVmY3FLSHQ4REk">Sinfonica De Dragon Ball - Desconocido </a></li>
<li><a href="https://docs.google.com/uc?export=download&id=0B_iYLIn2GEFSU25qaDRLa1NXYVE">We Are!- One Piece </a></li>
<li><a href="https://docs.google.com/uc?export=download&id=0B_iYLIn2GEFSdGxvWkluWndrWVU">Pegasus Fantasy - Mauren </a></li>
<li><a href="https://docs.google.com/uc?export=download&id=0B_iYLIn2GEFSZHNFVURCc1FXb00">Si tu lo deseas - Cesar Franco</a></li>
<li><a href="https://docs.google.com/uc?export=download&id=0B_iYLIn2GEFSV3NMSXBzSXExQUk">Dragon Screamer - DA PUMP</a></li>
<li><a href="https://docs.google.com/uc?export=download&id=0B_iYLIn2GEFSTHVmY3FLSHQ4REk">Sinfonica De Dragon Ball - Desconocido </a></li>
<li><a href="https://docs.google.com/uc?export=download&id=0B_iYLIn2GEFSU25qaDRLa1NXYVE">We Are!- One Piece </a></li>
<li><a href="https://docs.google.com/uc?export=download&id=0B_iYLIn2GEFSdGxvWkluWndrWVU">Pegasus Fantasy - Mauren </a></li>
<li><a href="https://docs.google.com/uc?export=download&id=0B_iYLIn2GEFSZHNFVURCc1FXb00">Si tu lo deseas - Cesar Franco</a></li>
<li><a href="https://docs.google.com/uc?export=download&id=0B_iYLIn2GEFSV3NMSXBzSXExQUk">Dragon Screamer - DA PUMP</a></li>
<li><a href="https://docs.google.com/uc?export=download&id=0B_iYLIn2GEFSTHVmY3FLSHQ4REk">Sinfonica De Dragon Ball - Desconocido </a></li>
<li><a href="https://docs.google.com/uc?export=download&id=0B_iYLIn2GEFSU25qaDRLa1NXYVE">We Are!- One Piece </a></li>
</ul>
</div>
<script>
//<![CDATA[
var audio;
var playlist;
var tracks;
var current;

init();
function init(){
    current = 0;
    audio = $('audio');
    playlist = $('#playlist');
    tracks = playlist.find('li a');
    len = tracks.length - 1;
    audio[0].volume = 1;
    playlist.find('a').click(function(e){
        e.preventDefault();
        link = $(this);
        current = link.parent().index();
        run(link, audio[0]);
    });
    audio[0].addEventListener('ended',function(e){
        current++;
        if(current > len){
            current = 0;
            link = playlist.find('a')[0];
        }else{
            link = playlist.find('a')[current];    
        }
        run($(link),audio[0]);
    });
}
function run(link, player){
        player.src = link.attr('href');
        par = link.parent();
        par.addClass('active').siblings().removeClass('active');
        audio[0].load();
        audio[0].play();
}
  //]]>
</script>

     <script language="Javascript" type="text/javascript">
    //<![CDATA[

    <!-- Begin
    document.oncontextmenu = function(){return false}
    // End -->
    //]]>
    </script>

<script type="text/javascript">
if (window.jstiming) window.jstiming.load.tick('widgetJsBefore');
</script><script src="https://www.blogger.com/static/v1/widgets/3571794311-widgets.js" type="text/javascript"></script>
<script type="text/javascript">
if (typeof(BLOG_attachCsiOnload) != 'undefined' && BLOG_attachCsiOnload != null) { window['blogger_templates_experiment_id'] = "templatesV1";window['blogger_blog_id'] = '3512129179211407069';BLOG_attachCsiOnload('item_'); }_WidgetManager._Init('//www.blogger.com/rearrange?blogID\x3d3512129179211407069','//ciudadblogger-jquery.blogspot.mx/2014/04/html5-audio-player.html','3512129179211407069');
_WidgetManager._SetDataContext([{'name': 'blog', 'data': {'blogId': '3512129179211407069', 'bloggerUrl': 'https://www.blogger.com', 'title': 'jQuery', 'pageType': 'item', 'postId': '1448491110664770242', 'url': 'http://ciudadblogger-jquery.blogspot.mx/2014/04/html5-audio-player.html', 'canonicalUrl': 'http://ciudadblogger-jquery.blogspot.com/2014/04/html5-audio-player.html', 'homepageUrl': 'http://ciudadblogger-jquery.blogspot.mx/', 'canonicalHomepageUrl': 'http://ciudadblogger-jquery.blogspot.com/', 'blogspotFaviconUrl': 'http://ciudadblogger-jquery.blogspot.mx/favicon.ico', 'enabledCommentProfileImages': true, 'adultContent': false, 'analyticsAccountNumber': '', 'useUniversalAnalytics': false, 'pageName': 'HTML5 audio player', 'pageTitle': 'jQuery: HTML5 audio player', 'encoding': 'UTF-8', 'locale': 'es', 'localeUnderscoreDelimited': 'es', 'isPrivate': true, 'isMobile': false, 'isMobileRequest': false, 'mobileClass': '', 'isPrivateBlog': false, 'languageDirection': 'ltr', 'feedLinks': '\74link rel\75\42alternate\42 type\75\42application/atom+xml\42 title\75\42jQuery - Atom\42 href\75\42http://ciudadblogger-jquery.blogspot.com/feeds/posts/default\42 /\76\n\74link rel\75\42alternate\42 type\75\42application/rss+xml\42 title\75\42jQuery - RSS\42 href\75\42http://ciudadblogger-jquery.blogspot.com/feeds/posts/default?alt\75rss\42 /\76\n\74link rel\75\42service.post\42 type\75\42application/atom+xml\42 title\75\42jQuery - Atom\42 href\75\42https://www.blogger.com/feeds/3512129179211407069/posts/default\42 /\76\n\n\74link rel\75\42alternate\42 type\75\42application/atom+xml\42 title\75\42jQuery - Atom\42 href\75\42http://ciudadblogger-jquery.blogspot.com/feeds/1448491110664770242/comments/default\42 /\76\n', 'meTag': '', 'openIdOpTag': '', 'latencyHeadScript': '\74script type\75\42text/javascript\42\76(function() { (function(){function c(a){this.t\75{};this.tick\75function(a,c,b){var d\75void 0!\75b?b:(new Date).getTime();this.t[a]\75[d,c];if(void 0\75\75b)try{window.console.timeStamp(\42CSI/\42+a)}catch(e){}};this.tick(\42start\42,null,a)}var a;window.performance\46\46(a\75window.performance.timing);var h\75a?new c(a.responseStart):new c;window.jstiming\75{Timer:c,load:h};if(a){var b\75a.navigationStart,e\75a.responseStart;0\74b\46\46e\76\75b\46\46(window.jstiming.srt\75e-b)}if(a){var d\75window.jstiming.load;0\74b\46\46e\76\75b\46\46(d.tick(\42_wtsrt\42,void 0,b),d.tick(\42wtsrt_\42,\n\42_wtsrt\42,e),d.tick(\42tbsd_\42,\42wtsrt_\42))}try{a\75null,window.chrome\46\46window.chrome.csi\46\46(a\75Math.floor(window.chrome.csi().pageT),d\46\0460\74b\46\46(d.tick(\42_tbnd\42,void 0,window.chrome.csi().startE),d.tick(\42tbnd_\42,\42_tbnd\42,b))),null\75\75a\46\46window.gtbExternal\46\46(a\75window.gtbExternal.pageT()),null\75\75a\46\46window.external\46\46(a\75window.external.pageT,d\46\0460\74b\46\46(d.tick(\42_tbnd\42,void 0,window.external.startE),d.tick(\42tbnd_\42,\42_tbnd\42,b))),a\46\46(window.jstiming.pt\75a)}catch(k){}})();window.tickAboveFold\75function(c){var a\0750;if(c.offsetParent){do a+\75c.offsetTop;while(c\75c.offsetParent)}c\75a;750\76\75c\46\46window.jstiming.load.tick(\42aft\42)};var f\75!1;function g(){f||(f\75!0,window.jstiming.load.tick(\42firstScrollTime\42))}window.addEventListener?window.addEventListener(\42scroll\42,g,!1):window.attachEvent(\42onscroll\42,g);\n })();\74/script\076', 'mobileHeadScript': '', 'view': '', 'dynamicViewsCommentsSrc': '//www.blogblog.com/dynamicviews/4224c15c4e7c9321/js/comments.js', 'dynamicViewsScriptSrc': '//www.blogblog.com/dynamicviews/57b76c2f28d7ea5b', 'plusOneApiSrc': 'https://apis.google.com/js/plusone.js', 'sf': 'n', 'tf': ''}}, {'name': 'messages', 'data': {'archive': 'Archivo', 'blogArchive': 'Archivo del blog', 'by': 'De', 'deleteBacklink': 'Eliminar backlink', 'deleteComment': 'Eliminar comentario', 'emailAddress': 'Dirección de correo', 'getEmailNotifications': 'Recibir notificaciones por correo electrónico', 'keepReading': 'Sigue leyendo', 'labels': 'Etiquetas', 'loadMorePosts': 'Cargar más entradas', 'loading': 'Cargando...', 'myBlogList': 'Mi lista de blogs', 'myFavoriteSites': 'Mis sitios web favoritos', 'newer': 'Más reciente', 'newerPosts': 'Entradas más recientes', 'newest': 'El más reciente', 'noResultsFound': 'No se ha encontrado ningún resultado', 'noTitle': 'Sin título', 'older': 'Más antigua', 'olderPosts': 'Entradas antiguas', 'oldest': 'El más antiguo', 'onlyTeamMembersCanComment': 'Nota: solo los miembros de este blog pueden publicar comentarios.', 'popularPosts': 'Entradas populares', 'popularPostsFromThisBlog': 'Entradas populares de este blog', 'postAComment': 'Publicar un comentario en la entrada', 'postedBy': 'Publicado por', 'readMore': 'Más información', 'reportAbuse': 'Informar sobre mal uso', 'search': 'Buscar', 'searchBlog': 'Buscar en el blog', 'share': 'Compartir', 'showAll': 'Mostrar todo', 'subscribe': 'Suscribirse', 'subscribeToThisBlog': 'Subscribirse a este blog', 'theresNothingHere': '&#161;Aquí no hay nada!', 'viewAll': 'Ver todo'}}, {'name': 'skin', 'data': {'vars': {}, 'override': ''}}, {'name': 'view', 'data': {'classic': {'name': 'classic', 'url': '?view\75classic'}, 'flipcard': {'name': 'flipcard', 'url': '?view\75flipcard'}, 'magazine': {'name': 'magazine', 'url': '?view\75magazine'}, 'mosaic': {'name': 'mosaic', 'url': '?view\75mosaic'}, 'sidebar': {'name': 'sidebar', 'url': '?view\75sidebar'}, 'snapshot': {'name': 'snapshot', 'url': '?view\75snapshot'}, 'timeslide': {'name': 'timeslide', 'url': '?view\75timeslide'}}}]);
_WidgetManager._RegisterWidget('_NavbarView', new _WidgetInfo('Navbar1', 'navbar', null, document.getElementById('Navbar1'), {}, 'displayModeFull'));
</script>

     <script language="Javascript" type="text/javascript">
    //<![CDATA[

    <!-- Begin
    document.oncontextmenu = function(){return false}
    // End -->
    //]]>
    </script>
</body>
</html>


<!--TERMINA EL CODIGO HMTL5-->
