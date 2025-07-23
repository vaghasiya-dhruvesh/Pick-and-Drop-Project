<?php
include '../../dbcon.php';
$qry="SELECT * FROM vehicle";
$cmd1=mysqli_query($con,$qry);
if($cmd1)
{
    while($row=mysqli_fetch_array($cmd1)){
        $photo=$row['photo'];
        $puc=$row['puc'];
        $rcto=$row['rcbook'];
        $ins=$row['insurance'];
    ?>
    <img src=" <?php echo "../owner_data/".$photo; ?>" alt="image not found" width="100px">
    <img src=" <?php echo "../owner_data/".$puc; ?>" alt="image not found" width="100px">
    <img src=" <?php echo "../owner_data/".$rc; ?>" alt="image not found" width="100px">
    <img src=" <?php echo "../owner_data/".$ins; ?>" alt="image not found" width="100px">
<?php
}}else{
	echo "Query not run";
}
?>