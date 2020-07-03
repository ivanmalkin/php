<?php
$filename= 'laba3.txt';
if (file_exists($filename)) {
	echo "Файл $filename существует<br>";
} else {
	echo "Файл $filename не существует<br>";
}
if (is_readable($filename)){
	echo "Файл $filename доступен для чтения<br>";
} else {
	echo "Файл $filename не доступен для чтения<br>";
}
if (is_writable($filename)){
	echo "Файл $filename доступен для записи<br>";
} else {
	echo "Файл $filename не доступен для записи<br>";
}
echo "Размер $filename ". filesize($filename)." байт<br>";
$file = fopen($filename, "r+");
echo fread ($file, filesize($filename))."<br><br>";
fputs($file, "Тест");
fclose($file);
$file2 = fopen($filename, "r+");
clearstatcache();
echo fread ($file2, filesize($filename))."<br><br>";
fclose($file2);
$lines = file ('laba3.txt');
$search = 'Тест';
$result = '';
foreach ($lines as $line) {
	if(stripos($line, $search) === false) {
		$result .=$line;
	}
}
file_put_contents('output.txt', $result);
$file3 = fopen('output.txt', "r+");
echo "Результат удаления<br>".fread($file3, filesize('output.txt'))
?>