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

echo $this->data['nav']->render();
?>
<div class="tabview tab-2">
    <div class="box">
        <ul class="tab-links">
            <li><label for="c-tab-1"><?= $this->getHtml('Segments'); ?></label>
            <li><label for="c-tab-2"><?= $this->getHtml('Customers'); ?></label>
            <li><label for="c-tab-3"><?= $this->getHtml('Monthly'); ?></label>
        </ul>
    </div>
    <div class="tab-content">
        <input type="radio" id="c-tab-1" name="tabular-2"<?= $this->request->uri->fragment === 'c-tab-1' ? ' checked' : ''; ?>>
        <div class="tab">
            <div class="row">
                <div class="col-xs-12">
                    <div style="background: #ff00ff99;">
                        <div style="display: flex; flex-direction: row; align-items: center;">
                            <div style="box-sizing: border-box; width: 150px; text-align: center;">Category</div>
                            <div style="flex: 1; text-align: center;">PY-3</div>
                            <div style="flex: 1; text-align: center;">PY-2</div>
                            <div style="flex: 1; text-align: center;">PY-1</div>
                            <div style="flex: 1; text-align: center;">C</div>
                            <div style="flex: 1; text-align: center;">B</div>
                            <div style="flex: 1; text-align: center;">FC</div>
                            <div style="flex: 1; text-align: center;">B+1</div>
                            <div style="flex: 1; text-align: center;">B+2</div>
                            <div style="flex: 1; text-align: center;">B+3</div>
                            <div style="flex: 1; text-align: center;">B+4</div>
                            <div style="flex: 1; text-align: center;">B+5</div>
                        </div>
                    </div>
                </div>
            </div>

            <?php foreach ($this->data['segmentation']['segment']->defaults as $segment) : ?>
            <div class="row">
                <div class="col-xs-12">
                    <div style="display: flex; flex-direction: row; align-items: center; background: #ff000099;">
                        <div style="box-sizing: border-box; width: 150px; padding-left: 0px;"><label for="iSegment<?= $segment->id; ?>-expand" class="btn"><i class="g-icon">add_circle</i><?= $this->printHtml($segment->l11n); ?></label></div>
                        <div style="flex: 1; padding: 1px;"><input type="number" disabled> +0.00%</div>
                        <div style="flex: 1; padding: 1px;"><input type="number" disabled> +0.00%</div>
                        <div style="flex: 1; padding: 1px;"><input type="number" disabled> +0.00%</div>
                        <div style="flex: 1; padding: 1px;"><input type="number" disabled> +0.00%</div>
                        <div style="flex: 1; padding: 1px;"><input type="number" disabled> +0.00%</div>
                        <div style="flex: 1; padding: 1px;"><input type="number"> +0.00%</div>
                        <div style="flex: 1; padding: 1px;"><input type="number"> +0.00%</div>
                        <div style="flex: 1; padding: 1px;"><input type="number"> +0.00%</div>
                        <div style="flex: 1; padding: 1px;"><input type="number"> +0.00%</div>
                        <div style="flex: 1; padding: 1px;"><input type="number"> +0.00%</div>
                        <div style="flex: 1; padding: 1px;"><input type="number"> +0.00%</div>
                    </div>
                    <input id="iSegment<?= $segment->id; ?>-expand" type="checkbox" class="hidden">
                    <div class="checked-visibility">
                        <?php foreach ($this->data['segmentation']['section']->defaults as $section) : ?>
                        <div style="display: flex; flex-direction: row; align-items: center; background: #00ff0099;">
                            <div style="box-sizing: border-box; width: 150px; padding-left: 10px;"><label for="iSection<?= $section->id; ?>-expand" class="btn"><i class="g-icon">add_circle</i><?= $this->printHtml($section->l11n); ?></label></div>
                            <div style="flex: 1; padding: 1px;"><input type="number" disabled> +0.00%</div>
                            <div style="flex: 1; padding: 1px;"><input type="number" disabled> +0.00%</div>
                            <div style="flex: 1; padding: 1px;"><input type="number" disabled> +0.00%</div>
                            <div style="flex: 1; padding: 1px;"><input type="number" disabled> +0.00%</div>
                            <div style="flex: 1; padding: 1px;"><input type="number" disabled> +0.00%</div>
                            <div style="flex: 1; padding: 1px;"><input type="number"> +0.00%</div>
                            <div style="flex: 1; padding: 1px;"><input type="number"> +0.00%</div>
                            <div style="flex: 1; padding: 1px;"><input type="number"> +0.00%</div>
                            <div style="flex: 1; padding: 1px;"><input type="number"> +0.00%</div>
                            <div style="flex: 1; padding: 1px;"><input type="number"> +0.00%</div>
                            <div style="flex: 1; padding: 1px;"><input type="number"> +0.00%</div>
                        </div>
                        <input id="iSection<?= $section->id; ?>-expand" type="checkbox" class="hidden">
                        <div class="checked-visibility">
                            <?php foreach ($this->data['segmentation']['sales_group']->defaults as $salesgroup) : ?>
                            <div style="display: flex; flex-direction: row; align-items: center; background: #0000ff99;">
                                <div style="box-sizing: border-box; width: 150px; padding-left: 20px;"><label for="iSalesGroup<?= $salesgroup->id; ?>-expand" class="btn"><i class="g-icon">add_circle</i><?= $this->printHtml($salesgroup->l11n); ?></label></div>
                                <div style="flex: 1; padding: 1px;"><input type="number" disabled> +0.00%</div>
                                <div style="flex: 1; padding: 1px;"><input type="number" disabled> +0.00%</div>
                                <div style="flex: 1; padding: 1px;"><input type="number" disabled> +0.00%</div>
                                <div style="flex: 1; padding: 1px;"><input type="number" disabled> +0.00%</div>
                                <div style="flex: 1; padding: 1px;"><input type="number" disabled> +0.00%</div>
                                <div style="flex: 1; padding: 1px;"><input type="number"> +0.00%</div>
                                <div style="flex: 1; padding: 1px;"><input type="number"> +0.00%</div>
                                <div style="flex: 1; padding: 1px;"><input type="number"> +0.00%</div>
                                <div style="flex: 1; padding: 1px;"><input type="number"> +0.00%</div>
                                <div style="flex: 1; padding: 1px;"><input type="number"> +0.00%</div>
                                <div style="flex: 1; padding: 1px;"><input type="number"> +0.00%</div>
                            </div>
                            <input id="iSalesGroup<?= $salesgroup->id; ?>-expand" type="checkbox" class="hidden">
                            <div class="checked-visibility">
                                <?php foreach ($this->data['segmentation']['product_group']->defaults as $productgroup) : ?>
                                <div style="display: flex; flex-direction: row; align-items: center; background: #ffff0099;">
                                    <div style="box-sizing: border-box; width: 150px; padding-left: 30px;"><label for="iProductGroup<?= $productgroup->id; ?>-expand" class="btn"><i class="g-icon">add_circle</i><?= $this->printHtml($productgroup->l11n); ?></label></div>
                                    <div style="flex: 1; padding: 1px;"><input type="number" disabled> <input type="number" disabled> <input type="number" disabled> +0.00%</div>
                                    <div style="flex: 1; padding: 1px;"><input type="number" disabled> <input type="number" disabled> <input type="number" disabled> +0.00%</div>
                                    <div style="flex: 1; padding: 1px;"><input type="number" disabled> <input type="number" disabled> <input type="number" disabled> +0.00%</div>
                                    <div style="flex: 1; padding: 1px;"><input type="number" disabled> <input type="number" disabled> <input type="number" disabled> +0.00%</div>
                                    <div style="flex: 1; padding: 1px;"><input type="number" disabled> <input type="number" disabled> <input type="number" disabled> +0.00%</div>
                                    <div style="flex: 1; padding: 1px;"><input type="number"> <input type="number"> <input type="number"> +0.00%</div>
                                    <div style="flex: 1; padding: 1px;"><input type="number"> <input type="number"> <input type="number"> +0.00%</div>
                                    <div style="flex: 1; padding: 1px;"><input type="number"> <input type="number"> <input type="number"> +0.00%</div>
                                    <div style="flex: 1; padding: 1px;"><input type="number"> <input type="number"> <input type="number"> +0.00%</div>
                                    <div style="flex: 1; padding: 1px;"><input type="number"> <input type="number"> <input type="number"> +0.00%</div>
                                    <div style="flex: 1; padding: 1px;"><input type="number"> <input type="number"> <input type="number"> +0.00%</div>
                                </div>
                                <input id="iProductGroup<?= $productgroup->id; ?>-expand" type="checkbox" class="hidden">
                                <div class="checked-visibility">
                                    <?php foreach ($this->data['items'] ?? [] as $item) : ?>
                                    <div style="display: flex; flex-direction: row; align-items: center; background: #ffffff99;">
                                        <div style="box-sizing: border-box; width: 150px; padding-left: 40px;"><?= $this->printHtml($item->l11n); ?></div>
                                        <div style="flex: 1; padding: 1px;"><input type="number" disabled> <input type="number" disabled> <input type="number" disabled> +0.00%</div>
                                        <div style="flex: 1; padding: 1px;"><input type="number" disabled> <input type="number" disabled> <input type="number" disabled> +0.00%</div>
                                        <div style="flex: 1; padding: 1px;"><input type="number" disabled> <input type="number" disabled> <input type="number" disabled> +0.00%</div>
                                        <div style="flex: 1; padding: 1px;"><input type="number" disabled> <input type="number" disabled> <input type="number" disabled> +0.00%</div>
                                        <div style="flex: 1; padding: 1px;"><input type="number" disabled> <input type="number" disabled> <input type="number" disabled> +0.00%</div>
                                        <div style="flex: 1; padding: 1px;"><input type="number"> <input type="number"> <input type="number"> +0.00%</div>
                                        <div style="flex: 1; padding: 1px;"><input type="number"> <input type="number"> <input type="number"> +0.00%</div>
                                        <div style="flex: 1; padding: 1px;"><input type="number"> <input type="number"> <input type="number"> +0.00%</div>
                                        <div style="flex: 1; padding: 1px;"><input type="number"> <input type="number"> <input type="number"> +0.00%</div>
                                        <div style="flex: 1; padding: 1px;"><input type="number"> <input type="number"> <input type="number"> +0.00%</div>
                                        <div style="flex: 1; padding: 1px;"><input type="number"> <input type="number"> <input type="number"> +0.00%</div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <input type="radio" id="c-tab-2" name="tabular-2"<?= $this->request->uri->fragment === 'c-tab-2' ? ' checked' : ''; ?>>
        <div class="tab">
            <div class="row">
            </div>
        </div>

        <input type="radio" id="c-tab-3" name="tabular-2"<?= $this->request->uri->fragment === 'c-tab-3' ? ' checked' : ''; ?>>
        <div class="tab">
            <div class="row">
            </div>
        </div>
    </div>
</div>