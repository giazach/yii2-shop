<?php
/**
 * @author Albert Gainutdinov <xalbert.einsteinx@gmail.com>
 */

namespace albertgeeca\shop\widgets;
use yii\base\Widget;


class ProductFilter extends Widget

{
    public $category;
    public $filters;
    public $searchModel;

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub

    }

    public function run()
    {
        parent::run(); // TODO: Change the autogenerated stub

        if (!empty($this->category) && !empty($this->filters) && !empty($this->searchModel)) {
            return $this->render('product-filter', ['category' => $this->category, 'filters' => $this->filters, 'searchModel' => $this->searchModel]);
        }
        else return false;
    }
}