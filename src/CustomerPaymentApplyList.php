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
 * CustomerPaymentApplyList.
 */
class CustomerPaymentApplyList
{
    /**
     * @var CustomerPaymentApply[]
     */
    public $apply;
    /**
     * @var bool
     */
    public $replaceAll;

    public static $paramtypesmap = array(
        'apply' => 'CustomerPaymentApply[]',
        'replaceAll' => 'boolean',
    );
}
