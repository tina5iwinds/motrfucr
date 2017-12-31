<script language="javascript" type="text/javascript">  
    function save() {  
        selectR = document.getElementById("R_num").selectedIndex;  
        document.cookie = 'selectR =' + selectR;  
        selectF = document.getElementById("F_num").selectedIndex;  
        document.cookie = 'selectF =' + selectF; 
        selectM = document.getElementById("M_num").selectedIndex;  
        document.cookie = 'selectM =' + selectM; 
        
    }  
    window.onload = function () {  
        var cooki = document.cookie;  
        if (cooki != "") {  
            cooki = "{\"" + cooki + "\"}";  
            cooki = cooki.replace(/\s*/g, "").replace(/=/g, '":"').replace(/;/g, '","');  
            var json = eval("(" + cooki + ")"); //将coolies转成json对象  
            document.getElementById("R_num").options[json.selectR].selected = true;  
            document.getElementById("F_num").options[json.selectF].selected = true;  
            document.getElementById("M_num").options[json.selectM].selected = true;  
        }  
        else  
            save();  
    }  
  </script>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>奶粉坊</title>
    
    <script>
        function getNumber(){
            var H = 10;
            var S = 20;
            var first = document.getElementById("F").value;
            var last = document.getElementById("L").value;
            alert('your name is '+last+' '+first); 
        }
      </script>

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
              <a class="nav-link" href="inventory.php">存貨狀況</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="customer.php">顧客分析</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    
    
<div class="g">
   R F M

   <form action=" " method="POST">
   <br>
    <select name="R_num" id="R_num" onchange="save()">
　<option value="1">1</option>
   <option value="2">2</option>
   <option value="3">3</option>
   <option value="4">4</option>
   <option value="5">5</option>
   <option value="6">6</option>
   <option value="7">7</option>
   <option value="8">8</option>
   <option value="9">9</option>
   <option value="10">10</option>
    </select>
    <select name="F_num"  id="F_num" onchange="save()">
　<option value="1">1</option>
   <option value="2">2</option>
   <option value="3">3</option>
   <option value="4">4</option>
   <option value="5">5</option>
   <option value="6">6</option>
   <option value="7">7</option>
   <option value="8">8</option>
   <option value="9">9</option>
   <option value="10">10</option>
    </select>
    <select name="M_num"  id="M_num" onchange="save()">
　<option value="1">1</option>
   <option value="2">2</option>
   <option value="3">3</option>
   <option value="4">4</option>
   <option value="5">5</option>
   <option value="6">6</option>
   <option value="7">7</option>
   <option value="8">8</option>
   <option value="9">9</option>
   <option value="10">10</option>
    </select>
    <input type="submit" value="確認">
    </form>

    <hr>
    <div class="row">
        <div class="col-6">
        損益平衡值：2.2
        <br>
       <?php
       ini_set('display_errors', 1);
       ini_set('display_startup_errors', 1);
       error_reporting(E_ALL);
         error_reporting(1);
       $con = mysqli_connect ( "140.119.19.16" , "howard" , "ilovehoward" , "test" ); 
       //檢查連接 
      if (! $con ) 
       { 
       die( "連接錯誤: " . mysqli_connect_error ()); 
       } 
          
        mysqli_select_db($con,"test");
       mysqli_query( $con,"set names utf8");//以utf8讀取資料，讓資料可以讀取中文

       if($_POST['R_num']!='' and $_POST['F_num']!='' and  $_POST['M_num']!='' ){
       $rnum = $_POST['R_num'];
       $fnum = $_POST['F_num'];
       $mnum = $_POST['M_num'];
       $rdata=mysqli_query($con,"SELECT R FROM customers WHERE R_num like '$rnum' and 
        F_num like '$fnum' and M_num like '$mnum'");
       $fdata=mysqli_query($con,"SELECT F FROM customers WHERE R_num like '$rnum' and 
        F_num like '$fnum' and M_num like '$mnum'");
       $mdata=mysqli_query($con,"SELECT M FROM customers WHERE R_num like '$rnum' and 
        F_num like '$fnum' and M_num like '$mnum'");
       // if($rdata === FALSE) {
       //  echo " ";
       // }  
     ?> 
     R的範圍：
     <?php 
     for($i=1;$i<=mysqli_num_rows($rdata);$i++){
      $rrs=mysqli_fetch_row($rdata);
      foreach ($rrs as $rvalue) {  
       echo $rvalue;}} ?>
        <br>
        F的範圍：
        <?php 
        for($i=1;$i<=mysqli_num_rows($fdata);$i++){
        $frs=mysqli_fetch_row($fdata);
        foreach ($frs as $fvalue) {  
    echo $fvalue;  }} ?>
        <br>
        M的範圍：
        <?php 
        for($i=1;$i<=mysqli_num_rows($mdata);$i++){
        $mrs=mysqli_fetch_row($mdata);
        foreach ($mrs as $mvalue) {  
    echo $mvalue;  }} } ?>
        <br>
        <br>
        回應率：18%
        <br>
        平均品類需求佔有率：75%
    </div> 
    <div class="col-6">
        損益平衡指數：
        <br>
        顧客價值：
        <br>
    </div>   
    </div> 
    
    
</div>
<br>
<hr>

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