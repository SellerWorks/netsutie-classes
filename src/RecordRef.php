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
 * RecordRef.
 */
class RecordRef extends BaseRef
{
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;
    /**
     * @var RecordType
     */
    public $type;

    public static $paramtypesmap = array(
        'internalId' => 'string',
        'externalId' => 'string',
        'type' => 'RecordType',
    );
}
