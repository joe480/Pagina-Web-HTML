<?php class Estante {
private $fila1=array();
private $fila2=array();
private $fila3=array();
private $tope1;
private $tope2;
private $tope3;
function construct_Estante(){
    $this->tope1=0;
    $this->tope2=0;
    $this->tope3=0;
}
function insertarLibro($filai,$libro){
    
        switch($filai){
            case 1:
            array_push($this->fila1,$libro);break;
            case 2;
            array_push($this->fila2,$libro);break;
            case 3;
            array_push($this->fila1,$libro);break;
            default:
            echo "No existe fila"; break;
        }
        return "El libro fue insertado con exito";
}
function eliminarLibro($filae){
    switch($filae){
        case 1:
        $aux=array_pop($this->fila1);break;
        case 2:
        $aux=array_pop($this->fila2);break;
        case 3:
        $aux=array_pop($this->fila3);break;
        default:
            echo "No existe fila"; break;
    }
    if($filae >0 && $filae<4)
    return "El libro fue eliminado con éxito";
}
function mostrar($filam){
    switch($filam){
        case 1:
            foreach($this->fila1 as $valor){
            echo $valor."<br>";
        }break;
        case 2:
            foreach($this->fila2 as $valor){
                echo $valor."<br>";
            }break;
        case 3:
            foreach($this->fila3 as $valor){
                echo $valor."<br>";
            }break;
        default:
        echo "La fila no existe";
    }
}

function mostrarArmario(){
    echo "<b>Fila1</b><br>";
   foreach($this->fila1 as $valor){
       echo $valor."<br>";
   }
    echo "<b>Fila2</b><br>";
    foreach($this->fila2 as $valor){
        echo $valor."<br>";
    }
    echo "<b>Fila3</b><br>";
    foreach($this->fila3 as $valor){
        echo $valor."<br>";
    }
}
}
?>