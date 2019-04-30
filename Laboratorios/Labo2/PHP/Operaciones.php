<?php class Operaciones {
private $n;
private $cadena;
private $a;
private $b;
private $c;
function __construct($n,$cadena,$a,$b,$c){
    $this->n=$n;
    $this->cadena=$cadena;
    $this->a=$a;
    $this->b=$b;
    $this->c=$c;
}
function fibonacci(){
        $a=0;
        $b=1;
        $c;
        for($i=0;$i<$this->n;$i++)
        {
            echo $a."&nbsp;";
            $c=$a+$b;
            $a=$b;
            $b=$c;
        }
        
}
function mayor(){
    $mayor=array();
    $mayor[0]=$this->a;
    $mayor[1]=$this->b;
    $mayor[2]=$this->c;
    $aux=-1;
    for($i=0;$i<=2;$i++){
        if($mayor[$i]>$aux)
        $aux=$mayor[$i];
    }
    return $aux;
}
function piramide(){
$aux=strlen($this->cadena)/2;
echo $this->cadena[$aux-1]."<br>";
echo substr($this->cadena,$aux-2,$aux)."<br>";
$i=3;
while($i<=$aux){
    echo substr($this->cadena,$aux-$i,$aux-$i-1)."<br>";
    $i++;
}
echo $this->cadena;
}
}
?>
