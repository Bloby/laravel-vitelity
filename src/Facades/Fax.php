<?php 

namespace Vitelity\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static mixed listincomingfaxes($faxid = null, $type = null, $xmlcomply = null, $showpages = null, $vfaxacc = null, $start = null, $end = null)
 * @method static mixed getfax($faxid, $type = null)
 * @method static mixed sentfaxstatus($showxmlstatus = null, $did = null, $showall = null, $faxid = null, $showpages = null, $vfaxaccount = null)
 * @method static mixed sendfax($faxnum, $faxsrc, $recname, $file1, $data1, $file2 = null, $data2 = null)
 * @method static mixed faxlistdids($state, $ratecenter = null, $showratecenter = null)
 * @method static mixed faxgetdid($did)
 * @method static mixed faxlistratecenters($state)
 * @method static mixed faxliststates()
 * @method static mixed faxchangeemail($did, $emails)
 * @method static mixed newfaxacc($acclogin, $accpass, $accname, $did, $accemails = null)
 * @method static mixed setfaxacc($faxacc, $did = null, $accemails = null)
 * @method static mixed allowdidchangeemail($acclogin, $set)
 * @method static mixed allowoutchangeemail($acclogin, $set)
 * @method static mixed increasecredits($acclogin, $amount)
 * @method static mixed setcredits($acclogin, $amount)
 * @method static mixed getcredits($acclogin)
 * @method static mixed setlimit($acclogin, $limit)
 * @method static mixed faxlistmydids()
 * @method static mixed delfaxacc($acclogin)
 * @method static mixed getfaxenable($did, $name, $address, $city, $state, $zip, $phone, $email, $address2 = null, $subscription = null)
 * @method static mixed cancelfaxenable($did)
 * @method static mixed delfax($faxid)
 * @method static mixed getsentfax($faxid, $type = null)
 * @method static mixed getfaxacc($faxacc)
 * @method static mixed delsentfax($faxid)
 * @method static mixed undelsentfax($faxid)
 * @method static mixed cleardidfaxes($did)
 * @method static mixed undelfax($faxid)
 * @method static mixed faxpagecounts($startdate = null, $enddate = null, $vfaxacc = null, $xmlcomply = null)
 *
 * @see \Vitelity\Core
 * @see \Vitelity\Fax
 * @see \Vitelity\Facades\Fax
 */
class Fax extends Facade {

	/**
	 * Get the registered name of the component
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'vitelityfax'; }
}