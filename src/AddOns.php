<?php

namespace Vitelity;

class AddOns extends Core {
    
    /**
     * Instantiate a new instance
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Order residential directory listing service for DID(s)
     *
     * @param int $did DID or comma-separated list of DIDs
     * @param string $firstname The first name to be displayed on the directory listing
     * @param string $lastname The last name to be displayed on the directory listing
     * @param string $streetnumber The street number of the residence
     * @param string $streetname The street name of the residence
     * @param string $city The city of the residence
     * @param string $state The 2-character state abbreviation of the residence
     * @param string $zip The 5-digit zipcode of the residence
     * @param string $email The email address of the listing owner, for verification if needed
     * @param int $contact_phone The phone number of the listing owner, for verification if needed
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#orderresidentiallisting
     */
    public function orderresidentiallisting($did, $firstname, $lastname, $streetnumber, $streetname, $city, $state, $zip, $email, $contact_phone)
    {
        $cmd = 'orderresidentiallisting';
        return $this->submitRequest(compact(['cmd','did','firstname','lastname','streetnumber','streetname','city','state','zip','email','contact_phone']));
    }


    /**
     * Order business directory listing service for DID(s)
     *
     * @param int $did DID or comma-separated list of DIDs
     * @param string $businessname The business name to be displayed on the listing
     * @param string $streetnumber The street number of the business
     * @param string $streetname The street name of the business
     * @param string $city The city of the business
     * @param string $state The 2-character state abbreviation of the business
     * @param string $zip The 5-digit zipcode of the business
     * @param string $email The email address of the listing owner, for verification if needed
     * @param int $contact_phone The phone number of the listing owner, for verification if needed
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#orderbusinesslisting
     */
    public function orderbusinesslisting($did, $businessname, $streetnumber, $streetname, $city, $state, $zip, $email, $contact_phone)
    {
        $cmd = 'orderbusinesslisting';
        return $this->submitRequest(compact(['cmd','did','businessname','streetnumber','streetname','city','state','zip','email','contact_phone']));
    }


    /**
     * Update residential directory listing service for DID(s)
     *
     * @param int $did DID or comma-separated list of DIDs
     * @param string $firstname The first name to be displayed on the directory listing
     * @param string $lastname The last name to be displayed on the directory listing
     * @param string $streetnumber The street number of the residence
     * @param string $streetname The street name of the residence
     * @param string $city The city of the residence
     * @param string $state The 2-character state abbreviation of the residence
     * @param string $zip The 5-digit zipcode of the residence
     * @param string $email The email address of the listing owner, for verification if needed
     * @param int $contact_phone The phone number of the listing owner, for verification if needed
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#updateresidentiallisting
     */
    public function updateresidentiallisting($did, $firstname, $lastname, $streetnumber, $streetname, $city, $state, $zip, $email, $contact_phone)
    {
        $cmd = 'updateresidentiallisting';
        return $this->submitRequest(compact(['cmd','did','firstname','lastname','streetnumber','streetname','city','state','zip','email','contact_phone']));
    }


    /**
     * Update business directory listing service for DID(s)
     *
     * @param int $did DID or comma-separated list of DIDs
     * @param string $businessname The business name to be displayed on the listing
     * @param string $streetnumber The street number of the business
     * @param string $streetname The street name of the business
     * @param string $city The city of the business
     * @param string $state The 2-character state abbreviation of the business
     * @param string $zip The 5-digit zipcode of the business
     * @param string $email The email address of the listing owner, for verification if needed
     * @param int $contact_phone The phone number of the listing owner, for verification if needed
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#updatebusinesslisting
     */
    public function updatebusinesslisting($did, $businessname, $streetnumber, $streetname, $city, $state, $zip, $email, $contact_phone)
    {
        $cmd = 'updatebusinesslisting';
        return $this->submitRequest(compact(['cmd','did','businessname','streetnumber','streetname','city','state','zip','email','contact_phone']));
    }


    /**
     * Cancel a directory listing
     *
     * @param int $did DID or comma-separated list of DIDs
     * @return mixed
     *
     * @see http://apihelp.vitelity.net/#cancellisting
     */
    public function cancellisting($did)
    {
        $cmd = 'cancellisting';
        return $this->submitRequest(compact(['cmd','did']));
    }

}