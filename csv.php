//parse csv
foreach (explode(PHP_EOL, $content) as $row) {
    $row = str_getcsv($row);
    var_dump($row);
}

//split csv
$inputFile = '../productDetalii.csv';
$outputFile = 'output';
$splitSize = 500;
$in = fopen($inputFile, 'r');
$rowCount = 0;
$fileCount = 1;
while (!feof($in)) {
    if (($rowCount % $splitSize) == 0) {
        if ($rowCount > 0) {
            fclose($out);
        }
        $out = fopen($outputFile . $fileCount++ . '.csv', 'w');
    }
    $data = fgetcsv($in);
    if ($data)
        fputcsv($out, $data);
    $rowCount++;
}
fclose($out);


