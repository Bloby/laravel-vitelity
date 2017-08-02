<?php 

namespace Vitelity\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static mixed orderresidentiallisting($did, $firstname, $lastname, $streetnumber, $streetname, $city, $state, $zip, $email, $contact_phone)
 * @method static mixed orderbusinesslisting($did, $businessname, $streetnumber, $streetname, $city, $state, $zip, $email, $contact_phone)
 * @method static mixed updateresidentiallisting($did, $firstname, $lastname, $streetnumber, $streetname, $city, $state, $zip, $email, $contact_phone)
 * @method static mixed updatebusinesslisting($did, $businessname, $streetnumber, $streetname, $city, $state, $zip, $email, $contact_phone)
 * @method static mixed cancellisting($did)
 *
 * @see \Vitelity\Core
 * @see \Vitelity\AddOns
 * @see \Vitelity\Facades\AddOns
 */
class AddOns extends Facade {

	/**
	 * Get the registered name of the component
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'vitelityao'; }
}