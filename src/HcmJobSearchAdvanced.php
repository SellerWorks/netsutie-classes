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
 * HcmJobSearchAdvanced.
 */
class HcmJobSearchAdvanced extends SearchRecord
{
    /**
     * @var HcmJobSearch
     */
    public $criteria;
    /**
     * @var HcmJobSearchRow
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
        'criteria' => 'HcmJobSearch',
        'columns' => 'HcmJobSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    );
}
