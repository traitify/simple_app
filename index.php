<?php 
    require 'vendor/autoload.php';
    $traitify = new \Traitify\Client();
    $traitify->set_host("api.traitify.com");
    $traitify->set_private_key("private key");
    $traitify->set_version("v1");
    $deck_id = "deck id";
    $assessment_id = $traitify->create_assessment($deck_id)->id;
    
?>


<html>
<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.traitify.com/js/api/1.0.0.js"></script>
<script src="http://cdn.traitify.com/js/widgets/slide_deck/2.0.0.js"></script>
<script>
  $(function(){
    Traitify.ui.slideDeck("<?= $assessment_id ?>", ".widget");
  })
</script>
</head>
<body>
  <div class="widget"></div>
</body>
</html>