<?php

namespace Vitelity;

class DIDOrdering extends Core {
    
    /**
     * Instantiate a new instance
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get the status of a DID backorder to tell if it's been filled
     *
     * @param int $backorder_id The backorder ID number for a previous DID number order
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#getbackorder
     */
    public function getbackorder($backorder_id)
    {
        $cmd = 'getbackorder';
        return $this->submitRequest(compact(['cmd','backorder_id']));
    }


    /**
     * Orders a specific toll free number in our available list
     *
     * @param int $did The specific toll free DID number you're ordering
     * @param string $routesip The sub account or IP address to route this DID to
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#gettollfree
     */
    public function gettollfree($did, $routesip = null)
    {
        $cmd = 'gettollfree';
        return $this->submitRequest(compact(['cmd','did','routesip']));
    }


    /**
     * orders a specific local number in our available list
     *
     * @param int $did The specific DID you\'re ordering
     * @param string $routesip The sub account or IP address to route this DID to
     * @param string $type Order the DID number as perminute, unlimited or assigned to a vPRI
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#getlocaldid
     */
    public function getlocaldid($did, $routesip = null, $type = null)
    {
        $cmd = 'getlocaldid';
        return $this->submitRequest(compact(['cmd','did','routesip','type']));
    }


    /**
     * Remove a currently assigned DID number
     *
     * @param int $did DID number to remove
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#removedid
     */
    public function removedid($did)
    {
        $cmd = 'removedid';
        return $this->submitRequest(compact(['cmd','did']));
    }


    /**
     * orders a specific toll free number from the SMS800 available pool
     *
     * @param int $did The specific toll free DID number you\'re ordering
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#requestvanity
     */
    public function requestvanity($did)
    {
        $cmd = 'requestvanity';
        return $this->submitRequest(compact(['cmd','did']));
    }


    /**
     * back orders a specific ratecenter/state that is not in stock
     *
     * @param string $ratecenter The requested ratecenter
     * @param string $state The requested state
     * @param string $returnid Returns a backorder id for future tracking
     * @param string $type Order the DID number as perminute, unlimited or assigned to a vPRI
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#localbackorder
     */
    public function localbackorder($ratecenter, $state, $returnid = null, $type = null)
    {
        $cmd = 'localbackorder';
        return $this->submitRequest(compact(['cmd','ratecenter','state','returnid','type']));
    }


    /**
     * Reserve a DID for a period of time without ordering it
     *
     * @param int $did The DID Number you\'re reserving
     * @param string $time Change time from 1hour to 24hours
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#reservedid
     */
    public function reservedid($did, $time = null)
    {
        $cmd = 'reservedid';
        return $this->submitRequest(compact(['cmd','time','did']));
    }


    /**
     * Release a DID that you were holding temporarily with reserve
     *
     * @param int $did The DID Number you\'re releasing
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#releasedid
     */
    public function releasedid($did)
    {
        $cmd = 'releasedid';
        return $this->submitRequest(compact(['cmd','did']));
    }


    /**
     * Orders a specific international DID based on ratecenter/country
     *
     * @param string $ratecenter International ratecenter to order from
     * @param string $country Two letter country code to order from
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#getintldid
     */
    public function getintldid($ratecenter, $country)
    {
        $cmd = 'getintldid';
        return $this->submitRequest(compact(['cmd','ratecenter','country']));
    }


    /**
     * Get rate for backordering a ratecenter
     *
     * @param string $ratecenter The requested ratecenter
     * @param string $state The requested state
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#localbackorderrate
     */
    public function localbackorderrate($ratecenter, $state)
    {
        $cmd = 'localbackorderrate';
        return $this->submitRequest(compact(['cmd','ratecenter','state']));
    }


    /**
     * Force the billing for a specific DID to a certain sub account
     *
     * @param int $did DID Number to change billing to
     * @param string $subacc The sub account or IP address to bill to or NONE
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#didforcebilling
     */
    public function didforcebilling($did, $subacc)
    {
        $cmd = 'didforcebilling';
        return $this->submitRequest(compact(['cmd','did','subacc']));
    }


    /**
     * List available DID numbers and their associated ratecenter for specific State
     *
     * @param string $state Two letter abbreviation for State
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#listnpas
     */
    public function listnpas($state)
    {
        $cmd = 'listnpas';
        return $this->submitRequest(compact(['cmd','state']));
    }

}