<?php

namespace App\Admin\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Models\Product;

class ProductsWidget extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * The widget's run method.
     *
     * @return string
     */
    public function run()
    {
        $count = Product::count(); // Получаем количество товаров

        return view('widgets.products_widget', [
            'count' => $count,
        ]);
    }

    /**
     * Determine if the widget should be displayed on the dashboard.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return true; // Условие для отображения виджета
    }

}
