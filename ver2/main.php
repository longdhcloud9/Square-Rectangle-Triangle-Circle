<?php
include "Square.php";
include "Rectangle.php";
include "Triangle.php";
include "Circle.php";
//square
$sq_ar = $sq_peri = $r_ar = $r_peri = $t_ar = $t_peri = $c_ar = $c_peri = "";
$canh = new Square();
 if(isset($_POST["submit1"]))
{
  $canh->editMode=true;
  $canh->setEdge($_POST["edge"]);
  $sq_ar=$canh->area();
  $sq_peri=$canh->perimeter();

}
//rectangle
$rec = new Rectangle();
if(isset($_POST["submit2"]))
{
  $rec->editMode=true;
  $rec->setLength($_POST["length"]);
  $rec->setWidth ($_POST["width"]);
  $r_ar=$rec->area();
  $r_peri=$rec->perimeter();
}
//triangle
$tri = new Triangle();
if(isset($_POST["submit3"]))
{
  $tri->editMode=true;
  $tri->setEdge1 ($_POST["edge1"]);	
  $tri->setEdge2 ($_POST["edge2"]);
  $tri->setEdge3 ($_POST["edge3"]);
  $t_ar=round($tri->area(),2);
  $t_peri=$tri->perimeter();
}
//circle
$rad = new Circle();
if(isset($_POST["submit4"]))
{
  $rad->editMode=true;
  $rad->setRadius($_POST["radius"]);
  $c_ar=round($rad->area(),2);
  $c_peri=round($rad->perimeter(),2);
}
?>
<html>
<body>
<head>
   <meta charset="UTF-8">
   <title>Calculate area and perimeter</title>
   <link rel="stylesheet" href="myStyle.css">
   <script src="jquery.min.js"></script>
   <script src="main.js"></script>
</head>
<!--Dropdown button-->
<div class="dropdown">
  <button class="dropbtn">Select</button>   
  <div class="dropdown-content">
    <button class ="Square item">Square</button>
    <button class ="Rectangle item">Rectangle</button>
    <button class ="Triangle item">Triangle</button>
	  <button class ="Circle item">Circle</button>
  </div>
</div>


<div class="content">
<!--//square-->
<form id="<?= $canh->name; ?>" class="<?php echo $canh->editMode==true?"":"hide_form"?>" method="post" >

<p>Enter the length of edge:<input type="text" id="edge" name="edge" value="<?php echo isset($_POST["submit1"]) ? $_POST["edge"] : '' ?>"></p>	
  <div class="okraj">                                                                           
    <div class="tlacitka">
    <input type="submit" id="submit1" name ="submit1" value="Calculate">
    <button onreset="document.getElementById('edge').value=''">Reset</button>
    </div> 
    <table class="result">
    <tr><td>Area of square:<span class="prom">S = </span></td><td><input type="text" value="<?php echo $sq_ar;?>" readonly	></td></tr>
    <tr><td>Perimeter of square:<span class="prom">P = </span></td><td><input type="text" value="<?php echo $sq_peri;?>" readonly></td></tr>
    </table>       
  </div>
</form>
<!--//rectangle-->
<form id="<?= $rec->name ?>"  class="<?php  echo $rec->editMode==true?"":"hide_form"?>" method="post" >

<p>Enter the length :<input type="tel" id="length" name="length" value="<?php echo isset($_POST['submit2']) ? $_POST['length'] : '' ?>"></p>
<p>Enter the width:<input type="tel" id="width" name="width" value="<?php echo isset($_POST['submit2']) ? $_POST['width'] : '' ?>"></p>
  <div class="okraj">                                                                           
    <div class="tlacitka">
    <input type="submit" id="submit2" name ="submit2" value="Calculate">
    <button id="b3">Reset</button>
    </div> 
    <table class="result">
        <tr><td>Area of rectangle: <span class="prom">S = </span></td><td><input type="text" value="<?php echo $r_ar;?>" readonly	></td></tr>
        <tr><td>Perimeter of rectangle: <span class="prom">P = </span></td><td><input type="text" value="<?php echo $r_peri;?>" readonly></td></tr>
    </table>       
  </div>
</form>
<!--//triangle-->
<form id="<?= $tri->name ?>"  class="<?php echo $tri->editMode==true?"":"hide_form"?>" method="post" >

<p>Enter the length of three edges</p>
<p>a = <input type="tel" id="edge1" name="edge1" value="<?php echo isset($_POST['submit3']) ? $_POST['edge1'] : '' ?>"></p>
<p>b = <input type="tel" id="edge2" name="edge2" value="<?php echo isset($_POST['submit3']) ? $_POST['edge2'] : '' ?>"></p>
<p>c = <input type="tel" id="edge3" name="edge3" value="<?php echo isset($_POST['submit3']) ? $_POST['edge3'] : '' ?>"></p>
  <div class="okraj">                                                                           
    <div class="tlacitka">
    <input type="submit" id="submit3" name ="submit3" value="Calculate">
   <button id="b3">Reset</button>
    </div> 
    <table class="result">
        <tr><td>Area of triangle: <span class="prom">S = </span></td><td><input type="text" value="<?php echo $t_ar;?>" readonly	></td></tr>
        <tr><td>Perimeter of triangle: <span class="prom">P = </span></td><td><input type="text" value="<?php echo$t_peri;?>" readonly	></td></tr>
    </table>       
  </div>
</form>
<!--//circle-->
 <form id="<?= $rad->name ?>"  class="<?php echo $rad->editMode==true?"":"hide_form"?>" method="post" > 
 
  <p>Enter the length of radius:<input type="tel" id="radius" name="radius" value="<?php echo isset($_POST["submit4"]) ? $_POST["radius"] : '' ?>"></p>
  <div class="okraj">                                                                           
    <div class="tlacitka">
      <input type="submit" id="submit4" name ="submit4" value="Calculate">
      <button id="b4">Reset</button>
    </div> 
    <table class="result">
      <tr><td>Area of circle: <span class="prom">S = </span></td><td><input type="text" value="<?php echo $c_ar;?>" readonly	></td></tr>
      <tr><td>Perimeter of circle: <span class="prom">P = </span></td><td><input type="text" value="<?php echo $c_peri;?>" readonly></td></tr>
    </table>       
  </div>
 </form>
</div>
</body>
</html>