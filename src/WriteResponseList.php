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
 * WriteResponseList.
 */
class WriteResponseList
{
    /**
     * @var Status
     */
    public $status;
    /**
     * @var WriteResponse[]
     */
    public $writeResponse;

    public static $paramtypesmap = [
        'status' => 'Status',
        'writeResponse' => 'WriteResponse[]',
    ];
}