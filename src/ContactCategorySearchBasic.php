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
 * ContactCategorySearchBasic.
 */
class ContactCategorySearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var SearchStringField
     */
    public $externalIdString;
    /**
     * @var SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var SearchBooleanField
     */
    public $isInactive;
    /**
     * @var SearchStringField
     */
    public $name;
    /**
     * @var SearchBooleanField
     */
    public $private;
    /**
     * @var SearchBooleanField
     */
    public $sync;

    public static $paramtypesmap = array(
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'isInactive' => 'SearchBooleanField',
        'name' => 'SearchStringField',
        'private' => 'SearchBooleanField',
        'sync' => 'SearchBooleanField',
    );
}
