$string = "fwa9786sdflkj&*(&*54sdafh787";
echo preg_replace("/[^a-zA-Z]/", "", $string)."<br>"; //fwasdflkjsdafh
echo preg_replace("/[a-zA-Z]/", "", $string)."<br>";  //9786&*(&*54787

$string = "Name: <b>John Poul</b> <br> Title: <b>PHP Guru</b>";
$pattern = "~<b>(.*?)</b>~s";
preg_match_all ($pattern, $string, $match);
var_dump($match[1]);
/*
array(2) {
  [0]=>
  string(9) "John Poul"
  [1]=>
  string(8) "PHP Guru"
}
*/
