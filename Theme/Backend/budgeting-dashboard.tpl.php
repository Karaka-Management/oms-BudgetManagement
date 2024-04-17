<?php
/**
 * Jingga
 *
 * PHP Version 8.2
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
<style>
    div {
        box-sizing: border-box;
    }

    input:checked+div > div > .maximize {
        display: none;
    }

    input+div > div > .minimize {
        display: none;
    }

    input:checked+div > div > .minimize {
        display: inline-block;
    }

    .title-cell {
        padding: 1px;
        text-align: center;
        width: 95px;
    }

    .category {
        background: #fff;
        border-bottom: 1px solid #000 !important;
    }

    .subtotal {
        background: #ffa82e;
        border-bottom: 1px solid #000 !important;
    }

    .subtotal .total-col {
        background: #ffa82e;
    }

    .total {
        background: #ffa82e;
        border-bottom: 1px solid #000 !important;
    }

    .total .total-col {
        background: #ffa82e;
    }

    .total-col {
        background: #cbfbcb;
    }

    .data-row {
        display: inline-flex;
        flex-direction: row;
        border-bottom: 1px solid #fff;
        align-items: stretch;
        min-height: 34px;
    }

    .data-row > div {
        padding: .2rem 3px .2rem 3px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .account:nth-child(2n) {
        background: #f9f9f9;
    }

    .account:nth-child(2n + 1) {
        background: #efefef;
    }

    .data-row > div:nth-child(n+3) {
        width: 95px;
        justify-content: start;
    }

    .expand-col {
        width: 30px;
        min-width: 30px;
        padding: 1px;
    }

    .name-col {
        width: 200px;
        min-width: 200px;
        padding-left: 0px;
        border-right: 1px solid #000;
        overflow: clip;
        align-items: start !important;
    }

    .detail-name {
        align-self:first baseline; flex: 1;
    }

    .detail-data div {
        height: 30px; display: flex; align-items: center;
    }
</style>
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
            <div class="row sticky" style="font-size: 0.8rem; display: flex;">
                <div style="display: flex; flex-direction: row; align-items: center; color: #fff; background: #3697db; padding: .5rem 0 .5rem 0">
                    <div style="width: 30px; min-width: 30px; text-align: center;"></div>
                    <div class="name-col"><?= $this->getHtml('Category'); ?></div>
                    <div class="title-cell">PY-3</div>
                    <div class="title-cell">PY-2</div>
                    <div class="title-cell">PY-1</div>
                    <div class="title-cell">C</div>
                    <div class="title-cell">B</div>
                    <div class="title-cell">FC</div>
                    <div class="title-cell">B+1</div>
                    <div class="title-cell">B+2</div>
                    <div class="title-cell">B+3</div>
                    <div class="title-cell">B+4</div>
                    <div class="title-cell">B+5</div>
                    <div class="title-cell">B+6</div>
                    <div class="title-cell">B+7</div>
                    <div class="title-cell">B+8</div>
                    <div class="title-cell">B+9</div>
                    <div class="title-cell">B+10</div>
                </div>
            </div>

            <?php foreach ($this->data['segmentation']['segment']->defaults as $segment) : ?>
            <div class="row">
                <div class="col-xs-12">
                    <input id="iSegment<?= $segment->id; ?>-expand" type="checkbox" class="vh">
                    <div class="data-row">
                        <div class="expand-col">
                            <label for="iSegment<?= $segment->id; ?>-expand" class="btn maximize"><i class="g-icon">add_circle</i></label>
                            <label for="iSegment<?= $segment->id; ?>-expand" class="btn minimize"><i class="g-icon">do_not_disturb_on</i></label>
                        </div>
                        <div class="name-col"><?= $this->printHtml($segment->l11n); ?></div>
                        <div><input type="number" step="any" disabled></div>
                        <div><input type="number" step="any" disabled>+0.00%</div>
                        <div><input type="number" step="any" disabled>+0.00%</div>
                        <div><input type="number" step="any" disabled>+0.00%</div>
                        <div><input type="number" step="any" disabled>+0.00%</div>
                        <div><input type="number" step="any">+0.00%</div>
                        <div><input type="number" step="any">+0.00%</div>
                        <div><input type="number" step="any">+0.00%</div>
                        <div><input type="number" step="any">+0.00%</div>
                        <div><input type="number" step="any">+0.00%</div>
                        <div><input type="number" step="any">+0.00%</div>
                        <div><input type="number" step="any">+0.00%</div>
                        <div><input type="number" step="any">+0.00%</div>
                        <div><input type="number" step="any">+0.00%</div>
                        <div><input type="number" step="any">+0.00%</div>
                        <div><input type="number" step="any">+0.00%</div>
                    </div>
                    <div class="checked-visibility">
                        <?php foreach ($this->data['segmentation']['section']->defaults as $section) : ?>
                        <input id="iSection<?= $section->id; ?>-expand" type="checkbox" class="vh">
                        <div class="data-row" style="padding-left: 10px;">
                            <div class="expand-col">
                                <label for="iSection<?= $section->id; ?>-expand" class="btn maximize"><i class="g-icon">add_circle</i></label>
                                <label for="iSection<?= $section->id; ?>-expand" class="btn minimize"><i class="g-icon">do_not_disturb_on</i></label>
                            </div>
                            <div class="name-col" style="min-width: 190px; width: 190px;"><?= $this->printHtml($section->l11n); ?></div>
                            <div><input type="number" step="any" disabled></div>
                            <div><input type="number" step="any" disabled>+0.00%</div>
                            <div><input type="number" step="any" disabled>+0.00%</div>
                            <div><input type="number" step="any" disabled>+0.00%</div>
                            <div><input type="number" step="any" disabled>+0.00%</div>
                            <div><input type="number" step="any">+0.00%</div>
                            <div><input type="number" step="any">+0.00%</div>
                            <div><input type="number" step="any">+0.00%</div>
                            <div><input type="number" step="any">+0.00%</div>
                            <div><input type="number" step="any">+0.00%</div>
                            <div><input type="number" step="any">+0.00%</div>
                            <div><input type="number" step="any">+0.00%</div>
                            <div><input type="number" step="any">+0.00%</div>
                            <div><input type="number" step="any">+0.00%</div>
                            <div><input type="number" step="any">+0.00%</div>
                            <div><input type="number" step="any">+0.00%</div>
                        </div>
                        <div class="checked-visibility">
                            <?php foreach ($this->data['segmentation']['sales_group']->defaults as $salesgroup) : ?>
                            <input id="iSalesGroup<?= $salesgroup->id; ?>-expand" type="checkbox" class="vh">
                            <div class="data-row" style="padding-left: 20px;">
                                <div class="expand-col">
                                    <label for="iSalesGroup<?= $salesgroup->id; ?>-expand" class="btn maximize"><i class="g-icon">add_circle</i></label>
                                    <label for="iSalesGroup<?= $salesgroup->id; ?>-expand" class="btn minimize"><i class="g-icon">do_not_disturb_on</i></label>
                                </div>
                                <div class="name-col" style="min-width: 180px; width: 180px;"><?= $this->printHtml($salesgroup->l11n); ?></div>
                                <div><input type="number" step="any" disabled></div>
                                <div><input type="number" step="any" disabled>+0.00%</div>
                                <div><input type="number" step="any" disabled>+0.00%</div>
                                <div><input type="number" step="any" disabled>+0.00%</div>
                                <div><input type="number" step="any" disabled>+0.00%</div>
                                <div><input type="number" step="any">+0.00%</div>
                                <div><input type="number" step="any">+0.00%</div>
                                <div><input type="number" step="any">+0.00%</div>
                                <div><input type="number" step="any">+0.00%</div>
                                <div><input type="number" step="any">+0.00%</div>
                                <div><input type="number" step="any">+0.00%</div>
                                <div><input type="number" step="any">+0.00%</div>
                                <div><input type="number" step="any">+0.00%</div>
                                <div><input type="number" step="any">+0.00%</div>
                                <div><input type="number" step="any">+0.00%</div>
                                <div><input type="number" step="any">+0.00%</div>
                            </div>
                            <div class="checked-visibility">
                                <?php foreach ([]/*$this->data['segmentation']['product_group']->defaults*/ as $productgroup) : ?>
                                <input id="iProductGroup<?= $productgroup->id; ?>-expand" type="checkbox" class="vh">
                                <div class="data-row" style="padding-left: 30px;">
                                    <div class="expand-col">
                                        <label for="iProductGroup<?= $productgroup->id; ?>-expand" class="btn maximize"><i class="g-icon">add_circle</i></label>
                                        <label for="iProductGroup<?= $productgroup->id; ?>-expand" class="btn minimize"><i class="g-icon">do_not_disturb_on</i></label>
                                    </div>
                                    <div class="name-col" style="min-width: 170px; width: 170px;">
                                        <div class="simple-flex wf-100">
                                            <div class="detail-name"><?= $this->printHtml($productgroup->l11n); ?></div>
                                            <div class="detail-data">
                                                <div><?= $this->getHtml('A'); ?></div>
                                                <div><?= $this->getHtml('Q'); ?></div>
                                                <div><?= $this->getHtml('P'); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div><input type="number" step="any" disabled><input type="number" step="any" disabled><input type="number" step="any" disabled></div>
                                    <div><input type="number" step="any" disabled><input type="number" step="any" disabled><input type="number" step="any" disabled>+0.00%</div>
                                    <div><input type="number" step="any" disabled><input type="number" step="any" disabled><input type="number" step="any" disabled>+0.00%</div>
                                    <div><input type="number" step="any" disabled><input type="number" step="any" disabled><input type="number" step="any" disabled>+0.00%</div>
                                    <div><input type="number" step="any" disabled><input type="number" step="any" disabled><input type="number" step="any" disabled>+0.00%</div>
                                    <div><input type="number" step="any"><input type="number" step="any"><input type="number" step="any">+0.00%</div>
                                    <div><input type="number" step="any"><input type="number" step="any"><input type="number" step="any">+0.00%</div>
                                    <div><input type="number" step="any"><input type="number" step="any"><input type="number" step="any">+0.00%</div>
                                    <div><input type="number" step="any"><input type="number" step="any"><input type="number" step="any">+0.00%</div>
                                    <div><input type="number" step="any"><input type="number" step="any"><input type="number" step="any">+0.00%</div>
                                    <div><input type="number" step="any"><input type="number" step="any"><input type="number" step="any">+0.00%</div>
                                    <div><input type="number" step="any"><input type="number" step="any"><input type="number" step="any">+0.00%</div>
                                    <div><input type="number" step="any"><input type="number" step="any"><input type="number" step="any">+0.00%</div>
                                    <div><input type="number" step="any"><input type="number" step="any"><input type="number" step="any">+0.00%</div>
                                    <div><input type="number" step="any"><input type="number" step="any"><input type="number" step="any">+0.00%</div>
                                    <div><input type="number" step="any"><input type="number" step="any"><input type="number" step="any">+0.00%</div>
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

            <div class="row sticky" style="font-size: 0.8rem; display: flex;">
                <div class="data-row total" style="display: flex; flex-direction: row; align-items: center; padding: .5rem 0 .5rem 0">
                    <div style="width: 30px; min-width: 30px; text-align: center;"></div>
                    <div class="name-col"><?= $this->getHtml('Total'); ?></div>
                    <div>123,456.00</div>
                    <div>123,456.00</div>
                    <div>123,456.00</div>
                    <div>123,456.00</div>
                    <div>123,456.00</div>
                    <div>123,456.00</div>
                    <div>123,456.00</div>
                    <div>123,456.00</div>
                    <div>123,456.00</div>
                    <div>123,456.00</div>
                    <div>123,456.00</div>
                    <div>123,456.00</div>
                    <div>123,456.00</div>
                    <div>123,456.00</div>
                    <div>123,456.00</div>
                    <div>123,456.00</div>
                </div>
            </div>

            <div class="row sticky" style="font-size: 0.8rem; display: flex;">
                <div class="data-row" style="display: flex; flex-direction: row; align-items: center; padding: .5rem 0 .5rem 0">
                    <div style="width: 30px; min-width: 30px; text-align: center;"></div>
                    <div class="name-col"></div>
                    <div></div>
                    <div>+0.00%</div>
                    <div>+0.00%</div>
                    <div>+0.00%</div>
                    <div>+0.00%</div>
                    <div>+0.00%</div>
                    <div>+0.00%</div>
                    <div>+0.00%</div>
                    <div>+0.00%</div>
                    <div>+0.00%</div>
                    <div>+0.00%</div>
                    <div>+0.00%</div>
                    <div>+0.00%</div>
                    <div>+0.00%</div>
                    <div>+0.00%</div>
                    <div>+0.00%</div>
                </div>
            </div>
        </div>

        <input type="radio" id="c-tab-2" name="tabular-2"<?= $this->request->uri->fragment === 'c-tab-2' ? ' checked' : ''; ?>>
        <div class="tab">
            <div class="row">
                <div class="col-xs-12">
                    <section class="portlet">
                        <div class="portlet-body">
                            <img height="100%" width="100%" src="Web/Backend/img/under_construction.svg">
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <input type="radio" id="c-tab-3" name="tabular-2"<?= $this->request->uri->fragment === 'c-tab-3' ? ' checked' : ''; ?>>
        <div class="tab">
            <div class="row">
                <div class="col-xs-12">
                    <section class="portlet">
                        <div class="portlet-body">
                            <img height="100%" width="100%" src="Web/Backend/img/under_construction.svg">
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>