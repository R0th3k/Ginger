<?php

    class Redirect{
        private $location;

        /**
         * Metodo para redirigir al usuario a otra secion
         * @param string $location
         * @return void
         */
        public static function to($location){
            $self = new self();
            $self->location = $location;

            //Validar si las cabeceras ya se enviaron
            if(headers_sent){
                echo '<script type="text/javascript">';
                echo 'window.location.href="'.URL.$self->location.'";';
                echo '</script>';
                echo '<noscript>';
                echo '<meta http-equiv="refresh" content="0;URL='.URL.$self->location.'" /> ';
                echo '</noscript>';
                die();
            }
            //cuando hay una url externa al sitio
            if(strpos($self->location, 'http') != false){
                header('Location:'.$self->location);
                die();
            }
            //redirigir a otra seccion
            header('Location:'.URL.$self->location);
            die();
        }
    }