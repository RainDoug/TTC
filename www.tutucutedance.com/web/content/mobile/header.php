<html>
    <head>
    <? include ('data.php'); ?>
    	<link rel="apple-touch-icon" href="favicon.png"/>
        <meta charset="UTF-8" />
        <title><? echo $businessName; ?></title>
        <style type="text/css" media="screen">@import "jqtouch.css";</style>
        <style type="text/css" media="screen">@import "theme2.php";</style>
        
        <script src="scripts/jquery-1.4.2.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="scripts/jqtouch.js" type="application/x-javascript" charset="utf-8"></script>
        <script src="scripts/jqt.autotitles.js" type="application/x-javascript" charset="utf-8"></script>
        <script type="text/javascript" charset="utf-8">
            var jQT = new $.jQTouch({
                icon: 'favicon.ico',
                addGlossToIcon: false,
                startupScreen: 'jqt_startup.png',
                statusBar: 'black'
            });
			function clearText(field){
				if (field.defaultValue == field.value) field.value = '';
				else if (field.value == '') field.value = field.defaultValue;
			
			}
			window.onload()
          </script>
    </head>
