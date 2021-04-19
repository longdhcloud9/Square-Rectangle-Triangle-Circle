<html>
<body>
<head>
<?php
class Circle extends Shape {
    private int $radius;
    public function setRadius($radius) {
        $this->radius = $radius;
    }
    public function getRadius() {
        return $this->radius;
    }
    public function area() {
        return $this->radius * $this->radius * pi();
    }
    public function perimeter() {
        return $this->radius * 2 *pi();
    }
}
?>
<div class="dropdown">
  <button class="dropbtn">Select</button>
  <div class="dropdown-content">
    <a href="sqaure.php">Square</a>
    <a href="Rectangle.php">Rectangle</a>
    <a href="Triangle.php">Triangle</a>
	<a href="Circle.php">Circle</a>
  </div>
</div>
<form id="Circle" method="post">
<p>Enter the length of radius:<input type="tel" id="edge" name="edge" value="<?php echo $edge;?>"></p>
  <div class="okraj">                                                                           
    <div class="tlacitka">
    <input type="submit" name ="submit" value="Calculate">
    <button onclick="document.getElementById('edge').value = ''">Reset</button>
    </div> 
    <table class="result">
        <tr><td>Area of circle: <span class="prom">S = </span></td><td><input type="text" value="<?php echo $sq->area();?>" readonly	></td></tr>
        <tr><td>Perimeter of circle: <span class="prom">P = </span></td><td><input type="text" value="<?php echo $sq->perimeter();?>" readonly></td></tr>
    </table>       
  </div>
</form>
</body>
</html>