<?php

    class comiteController extends Controller{
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
                ],
                [
                    "nombre" => "Mgr. Silvia Muñarriz O’Phelan",
                    "comision" => "Comisión Académica",
                    "foto" => "imagen05.PNG",
                    "fotoPais" => "peru.png",
                    "nacionalidad" => "Peruana"
                ],
                [
                    "nombre" => "Mgr. Susana Fernández Vargas",
                    "comision" => "Comisión de Economía",
                    "foto" => "imagen06.PNG",
                    "fotoPais" => "peru.png",
                    "nacionalidad" => "Peruana"
                ],
                [
                    "nombre" => "Mtro. Inés Jiménez García",
                    "comision" => "Comisión de Ética",
                    "foto" => "imagen07.PNG",
                    "fotoPais" => "peru.png",
                    "nacionalidad" => "Peruana"
                ],
                [
                    "nombre" => "Arq. Beatriz Vargas Bernuy",
                    "comision" => "Comisión de Cultura",
                    "foto" => "imagen09.jpeg",
                    "fotoPais" => "peru.png",
                    "nacionalidad" => "Peruana"
                ],
                // [
                //     "nombre" => "Dra. Carla Mori Fuentes",
                //     "comision" => "Comisión de Cultura",
                //     "foto" => "imagen08.PNG",
                //     "fotoPais" => "peru.png",
                //     "nacionalidad" => "Peruana"
                // ],
            ];

            View::render('Organizador', $data);
        }
<<<<<<< HEAD
    }
=======

        public function internacional(){
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
>>>>>>> cb4ad0fb944c416f74a9f81d9e12e52b3533f2ee
