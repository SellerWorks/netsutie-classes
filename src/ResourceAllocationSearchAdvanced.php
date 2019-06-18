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
 * ResourceAllocationSearchAdvanced.
 */
class ResourceAllocationSearchAdvanced extends SearchRecord
{
    /**
     * @var ResourceAllocationSearch
     */
    public $criteria;
    /**
     * @var ResourceAllocationSearchRow
     */
    public $columns;
    /**
     * @var string
     */
    public $savedSearchId;
    /**
     * @var string
     */
    public $savedSearchScriptId;

    public static $paramtypesmap = array(
        'criteria' => 'ResourceAllocationSearch',
        'columns' => 'ResourceAllocationSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    );
}
