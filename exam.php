<?php
$dir = "/home/kailas/Desktop/ds lab";

// Open a directory, and read its contents
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            $file_name = $file;
            $path = pathinfo($file);
            $type = $path["extension"];
            $size = filesize($file);
            $location = realpath($file);
            $accessed = date("Y-m-d", fileatime($file));

            $conn = mysqli_connect("localhost", "root", "", "dbms") or die(mysqli_error($conn));
            $sql = "insert into files (filename,type,size,location,accessed) values ('$file_name','$type','$size','$location','$accessed')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                ?>
                    <script>
                      alert('Entered Successfully');

                    </script>

                  <?php
}

            // echo $file_name . "<br>";
            // echo $type . "<br>";
            // echo $size . "<br>";
            // echo $location . "<br>";
            // echo $accessed . "<br>";

            // echo "<br>filename:" . $file . "<br>";
            // $path = pathinfo($file);
            // var_dump($path);
            // echo "type:" . $path["extension"] . "<br>";
            // echo "size:" . filesize($file) . "<br>";
            // echo "path:" . realpath($file) . "<br>";
            // echo "File was last accessed on " . date("Y-m-d", fileatime($file));
        }
        closedir($dh);
    }
}
$conn = mysqli_connect("localhost", "root", "", "dbms") or die(mysqli_error($conn));
$disp = "select * from files";
$result = mysqli_query($conn, $disp);

$rows = mysqli_num_rows($result);

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
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<TR>";
        echo "<TD>" . $row['filename'] . "</TD>";
        echo "<TD>" . $row['type'] . "</TD>";
        echo "<TD>" . $row['size'] . "</TD>";
        echo "<TD>" . $row['location'] . "</TD>";
        echo "<TD>" . $row['accessed'] . "</TD>";
        echo "</TR>";
    }?>
<form action="newfile.php" method="post">
<input type="submit" name="submit" />
<?php }

?>



<?php
/*if (isset($_POST["submit"])) {
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

}*/
?>

<?php ?>


