<?php
  session_start();  
  if(!isset($_SESSION["id_usuario"])){ //Si no ha iniciado sesión redirecciona a index.php
    header("Location: ../index.php");
  }

?>
<!DOCTYPE html>
<html class="html" lang="es-ES">
 <head>

  <script type="text/javascript">
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.musepolyfill.bgsize.js", "jquery.watch.js", "llena-la-polla.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2015.0.0.309"/>
  <title>llena la polla</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?4052507572"/>
  <link rel="stylesheet" type="text/css" href="css/llena-la-polla.css?4244699499" id="pagesheet"/>
  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className += ' js';
var __adobewebfontsappname__ = "muse";
</script>
  <!-- JS includes -->
  <script type="text/javascript">
   document.write('\x3Cscript src="' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//webfonts.creativecloud.com/montserrat:n4:default.js" type="text/javascript">\x3C/script>');
</script>
   </head>
 <body class="museBGSize">

  <div class="clearfix" id="page"><!-- column -->
   <div class="clearfix colelem" id="pbuttonu409"><!-- group -->
    <!-- m_editable region-id="editable-static-tag-U409" template="llena-la-polla.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
    <a class="nonblock nontext Button rounded-corners clearfix grpelem" id="buttonu409" href="instrucciones.php" data-href="page:U134" data-muse-uid="U409"><!-- container box --><!-- m_editable region-id="editable-static-tag-U410" template="llena-la-polla.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u410-4" data-muse-uid="U410" data-muse-type="txt_frame"><!-- content --><p>INSTRUCCIONES</p></div><!-- /m_editable --></a>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U407" template="llena-la-polla.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
    <a class="nonblock nontext Button rounded-corners clearfix grpelem" id="buttonu407" href="calendario.php" data-href="page:U140" data-muse-uid="U407"><!-- container box --><!-- m_editable region-id="editable-static-tag-U408" template="llena-la-polla.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u408-4" data-muse-uid="U408" data-muse-type="txt_frame"><!-- content --><p>CALENDARIO</p></div><!-- /m_editable --></a>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U411" template="llena-la-polla.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
    <a class="nonblock nontext clearfix grpelem" id="u411-4" href="bienvenida.php" data-href="page:U128" data-muse-uid="U411" data-muse-type="txt_frame"><!-- content --><p>INICIO</p></a>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U403" template="llena-la-polla.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
    <a class="nonblock nontext Button ButtonSelected rounded-corners clearfix grpelem" id="buttonu403" href="llena-la-polla.php" data-href="page:U146" data-muse-uid="U403"><!-- container box --><!-- m_editable region-id="editable-static-tag-U404" template="llena-la-polla.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u404-4" data-muse-uid="U404" data-muse-type="txt_frame"><!-- content --><p>LLENAR POLLA</p></div><!-- /m_editable --></a>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U405" template="llena-la-polla.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
    <a class="nonblock nontext Button rounded-corners clearfix grpelem" id="buttonu405" href="posiciones.php" data-href="page:U152" data-muse-uid="U405"><!-- container box --><!-- m_editable region-id="editable-static-tag-U406" template="llena-la-polla.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u406-4" data-muse-uid="U406" data-muse-type="txt_frame"><!-- content --><p>POSICIONES</p></div><!-- /m_editable --></a>
    <!-- /m_editable -->
   </div>
   <div class="clearfix colelem" id="pu841"><!-- group -->
    <!-- m_editable region-id="editable-static-tag-U841" template="llena-la-polla.html" data-type="image" -->
    <div class="clip_frame grpelem" id="u841" data-muse-uid="U841" data-muse-type="img_frame"><!-- image -->
     <img class="block" id="u841_img" src="images/fondo-polla.png" alt="" width="849" height="1721" data-muse-src="images/fondo-polla.png"/>
    </div>
    <!-- /m_editable -->
    <img class="svg grpelem" id="u637" src="images/pasted%20svg%20625272x1580.svg" width="626" height="1581" alt="" data-mu-svgfallback="images/pasted%20svg%20625272x1580_poster_.png"/><!-- svg -->
    <img class="svg grpelem" id="u625" src="images/pasted%20svg%20419587x134.svg" width="420" height="135" alt="" data-mu-svgfallback="images/pasted%20svg%20419587x134_poster_.png"/><!-- svg -->
    <!-- m_editable region-id="editable-static-tag-U635" template="llena-la-polla.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix grpelem" id="u635-4" data-muse-uid="U635" data-muse-type="txt_frame"><!-- content -->
     <p>LLENAR</p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U636" template="llena-la-polla.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix grpelem" id="u636-4" data-muse-uid="U636" data-muse-type="txt_frame"><!-- content -->
     <p>LA POLLA</p>
    </div>
    <!-- /m_editable -->
    <img class="svg grpelem" id="u642" src="images/pasted%20svg%20563269x1555.svg" width="564" height="1556" alt="" data-mu-svgfallback="images/pasted%20svg%20563269x1555_poster_.png"/><!-- svg -->
    <div class="grpelem" id="u647"><!-- simple frame --></div>
    <div class="grpelem" id="u727"><!-- simple frame --></div>
    <div class="grpelem" id="u690"><!-- simple frame --></div>
    <div class="grpelem" id="u724"><!-- simple frame --></div>
    <div class="grpelem" id="u767"><!-- simple frame --></div>
    <div class="grpelem" id="u833"><!-- simple frame --></div>
    <div class="grpelem" id="u696"><!-- simple frame --></div>
    <div class="grpelem" id="u721"><!-- simple frame --></div>
    <div class="grpelem" id="u764"><!-- simple frame --></div>
    <div class="grpelem" id="u829"><!-- simple frame --></div>
    <div class="grpelem" id="u787"><!-- simple frame --></div>
    <div class="grpelem" id="u810"><!-- simple frame --></div>
    <div class="grpelem" id="u698"><!-- simple frame --></div>
    <div class="grpelem" id="u725"><!-- simple frame --></div>
    <div class="grpelem" id="u748"><!-- simple frame --></div>
    <div class="grpelem" id="u814"><!-- simple frame --></div>
    <div class="grpelem" id="u784"><!-- simple frame --></div>
    <div class="grpelem" id="u819"><!-- simple frame --></div>
    <div class="grpelem" id="u701"><!-- simple frame --></div>
    <div class="grpelem" id="u726"><!-- simple frame --></div>
    <div class="grpelem" id="u758"><!-- simple frame --></div>
    <div class="grpelem" id="u812"><!-- simple frame --></div>
    <div class="grpelem" id="u779"><!-- simple frame --></div>
    <div class="grpelem" id="u817"><!-- simple frame --></div>
    <div class="grpelem" id="u704"><!-- simple frame --></div>
    <div class="grpelem" id="u722"><!-- simple frame --></div>
    <div class="grpelem" id="u760"><!-- simple frame --></div>
    <div class="grpelem" id="u823"><!-- simple frame --></div>
    <div class="grpelem" id="u782"><!-- simple frame --></div>
    <div class="grpelem" id="u826"><!-- simple frame --></div>
    <div class="grpelem" id="u708"><!-- simple frame --></div>
    <div class="grpelem" id="u723"><!-- simple frame --></div>
    <div class="grpelem" id="u759"><!-- simple frame --></div>
    <div class="grpelem" id="u824"><!-- simple frame --></div>
    <div class="grpelem" id="u783"><!-- simple frame --></div>
    <div class="grpelem" id="u828"><!-- simple frame --></div>
    <div class="grpelem" id="u735"><!-- simple frame --></div>
    <div class="grpelem" id="u761"><!-- simple frame --></div>
    <div class="grpelem" id="u821"><!-- simple frame --></div>
    <div class="grpelem" id="u780"><!-- simple frame --></div>
    <div class="grpelem" id="u813"><!-- simple frame --></div>
    <div class="grpelem" id="u741"><!-- simple frame --></div>
    <div class="grpelem" id="u745"><!-- simple frame --></div>
    <div class="grpelem" id="u825"><!-- simple frame --></div>
    <div class="grpelem" id="u781"><!-- simple frame --></div>
    <div class="grpelem" id="u827"><!-- simple frame --></div>
    <div class="grpelem" id="u840"><!-- simple frame --></div>
    <div class="grpelem" id="u744"><!-- simple frame --></div>
    <div class="grpelem" id="u649"><!-- simple frame --></div>
    <div class="grpelem" id="u728"><!-- simple frame --></div>
    <div class="grpelem" id="u688"><!-- simple frame --></div>
    <div class="grpelem" id="u719"><!-- simple frame --></div>
    <div class="grpelem" id="u768"><!-- simple frame --></div>
    <div class="grpelem" id="u832"><!-- simple frame --></div>
    <div class="grpelem" id="u694"><!-- simple frame --></div>
    <div class="grpelem" id="u718"><!-- simple frame --></div>
    <div class="grpelem" id="u763"><!-- simple frame --></div>
    <div class="grpelem" id="u831"><!-- simple frame --></div>
    <div class="grpelem" id="u789"><!-- simple frame --></div>
    <div class="grpelem" id="u799"><!-- simple frame --></div>
    <div class="grpelem" id="u699"><!-- simple frame --></div>
    <div class="grpelem" id="u711"><!-- simple frame --></div>
    <div class="grpelem" id="u746"><!-- simple frame --></div>
    <div class="grpelem" id="u822"><!-- simple frame --></div>
    <div class="grpelem" id="u785"><!-- simple frame --></div>
    <div class="grpelem" id="u795"><!-- simple frame --></div>
    <div class="grpelem" id="u702"><!-- simple frame --></div>
    <div class="grpelem" id="u715"><!-- simple frame --></div>
    <div class="grpelem" id="u753"><!-- simple frame --></div>
    <div class="grpelem" id="u820"><!-- simple frame --></div>
    <div class="grpelem" id="u778"><!-- simple frame --></div>
    <div class="grpelem" id="u797"><!-- simple frame --></div>
    <div class="grpelem" id="u705"><!-- simple frame --></div>
    <div class="grpelem" id="u709"><!-- simple frame --></div>
    <div class="grpelem" id="u756"><!-- simple frame --></div>
    <div class="grpelem" id="u818"><!-- simple frame --></div>
    <div class="grpelem" id="u772"><!-- simple frame --></div>
    <div class="grpelem" id="u803"><!-- simple frame --></div>
    <div class="grpelem" id="u706"><!-- simple frame --></div>
    <div class="grpelem" id="u713"><!-- simple frame --></div>
    <div class="grpelem" id="u752"><!-- simple frame --></div>
    <div class="grpelem" id="u808"><!-- simple frame --></div>
    <div class="grpelem" id="u775"><!-- simple frame --></div>
    <div class="grpelem" id="u791"><!-- simple frame --></div>
    <div class="grpelem" id="u733"><!-- simple frame --></div>
    <div class="grpelem" id="u751"><!-- simple frame --></div>
    <div class="grpelem" id="u809"><!-- simple frame --></div>
    <div class="grpelem" id="u776"><!-- simple frame --></div>
    <div class="grpelem" id="u790"><!-- simple frame --></div>
    <div class="grpelem" id="u739"><!-- simple frame --></div>
    <div class="grpelem" id="u755"><!-- simple frame --></div>
    <div class="grpelem" id="u801"><!-- simple frame --></div>
    <div class="grpelem" id="u774"><!-- simple frame --></div>
    <div class="grpelem" id="u793"><!-- simple frame --></div>
    <div class="grpelem" id="u839"><!-- simple frame --></div>
    <div class="grpelem" id="u743"><!-- simple frame --></div>
    <div class="grpelem" id="u650"><!-- simple frame --></div>
    <div class="grpelem" id="u729"><!-- simple frame --></div>
    <div class="grpelem" id="u689"><!-- simple frame --></div>
    <div class="grpelem" id="u720"><!-- simple frame --></div>
    <div class="grpelem" id="u766"><!-- simple frame --></div>
    <div class="grpelem" id="u834"><!-- simple frame --></div>
    <div class="grpelem" id="u695"><!-- simple frame --></div>
    <div class="grpelem" id="u717"><!-- simple frame --></div>
    <div class="grpelem" id="u765"><!-- simple frame --></div>
    <div class="grpelem" id="u830"><!-- simple frame --></div>
    <div class="grpelem" id="u788"><!-- simple frame --></div>
    <div class="grpelem" id="u800"><!-- simple frame --></div>
    <div class="grpelem" id="u697"><!-- simple frame --></div>
    <div class="grpelem" id="u714"><!-- simple frame --></div>
    <div class="grpelem" id="u747"><!-- simple frame --></div>
    <div class="grpelem" id="u811"><!-- simple frame --></div>
    <div class="grpelem" id="u786"><!-- simple frame --></div>
    <div class="grpelem" id="u796"><!-- simple frame --></div>
    <div class="grpelem" id="u700"><!-- simple frame --></div>
    <div class="grpelem" id="u716"><!-- simple frame --></div>
    <div class="grpelem" id="u750"><!-- simple frame --></div>
    <div class="grpelem" id="u815"><!-- simple frame --></div>
    <div class="grpelem" id="u777"><!-- simple frame --></div>
    <div class="grpelem" id="u804"><!-- simple frame --></div>
    <div class="grpelem" id="u703"><!-- simple frame --></div>
    <div class="grpelem" id="u710"><!-- simple frame --></div>
    <div class="grpelem" id="u757"><!-- simple frame --></div>
    <div class="grpelem" id="u816"><!-- simple frame --></div>
    <div class="grpelem" id="u770"><!-- simple frame --></div>
    <div class="grpelem" id="u802"><!-- simple frame --></div>
    <div class="grpelem" id="u707"><!-- simple frame --></div>
    <div class="grpelem" id="u712"><!-- simple frame --></div>
    <div class="grpelem" id="u762"><!-- simple frame --></div>
    <div class="grpelem" id="u806"><!-- simple frame --></div>
    <div class="grpelem" id="u769"><!-- simple frame --></div>
    <div class="grpelem" id="u794"><!-- simple frame --></div>
    <div class="grpelem" id="u734"><!-- simple frame --></div>
    <div class="grpelem" id="u754"><!-- simple frame --></div>
    <div class="grpelem" id="u807"><!-- simple frame --></div>
    <div class="grpelem" id="u773"><!-- simple frame --></div>
    <div class="grpelem" id="u805"><!-- simple frame --></div>
    <div class="grpelem" id="u740"><!-- simple frame --></div>
    <div class="grpelem" id="u749"><!-- simple frame --></div>
    <div class="grpelem" id="u792"><!-- simple frame --></div>
    <div class="grpelem" id="u771"><!-- simple frame --></div>
    <div class="grpelem" id="u798"><!-- simple frame --></div>
    <div class="grpelem" id="u838"><!-- simple frame --></div>
    <div class="grpelem" id="u742"><!-- simple frame --></div>
   </div>
   <div class="verticalspacer"></div>
  </div>
  <!-- JS includes -->
  <script type="text/javascript">
   if (document.location.protocol != 'https:') document.write('\x3Cscript src="http://musecdn.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script type="text/javascript">
   window.jQuery || document.write('\x3Cscript src="scripts/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script src="scripts/museutils.js?183364071" type="text/javascript"></script>
  <script src="scripts/jquery.musepolyfill.bgsize.js?4004268962" type="text/javascript"></script>
  <script src="scripts/jquery.watch.js?71412426" type="text/javascript"></script>
  <!-- Other scripts -->
  <script type="text/javascript">
   $(document).ready(function() { try {
(function(){var a={},b=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),16);return 0};(function(){$('link[type="text/css"]').each(function(){var b=($(this).attr("href")||"").match(/\/?css\/([\w\-]+\.css)\?(\d+)/);b&&b[1]&&b[2]&&(a[b[1]]=b[2])})})();(function(){$("body").append('<div class="version" style="display:none; width:1px; height:1px;"></div>');
for(var c=$(".version"),d=0;d<Muse.assets.required.length;){var f=Muse.assets.required[d],g=f.match(/([\w\-\.]+)\.(\w+)$/),k=g&&g[1]?g[1]:null,g=g&&g[2]?g[2]:null;switch(g.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");c.addClass(k);var g=b(c.css("color")),h=b(c.css("background-color"));g!=0||h!=0?(Muse.assets.required.splice(d,1),"undefined"!=typeof a[f]&&(g!=a[f]>>>24||h!=(a[f]&16777215))&&Muse.assets.outOfDate.push(f)):d++;c.removeClass(k);break;case "js":k.match(/^jquery-[\d\.]+/gi)&&
typeof $!="undefined"?Muse.assets.required.splice(d,1):d++;break;default:throw Error("Unsupported file type: "+g);}}c.remove();if(Muse.assets.outOfDate.length||Muse.assets.required.length)c="Some files on the server may be missing or incorrect. Clear browser cache and try again. If the problem persists please contact website author.",(d=location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi))&&Muse.assets.outOfDate.length&&(c+="\nOut of date: "+Muse.assets.outOfDate.join(",")),d&&Muse.assets.required.length&&(c+="\nMissing: "+Muse.assets.required.join(",")),alert(c)})()})();/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { if (e && 'function' == typeof e.notify) e.notify(); else Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
