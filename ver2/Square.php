<?php
$canh = $ar = $peri =  "";
class Square {
    private $edge;
    public $name="Square";
    public $editMode=false;
    public function setEdge($edge) {
        $this->edge = $edge;
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

?>
