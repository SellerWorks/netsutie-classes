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
 * SupportCaseSolutionsList
 */
class SupportCaseSolutionsList {
	/**
	 * @access public
	 * @var SupportCaseSolutions[]
	 */
	public $solutions;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"solutions" => "SupportCaseSolutions[]",
		"replaceAll" => "boolean",
	);
}
