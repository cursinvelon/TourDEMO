<?php
	$Id = $_GET['id'];
?>
    
<!doctype html>
<html>
<head>
    <title></title>
</head>
<body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_EN/sdk.js#xfbml=1&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
	
	alert($Id)
    </script>

    <div class="fb-like-box" data-href="https://www.facebook.com/<?php echo $Id ?>" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="false"></div>
</body>
</html>
