<?php


namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Model\Category;

class MenuComposer
{
    /**
     * @var Category
     */
    protected $category;

    /**
     * MenuComposer constructor.
     * @param Category $category
     */
    public function __construct(Category $category)
    {
        // Dependencies automatically resolved by service container...
        $this->category = $category;
    }

    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $view->with('menu', $this->category->all());
    }
}
