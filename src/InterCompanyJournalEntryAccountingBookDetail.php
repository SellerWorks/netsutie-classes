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
 * InterCompanyJournalEntryAccountingBookDetail.
 */
class InterCompanyJournalEntryAccountingBookDetail
{
    /**
     * @var RecordRef
     */
    public $accountingBook;
    /**
     * @var RecordRef
     */
    public $currency;
    /**
     * @var RecordRef
     */
    public $subsidiary;
    /**
     * @var float
     */
    public $exchangeRate;

    public static $paramtypesmap = [
        'accountingBook' => 'RecordRef',
        'currency' => 'RecordRef',
        'subsidiary' => 'RecordRef',
        'exchangeRate' => 'float',
    ];
}