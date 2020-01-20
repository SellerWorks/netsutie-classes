<?php
/**
 * (c) NetSuite, Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SellerWorks\Netsuite\Model;

/**
 * PaycheckPaySummaryList
 */
class PaycheckPaySummaryList {
	/**
	 * @access public
	 * @var PaycheckPaySummary[]
	 */
	public $paycheckPaySummary;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"paycheckPaySummary" => "PaycheckPaySummary[]",
		"replaceAll" => "boolean",
	);
}
