<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$test = filter_input(INPUT_POST, "login");

$results = array(
            'results' => "results were sent $test",
            'passed' => TRUE
        );

echo json_encode($results);