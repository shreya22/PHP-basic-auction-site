<?php


$catsql = "SELECT * FROM categories ORDER BY cat ASC;";

$catresult = mysql_query($catsql);
echo "<h1>Categories</h1>";
echo "<ul>";
echo "<li><a href='index.php'>View All</a></li>";
while($catrow = mysql_fetch_assoc($catresult)) {
echo "<li><a href='index.php?id="
. $catrow['id'] . "'>" . $catrow['cat']
. "</a></li>";
}
echo "</ul>";

?>