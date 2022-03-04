<?php
	$id = $_GET['id'];
  $lang = $_GET['lang'];
  if(!isset($lang) ) {
  	$lang = "en_EN";
  }
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
  js.src = "//connect.facebook.net/<?php echo $lang ?>/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  </script>

    <div class="fb-page" data-href="https://www.facebook.com/<?php echo $id ?>" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/<?php echo $id ?>" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/<?php echo $id ?>">Facebook</a></blockquote></div>

</body>
</html>
