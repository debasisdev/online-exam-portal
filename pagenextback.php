<?php
// database connection stuff here
if (!isset($screen))
  $screen = 0;
$start = $screen * $rows_per_page;
$sql = "SELECT description FROM table_name ";
$sql .= "LIMIT $start, $rows_per_page";
$result = mysql_query($sql, $db);
$rows = mysql_num_rows($result);
for ($i = 0; $i < $rows; $i++) {
  $description = mysql_result($result, $i, 0);
  echo "\$description = $description<br>\n";
}
echo "<p><hr></p>\n";
// let's create the dynamic links now
if ($screen > 0) {
  $url = "example.php?screen=" . $screen - 1;
  echo "<a href=\"$url\">Previous</a>\n";
}
// page numbering links now
for ($i = 0; $i < $pages; $i++) {
  $url = "example.php?screen=" . $i;
  echo " | <a href=\"$url\">$i</a> | ";
}
if ($screen < $pages) {
  $url = "example.php?screen=" . $screen + 1;
  echo "<a href=\"$url\">Next</a>\n";
}
?>