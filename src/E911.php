<?php

namespace Vitelity;

class E911 extends Core {
    
    /**
     * Instantiate a new instance
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Input or update new 911 address for a specific DID number
     *
     * @param int $did DID Number to change 911 information on
     * @param string $name Name of the person or business registering for 911
     * @param string $address Address of the registered 911 customer
     * @param string $city City of the registered 911 customer
     * @param string $state State of registered 911 customer
     * @param int $zip Zip code of registered 911 customer
     * @param string $unittype Type of unit customer lives in
     * @param string $unitnumber Unit number or letter of customer premise
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#e911send
     */
    public function e911send($did, $name, $address, $city, $state, $zip, $unittype = null, $unitnumber = null)
    {
        $cmd = 'e911send';
        return $this->submitRequest(compact(['cmd','did','name','address','city','state','zip','unittype','unitnumber']));
    }


    /**
     * Delete a registered 911 address from a specific DID
     *
     * @param int $did Specific DID Number to delete
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#e911delete
     */
    public function e911delete($did)
    {
        $cmd = 'e911delete';
        return $this->submitRequest(compact(['cmd','did']));
    }


    /**
     * Check eligibility of a specific address for 911 service
     *
     * @param string $address Address of the registered 911 customer
     * @param string $city City of the registered 911 customer
     * @param string $state State of registered 911 customer
     * @param string $zip Zip code of registered 911 customer
     * @param int $did DID Number to enable 911 on
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#e911checkaddress
     */
    public function e911checkaddress($address, $city, $state, $zip, $did)
    {
        $cmd = 'e911checkaddress';
        return $this->submitRequest(compact(['cmd','address','city','state','zip','did']));
    }


    /**
     * Get 911 information on a specific DID Number
     *
     * @param int $did DID Number to verify information on
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#e911getinfo
     */
    public function e911getinfo($did)
    {
        $cmd = 'e911getinfo';
        return $this->submitRequest(compact(['cmd','did']));
    }


    /**
     * Set destination for E911 notifications
     *
     * @param int $did 10 digit did you want e911 notifications from
     * @param string $method Method of notification
     * @param string $item Notification value
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#e911notifyadd
     */
    public function e911notifyadd($did, $method, $item)
    {
        $cmd = 'e911notifyadd';
        return $this->submitRequest(compact(['cmd','did','method','item']));
    }


    /**
     *
     *
     * @param int $did Specific DID Number
     * @param string $method Method of notification to remove
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#e911notifydelete
     */
    public function e911notifydelete($did, $method)
    {
        $cmd = 'e911notifydelete';
        return $this->submitRequest(compact(['cmd','did','method']));
    }

}