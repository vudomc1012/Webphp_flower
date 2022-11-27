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
  <a class="item">Flower Data</a>
  <a class="item">View Detail</a>
  <a class="item">Contact Us</a>
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
        Flower Store
      </h1>
      <h2>Make your life have the rhythm of the sunflower </h2>
      <div class="ui huge primary button">Get A Flower You Like <i class="right arrow icon"></i></div>
    </div>

  </div>

  <div class="ui vertical stripe segment">
  <!-- contact: Do Anh Vu -->
  <h2 align="center"> <font color="#FF0000" size="7">ADD DATA</font></h2>
  <table width="100%" border="2">
  <div class="container">
    <div class="row">
  <?php require_once 'connect.php' ?>
  <?php
    if(isset($_POST['insert'])){
      $IDflower = $_POST['IDflower'];
      $FName = $_POST['FName']; 
      $Price = $_POST['Price'];
      $Category = $_POST['Category'];
      if($connect -> query("INSERT INTO flower (IDflower,FName,Price,Category) VALUES (N'$IDflower',N'$FName',N'$Price',N'$Category')")){
        echo "<script>alert('Thêm thành công !')</script>";
      }else{  
      echo "<script>alert('Thêm thất bại !')</script>"; 
    };
  }
      $connect-> close();
  ?>
    <form class="row g-3" method="POST" action="">
      <div class="col-md-3">
        <label for="IDflower" class="form-label" >ID Flower</label>
        <input name="IDflower" class="form-control" id="IDflower" placeholder=" 1 ">
      </div>
      <div class="col-md-3">
        <label for="FName" class="form-label">Flower Name</label>
        <input name="FName" class="form-control" id="FName"placeholder=" Hoa cức lợn ">
      </div>
      <div class="col-3">
        <label for="Price" class="form-label">Price</label>
        <input name="Price" class="form-control" id="Price" placeholder=" 24.000.000 vnd ">
      </div>
      <div class="col-md-3">
        <label for="Category" class="form-label">Category</label>
            <select name="Category" id="Category" class="form-select">
              <option selected>Hoa giấy</option>
              <option>Hoa Tươi</option>
              <option>Hoa sáp</option>
              <option>Hoa nhựa</option>
            </select>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-light" name="insert">Insert</button>
      </div>
    </form>
  </div>

  <div class="ui vertical stripe quote segment">
    <div class="ui equal width stackable internally celled grid">
    
    </div>
  </div>

  <div class="ui inverted vertical footer segment">
    <div class="ui container">
      <div class="ui stackable inverted divided equal height stackable grid">
        <div class="three wide column">
          <!-- <h4 class="ui inverted header">About</h4> -->
          <div class="ui inverted link list">

          </div>
        </div>
        <div class="seven wide column">
          <h4 class="ui inverted header">Linh Trang Tran</h4>
          <p>Design By Bun Dau Mam Tom</p>
        </div>
      </div>
    </div>
  </div>
</div>