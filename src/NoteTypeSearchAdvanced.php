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
 * NoteTypeSearchAdvanced.
 */
class NoteTypeSearchAdvanced extends SearchRecord
{
    /**
     * @var NoteTypeSearch
     */
    public $criteria;
    /**
     * @var NoteTypeSearchRow
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
        'criteria' => 'NoteTypeSearch',
        'columns' => 'NoteTypeSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    );
}
