<?php

namespace Vitelity;

class Billing extends Core {
    
    /**
     * Instantiate a new instance
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * reports back your current account balance
     *
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#balance
     */
    public function balance()
    {
        $cmd = 'balance';
        return $this->submitRequest(compact(['cmd']));
    }


    /**
     * Download SMS Short Code Records
     *
     * @param string $startdate Specify Start Date for records
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#downloadsmssc
     */
    public function downloadsmssc($startdate = null)
    {
        $cmd = 'downloadsmssc';
        return $this->submitRequest(compact(['cmd','startdate']));
    }


    /**
     * Give the seconds of use and cost for a specific did for a timeframe
     *
     * @param string $startdate Date to send in standard format
     * @param string $enddate Ending CDR date to send in standard format
     * @param int $did DID Number to receive records for
     * @param string $type Specify calls with this DID as callerid/source instead (type=outbound)
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#didcdrdetail
     */
    public function didcdrdetail($startdate, $enddate, $did, $type = null)
    {
        $cmd = 'didcdrdetail';
        return $this->submitRequest(compact(['cmd','startdate','enddate','did','type']));
    }


    /**
     * Pull details records for a specific sub account for a date range
     *
     * @param string $startdate CDR Startdate for the inquiry
     * @param string $enddate Ending CDR date to send in standard format
     * @param string $subaccount Specify the sub account for the inquiry
     * @param string $type Show only outgoing call records for this sub accounnt. Show only incoming call records for this sub account
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#subaccountcdrdetail
     */
    public function subaccountcdrdetail($startdate, $enddate, $subaccount, $type = null)
    {
        $cmd = 'subaccountcdrdetail';
        return $this->submitRequest(compact(['cmd','startdate','enddate','subaccount','type']));
    }


    /**
     * Get CDR Records for specified timeframe.
     *
     * @param string $startdate Startdate
     * @param string $enddate Enddate
     * @param string $subaccount Return records for specific sub account
     * @param string $addsub Adds sub account/peer info to records. Send &addsub=yes
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#getcdr
     */
    public function getcdr($startdate, $enddate, $subaccount = null, $addsub = null)
    {
        $cmd = 'getcdr';
        return $this->submitRequest(compact(['cmd','startdate','enddate','subaccount','addsub']));
    }


    /**
     * DID minutes
     *
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#didminutes
     */
    public function didminutes()
    {
        $cmd = 'didminutes';
        return $this->submitRequest(compact(['cmd']));
    }

}