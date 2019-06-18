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
 * SsoPassport.
 */
class SsoPassport
{
    /**
     * @var string
     */
    public $authenticationToken;
    /**
     * @var string
     */
    public $partnerId;
    /**
     * @var string
     */
    public $partnerAccount;
    /**
     * @var string
     */
    public $partnerUserId;

    public static $paramtypesmap = [
        'authenticationToken' => 'string',
        'partnerId' => 'string',
        'partnerAccount' => 'string',
        'partnerUserId' => 'string',
    ];
}