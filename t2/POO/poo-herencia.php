<?php
/*En la herencia vemos que el objeto que se crea(el padre)tiene ciertas propiedades y funcionalidades. Coche, que a su vez tiene un hijo que se llama Camion, hereda de su padre las propiedades y funcionalidades.
*/
    class Coche {
        protected $ruedas;
        var $color;
        var $motor;
        var $largo;
        var $ancho;
        
        function Coche(){
            $this->ruedas=4;
            $this->color="blanco";
            $this->motor=1600;
            $this->largo=4;
            $this->ancho=1.5;
        }
        function get_ruedas(){
            return $this->ruedas;
        }

        function arrancar(){
            echo "Estoy arrancado <br>";
        }
        
        function girar(){
            echo "Estoy girando <br>";
        }
        function frenar(){
            echo "Estoy frenando <br> ";
        }
        function set_color($color_coche){
            $this->color=$color_coche;
        }
    }
        //Coche es una super clase
        //camion es una sub clase
        class Camion extends Coche{
            
            function Camion(){
                $this->ruedas=8;
                $this->color="Azul";
                $this->motor=4600;
                $this->largo=12;
                $this->ancho=2.5;
            }
            function arrancar(){
                parent::arrancar();
                $arrancado=TRUE;
                echo $arrancado;
            }
    
    }