<?php
include "Shape.php";
$canh =$ar = $peri = $a = "";
class Square extends Shape {
    private int $edge;
    public function setEdge($edge) {
        $this->edge = (int)$edge;
    }
    public function getEdge() {
        return $this->edge;
    }
    public function area() {
        return $ar=$this->edge * $this->edge;
    }
    public function perimeter() {
        return $peri=$this->edge * 4;
    }
}
$canh = new Square();
if(isset($_POST["submit"]))
{
  $a=$canh->setEdge($_POST["edge"]);
  $ar=$canh->area();
  $peri=$canh->perimeter();
}
?>
<html>
<body>
<head>
   <meta charset="UTF-8">
   <title>Calculate area and perimeter</title>
   <link rel="stylesheet" href="myStyle.css">
</head>

<div class="dropdown">
  <button class="dropbtn">Select</button>   
  <div class="dropdown-content">
    <a href="square.php">Square</a>
    <a href="Rectangle.php">Rectangle</a>
    <a href="Triangle.php">Triangle</a>
	<a href="Circle.php">Circle</a>
  </div>
</div>
<form id="Square" method="post">
<p>Enter the length of edge:</p>
<input type="text" id="edge" name="edge" value="">
  <div class="okraj">                                                                           
    <div class="tlacitka">
    <input type="submit" name ="submit" value="Calculate">
    <button onclick="document.getElementById('edge').value = ''">Reset</button>
    </div> 
    <table class="result">
    <tr><td>Area of square:<span class="prom">S = </span></td><td><input type="text" value="<?php echo $ar;?>" readonly	></td></tr>
    <tr><td>Perimeter of square:<span class="prom">P = </span></td><td><input type="text" value="<?php echo $peri;?>" readonly></td></tr>
    </table>       
  </div>
</form>
</body>
</html>