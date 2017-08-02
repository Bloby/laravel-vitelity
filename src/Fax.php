<?php

namespace Vitelity;

class Fax extends Core {
    
    /**
     * Instantiate a new instance
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Lists all incoming faxes
     *
     * @param int $faxid Specific faxid number to capture
     * @param string $type Specific if you want just unread messages
     * @param string $xmlcomply XML Compliant - if using XML, highly suggest (bugfix)
     * @param string $showpages Show page count for faxes
     * @param string $vfaxacc Show faxes for a specific vFax account only
     * @param string $start Date range start for faxes; date only or date and time
     * @param string $end Date range end for faxes; date only or date and time
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#listincomingfaxes
     */
    public function listincomingfaxes($faxid = null, $type = null, $xmlcomply = null, $showpages = null, $vfaxacc = null, $start = null, $end = null)
    {
        $cmd = 'listincomingfaxes';
        return $this->submitRequest(compact(['cmd','faxid','type','xmlcomply','showpages','vfaxacc','start','end']));
    }


    /**
     * Retrieve a specific fax from our system
     *
     * @param int $faxid Specific faxid number to capture
     * @param string $type Download file as base64encoded instead of web download request
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#getfax
     */
    public function getfax($faxid, $type = null)
    {
        $cmd = 'getfax';
        return $this->submitRequest(compact(['cmd','faxid','type']));
    }


    /**
     * Lists all or specific info on sent faxes
     *
     * @param string $showxmlstatus Show the status in XML requests (bug fix)
     * @param int $did Faxes sent from specific DID number
     * @param string $showall Show entire sent fax history
     * @param int $faxid Specific sent fax id to lookup info on. Supports multiple separated by a comma
     * @param string $showpages Show page count for faxes
     * @param string $vfaxaccount Show sent faxes for a specific vFax account
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#sentfaxstatus
     */
    public function sentfaxstatus($showxmlstatus = null, $did = null, $showall = null, $faxid = null, $showpages = null, $vfaxaccount = null)
    {
        $cmd = 'sentfaxstatus';
        return $this->submitRequest(compact(['cmd','showxmlstatus','did','showall','faxid','showpages','vfaxaccount']));
    }


    /**
     * Allows you to send a fax over the API
     *
     * @param int $faxnum The outbound fax number to send to
     * @param int $faxsrc The vfax DID to send fax from
     * @param string $recname The receivers name you\'re sending to
     * @param string $file1 The name of the first file
     * @param string $data1 Base64 encoded data of the file you\'re sending
     * @param string $file2 The name of the second file you\'re sending
     * @param string $data2 Base64 encoded data of the file you\'re sending
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#sendfax
     */
    public function sendfax($faxnum, $faxsrc, $recname, $file1, $data1, $file2 = null, $data2 = null)
    {
        $cmd = 'sendfax';
        return $this->submitRequest(compact(['cmd','faxnum','faxsrc','recname','file1','data1','file2','data2']));
    }


    /**
     * List vfax DID numbers available for purchase
     *
     * @param string $state Specific state to list for
     * @param string $ratecenter Specific ratecenter to search for
     * @param string $showratecenter Show the ratecenter as well in results
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#faxlistdids
     */
    public function faxlistdids($state, $ratecenter = null, $showratecenter = null)
    {
        $cmd = 'faxlistdids';
        return $this->submitRequest(compact(['cmd','state','ratecenter','showratecenter']));
    }


    /**
     * Order a specific vfax DID number to your account
     *
     * @param int $did The specific number you wish to order
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#faxgetdid
     */
    public function faxgetdid($did)
    {
        $cmd = 'faxgetdid';
        return $this->submitRequest(compact(['cmd','did']));
    }


    /**
     * Lists all of the available rate centers for a specific state line by line
     *
     * @param string $state The specific state you are searching for
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#faxlistratecenters
     */
    public function faxlistratecenters($state)
    {
        $cmd = 'faxlistratecenters';
        return $this->submitRequest(compact(['cmd','state']));
    }


    /**
     * Lists all of the available states line by line
     *
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#faxliststates
     */
    public function faxliststates()
    {
        $cmd = 'faxliststates';
        return $this->submitRequest(compact(['cmd']));
    }


    /**
     * Changes email addresses assigned to a vFax DID (new faxes are emailed here)
     *
     * @param int $did DID Number to change where emails are sent
     * @param string $emails Email addresses separated by commas
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#faxchangeemail
     */
    public function faxchangeemail($did, $emails)
    {
        $cmd = 'faxchangeemail';
        return $this->submitRequest(compact(['cmd','did','emails']));
    }


    /**
     * Creates new vFax account for use with viewmyfax.com/faxcentral.net
     *
     * @param string $acclogin New vfax login to create
     * @param string $accpass New vfax password for login
     * @param string $accname The persons name or company name
     * @param string $did DID Numbers associated with account separated by commas
     * @param string $accemails Add emails for access to emailyourfax.com fax-to-email sending
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#newfaxacc
     */
    public function newfaxacc($acclogin, $accpass, $accname, $did, $accemails = null)
    {
        $cmd = 'newfaxacc';
        return $this->submitRequest(compact(['cmd','acclogin','accpass','accname','did','accemails']));
    }


    /**
     * Set DIDs or emails associated to vFax account
     *
     * @param string $faxacc The specific vfax login
     * @param string $did DID Numbers separated by commas
     * @param string $accemails Email addresses separated by commas. Set to \'none\' to remove all emails from account
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#setfaxacc
     */
    public function setfaxacc($faxacc, $did = null, $accemails = null)
    {
        $cmd = 'setfaxacc';
        return $this->submitRequest(compact(['cmd','faxacc','did','accemails']));
    }


    /**
     * This option allows end user to modify the email addresses faxes are sent to when they receive a fax
     *
     * @param string $acclogin The specific vfax login
     * @param string $set Set whether they can change or not
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#allowdidchangeemail
     */
    public function allowdidchangeemail($acclogin, $set)
    {
        $cmd = 'allowdidchangeemail';
        return $this->submitRequest(compact(['cmd','acclogin','set']));
    }


    /**
     * Allows user to update the email addresses for sending out faxes to number@emailyourfax.com.
     *
     * @param string $acclogin The specific vfax login
     * @param string $set Set whether they can change or not
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#allowoutchangeemail
     */
    public function allowoutchangeemail($acclogin, $set)
    {
        $cmd = 'allowoutchangeemail';
        return $this->submitRequest(compact(['cmd','acclogin','set']));
    }


    /**
     * Increases the number of DIDs a specific vFax account is allowed to order.
     *
     * @param string $acclogin The specific vfax login
     * @param int $amount Increase number of DIDs/Credits for a vfax by x amount
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#increasecredits
     */
    public function increasecredits($acclogin, $amount)
    {
        $cmd = 'increasecredits';
        return $this->submitRequest(compact(['cmd','acclogin','amount']));
    }


    /**
     * Set the number of DIDs a vfax account can order through viewmyfax portal
     *
     * @param string $acclogin The specific vfax login
     * @param int $amount Number of DIDs/Credits a vfax can order
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#setcredits
     */
    public function setcredits($acclogin, $amount)
    {
        $cmd = 'setcredits';
        return $this->submitRequest(compact(['cmd','acclogin','amount']));
    }


    /**
     * Return how many DID order credits a customer has remaining on a vfax account
     *
     * @param string $acclogin The specific vfax login you\'re looking for
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#getcredits
     */
    public function getcredits($acclogin)
    {
        $cmd = 'getcredits';
        return $this->submitRequest(compact(['cmd','acclogin']));
    }


    /**
     * Set the number of daily outbound faxes a specific vFax account can send per day
     *
     * @param string $acclogin The vFax login to modify
     * @param int $limit Number of faxes to allow
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#setlimit
     */
    public function setlimit($acclogin, $limit)
    {
        $cmd = 'setlimit';
        return $this->submitRequest(compact(['cmd','acclogin','limit']));
    }


    /**
     * Return a full list of your vfax numbers
     *
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#faxlistmydids
     */
    public function faxlistmydids()
    {
        $cmd = 'faxlistmydids';
        return $this->submitRequest(compact(['cmd']));
    }


    /**
     * Remove existing vFax account
     *
     * @param string $acclogin vFax Account login
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#delfaxacc
     */
    public function delfaxacc($acclogin)
    {
        $cmd = 'delfaxacc';
        return $this->submitRequest(compact(['cmd','acclogin']));
    }


    /**
     * Order a Fax Enable device for a specific vFax DID
     *
     * @param string $did vFax DID for which to order the Fax Enable device
     * @param string $name End user name
     * @param string $address Street number and street name of mailing address for end user
     * @param string $city City of End user address
     * @param string $state State of End user address
     * @param string $zip Zip Code of End user address
     * @param string $phone Contact phone for end user
     * @param string $email Contact email address for end user
     * @param string $address2 End user address Suite, Unit, Apt number
     * @param string $subscription Orders a FAX Enable device for a $35 setup fee plus $24.95 per month
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#getfaxenable
     */
    public function getfaxenable($did, $name, $address, $city, $state, $zip, $phone, $email, $address2 = null, $subscription = null)
    {
        $cmd = 'getfaxenable';
        return $this->submitRequest(compact(['cmd','did','name','address','address2','city','state','zip','phone','email','subscription']));
    }


    /**
     * Remove the Fax Enable service from a specific DID
     *
     * @param string $did vFax DID losing the Fax Enable service
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#cancelfaxenable
     */
    public function cancelfaxenable($did)
    {
        $cmd = 'cancelfaxenable';
        return $this->submitRequest(compact(['cmd','did']));
    }


    /**
     * Delete a fax from the vFax system
     *
     * @param int $faxid Fax ID number to delete
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#delfax
     */
    public function delfax($faxid)
    {
        $cmd = 'delfax';
        return $this->submitRequest(compact(['cmd','faxid']));
    }


    /**
     * Get sent fax file. Note: It can take up to an hour for the fax to be available.
     *
     * @param string $faxid Faxid number for sent fax
     * @param string $type Download file as base64encoded instead of web download request
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#getsentfax
     */
    public function getsentfax($faxid, $type = null)
    {
        $cmd = 'getsentfax';
        return $this->submitRequest(compact(['cmd','faxid','type']));
    }


    /**
     * Get name, DIDs, and emails associated to vFax account
     *
     * @param string $faxacc The specific vfax login
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#getfaxacc
     */
    public function getfaxacc($faxacc)
    {
        $cmd = 'getfaxacc';
        return $this->submitRequest(compact(['cmd','faxacc']));
    }


    /**
     * Delete a sent fax from the vFax system
     *
     * @param int $faxid ID of the sent Fax to delete
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#delsentfax
     */
    public function delsentfax($faxid)
    {
        $cmd = 'delsentfax';
        return $this->submitRequest(compact(['cmd','faxid']));
    }


    /**
     * Undelete a previously deleted sent fax
     *
     * @param int $faxid ID of the sent Fax to undelete
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#undelsentfax
     */
    public function undelsentfax($faxid)
    {
        $cmd = 'undelsentfax';
        return $this->submitRequest(compact(['cmd','faxid']));
    }


    /**
     * Delete all the sent and received faxes associated with a fax DID
     *
     * @param int $did The fax DID whose history you want to clear
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#cleardidfaxes
     */
    public function cleardidfaxes($did)
    {
        $cmd = 'cleardidfaxes';
        return $this->submitRequest(compact(['cmd','did']));
    }


    /**
     * Undelete a fax from the vFax system
     *
     * @param int $faxid ID of the Fax to undelete
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#undelfax
     */
    public function undelfax($faxid)
    {
        $cmd = 'undelfax';
        return $this->submitRequest(compact(['cmd','faxid']));
    }


    /**
     * Generates a page count report for faxes
     *
     * @param string $startdate Date range start for faxes; date only or date and time
     * @param string $enddate Date range end for faxes; date only or date and time
     * @param string $vfaxacc Show faxes for a specific vFax account only
     * @param string $xmlcomply XML Compliant - if using XML, highly suggest (bugfix)
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#faxpagecounts
     */
    public function faxpagecounts($startdate = null, $enddate = null, $vfaxacc = null, $xmlcomply = null)
    {
        $cmd = 'faxpagecounts';
        return $this->submitRequest(compact(['cmd','startdate','enddate','vfaxacc','xmlcomply']));
    }

}