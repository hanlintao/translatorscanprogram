<?php  
function excelcount($text){  
    $english_char_num="";  
    foreach(str_word_count($text,1) as $english)  
    {  
        $english_char_num = $english_char_num + strlen($english);  
    }  
    $chinese_punct= "，。、！？：；﹑•＂…‘’“”〝〞∕¦‖—　〈〉﹞﹝「」‹›〖〗】【»«』『〕〔》《﹐¸﹕︰﹔！¡？¿﹖﹌﹏﹋＇´ˊˋ―﹫︳︴¯＿￣﹢﹦﹤‐¬˜﹟﹩﹠﹪﹡﹨﹍﹉﹎﹊ˇ︵︶︷︸︹︿﹀︺︽︾ˉ﹁﹂﹃﹄︻︼（）";  
    $pattern = array("/[[:punct:]]/i", "/['.$chinese_punct.']/u", "/[[:alnum:]]/", "/[[:space:]]/",);  
    $chinese = preg_replace($pattern, '', $text);  
    preg_match_all("/\d+/",$text,$matches);  
    $number_char_num="";  
    foreach($matches[0] as $number)  
    {  
        $number_char_num=$number_char_num+strlen($number);  
    }  
    preg_match_all("/[[:punct:]]/i",$text,$punct_matches);  
    preg_match_all("/['.$chinese_punct.']/u",$text,$chinese_punct_matches);  
      
    $ms_wordcount = mb_strlen($chinese, "utf8")+str_word_count($text)+count($matches[0])+count($punct_matches[0])+count($chinese_punct_matches[0]);  
    $ms_charcount = mb_strlen($chinese, "utf8")+$english_char_num+$number_char_num+count($punct_matches[0])+count($chinese_punct_matches[0]);  
    $ms_charcount_space = mb_strlen($chinese, "utf8")+$english_char_num+$number_char_num+count($punct_matches[0])+count($chinese_punct_matches[0])+substr_count($text," ");  
      
    return  
    "英文单词个数为：".str_word_count($text)."<br>".  
    "英文单词字符总数为：".$english_char_num."<br>".  
    "中文字数为：".mb_strlen($chinese, "utf8")."<br>".  
    "数字个数为：".count($matches[0])."<br>".  
    "数字字符总数为：".$number_char_num."<br>".  
    "按照Microsoft Word中字数统计的方法，这句话里的字数有： ".$ms_wordcount." 个"."<br>".  
    "按照Microsoft Word中字数统计的方法，这句话里的字符数（不计空格）有： ".$ms_charcount." 个"."<br>".  
    "按照Microsoft Word中字数统计的方法，这句话里的字符数（计空格）有： ".$ms_charcount_space." 个";  
    }  
?>  
