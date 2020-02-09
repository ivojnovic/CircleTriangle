<?php
  class Circle {
    //radius
    public $r;
  //methods
  function __construct($r){
    $this->r = $r;
  }
  function  perimeter(){
    return $this->r * 2 * pi();
  }
  function area(){
    return $this->r * $this->r * pi();
}
}

class Triangle{
  public $a, $b, $c, $v;
  public $area;

  function __construct($a, $b, $c, $v){
    $this->a = $a;
    $this->b = $b;
    $this->c = $c;
    $this->v = $v;
  }
// postoji li uopće trokut s navedenim stranicama?
  private function check_if_valid(){
    if ($this->a + $this->b > $this->c and
        $this->a + $this->c > $this->b and
        $this->b + $this->b > $this->a){
          return true;
        }
    return false;
  }

  function area(){
    if ($this->check_if_valid() == false){
      return 'Triangle does not exist';
    }
    if ($this->a == $this->b and $this->b==$this->c){
      $this->area = (sqrt(3) * $this->a * $this->a)/4;
      return ($this->area);
    }
    elseif ($this->a == $this->b or $this->b == $this->c or $this->a == $this->c){
      //osnovica * visina na osnovicu
      $this->area = (max($this->a, $this->b, $this->c) * $this->v) / 2;
      return $this->area;
    }
    else{
      //Heronova formula
      $s = ($this->a + $this->b + $this->c) / 2;
      $this->area= $s * ($s - $this->a) * ($s - $this->b) * ($s - $this->c);
      return sqrt($this->area);
    }
  }
  function perimeter(){
    if ($this->check_if_valid() == false){
      return 'Triangle does not exist';
    }
    return ($this->a + $this->b + $this->c);
  }
}
?>
