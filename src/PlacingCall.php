<?php

namespace Vitelity;

class PlacingCall extends Core {
    
    /**
     * Instantiate a new instance
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Sends someone a phone call that then connects them to customer service/another number. This service is strictly for US and Canadian destinations.
     *
     * @param int $number The persons number that will be receiving the call
     * @param int $servicenumber The number of the person you're connecting to
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#callfromclick
     */
    public function callfromclick($number, $servicenumber)
    {
        $cmd = 'callfromclick';
        return $this->submitRequest(compact(['cmd','number','servicenumber']));
    }

}