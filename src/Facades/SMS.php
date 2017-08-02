<?php 

namespace Vitelity\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static mixed checksms($did)
 * @method static mixed removesms($did)
 * @method static mixed smsdids()
 * @method static mixed smsenableurl($url)
 * @method static mixed sendsms($src, $dst, $msg, $allowall = null)
 * @method static mixed setsms($did, $chatpass, $plan = null)
 * @method static mixed smsenablehtt($did)
 * @method static mixed sendshort($src, $dst, $msg)
 * @method static mixed listsmsurl()
 * @method static mixed listsms()
 * @method static mixed smstoemail($action, $did, $email = null)
 *
 * @see \Vitelity\Core
 * @see \Vitelity\SMS
 * @see \Vitelity\Facades\SMS
 */
class SMS extends Facade {

	/**
	 * Get the registered name of the component
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'vitelitysms'; }
}