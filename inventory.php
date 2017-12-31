<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>奶粉坊</title>
    

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    
    <link href="my.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.html">milk</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="order.html">我要訂貨</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="produce.html">我要生產</a>
            </li>
            <li class="nav-item">
              <a class="nav-link">存貨狀況</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="customer.php">顧客分析</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <h1 class="head">存貨概況</h1>
    
<div class="g">
   <div class="row">
      <div class="col-2"></div>
<?php 
 $con = mysqli_connect ( "140.119.19.16" , "howard" , "ilovehoward" , "test" ); 
       //檢查連接 
      if (! $con ) 
       { 
       die( "連接錯誤: " . mysqli_connect_error ()); 
       } 
        mysqli_select_db($con,"test");
       mysqli_query( $con,"set names utf8");//以ut
      
 
  $data=mysqli_query($con,"SELECT quantity from inventory");
  if($data === FALSE) {
    die(mysqli_error($data));
  }
?>

    <div class="col-4">奶粉 100 罐</div>
  <?php
   $sum = 0;
  for($i=1;$i<=mysqli_num_rows($data);$i++){
  $rs=mysqli_fetch_row($data);
  foreach ($rs as $value) {
    $sum+=$value ;
  }
}   
    ?>
       <div class="col-4">奶粉罐 <?php echo $sum; ?> 罐</div>
   </div>
    <div class="row-2">
        <div class="col-2">
            <div class="e">EPQ</div>
        </div>
            S <input onkeyup="value=value.replace(/[^\d]/g,'') " style="width:60px; height:30px;" />
            H <input onkeyup="value=value.replace(/[^\d]/g,'') " style="width:60px; height:30px;" />
            D <input onkeyup="value=value.replace(/[^\d]/g,'') " style="width:60px; height:30px;" />
    </div>
    <div class="row-2">
        <div class="col-2">
            <div class="e">EOQ</div>
            </div>
            
            S <input onkeyup="value=value.replace(/[^\d]/g,'') " style="width:60px; height:30px;" />
            H <input onkeyup="value=value.replace(/[^\d]/g,'') " style="width:60px; height:30px;" />
            D <input onkeyup="value=value.replace(/[^\d]/g,'') " style="width:60px; height:30px;" />
            
<br><br><br>
            <input type="submit" value="確認" style="width:55px; height:30px;">
        
    </div>

</div>
   
    

<br>

    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">contact us | 104306090@nccu.edu.tw</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>