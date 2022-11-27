<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  
<!-- Following Menu -->
<div class="ui large top fixed hidden menu">
  <div class="ui container">
    <a class="active item">Home</a>
    <a class="item">Add Data</a>
    <a class="item">View Details </a>
    <a class="item">Contact Us</a>
    <div class="right menu">
      <div class="item">
        <a class="ui button">Log in</a>
      </div>
      <div class="item">
        <a class="ui primary button">Sign Up</a>
      </div>
    </div>
  </div>
</div>
<link rel="stylesheet" href="css.css">
<link rel="stylesheet" href="js.js">
<!-- Sidebar Menu -->
<div class="ui vertical inverted sidebar menu">
  <a class="active item">Home</a>
  <a class="item">Add Data</a>
  <a class="item">View Detail</a>
  <a class="item">Contact Us</a>
  <a class="item">Login</a>
  <a class="item">Signup</a>
</div>


<!-- Page Contents -->
<div class="pusher">
  <div class="ui inverted vertical masthead center aligned segment">

    <div class="ui container">
      <div class="ui large secondary inverted pointing menu">
        <a class="toc item">
          <i class="sidebar icon"></i>
        </a>
        <a class="active item" href="homepage.php">Home</a>
            <a class="item"href="adddata.php">Add Data</a>
            <a class="item"href="viewdata.php">View Detail</a>
            <a class="item"href="https://www.facebook.com/chedauxanhne/">Contact Us</a>
        <div class="right item">
          <a class="ui inverted button">Log in</a>
          <a class="ui inverted button">Sign Up</a>
        </div>
      </div>
    </div>

    <div class="ui text container">
      <h1 class="ui inverted header">
        Phone Store
      </h1>
      <h2>Do whatever you want when you want to.</h2>
      <div class="ui huge primary button">Get Started <i class="right arrow icon"></i></div>
    </div>

  </div>

  <div class="ui vertical stripe segment">
    <div class="ui middle aligned stackable grid container">
      <div class="row">
        <div class="eight wide column">
                    
        <?php require_once 'connect.php' ?>
	<?php 

	$result = $connect -> query("SELECT * FROM flower");
	?>
<table class="table" border = "10px">
<h2 align="center"> <font color="#FF0000" size="7">Flower Data</font></h2>

  <thead> 
    <tr align="center">
      <th scope="col">ID Flower</th>
      <th scope="col">Flower Name</th>
      <th scope="col">Price</th>
      <th scope="col">Category</th>
      <th scope="col">Detail</th> 
      <th scope="col">Delete</th>
    </tr> 
  </thead>
  <tbody>
	<?php while($row = mysqli_fetch_assoc($result)): ?>
    <tr  align="center">
	  <td><?php echo $row['IDflower']?> </td>
      <td><?php echo $row['Fname']?> </td>
      <td><?php echo $row['Price']?> </td>
      <td><?php echo $row['Category']?> </td>
      <td> <a href= https://hoayeuthuong.com/?ref=awd_shop%20hoa&gclid=Cj0KCQiAj4ecBhD3ARIsAM4Q_jHXMxa5UFgjPKGsPAPtOXKsDsVoBB5Eet6CRh1bTj7g8qPwvwP7M6QaAuUbEALw_wcB>Detail</a></td>
      <td> <a href="connect.php?delete=<?php echo $row['IDflower']?>">Delete</a></td>
    </tr>
	<?php endwhile; ?>
  </tbody>
</table>
          <h3 class="ui header">We Make Bananas That Can Dance</h3>
          <p>Yes that's right, you thought it was the stuff of dreams, but even bananas can be bioengineered.</p>
        </div>
        <div class="six wide right floated column">
          <img src="pic\1233444.jpg" class="ui large bordered rounded image">
        </div>
      </div>
      <div class="row">
        <div class="center aligned column">
          <a class="ui huge button">Check Them Out</a>
        </div>
      </div>
    </div>
  </div>
  
  <div class="ui vertical stripe quote segment">
    <div class="ui equal width stackable internally celled grid">
      <div class="center aligned row">
        <div class="column">
          <h3>"How's My Code"</h3>
          <p>This is dark and lmao</p>
        </div>
        <div class="column">
          <h3>"I shouldn't have gone with their code."</h3>
          <p>
            <img src="assets/images/avatar/nan.jpg" class="ui avatar image"> <b>Nan</b> Chief Fun Officer Acme Toys
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="ui inverted vertical footer segment">
    <div class="ui container">
      <div class="ui stackable inverted divided equal height stackable grid">
        <div class="three wide column">
          <h4 class="ui inverted header">About Me</h4>
          <div class="ui inverted link list">

          </div>
        </div>
        <div class="seven wide column">
          <h4 class="ui inverted header">VUDA</h4>
          <p>Your code my future</p>
        </div>
      </div>
    </div>
  </div>
</div>