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
 * IssueRelationship.
 */
class IssueRelationship
{
    public static $paramtypesmap = [
    ];
    /**
     * @var string
     */
    const _blocks = '_blocks';
    /**
     * @var string
     */
    const _dependsOn = '_dependsOn';
    /**
     * @var string
     */
    const _duplicatedBy = '_duplicatedBy';
    /**
     * @var string
     */
    const _duplicates = '_duplicates';
    /**
     * @var string
     */
    const _followedUpBy = '_followedUpBy';
    /**
     * @var string
     */
    const _followUpFor = '_followUpFor';
    /**
     * @var string
     */
    const _injectedBy = '_injectedBy';
    /**
     * @var string
     */
    const _injects = '_injects';
    /**
     * @var string
     */
    const _isBlockedBy = '_isBlockedBy';
    /**
     * @var string
     */
    const _isRequiredFor = '_isRequiredFor';
    /**
     * @var string
     */
    const _relatedTo = '_relatedTo';
}