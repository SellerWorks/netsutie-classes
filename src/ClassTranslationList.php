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
 * ClassTranslationList.
 */
class ClassTranslationList
{
    /**
     * @var ClassTranslation[]
     */
    public $classTranslation;
    /**
     * @var bool
     */
    public $replaceAll;

    public static $paramtypesmap = array(
        'classTranslation' => 'ClassTranslation[]',
        'replaceAll' => 'boolean',
    );
}
