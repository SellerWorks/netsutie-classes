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
 * LogoutResponse.
 */
class LogoutResponse
{
    /**
     * @var SessionResponse
     */
    public $sessionResponse;

    public static $paramtypesmap = array(
        'sessionResponse' => 'SessionResponse',
    );
}
