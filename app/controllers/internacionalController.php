<?php

    class internacionalController extends Controller{
        public function __construct(){
        }

        public function index(){

            $data = [
                [
                    "nombre" => "Dra. Gema Sologuren García",
                    "comision" => "Comisión Organización y Logística",
                    "foto" => "imagen01.PNG",
                    "fotoPais" => "peru.png",
                    "nacionalidad" => "Peruana"
                ],
                [
                    "nombre" => "Dra. Rosa Requelme Ibañez",
                    "comision" => "Comisión de Comunicaciones",
                    "foto" => "imagen02.PNG",
                    "fotoPais" => "peru.png",
                    "nacionalidad" => "Peruana"
                ],
                [
                    "nombre" => "Mgr. Carmen Salleres Sanchez",
                    "comision" => "Comisión de Protocolo",
                    "foto" => "imagen03.PNG",
                    "fotoPais" => "peru.png",
                    "nacionalidad" => "Peruana"
                ]
            ];

            View::render('Internacional', $data);
        }

    }
