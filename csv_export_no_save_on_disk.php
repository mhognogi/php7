header("Content-type: application/csv");
header("Content-Disposition: attachment; filename=file.csv");
header("Pragma: no-cache");
header("Expires: 0");

echo "col1,col2";
for($i=0; $i<25;$i++){
    echo "key :".$i.", ".($i*$i)."\r\n";
}
