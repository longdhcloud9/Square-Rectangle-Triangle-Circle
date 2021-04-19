<?php
include "Shape.php";
class Triangle extends Shape {
    private int $height;
    private int $edge;
    public function setEdge($edge) {
        $this->edge = $edge;
    }
    public function setHeight($height) {
        $this->height = $height;
    }
    public function getEdge() {
        return $this->edge;
    }
    public function getHeight() {
        return $this->height;
    }
    public function area() {
        return ($this->height * $this->edge)/2;
    }
}
$cao = new Triangle();
if(isset($_POST["submit"]))
{
  $cao->setEdge($_POST["edge"]);
  
  $ar=$canh->area();
  $peri=$canh->perimeter();
}
?>
<div class="dropdown">
  <button class="dropbtn">Select</button>
  <div class="dropdown-content">
    <a href="square.php">Square</a>
    <a href="Rectangle.php">Rectangle</a>
    <a href="Triangle.php">Triangle</a>
	<a href="Circle.php">Circle</a>
  </div>
</div>
<form id="Rectangle" method="post">
<p>Enter the length of height:<input type="tel" id="height" name="height" value="<?php echo $edge;?>"></p>
<p>Enter the length of edge:<input type="tel" id="edge" name="edge" value="<?php echo $edge;?>"></p>
  <div class="okraj">                                                                           
    <div class="tlacitka">
    <input type="submit" name ="submit" value="Calculate">
    <input type="reset" value ="Reset" onclick="document.getElementById('edge').value = ''">
    </div> 
    <table class="result">
        <tr><td>Area of triangle: <span class="prom">S = </span></td><td><input type="text" value="<?php echo $sq->area();?>" readonly	></td></tr>
        <tr><td>Perimeter of triangle: <span class="prom">P = </span></td><td><input type="text" value="<?php echo $sq->perimeter();?>" readonly></td></tr>
    </table>       
  </div>
</form>
</body>
</html>