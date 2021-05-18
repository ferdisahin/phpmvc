<?php
/*
 * PHPMvc
 *
 * @author    Ferdi Sahin <ferdisahin@mail.com>
 *
 */

namespace Core;


class Controller extends Bootstrap {
    public function view($view, $data = []){
        return $this->view->show($view, $data);
    }
}