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
 * SalesRole.
 */
class SalesRole extends Record
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $description;
    /**
     * @var bool
     */
    public $isSalesRep;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = [
        'name' => 'string',
        'description' => 'string',
        'isSalesRep' => 'boolean',
        'isInactive' => 'boolean',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}