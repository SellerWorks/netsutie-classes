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
 * GetRequest.
 */
class GetRequest
{
    /**
     * @var BaseRef
     */
    public $baseRef;

    public static $paramtypesmap = array(
        'baseRef' => 'BaseRef',
    );
}
