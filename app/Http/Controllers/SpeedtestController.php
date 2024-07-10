<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpeedtestController extends Controller
{
    
    // public function RunSpeedTest() {
    //     $output = shell_exec('speedtest --accept-license --accept-gdpr --format=json');
    //     $result = json_decode($output, true);

    //     var_dump($result);
    //     die();
    // }

    public function SpeedTest(){
        echo 'Hola mundo';
    }
}
