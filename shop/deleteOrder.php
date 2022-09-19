<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
    

<style>
    .btns{
        font-size: 16px;
        padding: 10px 20px;
        border-radius: 12px;
        transition-duration: 0.4s;
        background-color: #005EB8;
        color: white;
        border: 2px solid #005EB8; 
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    }
    .btns:hover {
  background-color: #87CEEB;
  border: 2px solid #005EB8; 
  
  
}
body{
    background-image: url("afw1.jpg");
    background-repeat: no-repeat;
  background-size: 100% 100%;
}

        input:hover
{
    border: 5px solid black;
    margin-right: 2px;
    transition: margin 0.2s ease-in-out;
    background-color: gray;
    width: 50%;
    margin-top: -2;
    height: inherit;
}
   input[type=text],
    input[type=date] {
        width: 100%;
        height: 20px;
        padding: 20px 10px;
        background-color: rgb(215, 215, 215);
        line-height: 20px;
        font-size: 20px;
        color: rgb(136, 136, 136);
        border-radius: 2px 2px 2px 2px;
        border: 1px solid rgb(114, 114, 114);
        box-shadow: 0 1px 0 rgba(24, 24, 24,0.1);
        color:rgb(50, 62, 168);
    }
    /* .third{
        padding_top:20px;
        margin_left:50%;
    } */
    h3{
        font-weight: bold;
        color: rgb(66, 58, 79);
    }

</style>

</head>
<?php
$id = $_GET["id"];


$f0 = $_GET["f0"];
// echo $f0;
$d_date=$_GET['d_date'];
        // $d_date = date('Y-m-d', strtotime($_GET["d_date"]));


// echo $d_date


?>


<body>
    

<h2 style="#87CEEB;">Welcome To <span class="badge bg-primary"><?php echo"Updated"?></span></h2>


<div class="second">


        <form method=get action=update_result.php>


        
        <input type=hidden name=id value='<?php echo $id; ?>'> <br>
        
        <h3> progress:</h3> <input type=text name=f0 value='<?php echo $f0; ?>'>
        <input type=hidden name=id value='<?php echo $id; ?>'> <br>
        
        <h3>Order date:</h3> <input type=date name=d_date value='<?php echo $d_date; ?>'>
        
        
        <input style="color:black;margin-left:41%;margin-top:10px;width:20%;"  class="btns" type=submit name="btns" value=Update link="o_info.php">

       
        </form>
      
</body>
<section class="w3-container w3-center w3-content" style="max-width:600px">
    <h2 class="w3-wide">Dhuway Daw</h2>
    <p class="w3-opacity">Make Your LIfe easy</p>
  </section>