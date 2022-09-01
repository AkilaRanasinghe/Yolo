<?php
	include_once 'config.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="styles/help.css">
    <script src="help_slide_show.js"></script>
  </head>
  <body>
 
    <div class="row">
      <div class="column side">
        <section class="sideMenu">
          <nav class="side">
            <a href="#" class="active">Employee Details</a>
            <a href="supplier.php">Supplier Details</a>
            <a href="item.php">Item Detials</a>
            <a href="employee.php">Customer Details</a>
            <a href="order.php">Order Details</a>
          </nav>
        </section>
        </div>
        <div class="column middle">
        <h2 class="title1">Welcome Online Shopping Store</h2>
              <h3 class="title1">Members</h3>
          <form  action="addhelp.html">
          <button type="submit" class="addcustomer">add new Customer</button>
          </form>
          <table border="1">
            <tr>
            <th>Country</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>User Name</th>
              <th>BDay</th>
              <th>Email</th>
              <th>Password</th>
              <th>RE-Password</-Password></th>
            </tr>
<?php
    $sql = "SELECT * FROM register";
    $result = $conn->query($sql);
    //var_dump($result);
    if($result->num_rows > 0)
    {
      while($row = $result->fetch_assoc())
      {
        $cun = $row['Country'];
        echo "<tr><td>".$row["Country"]."</td>";
        echo "<td>".$row["First_Name"]."</td>";
        echo "<td>".$row["Last_Name"]."</td>";
        echo "<td>".$row["User_Name"]."</td>";
        echo "<td>".$row["B_Day"]."</td>";
        echo "<td>".$row["Email"]."</td>";
        echo "<td>".$row["Password"]."</td>";
        echo "<td>".$row["C_Password"]."</td>";
        $id=$row["User_Name"];
        echo "<td><button type = 'submit'><a href ='editcustomer.php?ID= $id'>edit</a> </button></td>";
        echo "<td><button type = 'submit'><a href ='deletecustomer.php?ID= $id'>delete</a> </button></td>";
      }
    }
    else
    {
      echo "0 result";
    }
?>
          </table>
        </div>
    </div>
  </body>
</html>