<?php

    class inscripcionController extends Controller{
        public function __construct(){
        }

        public function index(){
            View::render('Inscripcion');
        }
    }
