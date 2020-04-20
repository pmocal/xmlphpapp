<?php
   $items = array('item1' => $_POST["item1"],
      'item2' => $_POST["item2"],
      'item3' => $_POST["item3"]);
   
   print "<items>\n";
   
   foreach ($items as $element => $content) {
      print " <$element>";
      print htmlentities($content);
      print "</$element>\n";
   }
   
   print "</items>";
?>