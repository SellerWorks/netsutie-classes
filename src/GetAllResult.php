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
 * GetAllResult.
 */
class GetAllResult
{
    /**
     * @var Status
     */
    public $status;
    /**
     * @var int
     */
    public $totalRecords;
    /**
     * @var RecordList
     */
    public $recordList;

    public static $paramtypesmap = [
        'status' => 'Status',
        'totalRecords' => 'integer',
        'recordList' => 'RecordList',
    ];
}