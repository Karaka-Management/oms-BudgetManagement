<?php
/**
 * Jingga
 *
 * PHP Version 8.2
 *
 * @package   Modules\BudgetManagement\Admin
 * @copyright Dennis Eichhorn
 * @license   OMS License 2.2
 * @version   1.0.0
 * @link      https://jingga.app
 */
declare(strict_types=1);

namespace Modules\BudgetManagement\Admin;

use phpOMS\Module\UpdaterAbstract;

/**
 * Updater class.
 *
 * @package Modules\BudgetManagement\Admin
 * @license OMS License 2.2
 * @link    https://jingga.app
 * @since   1.0.0
 */
final class Updater extends UpdaterAbstract
{
    /**
     * Path of the file
     *
     * @var string
     * @since 1.0.0
     */
    public const PATH = __DIR__;
}
