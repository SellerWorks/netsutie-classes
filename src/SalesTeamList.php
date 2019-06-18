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
 * SalesTeamList.
 */
class SalesTeamList
{
    /**
     * @var CustomerSalesTeam[]
     */
    public $salesTeam;
    /**
     * @var bool
     */
    public $replaceAll;

    public static $paramtypesmap = array(
        'salesTeam' => 'CustomerSalesTeam[]',
        'replaceAll' => 'boolean',
    );
}
