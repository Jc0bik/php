<!DOCTYPE html>
<html>
<body>
<img src="graf.php" style="width:30%"><br>
<from action="/api/index.php" method"post">
	Wybierz wierzchołek grafu z rysunku <input type="text" name="wiersz"><br>
<input type="submit">
</form>

<?php
$graph = array(
    'A'=>array('B', 'F','D'),
    'B'=>array('A', 'D'),
    'D'=>array('A', 'B', 'E','F'),
    'E'=>array('D', 'F'),
    'F'=>array('A', 'E', 'D'),
);

$wierzcholek =$_POST['wiersz'];
echo $wierzcholek;
echo 'Stopień wierzchołka ' . $wierzcholek . ' deg(' .$wierzcholek. ') = '.count($graph[$wierzcholek]);
?>
</body>
</html>
