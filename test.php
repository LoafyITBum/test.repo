<!DOCTYPE html>
<?php
        $row = 1;
if (($handle = fopen("14.website_sessions_2014_Jan.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        echo "<tr>";
        for ($c=0; $c < $num; $c++) {
            echo "<td>" . htmlspecialchars($data[$c]) . "</td>";
        }
    }
    fclose($handle);
}
        ?>
</body>
</html>
