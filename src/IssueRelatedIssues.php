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
 * IssueRelatedIssues.
 */
class IssueRelatedIssues
{
    /**
     * @var IssueRelationship
     */
    public $relationship;
    /**
     * @var RecordRef
     */
    public $issueNumber;
    /**
     * @var string
     */
    public $relationshipComment;

    public static $paramtypesmap = [
        'relationship' => 'IssueRelationship',
        'issueNumber' => 'RecordRef',
        'relationshipComment' => 'string',
    ];
}