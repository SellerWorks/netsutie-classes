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
 * SearchColumnStringCustomField.
 */
class SearchColumnStringCustomField extends SearchColumnCustomField
{
    /**
     * @var string
     */
    public $searchValue;

    public static $paramtypesmap = array(
        'searchValue' => 'string',
    );
}
