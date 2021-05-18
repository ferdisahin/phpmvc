<?php
/*
 * PHPMvc
 *
 * @author    Ferdi Sahin <ferdisahin@mail.com>
 *
 */

namespace App\Controllers;


use Core\Controller;

class Home extends Controller {
    public function index(){

        $data = ['Merhaba', 'Dünya', 'Nerelisin'];

        return $this->view('home', compact('data'));
    }
}