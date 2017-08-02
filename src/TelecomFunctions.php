<?php

namespace Vitelity;

class TelecomFunctions extends Core {
    
    /**
     * Instantiate a new instance
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * looks up the specific caller id name for a specific number
     *
     * @param int $did The number to lookup for caller id
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#cnam
     */
    public function cnam($did)
    {
        $cmd = 'cnam';
        return $this->submitRequest(compact(['cmd','did']));
    }


    /**
     * Lookup Ratecenter & State name in LERG format
     *
     * @param int $npa Area Code/NPA
     * @param int $nxx First 3 digits after area code (NXX)
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#npanxxlookup
     */
    public function npanxxlookup($npa, $nxx)
    {
        $cmd = 'npanxxlookup';
        return $this->submitRequest(compact(['cmd','npa','nxx']));
    }

}