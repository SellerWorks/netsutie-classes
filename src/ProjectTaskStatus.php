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
 * ProjectTaskStatus.
 */
class ProjectTaskStatus
{
    public static $paramtypesmap = [
    ];
    /**
     * @var string
     */
    const _completed = '_completed';
    /**
     * @var string
     */
    const _inProgress = '_inProgress';
    /**
     * @var string
     */
    const _notStarted = '_notStarted';
}