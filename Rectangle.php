<html>
<body>
<head>
<?php
class Rectangle extends Shape {
    private int $height;
    private int $width;
    public function setWidth($width) {
        $this->width = $width;
    }
    public function setHeight($height) {
        $this->height = $height;
    }
    public function getWidth() {
        return $this->width;
    }
    public function getHeight() {
        return $this->height;
    }
    public function area() {
        return $this->height * $this->width;
    }
    public function perimeter() {
        return 2* ($this->height + $this->width);
    }
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
<p>Enter the length of height:<input type="tel" id="edge" name="edge" value="<?php echo $edge;?>"></p>
<p>Enter the length of width:<input type="tel" id="edge" name="edge" value="<?php echo $edge;?>"></p>
  <div class="okraj">                                                                           
    <div class="tlacitka">
    <input type="submit" name ="submit" value="Calculate">
    <button onclick="document.getElementById('edge').value = ''">Reset</button>
    </div> 
    <table class="result">
        <tr><td>Area of rectangle: <span class="prom">S = </span></td><td><input type="text" value="<?php echo $sq->area();?>" readonly	></td></tr>
        <tr><td>Perimeter of rectangle: <span class="prom">P = </span></td><td><input type="text" value="<?php echo $sq->perimeter();?>" readonly></td></tr>
    </table>       
  </div>
</form>
</body>
</html>