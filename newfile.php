<?php
if (isset($_POST["submit"])) {
    $conn = mysqli_connect("localhost", "root", "", "dbms") or die(mysqli_error($conn));
    $disp = mysqli_query($conn, "select * from files where '2021-10-01' <= accessed and accessed < '2021-11-01'");
    $rows = mysqli_num_rows($disp);
    if ($rows == false) {
        echo "No data found in the table";
    } else {
        echo "<TABLE BORDER='2' ALIGN=\"CENTER\">";
        echo "<TR>";
        echo "<TD>File Name</TD>";
        echo "<TD>Type</TD>";
        echo "<TD>Size</TD>";
        echo "<TD>Location</TD>";
        echo "<TD>Accessed</TD>";
        echo "</TR>";
        while ($row = mysqli_fetch_array($disp)) {
            echo "<TR>";
            echo "<TD>" . $row['filename'] . "</TD>";
            echo "<TD>" . $row['type'] . "</TD>";
            echo "<TD>" . $row['size'] . "</TD>";
            echo "<TD>" . $row['location'] . "</TD>";
            echo "<TD>" . $row['accessed'] . "</TD>";
            echo "</TR>";
        }
    }

}
?>
<?php ?>
