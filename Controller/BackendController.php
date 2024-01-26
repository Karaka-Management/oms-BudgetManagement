<?php
/**
 * Jingga
 *
 * PHP Version 8.1
 *
 * @package   Modules\BudgetManagement
 * @copyright Dennis Eichhorn
 * @license   OMS License 2.0
 * @version   1.0.0
 * @link      https://jingga.app
 */
declare(strict_types=1);

namespace Modules\BudgetManagement\Controller;

use Modules\ItemManagement\Models\Attribute\ItemAttributeTypeMapper;
use phpOMS\Contract\RenderableInterface;
use phpOMS\Message\RequestAbstract;
use phpOMS\Message\ResponseAbstract;
use phpOMS\Views\View;

/**
 * Budgeting controller class.
 *
 * @package Modules\BudgetManagement
 * @license OMS License 2.0
 * @link    https://jingga.app
 * @since   1.0.0
 */
final class BackendController extends Controller
{
    /**
     * Routing end-point for application behavior.
     *
     * @param RequestAbstract  $request  Request
     * @param ResponseAbstract $response Response
     * @param array            $data     Generic data
     *
     * @return RenderableInterface
     *
     * @since 1.0.0
     * @codeCoverageIgnore
     */
    public function viewBudgetingDashboard(RequestAbstract $request, ResponseAbstract $response, $data = null) : RenderableInterface
    {
        $view = new View($this->app->l11nManager, $request, $response);
        $view->setTemplate('/Modules/BudgetManagement/Theme/Backend/budgeting-dashboard');
        $view->data['nav'] = $this->app->moduleManager->get('Navigation')->createNavigationMid(1004601001, $request, $response);

        $result = ItemAttributeTypeMapper::getAll()
            ->with('l11n')
            ->with('defaults')
            ->with('defaults/l11n')
            ->where('name', ['segment', 'section', 'sales_group', 'product_group'], 'IN')
            ->where('l11n/language', $response->header->l11n->language)
            ->where('defaults/l11n/language', $response->header->l11n->language)
            ->execute();

        $segmentation = [];
        foreach ($result as $seg) {
            $segmentation[$seg->name] = $seg;
        }

        $view->data['segmentation'] = $segmentation;

        return $view;
    }
}
