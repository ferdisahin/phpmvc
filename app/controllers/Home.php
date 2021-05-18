<?php
/*
 * PHPMvc
 *
 * @author    Ferdi Sahin <ferdisahin@mail.com>
 *
 */

namespace App\Controllers;


use Core\Controller;
use Symfony\Component\HttpFoundation\Request;

class Home extends Controller {
    public function main(Request $request){
        if($request->getMethod() === 'POST'){
            $this->validator->rule('required', ['username', 'password', 'rep_password'])
                ->rule('equals', 'password', 'rep_password');
            $this->validator->labels([
                'username'  => 'Kullanıcı Adı',
                'password'  => 'Şifre',
                'rep_password'  => 'Şifre Tekrarı'
            ]);
            if($this->validator->validate()){
                print_r($this->validator->data());
            }else{
                print_r($this->validator->errors());
            }
        }
        return $this->view('home');
    }
}