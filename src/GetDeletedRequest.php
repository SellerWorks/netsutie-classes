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
 * GetDeletedRequest.
 */
class GetDeletedRequest
{
    /**
     * @var GetDeletedFilter
     */
    public $getDeletedFilter;
    /**
     * @var int
     */
    public $pageIndex;

    public static $paramtypesmap = array(
        'getDeletedFilter' => 'GetDeletedFilter',
        'pageIndex' => 'integer',
    );
}
