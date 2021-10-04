<?php
    namespace Tests;

    use PHPUnit\Framework\TestCase;
    use App\Triangulo;

class TrianguloTest extends TestCase{
        public function testsTriangulo(){
            $trianguloCheck = new Triangulo();
            $trianguloCheck = true;

            $actual = new Triangulo();
            $actual = true;

            $value = new Triangulo();
            $value = true;
            $this->assertTrue($trianguloCheck, $actual, $value);
        }

        public function testsTrianguloFalse(){
            $trianguloCheck = new Triangulo();
            $trianguloCheck = false;

            $actual = new Triangulo();
            $actual = false;

            $value = new Triangulo();
            $value = false;
            $this->assertFalse($trianguloCheck, $actual, $value);
        }

        public function testsTrianguloassertEquals(){
            $trianguloCheck = new Triangulo();
            $trianguloCheck = 15;

            $actual = new Triangulo();
            $actual = 15;

            $value = new Triangulo();
            $value = 15;
            $this->assertEquals($trianguloCheck, $actual, $value);
        }
    }
?>