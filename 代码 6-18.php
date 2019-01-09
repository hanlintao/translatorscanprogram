<?php  
echo levenshtein("译者","译员")."<br>";  
echo levenshtein("translation","TRANSLATION")."<br>";  
echo levenshtein("translation","translating")."<br>";  
  
similar_text("译者","译员",$one);  
echo $one."<br>";  
  
similar_text("translation","TRANSLATION",$two);  
echo $two."<br>";  
  
similar_text("translation","translating",$three);  
echo $three."<br>";  
  
?>  