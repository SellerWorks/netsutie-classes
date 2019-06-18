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
 * NSSoapFault.
 */
class NSSoapFault
{
    /**
     * @var FaultCodeType
     */
    public $code;
    /**
     * @var string
     */
    public $message;

    public static $paramtypesmap = array(
        'code' => 'FaultCodeType',
        'message' => 'string',
    );
}
