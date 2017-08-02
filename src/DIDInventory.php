<?php

namespace Vitelity;

class DIDInventory extends Core {
    
    /**
     * Instantiate a new instance
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * lists all Toll Free Numbers that are available for immediate order
     *
     * @param int $limit Set a limit on how many numbers are returned
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#listtollfree
     */
    public function listtollfree($limit = null)
    {
        $cmd = 'listtollfree';
        return $this->submitRequest(compact(['cmd','limit']));
    }


    /**
     * lists all local DID numbers currently in stock
     *
     * @param string $state Specify the state in which to list local numbers from
     * @param string $ratecenter Specify the ratecenter to list local numbers from
     * @param string $type Only list numbers with specific characteristic
     * @param string $withrates Display the rates you will pay for the specific number
     * @param string $smsonly Show only SMS enabled numbers
     * @param string $cnam Show only DIDs that are LIDB/CNAM elidgable
     * @param string $provider Show only Onvoy OnNet Numbers
     * @param string $var Show all inventory for all areas
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#listlocal
     */
    public function listlocal($state, $ratecenter = null, $type = null, $withrates = null, $smsonly = null, $cnam = null, $provider = null, $var = null)
    {
        $cmd = 'listlocal';
        return $this->submitRequest(compact(['cmd','state','ratecenter','type','withrates','smsonly','cnam','provider','var']));
    }


    /**
     * lists all available local numbers with a specific NPANXX
     *
     * @param int $npanxx The first six digits of a phone number
     * @param string $type Only list numbers with specific characteristic
     * @param string $withrates Display the rates you will pay for the specific number
     * @param string $provider Show only Level3 covered areas
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#listnpanxx
     */
    public function listnpanxx($npanxx, $type = null, $withrates = null, $provider = null)
    {
        $cmd = 'listnpanxx';
        return $this->submitRequest(compact(['cmd','npanxx','type','withrates','provider']));
    }


    /**
     * lists all of the ratecenters available for a specific state
     *
     * @param string $state Specify the state in which to list ratecenters from
     * @param string $type Limit results to this specific type
     * @param string $provider Show only Level3 covered areas
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#listratecenters
     */
    public function listratecenters($state, $type = null, $provider = null)
    {
        $cmd = 'listratecenters';
        return $this->submitRequest(compact(['cmd','state','type','provider']));
    }


    /**
     * lists all ratecenters that we currently have in stock
     *
     * @param string $state Specify the state in which to list local numbers from
     * @param string $type Only list numbers with specific characteristic
     * @param string $smsonly Show only SMS enabled numbers
     * @param string $provider Show only Level3 covered areas
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#listavailratecenters
     */
    public function listavailratecenters($state, $type = null, $smsonly = null, $provider = null)
    {
        $cmd = 'listavailratecenters';
        return $this->submitRequest(compact(['cmd','state','type','smsonly','provider']));
    }


    /**
     * searches the SMS/800 database for a specific vanity number or numbers
     *
     * @param string $did The specific search for a vanity number
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#searchtoll
     */
    public function searchtoll($did)
    {
        $cmd = 'searchtoll';
        return $this->submitRequest(compact(['cmd','did']));
    }


    /**
     * lists all states that have DIDs which are currently in stock
     *
     * @param string $type Only list numbers with specific characteristic
     * @param string $smsonly Show only SMS enabled numbers
     * @param string $provider Show only Level3 covered areas
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#listavailstates
     */
    public function listavailstates($type = null, $smsonly = null, $provider = null)
    {
        $cmd = 'listavailstates';
        return $this->submitRequest(compact(['cmd','type','smsonly','provider']));
    }


    /**
     * Lists all available DID states line by line
     *
     * @param string $type Only list numbers with specific characteristic
     * @param string $provider Show only Level3 covered areas
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#liststates
     */
    public function liststates($type = null, $provider = null)
    {
        $cmd = 'liststates';
        return $this->submitRequest(compact(['cmd','type','provider']));
    }


    /**
     * lists all current Local and Toll free DIDs
     *
     * @param string $extra Display state and rate per min on text output only
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#listdids
     */
    public function listdids($extra = null)
    {
        $cmd = 'listdids';
        return $this->submitRequest(compact(['cmd','extra']));
    }


    /**
     * Add note to DID for future reference
     *
     * @param int $did DID Number to set note on
     * @param string $note The note to set your DID to (leave blank to delete)
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#didnote
     */
    public function didnote($did, $note)
    {
        $cmd = 'didnote';
        return $this->submitRequest(compact(['cmd','did','note']));
    }


    /**
     * Lists all international ratecenters for a specific country
     *
     * @param string $country Two letter country code
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#listintlratecenters
     */
    public function listintlratecenters($country)
    {
        $cmd = 'listintlratecenters';
        return $this->submitRequest(compact(['cmd','country']));
    }


    /**
     * Lists all countries supported for International DIDs
     *
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#listintl
     */
    public function listintl()
    {
        $cmd = 'listintl';
        return $this->submitRequest(compact(['cmd']));
    }


    /**
     * Get the current DID note set for a specific DID
     *
     * @param int $did DID Number to return note for
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#getdidnote
     */
    public function getdidnote($did)
    {
        $cmd = 'getdidnote';
        return $this->submitRequest(compact(['cmd','did']));
    }


    /**
     * Lists the rates assocated with a specific and Available DID number
     *
     * @param int $did DID Number to verify rates on
     * @param string $withrates Display the rates you will pay for the specific number
     * @param string $onaccount Display information about a number on your account
     * @param string $addstate Add the state to the DID rate center information
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#listspecificlocal
     */
    public function listspecificlocal($did, $withrates = null, $onaccount = null, $addstate = null)
    {
        $cmd = 'listspecificlocal';
        return $this->submitRequest(compact(['cmd','did','withrates','onaccount','addstate']));
    }


    /**
     * lists all available local numbers with a specific NPA / Area code
     *
     * @param string $npa The first 3 digits / area code you are searching for
     * @param string $withrates Display the rates you will pay for the specific number
     * @param string $type Only list numbers with specific characteristic
     * @param string $provider Show only Level3 covered areas
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#listnpa
     */
    public function listnpa($npa, $withrates = null, $type = null, $provider = null)
    {
        $cmd = 'listnpa';
        return $this->submitRequest(compact(['cmd','withrates','type','npa','provider']));
    }


    /**
     * Set the CallerID Name for a specific number (LIDB / CNAM)
     *
     * @param int $did DID Number to change LIDB on
     * @param string $name Callerid Name to set - 15 Character Max
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#lidb
     */
    public function lidb($did, $name)
    {
        $cmd = 'lidb';
        return $this->submitRequest(compact(['cmd','did','name']));
    }


    /**
     * List all numbers where LIDB / CallerID / CNAM name change is available
     *
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#lidbavailall
     */
    public function lidbavailall()
    {
        $cmd = 'lidbavailall';
        return $this->submitRequest(compact(['cmd']));
    }


    /**
     * Get rate information for specific DID currently owned by you
     *
     * @param string $number 10 digit DID number
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#getdidrate
     */
    public function getdidrate($number)
    {
        $cmd = 'getdidrate';
        return $this->submitRequest(compact(['cmd','number']));
    }


    /**
     * List DIDs associated with a specific voicemail box
     *
     * @param string $vmbox Voicemail box number
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#listvmdids
     */
    public function listvmdids($vmbox)
    {
        $cmd = 'listvmdids';
        return $this->submitRequest(compact(['cmd','vmbox']));
    }


    /**
     * Set voicemail account email address
     *
     * @param string $vmbox Voicemail box number
     * @param string $email Email Address
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#setvmemail
     */
    public function setvmemail($vmbox, $email)
    {
        $cmd = 'setvmemail';
        return $this->submitRequest(compact(['cmd','vmbox','email']));
    }


    /**
     * Get notes for all DIDs
     *
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#getdidnotes
     */
    public function getdidnotes()
    {
        $cmd = 'getdidnotes';
        return $this->submitRequest(compact(['cmd']));
    }

}