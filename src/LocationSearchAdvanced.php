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
 * LocationSearchAdvanced.
 */
class LocationSearchAdvanced extends SearchRecord
{
    /**
     * @var LocationSearch
     */
    public $criteria;
    /**
     * @var LocationSearchRow
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
        'criteria' => 'LocationSearch',
        'columns' => 'LocationSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    );
}
