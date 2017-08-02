<?php

namespace Vitelity;

class LNP extends Core {
    
    /**
     * Instantiate a new instance
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Add LNP order
     *
     * @param string $portnumber Telephone number to port
     * @param string $partial Partial Port Indicator
     * @param string $wireless Wireless Port Indicator
     * @param string $carrier Current Provider
     * @param string $company End user company name
     * @param string $accnumber Account number with current provider
     * @param string $name End user name
     * @param string $streetnumber Street Number of End user address
     * @param string $streetname Street Name of End user address
     * @param string $city City of End user address
     * @param string $state State of End user address
     * @param string $zip Zip Code of End user address
     * @param string $billnumber Billing Telephone Number associated with current provider for DID
     * @param string $contactnumber Contact Telephone Number for any questions
     * @param string $endportnumber End Sequential Telephone number to port
     * @param string $additional If partial port order is yes this is required
     * @param string $ssnpin If wireless port order is yes this is required.
     * @param string $streetprefix Directional Prefix for End user address street name
     * @param string $streetsuffix Directional Suffix for End user address street name
     * @param string $unit End user address Suite, Unit, Apt number
     * @param string $routeto Specify Sub Account / Host for default route upon port completion
     * @param string $rateplan Specify Rateplan for Port Order. PPM is default.
     * @param string $porttype Specify type of port, residential or business. Business is default
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#addport
     */
    public function addport($portnumber, $partial, $wireless, $carrier, $company, $accnumber, $name, $streetnumber, $streetname, $city, $state, $zip, $billnumber, $contactnumber, $endportnumber = null, $additional = null, $ssnpin = null, $streetprefix = null, $streetsuffix = null, $unit = null, $routeto = null, $rateplan = null, $porttype = null)
    {
        $cmd = 'addport';
        return $this->submitRequest(compact(['cmd','portnumber','endportnumber','partial','additional','wireless','ssnpin','carrier','company','accnumber','name','streetnumber','streetprefix','streetname','streetsuffix','unit','city','state','zip','billnumber','contactnumber','routeto','rateplan','porttype']));
    }


    /**
     * Upload Signature for LNP order if required. Must be 225 pixels by 50 pixels in size, in JPG, GIF, PNG or BMP format.
     *
     * @param string $portid Port ID number returned upon submission
     * @param string $filename Name of file being uploaded
     * @param string $data URL Encoded Base64 Encoded File Data
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#uploadsignature
     */
    public function uploadsignature($portid, $filename, $data)
    {
        $cmd = 'uploadsignature';
        return $this->submitRequest(compact(['cmd','portid','filename','data']));
    }


    /**
     * Upload Bill for LNP order if required. Bill copy must be in PDF or JPG formats. PDF Recommended.
     *
     * @param string $portid Port ID number returned upon submission
     * @param string $filename Name of file being uploaded
     * @param string $data URL Encoded Base64 Encoded File Data
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#uploadbill
     */
    public function uploadbill($portid, $filename, $data)
    {
        $cmd = 'uploadbill';
        return $this->submitRequest(compact(['cmd','portid','filename','data']));
    }


    /**
     * Check LNP Availability for DID Number
     *
     * @param string $did DID number
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#checkavail
     */
    public function checkavail($did)
    {
        $cmd = 'checkavail';
        return $this->submitRequest(compact(['cmd','did']));
    }


    /**
     * Check LNP Availability for multiple DID Numbers at once. Will respond with number:support. (support may be voice, both or nosupport) Both means Voice & vFax.
     *
     * @param string $dids DID numbers
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#checkmultiavail
     */
    public function checkmultiavail($dids)
    {
        $cmd = 'checkmultiavail';
        return $this->submitRequest(compact(['cmd','dids']));
    }


    /**
     * Check port order status
     *
     * @param string $portid Port order ID number
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#checkstatus
     */
    public function checkstatus($portid)
    {
        $cmd = 'checkstatus';
        return $this->submitRequest(compact(['cmd','portid']));
    }


    /**
     * List port orders associated with account
     *
     * @param string $type Specify type of orders to display
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#listports
     */
    public function listports($type = null)
    {
        $cmd = 'listports';
        return $this->submitRequest(compact(['cmd','type']));
    }

}