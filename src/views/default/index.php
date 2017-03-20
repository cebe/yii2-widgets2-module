<?php
/**
 * @var \yii\web\View $this
 */
use hrzg\widget\models\crud\search\WidgetTemplate;
use hrzg\widget\models\crud\WidgetContent;
use hrzg\widget\Module;
use insolita\wgadminlte\Box;
use insolita\wgadminlte\InfoBox;
use rmrevin\yii\fontawesome\FA;
use yii\helpers\Html;

$this->title = \Yii::t('widgets', 'Widget Manager');
?>
<?php Box::begin(['title' => \Yii::t('widgets', 'General')]) ?>
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-3">
            <?php $infoBoxHtml = InfoBox::widget(
                [
                    'text'  => '<div class="text-center"><h3 style="white-space: normal;">' . \Yii::t('widgets', 'New')
                        . '</h3>Widget</div>',
                    'boxBg' => InfoBox::TYPE_AQUA,
                    'icon'  => FA::$cssPrefix . ' ' . FA::$cssPrefix . '-plus'
                ]
            );
            echo Html::a($infoBoxHtml, ['/widgets/crud/widget/create']);
            ?>
        </div>
        <div class="col-xs-12 col-sm-8 col-md-3">
            <?php $infoBoxHtml = InfoBox::widget(
                [
                    'text'  => '<div class="text-center">
                        <h3 style="white-space: normal;">' . \Yii::t('widgets', 'List') . '</h3>
                        ' . WidgetContent::find()->count() . ' Widgets</div>',
                    'boxBg' => InfoBox::TYPE_AQUA,
                    'icon'  => FA::$cssPrefix . ' ' . FA::$cssPrefix . '-list'
                ]
            );
            echo Html::a($infoBoxHtml, ['/widgets/crud/widget/index']);
            ?>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-3">
            <?php $infoBoxHtml = InfoBox::widget(
                [
                    'text'  => '<div class="text-center"><h3 style="white-space: normal;">'
                        . \Yii::t('widgets', 'New') . '</h3>Template</div>',
                    'boxBg' => InfoBox::TYPE_PURPLE,
                    'icon'  => FA::$cssPrefix . ' ' . FA::$cssPrefix . '-plus'
                ]
            );
            echo Html::a($infoBoxHtml, ['/widgets/crud/widget-template/create']);
            ?>
        </div>
        <div class="col-xs-12 col-sm-8 col-md-3">
            <?php $infoBoxHtml = InfoBox::widget(
                [
                    'text'  => '<div class="text-center">
                        <h3 style="white-space: normal;">' . \Yii::t('widgets', 'List') . '</h3>
                        ' . WidgetTemplate::find()->count() . ' Templates</div>',
                    'boxBg' => InfoBox::TYPE_PURPLE,
                    'icon'  => FA::$cssPrefix . ' ' . FA::$cssPrefix . '-list'
                ]
            );
            echo Html::a($infoBoxHtml, ['/widgets/crud/widget-template/index']);
            ?>
        </div>
    </div>
<?php Box::end() ?>

<?php Box::begin(['title' => \Yii::t('widgets', 'Extras')]) ?>
    <div class="row">
        <?php if (\Yii::$app->user->can(Module::COPY_ACCESS_PERMISSION)) : ?>
            <div class="col-xs-12 col-sm-4 col-md-3">
                <?php $infoBoxHtml = InfoBox::widget(
                    [
                        'text'  => '<div class="text-center"><h3 style="white-space: normal;">'
                            . \Yii::t('widgets', 'Copy') . '</h3>Widgets</div>',
                        'boxBg' => InfoBox::TYPE_GREEN,
                        'icon'  => FA::$cssPrefix . ' ' . FA::$cssPrefix . '-copy'
                    ]
                );
                echo Html::a($infoBoxHtml, ['/widgets/copy/language']);
                ?>
            </div>
        <?php endif; ?>
        <div class="col-xs-12 col-sm-4 col-md-3">
            <?php $infoBoxHtml = InfoBox::widget(
                [
                    'text'  => '<div class="text-center"><h3 style="white-space: normal;">'
                        . \Yii::t('widgets', 'Settings') . '</h3>Module</div>',
                    'boxBg' => InfoBox::TYPE_GRAY,
                    'icon'  => FA::$cssPrefix . ' ' . FA::$cssPrefix . '-cogs'
                ]
            );
            echo Html::a($infoBoxHtml, ['/settings', 'SettingSearch' => ['section' => 'widgets']]);
            ?>
        </div>
    </div>
<?php Box::end() ?>

<?php Box::begin(['title' => \Yii::t('widgets', 'Playground')]) ?>
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-3">
            <?php $infoBoxHtml = InfoBox::widget(
                [
                    'text'  => '<div class="text-center"><h3 style="white-space: normal;">'
                        . \Yii::t('widgets', 'Test page') . '</h3>Index</div>',
                    'boxBg' => InfoBox::TYPE_LBLUE,
                    'icon'  => FA::$cssPrefix . ' ' . FA::$cssPrefix . '-cubes'
                ]
            );
            echo Html::a($infoBoxHtml, ['/widgets/test/index'], ['target' => '_blank']);
            ?>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-3">
            <?php $infoBoxHtml = InfoBox::widget(
                [
                    'text'  => '<div class="text-center"><h3 style="white-space: normal;">'
                        . \Yii::t('widgets', 'Test page') . '</h3>with parameters</div>',
                    'boxBg' => InfoBox::TYPE_LBLUE,
                    'icon'  => FA::$cssPrefix . ' ' . FA::$cssPrefix . '-cubes'
                ]
            );
            echo Html::a($infoBoxHtml, ['/widgets/test/with-param', 'pageId' => 'page-1'], ['target' => '_blank']);
            ?>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-3">
            <?php $infoBoxHtml = InfoBox::widget(
                [
                    'text'  => '<div class="text-center"><h3 style="white-space: normal;">'
                        . \Yii::t('widgets', 'Test page 2') . '</h3>with parameters</div>',
                    'boxBg' => InfoBox::TYPE_LBLUE,
                    'icon'  => FA::$cssPrefix . ' ' . FA::$cssPrefix . '-cubes'
                ]
            );
            echo Html::a($infoBoxHtml, ['/widgets/test/with-param', 'pageId' => 'page-2'], ['target' => '_blank']);
            ?>
        </div>
    </div>
<?php Box::end(); ?>

<?php Box::begin(['title' => \Yii::t('widgets', 'Documentation')]) ?>
<?= Html::a(
    'Online documentation',
    'https://github.com/dmstr/yii2-widgets2-module',
    ['class' => 'btn btn-info', 'target' => '_blank']
) ?>
<?php Box::end() ?>
