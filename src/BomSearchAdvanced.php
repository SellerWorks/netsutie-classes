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
 * BomSearchAdvanced.
 */
class BomSearchAdvanced extends SearchRecord
{
    /**
     * @var BomSearch
     */
    public $criteria;
    /**
     * @var BomSearchRow
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
        'criteria' => 'BomSearch',
        'columns' => 'BomSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    );
}
