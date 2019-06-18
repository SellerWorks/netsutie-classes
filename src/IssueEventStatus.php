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
 * IssueEventStatus.
 */
class IssueEventStatus
{
    public static $paramtypesmap = [
    ];
    /**
     * @var string
     */
    const _closed = '_closed';
    /**
     * @var string
     */
    const _onHold = '_onHold';
    /**
     * @var string
     */
    const _open = '_open';
    /**
     * @var string
     */
    const _resolved = '_resolved';
}