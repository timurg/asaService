<?php

require_once($_SERVER["DOCUMENT_ROOT"].'/bitrix/Lib/asaService/asaCycles.php');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of asaCurriculum
 *
 * @author Timur
 */
class asaCurriculum {
    private $fcycles;
    
    public function __construct()
    {
        $this->fcycles = new asaCycles();
    }
    
    public function get_cycles()
    {
        return $this->fcycles;
    }
}

?>
