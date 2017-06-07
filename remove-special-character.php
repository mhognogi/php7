$string = mb_convert_encoding($string, 'UTF-8', 'UTF-8');

$normal_characters = "a-zA-Z0-9\s`~!@#$%^&*()_+-={}|:;<>?,.\/\"\'\\\[\]";
$normal_string = preg_replace("/[^$normal_characters]/", '', $string);
