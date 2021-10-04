<?php
    namespace App;

    class Triangulo{
        public function verificarTriangulo($equilatero, $isosceles, $escaleno){
            if($equilatero < $isosceles + $escaleno && $isosceles < $equilatero + $escaleno && $escaleno < $equilatero + $isosceles){
                if($equilatero === $isosceles && $isosceles === $escaleno){
                    echo 'Triangulo equilatero';
                }
                elseif($equilatero === $isosceles || $isosceles === $escaleno || $escaleno === $equilatero){
                    echo 'Triangulo isosceles';
                }else{
                    echo 'Triangulo escaleno';
                }
            }else{
                echo 'Esses valores não formam um triangulo';
            }
        }
    }
    $novoTriangulo = new Triangulo();
    $novoTriangulo->verificarTriangulo(10, 10, 12); //10, 10,10(equilatero) - 10, 10, 11(isosceles) - 10,9,11(escaleno)
    print_r($novoTriangulo);
?>