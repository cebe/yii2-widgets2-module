<?php

namespace hrzg\widget;

use dmstr\web\traits\AccessBehaviorTrait;

class Module extends \yii\base\Module
{
    use AccessBehaviorTrait;
    
    public $controllerNamespace = 'hrzg\widget\controllers';

    /**
     * RBAC full permission to widget module
     */
    const WIDGETS_ACCESS_PERMISSION = 'widgets';

    /**
     * RBAC permission name to widget test
     */
    const TEST_ACCESS_PERMISSION = 'widgets_test';

    /**
     * RBAC permission name to widget content
     */
    const CONTENT_ACCESS_PERMISSION = 'widgets_crud_widget';

    /**
     * RBAC permission name to widget template
     */
    const TEMPLATE_ACCESS_PERMISSION = 'widgets_crud_widget-template';

    /**
     * RBAC permission name to copy widgets
     */
    const COPY_ACCESS_PERMISSION = 'widgets_copy';

    /**
     * layout path for the /widgets/test playground actions
     *
     * @var string
     */
    public $playgroundLayout = '@app/views/layouts/main';

    /**
     * @param \yii\base\Action $action
     *
     * @return bool
     */
    public function beforeAction($action)
    {
        \Yii::$app->controller->view->params['breadcrumbs'][] = ['label' => 'Widgets module', 'url' => ['/widgets']];
        return parent::beforeAction($action);
    }
}
