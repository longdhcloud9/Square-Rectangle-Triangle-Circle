<?php
$rec =$ar = $peri = "";
class Triangle{
    private  $edge1;
    private  $edge2;
    private  $edge3;
    public $name="Triangle";
    public $editMode =false;
    public function setEdge1($edge1) {
        $this->edge1 = $edge1;
    }
    public function getEdge1() {
        return $this->edge1;
    }
    public function setEdge2($edge2) {
      $this->edge2 = $edge2;
    }
    public function getEdge2() {
      return $this->edge2;
    }
    public function setEdge3($edge3) {
      $this->edge3 = $edge3;
    }
    public function getEdge3() {
      return $this->edge3;
    }
    public function perimeter() {
      return $this->edge1 + $this->edge2 + $this->edge3;
    }
    public function area() {
        return 0.25 *sqrt(($this->edge1 + $this->edge2 + $this->edge3)
        *($this->edge1 + $this->edge2 - $this->edge3)*($this->edge2 + $this->edge3 - $this->edge1)
        *($this->edge3 + $this->edge1 - $this->edge2));
    }
}

?>
