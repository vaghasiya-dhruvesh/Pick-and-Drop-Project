<?php
// Start the session to access the cart data
session_start();

// Add the product to the cart
$product = array(
  "name" => $_POST["product_name"],
  "description" => $_POST["product_description"],
  "price" => $_POST["product_price"],
  "image" => $_POST["product_image"]
);
if(empty($product)){
	$_SESSION["product"][] = $product;
}
$_SESSION['count'] = 0;

?>

<html>
<head>
	<style>
table {
  border-collapse: collapse;
  margin: 20px 0;
}

th, td {
  padding: 10px;
  border: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
}

td img {
  display: block;
  margin: auto;
}

	</style>
</head>
<body>
	<!-- Cart items -->
<table>
  <tr>
    <th>Product Image</th>
    <th>Product Name</th>
    <th>Product Description</th>
    <th>Product Price</th>
  </tr>
  <?php
  // Start the session to access the cart data
  session_start();

  // Loop through the cart items and display them in a table
  foreach ($_SESSION["product"] as $item) {
	$_SESSION['count']++;
	if($_SESSION['count']>1 && empty($product)){
		break;
	}
	else{
		echo "<td><img src='" . $item["image"] . "' width='100' height='100'></td>";
		echo "<td>" . $item["name"] . "</td>";
		echo "<td>" . $item["description"] . "</td>";
		echo "<td>$" . $item["price"] . "</td>";
		echo "</tr>";	
	}
  }
  ?>
</table>

</body>
</html>