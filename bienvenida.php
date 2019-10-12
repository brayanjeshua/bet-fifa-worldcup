<?php
  session_start();  
  if(!isset($_SESSION["id_usuario"])){ //Si no ha iniciado sesión redirecciona a index.php
    header("Location: ../index.php");
  }
?><!DOCTYPE html>
<html class="html" lang="es-ES">
 <head>

  <script type="text/javascript">
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.musepolyfill.bgsize.js", "jquery.watch.js", "bienvenida.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2015.0.0.309"/>
  <title>bienvenida</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?4052507572"/>
  <link rel="stylesheet" type="text/css" href="css/bienvenida.css?3905149050" id="pagesheet"/>
  <link rel="stylesheet" href="css/cerrar.css">
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
 <!--div class="cerrar">
 <a href="logout.php"><img alt="Cerrar Sesión" src="img/cerrar.png" /></a>  
 </div-->
  <div class="clearfix" id="page"><!-- group -->
   <div class="verticalspacer"></div>
   <!-- m_editable region-id="editable-static-tag-U373" template="bienvenida.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
   <a class="nonblock nontext Button rounded-corners clearfix grpelem" id="buttonu373" href="instrucciones.php" data-href="page:U134" data-muse-uid="U373"><!-- container box --><!-- m_editable region-id="editable-static-tag-U374" template="bienvenida.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u374-4" data-muse-uid="U374" data-muse-type="txt_frame"><!-- content --><p>INSTRUCCIONES</p></div><!-- /m_editable --></a>
   <!-- /m_editable -->
   <!-- m_editable region-id="editable-static-tag-U371" template="bienvenida.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
   <a class="nonblock nontext Button rounded-corners clearfix grpelem" id="buttonu371" href="calendario.php" data-href="page:U140" data-muse-uid="U371"><!-- container box --><!-- m_editable region-id="editable-static-tag-U372" template="bienvenida.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u372-4" data-muse-uid="U372" data-muse-type="txt_frame"><!-- content --><p>CALENDARIO</p></div><!-- /m_editable --></a>
   <!-- /m_editable -->
   <!-- m_editable region-id="editable-static-tag-U375" template="bienvenida.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
   <a class="nonblock nontext MuseLinkActive clearfix grpelem" id="u375-4" href="logout.php" data-href="page:U128" data-muse-uid="U375" data-muse-type="txt_frame"><!-- content --><p>SALIR</p></a>
   <!-- /m_editable -->
   <!-- m_editable region-id="editable-static-tag-U367" template="bienvenida.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->

                      <?php if($_SESSION["id_usuario"] == 1) { ?>
                         <a class="nonblock nontext Button rounded-corners clearfix grpelem" id="buttonu367" href="pollaAdmin.php" data-href="page:U146" data-muse-uid="U367"><!-- container box --><!-- m_editable region-id="editable-static-tag-U368" template="bienvenida.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u368-4" data-muse-uid="U368" data-muse-type="txt_frame"><!-- content --><p>LLENAR PARTIDOS</p></div><!-- /m_editable --></a>
                      <?php  }  else { ?>
                            <a class="nonblock nontext Button rounded-corners clearfix grpelem" id="buttonu367" href="polla.php" data-href="page:U146" data-muse-uid="U367"><!-- container box --><!-- m_editable region-id="editable-static-tag-U368" template="bienvenida.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u368-4" data-muse-uid="U368" data-muse-type="txt_frame"><!-- content --><p>LLENAR POLLA</p></div><!-- /m_editable --></a>
                      <?php  } ?>
                      
   <!-- /m_editable -->
   <!-- m_editable region-id="editable-static-tag-U369" template="bienvenida.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
   <a class="nonblock nontext Button rounded-corners clearfix grpelem" id="buttonu369" href="posiciones.php" data-href="page:U152" data-muse-uid="U369"><div class="clearfix grpelem" id="u370-4" data-muse-uid="U370" data-muse-type="txt_frame"><p>POSICIONES</p></div></a>
   <!-- /m_editable -->
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
