<?php

    class errorController extends Controller{

        function __construct(){
            //echo '<h1>404 NO SE ENCONTRO</h1>';
        }

        function index(){
            $data =[
                'title'=> '404 - Ginger framework'
            ];
            View::render('404',$data);
        }

    }