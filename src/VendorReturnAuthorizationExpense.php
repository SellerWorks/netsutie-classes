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
 * VendorReturnAuthorizationExpense.
 */
class VendorReturnAuthorizationExpense
{
    /**
     * @var int
     */
    public $orderLine;
    /**
     * @var int
     */
    public $line;
    /**
     * @var RecordRef
     */
    public $category;
    /**
     * @var RecordRef
     */
    public $account;
    /**
     * @var float
     */
    public $amount;
    /**
     * @var float
     */
    public $taxAmount;
    /**
     * @var RecordRef
     */
    public $taxCode;
    /**
     * @var float
     */
    public $taxRate1;
    /**
     * @var float
     */
    public $taxRate2;
    /**
     * @var float
     */
    public $tax1Amt;
    /**
     * @var float
     */
    public $grossAmt;
    /**
     * @var string
     */
    public $taxDetailsReference;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var RecordRef
     */
    public $department;
    /**
     * @var RecordRef
     */
    public $class;
    /**
     * @var RecordRef
     */
    public $location;
    /**
     * @var RecordRef
     */
    public $customer;
    /**
     * @var bool
     */
    public $isBillable;
    /**
     * @var RecordRef
     */
    public $amortizationSched;
    /**
     * @var dateTime
     */
    public $amortizStartDate;
    /**
     * @var dateTime
     */
    public $amortizationEndDate;
    /**
     * @var string
     */
    public $amortizationResidual;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'orderLine' => 'integer',
        'line' => 'integer',
        'category' => 'RecordRef',
        'account' => 'RecordRef',
        'amount' => 'float',
        'taxAmount' => 'float',
        'taxCode' => 'RecordRef',
        'taxRate1' => 'float',
        'taxRate2' => 'float',
        'tax1Amt' => 'float',
        'grossAmt' => 'float',
        'taxDetailsReference' => 'string',
        'memo' => 'string',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'customer' => 'RecordRef',
        'isBillable' => 'boolean',
        'amortizationSched' => 'RecordRef',
        'amortizStartDate' => 'dateTime',
        'amortizationEndDate' => 'dateTime',
        'amortizationResidual' => 'string',
        'customFieldList' => 'CustomFieldList',
    ];
}