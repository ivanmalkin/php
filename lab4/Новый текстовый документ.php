<?php
header('Conent-Type:text/html;charset=UTF-8', true);
$link = mysqli_connect('localhost', 'root', '', 'hospital');
mysqli_set_charset($link, 'utf8');
echo '<table border="1">';
echo '<thead>';
echo '<tr>';
echo '<th>doctor</th>';
echo '<th>name</th>';
echo '<th>speciality</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
$res = mysqli_query($link, "select*from doctor;");
if ($res){
	while($row = mysqli_fetch_assoc($res)){
		echo '<tr>';
		echo '<td>'.$row ['ID']. '</td>';
 		echo '<td>'.$row ['NAME']. '</td>';
		echo '<td>'.$row ['SPECIALITY']. '</td>';
		echo '</tr>';
	}
}
echo '</tbody>';
echo '<table border="1">';
echo '<thead>';
echo '<tr>';
echo '<th>disease</th>';
echo '<th>name</th>';
echo '<th>category</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
$res = mysqli_query($link, "select*from disease;");
if ($res){
	while($row = mysqli_fetch_assoc($res)){
		echo '<tr>';
		echo '<td>'.$row ['ID']. '</td>';
 		echo '<td>'.$row ['NAME']. '</td>';
		echo '<td>'.$row ['CATEGORY']. '</td>';
		echo '</tr>';
	}
}
echo '</tbody>';
mysqli_free_result($res);
mysqli_close($link);
?>