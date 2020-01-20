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
 * Account
 */
class Account extends Record {
	/**
	 * @access public
	 * @var AccountType
	 */
	public $acctType;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $unitsType;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $unit;
	/**
	 * @access public
	 * @var string
	 */
	public $acctNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $acctName;
	/**
	 * @access public
	 * @var string
	 */
	public $legalName;
	/**
	 * @access public
	 * @var boolean
	 */
	public $includeChildren;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $currency;
	/**
	 * @access public
	 * @var string
	 */
	public $exchangeRate;
	/**
	 * @access public
	 * @var ConsolidatedRate
	 */
	public $generalRate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $parent;
	/**
	 * @access public
	 * @var ConsolidatedRate
	 */
	public $cashFlowRate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $billableExpensesAcct;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $deferralAcct;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var integer
	 */
	public $curDocNum;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $department;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $class;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $location;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $restrictToAccountingBookList;
	/**
	 * @access public
	 * @var boolean
	 */
	public $inventory;
	/**
	 * @access public
	 * @var boolean
	 */
	public $eliminate;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $subsidiaryList;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $category1099misc;
	/**
	 * @access public
	 * @var AccountLocalizationsList
	 */
	public $localizationsList;
	/**
	 * @access public
	 * @var float
	 */
	public $openingBalance;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $tranDate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $revalue;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var string
	 */
	public $externalId;

	static $paramtypesmap = array(
		"acctType" => "AccountType",
		"unitsType" => "RecordRef",
		"unit" => "RecordRef",
		"acctNumber" => "string",
		"acctName" => "string",
		"legalName" => "string",
		"includeChildren" => "boolean",
		"currency" => "RecordRef",
		"exchangeRate" => "string",
		"generalRate" => "ConsolidatedRate",
		"parent" => "RecordRef",
		"cashFlowRate" => "ConsolidatedRate",
		"billableExpensesAcct" => "RecordRef",
		"deferralAcct" => "RecordRef",
		"description" => "string",
		"curDocNum" => "integer",
		"isInactive" => "boolean",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"restrictToAccountingBookList" => "RecordRefList",
		"inventory" => "boolean",
		"eliminate" => "boolean",
		"subsidiaryList" => "RecordRefList",
		"category1099misc" => "RecordRef",
		"localizationsList" => "AccountLocalizationsList",
		"openingBalance" => "float",
		"tranDate" => "dateTime",
		"revalue" => "boolean",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}
