<?php 
    $nombreFichero = "saldo.txt";
    $contenidoFicheroSaldo;

    if (file_exists($nombreFichero)){
        $contenidoFicheroSaldo = implode( '', file('saldo.txt') );

    }else{
        $contenidoFicheroSaldo = 0;
    }

    class Empresa {
        public int $saldo;
        public $sucursales = array();

        public function __construct(){
            $this->saldo = $contenidoFicheroSaldo;
        }

        public function mostrarSaldo(){
            echo "Saldo de la empresa: " .$this->saldo. "<br>";
        }

        public function mostrarSucursales(){
            if ( !empty($this->sucursales) ){
                echo "Sucursales: ";
                foreach ($this->sucursales as $sucursal){
                    echo $sucursal . " | ";
                }
                echo "<br>";
            }else{
                echo "Aún no hay sucursales añadidas";
            }
        }

        public function editarSaldo($operacion,$monto){
            switch ($operacion){
                case "suma":
                $saldo = ($this->saldo)+$monto;
                break;

                case "resta":
                $saldo = ($this->saldo)-$monto;
                break;
            }
        }

        public function addSucursal ($sucursal){
            if ( !in_array( $sucursal, ($this->sucursales) ) ){
                $this->sucursales [] = $sucursal->nombre;
                echo "Sucursal añadida <br>";
            }else{
                echo "Ya existe esta sucursal";
            }
 
        }
    }



    class Sucursal{
        public $nombre;
        public $saldo;
        public Empresa $empresa;

        public function __construct($nombre, $empresa){
            $this->nombre = $nombre;
            $this->empresa = $empresa;
            $this->saldo = $empresa->saldo;
        }

        public function compra($monto){
            $operacion = "resta";
            $empresaUno->editarSaldo($operacion,$monto);
            $this->saldo = $empresaUno->mostrarSaldo();
            echo "Compra realizada con exito";
        }

        public function venta($monto){
            $operacion = "suma";
            $empresaUno->editarSaldo($operacion,$monto);
            $this->saldo = $empresaUno->mostrarSaldo();
            echo "Venta realizada con exito";
        }

        public function mostrarSaldo(){
            echo $this->saldo;
        }
    }


    $empresaUno = new Empresa();
    $empresaUno->mostrarSaldo();


    $sucursalMadrid = new Sucursal("Madrid", $empresaUno);
    $empresaUno->addSucursal($sucursalMadrid);

    
    $sucursalValencia = new Sucursal("Valencia", $empresaUno);
    $empresaUno->addSucursal($sucursalValencia);

    $sucursalBarcelona = new Sucursal("Barcelona", $empresaUno);
    $empresaUno->addSucursal($sucursalBarcelona);

    $empresaUno->mostrarSucursales();
    $sucursalBarcelona->mostrarSaldo();



?>  