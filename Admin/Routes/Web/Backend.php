<?php declare(strict_types=1);

use Modules\BudgetManagement\Controller\BackendController;
use Modules\BudgetManagement\Models\PermissionState;
use phpOMS\Account\PermissionType;
use phpOMS\Router\RouteVerb;

return [
    '^/controlling/budget/dashboard(\?.*$|$)' => [
        [
            'dest'       => '\Modules\BudgetManagement\Controller\BackendController:viewBudgetingDashboard',
            'verb'       => RouteVerb::GET,
            'permission' => [
                'module' => BackendController::MODULE_NAME,
                'type'   => PermissionType::READ,
                'state'  => PermissionState::BUDGET,
            ],
        ],
    ],
    '^/controlling/budget/pl(\?.*$|$)' => [
        [
            'dest'       => '\Modules\BudgetManagement\Controller\BackendController:viewBudgetingIncomeStatement',
            'verb'       => RouteVerb::GET,
            'permission' => [
                'module' => BackendController::MODULE_NAME,
                'type'   => PermissionType::READ,
                'state'  => PermissionState::BUDGET,
            ],
        ],
    ],
    '^/controlling/budget/balance(\?.*$|$)' => [
        [
            'dest'       => '\Modules\BudgetManagement\Controller\BackendController:viewBudgetingBalance',
            'verb'       => RouteVerb::GET,
            'permission' => [
                'module' => BackendController::MODULE_NAME,
                'type'   => PermissionType::READ,
                'state'  => PermissionState::BUDGET,
            ],
        ],
    ],
    '^/controlling/budget/sales(\?.*$|$)' => [
        [
            'dest'       => '\Modules\BudgetManagement\Controller\BackendController:viewBudgetingSales',
            'verb'       => RouteVerb::GET,
            'permission' => [
                'module' => BackendController::MODULE_NAME,
                'type'   => PermissionType::READ,
                'state'  => PermissionState::BUDGET,
            ],
        ],
    ],
    '^/controlling/budget/material(\?.*$|$)' => [
        [
            'dest'       => '\Modules\BudgetManagement\Controller\BackendController:viewBudgetingMaterial',
            'verb'       => RouteVerb::GET,
            'permission' => [
                'module' => BackendController::MODULE_NAME,
                'type'   => PermissionType::READ,
                'state'  => PermissionState::BUDGET,
            ],
        ],
    ],
    '^/controlling/budget/opex(\?.*$|$)' => [
        [
            'dest'       => '\Modules\BudgetManagement\Controller\BackendController:viewBudgetingOpex',
            'verb'       => RouteVerb::GET,
            'permission' => [
                'module' => BackendController::MODULE_NAME,
                'type'   => PermissionType::READ,
                'state'  => PermissionState::BUDGET,
            ],
        ],
    ],
    '^/controlling/budget/hr(\?.*$|$)' => [
        [
            'dest'       => '\Modules\BudgetManagement\Controller\BackendController:viewBudgetingHR',
            'verb'       => RouteVerb::GET,
            'permission' => [
                'module' => BackendController::MODULE_NAME,
                'type'   => PermissionType::READ,
                'state'  => PermissionState::BUDGET,
            ],
        ],
    ],
    '^/controlling/budget/investment(\?.*$|$)' => [
        [
            'dest'       => '\Modules\BudgetManagement\Controller\BackendController:viewBudgetingInvestment',
            'verb'       => RouteVerb::GET,
            'permission' => [
                'module' => BackendController::MODULE_NAME,
                'type'   => PermissionType::READ,
                'state'  => PermissionState::BUDGET,
            ],
        ],
    ],
    '^/controlling/budget/loan(\?.*$|$)' => [
        [
            'dest'       => '\Modules\BudgetManagement\Controller\BackendController:viewBudgetingLoan',
            'verb'       => RouteVerb::GET,
            'permission' => [
                'module' => BackendController::MODULE_NAME,
                'type'   => PermissionType::READ,
                'state'  => PermissionState::BUDGET,
            ],
        ],
    ],
    '^/controlling/budget/cashflow(\?.*$|$)' => [
        [
            'dest'       => '\Modules\BudgetManagement\Controller\BackendController:viewBudgetingCashFlow',
            'verb'       => RouteVerb::GET,
            'permission' => [
                'module' => BackendController::MODULE_NAME,
                'type'   => PermissionType::READ,
                'state'  => PermissionState::BUDGET,
            ],
        ],
    ],
    '^/controlling/budget/profitcenter(\?.*$|$)' => [
        [
            'dest'       => '\Modules\BudgetManagement\Controller\BackendController:viewBudgetingProfitCenter',
            'verb'       => RouteVerb::GET,
            'permission' => [
                'module' => BackendController::MODULE_NAME,
                'type'   => PermissionType::READ,
                'state'  => PermissionState::BUDGET,
            ],
        ],
    ],
    '^/controlling/budget/projects(\?.*$|$)' => [
        [
            'dest'       => '\Modules\BudgetManagement\Controller\BackendController:viewBudgetingProjects',
            'verb'       => RouteVerb::GET,
            'permission' => [
                'module' => BackendController::MODULE_NAME,
                'type'   => PermissionType::READ,
                'state'  => PermissionState::BUDGET,
            ],
        ],
    ],
    '^/controlling/budget/marketing(\?.*$|$)' => [
        [
            'dest'       => '\Modules\BudgetManagement\Controller\BackendController:viewBudgetingMarketing',
            'verb'       => RouteVerb::GET,
            'permission' => [
                'module' => BackendController::MODULE_NAME,
                'type'   => PermissionType::READ,
                'state'  => PermissionState::BUDGET,
            ],
        ],
    ],
    '^/controlling/budget/event(\?.*$|$)' => [
        [
            'dest'       => '\Modules\BudgetManagement\Controller\BackendController:viewBudgetingEvent',
            'verb'       => RouteVerb::GET,
            'permission' => [
                'module' => BackendController::MODULE_NAME,
                'type'   => PermissionType::READ,
                'state'  => PermissionState::BUDGET,
            ],
        ],
    ],
    '^/controlling/budget/leasing(\?.*$|$)' => [
        [
            'dest'       => '\Modules\BudgetManagement\Controller\BackendController:viewBudgetingLeasing',
            'verb'       => RouteVerb::GET,
            'permission' => [
                'module' => BackendController::MODULE_NAME,
                'type'   => PermissionType::READ,
                'state'  => PermissionState::BUDGET,
            ],
        ],
    ],
];
