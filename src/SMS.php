<?php

namespace Vitelity;

class SMS extends Core {
    
    /**
     * Instantiate a new instance
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Check availability of SMS on a specific DID
     *
     * @param int $did DID Number to verify SMS availability on
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#checksms
     */
    public function checksms($did)
    {
        $cmd = 'checksms';
        return $this->submitRequest(compact(['cmd','did']));
    }


    /**
     * Remove SMS from a specific DID number
     *
     * @param int $did DID Number to remove SMS on
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#removesms
     */
    public function removesms($did)
    {
        $cmd = 'removesms';
        return $this->submitRequest(compact(['cmd','did']));
    }


    /**
     * List all DIDs that you OWN and have SMS functionality available
     *
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#smsdids
     */
    public function smsdids()
    {
        $cmd = 'smsdids';
        return $this->submitRequest(compact(['cmd']));
    }


    /**
     * Set the URL for SMS messages to be delivered to for SMS+http enabled DIDs
     *
     * @param string $url URL_Encoded URL for
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#smsenableurl
     */
    public function smsenableurl($url)
    {
        $cmd = 'smsenableurl';
        return $this->submitRequest(compact(['cmd','url']));
    }


    /**
     * Send an SMS message from an SMS enabled DID number
     *
     * @param int $src Source telephone number
     * @param int $dst Destination telephone number
     * @param string $msg The message to send to the destination
     * @param string $allowall This will allow any type of characters instead of just standard
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#sendsms
     */
    public function sendsms($src, $dst, $msg, $allowall = null)
    {
        $cmd = 'sendsms';
        return $this->submitRequest(compact(['cmd','src','dst','msg','allowall']));
    }


    /**
     * Enable SMS functionality on a specific DID
     *
     * @param int $did DID Number to enable SMS on
     * @param string $chatpass Password for SMS enabling
     * @param string $plan Specify what plan you want to enable SMS on, default
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#setsms
     */
    public function setsms($did, $chatpass, $plan = null)
    {
        $cmd = 'setsms';
        return $this->submitRequest(compact(['cmd','did','chatpass','plan']));
    }


    /**
     * <font color=\\\'red\\\'>This is no longer used. All numbers that are SMS Enabled will come through when you use cmd smsenableurl</font>
     *
     * @param int $did DID Number to enable HTTPD SMS on
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#smsenablehtt
     */
    public function smsenablehtt($did)
    {
        $cmd = 'smsenablehtt';
        return $this->submitRequest(compact(['cmd','did']));
    }


    /**
     * Send Short Code SMS messages over API
     *
     * @param int $src Source short code (99629) to send from
     * @param string $dst Destination number 10digits or separated by comma
     * @param string $msg The message to send
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#sendshort
     */
    public function sendshort($src, $dst, $msg)
    {
        $cmd = 'sendshort';
        return $this->submitRequest(compact(['cmd','src','dst','msg']));
    }


    /**
     * List SMS URLs for Posting messages
     *
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#listsmsurl
     */
    public function listsmsurl()
    {
        $cmd = 'listsmsurl';
        return $this->submitRequest(compact(['cmd']));
    }


    /**
     * List DIDs with S.MS or HTTP enabled
     *
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#listsms
     */
    public function listsms()
    {
        $cmd = 'listsms';
        return $this->submitRequest(compact(['cmd']));
    }


    /**
     * Configure SMS to email for specific DID number
     *
     * @param string $action Action to enable or disable service
     * @param string $did 10 digit DID number
     * @param string $email Email address - Required for enable
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#smstoemail
     */
    public function smstoemail($action, $did, $email = null)
    {
        $cmd = 'smstoemail';
        return $this->submitRequest(compact(['cmd','action','email','did']));
    }

}