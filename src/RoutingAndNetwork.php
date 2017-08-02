<?php

namespace Vitelity;

class RoutingAndNetwork extends Core {
    
    /**
     * Instantiate a new instance
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * changes the sub account or IP that the DID routes to
     *
     * @param string $routesip The sub account or IP address to route this DID to
     * @param int $did The specific DID you\\\'re changing routing on. Now supports \\\"all\\\" to update routing on ALL DIDs
     * @param string $type Set routing to Server or ATA/Softphone. Default is server. Send type=ata for use with ATA/Softphone.
     * @param string $updatednis Update the DNIS/extension for your DID(s)
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#reroute
     */
    public function reroute($routesip, $did, $type = null, $updatednis = null)
    {
        $cmd = 'reroute';
        return $this->submitRequest(compact(['cmd','routesip','did','type','updatednis']));
    }


    /**
     * Changes routing for ALL of your DID numbers to a specific IP or sub account
     *
     * @param string $routesip The sub account or IP address to route all DIDs to
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#routeall
     */
    public function routeall($routesip)
    {
        $cmd = 'routeall';
        return $this->submitRequest(compact(['cmd','routesip']));
    }


    /**
     * Gets a rate on a specific domestic or International call (ex:011-number or 1-number)
     *
     * @param int $number Number you wish to receive cost information on
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#getrate
     */
    public function getrate($number)
    {
        $cmd = 'getrate';
        return $this->submitRequest(compact(['cmd','number']));
    }


    /**
     * Lists all sub accounts
     *
     * @param string $subacc Variable to pass to suspend/restore a specific sub account
     * @param string $do Command to update sub account Caller ID
     * @param string $callerid Variable to pass for updating Caller ID
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#subaccounts
     */
    public function subaccounts($subacc, $do = null, $callerid = null)
    {
        $cmd = 'subaccounts';
        return $this->submitRequest(compact(['cmd','subacc','do','callerid']));
    }


    /**
     * Set fail over for a specific DID number
     *
     * @param int $did DID Number to set failover on
     * @param int $failnum The number to dial when call routing fails. Set failnum to none to remove
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#failover
     */
    public function failover($did, $failnum = null)
    {
        $cmd = 'failover';
        return $this->submitRequest(compact(['cmd','did','failnum']));
    }


    /**
     * Set call forwarding for specific DID
     *
     * @param int $did DID Number to change callfw on
     * @param int $forward The destination number to forward to
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#callfw
     */
    public function callfw($did, $forward)
    {
        $cmd = 'callfw';
        return $this->submitRequest(compact(['cmd','did','forward']));
    }


    /**
     * New voicemail account - Allows you to create a new voicemail account
     *
     * @param int $mailbox Mailbox number to create (2-10 digits)
     * @param int $newpass Four digit pin number for mailbox
     * @param string $name The name for this mailbox
     * @param string $email Email address to send new voicemails to
     * @param string $timezone Change timezone - Default is MST
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#newvoicemail
     */
    public function newvoicemail($mailbox, $newpass, $name, $email, $timezone = null)
    {
        $cmd = 'newvoicemail';
        return $this->submitRequest(compact(['cmd','mailbox','newpass','name','email','timezone']));
    }


    /**
     * Reset voicemail password for specific account
     *
     * @param int $mailbox Mailbox number to change
     * @param int $newpass New four digit pin for mailbox
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#resetvoicemail
     */
    public function resetvoicemail($mailbox, $newpass)
    {
        $cmd = 'resetvoicemail';
        return $this->submitRequest(compact(['cmd','mailbox','newpass']));
    }


    /**
     * List all voicemail accounts
     *
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#listvoicemails
     */
    public function listvoicemails()
    {
        $cmd = 'listvoicemails';
        return $this->submitRequest(compact(['cmd']));
    }


    /**
     * Link a voicemail account to a did number
     *
     * @param int $did DID Number to link a voicemail account to
     * @param int $rings Number of rings until voicemail picks up
     * @param int $vmbox Voicemail box to link DID to  (none to remove)
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#addvoicemailtodid
     */
    public function addvoicemailtodid($did, $rings, $vmbox)
    {
        $cmd = 'addvoicemailtodid';
        return $this->submitRequest(compact(['cmd','did','rings','vmbox']));
    }


    /**
     * Enable CNAM Services on a specific DID
     *
     * @param int $did DID Number to enable CNAM on
     * @param string $type Specify unlimited instead of per query
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#cnamenable
     */
    public function cnamenable($did, $type = null)
    {
        $cmd = 'cnamenable';
        return $this->submitRequest(compact(['cmd','did','type']));
    }


    /**
     * Disable CNAM on a specific DID number
     *
     * @param int $did DID Number to disable CNAM on
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#cnamdisable
     */
    public function cnamdisable($did)
    {
        $cmd = 'cnamdisable';
        return $this->submitRequest(compact(['cmd','did']));
    }


    /**
     * Check whether CNAM is disabled or enabled on a specific DID Number
     *
     * @param int $did DID Number to verify CNAM status on
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#cnamstatus
     */
    public function cnamstatus($did)
    {
        $cmd = 'cnamstatus';
        return $this->submitRequest(compact(['cmd','did']));
    }


    /**
     * Add a sub account or SIP peer to your account
     *
     * @param string $peer Must be an a-z login with 4 to 10 characters OR an IP address
     * @param string $secret The password for the peer or subaccount
     * @param int $callerid Ten digit callerid value for this sub account
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#addsubacc
     */
    public function addsubacc($peer, $secret, $callerid = null)
    {
        $cmd = 'addsubacc';
        return $this->submitRequest(compact(['cmd','peer','secret','callerid']));
    }


    /**
     * Delete a SIP Peer or Sub Account from your account (irreversible)
     *
     * @param string $peer SIP Peer or Sub Account you wish to erase
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#delsubacc
     */
    public function delsubacc($peer)
    {
        $cmd = 'delsubacc';
        return $this->submitRequest(compact(['cmd','peer']));
    }


    /**
     * Verify availability of CallerID name on a specific DID (only works on limited DID numbers)
     *
     * @param int $did DID Number to change CallerID on
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#lidbavail
     */
    public function lidbavail($did)
    {
        $cmd = 'lidbavail';
        return $this->submitRequest(compact(['cmd','did']));
    }


    /**
     * Give status of a lidb request
     *
     * @param int $did DID Number to verify CalleriD information on
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#lidbcheck
     */
    public function lidbcheck($did)
    {
        $cmd = 'lidbcheck';
        return $this->submitRequest(compact(['cmd','did']));
    }


    /**
     * Delete voicemail account
     *
     * @param string $mailbox Mailbox number
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#remvoicemail
     */
    public function remvoicemail($mailbox)
    {
        $cmd = 'remvoicemail';
        return $this->submitRequest(compact(['cmd','mailbox']));
    }


    /**
     * Migrate DID Numbers from one sub account to another
     *
     * @param string $origsubaccount The original sub account to migrate from
     * @param string $tosubaccount The new sub account to transfer numbers to
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#migratedids
     */
    public function migratedids($origsubaccount, $tosubaccount)
    {
        $cmd = 'migratedids';
        return $this->submitRequest(compact(['cmd','origsubaccount','tosubaccount']));
    }


    /**
     * changes the sub account or IP that multiple DIDs routes to
     *
     * @param string $routesip The sub account or IP address to route this DID to
     * @param string $dids DID numbers separated by a comma to update the routing on
     * @param string $xml Sending xml=yes will return your results as XML instead of plain text
     * @param string $type Set routing to Server or ATA/Softphone. Default is server. Send type=ata for use with ATA/Softphone.
     * @param string $updatednis Update the DNIS/extension for your DID(s)
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#massreroute
     */
    public function massreroute($routesip, $dids, $xml = null, $type = null, $updatednis = null)
    {
        $cmd = 'massreroute';
        return $this->submitRequest(compact(['cmd','routesip','xml','dids','type','updatednis']));
    }


    /**
     * Get Inbound Toll Free Rate from API
     *
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#gettfrate
     */
    public function gettfrate()
    {
        $cmd = 'gettfrate';
        return $this->submitRequest(compact(['cmd']));
    }


    /**
     * Check Failover status on DID
     *
     * @param string $did DID number
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#checkfailover
     */
    public function checkfailover($did)
    {
        $cmd = 'checkfailover';
        return $this->submitRequest(compact(['cmd','did']));
    }


    /**
     * Show current peer specific DID is routing to
     *
     * @param string $did 10 digit DID number
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#showroute
     */
    public function showroute($did)
    {
        $cmd = 'showroute';
        return $this->submitRequest(compact(['cmd','did']));
    }


    /**
     * International Termination Rates
     *
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#intlrates
     */
    public function intlrates()
    {
        $cmd = 'intlrates';
        return $this->submitRequest(compact(['cmd']));
    }


    /**
     * Block numbers from calling your account or specific DID numbers on your account
     *
     * @param string $cid Caller ID number to block
     * @param string $type Send type=remove to remove number from blocklist
     * @param string $did DID to block calls on
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#blocklist
     */
    public function blocklist($cid, $type = null, $did = null)
    {
        $cmd = 'blocklist';
        return $this->submitRequest(compact(['cmd','type','cid','did']));
    }


    /**
     * Update DNIS for specific DID number
     *
     * @param string $did 10 digit DID number
     * @param string $dnis DNIS prefix for DID number
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#updatednis
     */
    public function updatednis($did, $dnis)
    {
        $cmd = 'updatednis';
        return $this->submitRequest(compact(['cmd','did','dnis']));
    }


    /**
     * Toggle International Access on Sub Accounts
     *
     * @param string $sub Sub Account or IP
     * @param string $action Action, restore or suspend
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#subintl
     */
    public function subintl($sub, $action)
    {
        $cmd = 'subintl';
        return $this->submitRequest(compact(['cmd','sub','action']));
    }

}