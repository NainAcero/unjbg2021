<?php

    class comiteController extends Controller{
        public function __construct(){
        }

        public function index(){
            View::render('Organizador');
        }

        public function internacional(){
            View::render('Internacional');
        }
    }
