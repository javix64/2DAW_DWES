<?php
    class Coche {
        //esto son las propiedades del objeto
        var $ruedas;
        var $color;
        var $motor;
        var $largo;
        var $ancho;
        
        //constructor por defecto
        function Coche(){
            $this->ruedas=4;
            $this->color="blanco";
            $this->motor=1600;
            $this->largo=4;
            $this->ancho=1.5;
        }

        //esto son las funciones o comportamientso
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

        class Camion {
            //esto son las propiedades del objeto
            var $ruedas;
            var $color;
            var $motor;
            var $largo;
            var $ancho;
            
            //constructor por defecto
            function Camion(){
                $this->ruedas=8;
                $this->color="Azul";
                $this->motor=4600;
                $this->largo=12;
                $this->ancho=2.5;
            }
    
            //esto son las funciones o comportamientos
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