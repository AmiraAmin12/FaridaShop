<?php
 
namespace App\View\Composers;

use App\Models\category;
use App\Repositories\UserRepository;
use Illuminate\View\View;
 
class WebsiteHeaderComposer
{
    /**
     * Create a new profile composer.
     * 
     */
    protected $cats;
    public function __construct() {
        $this->cats=category::get();
    }
 
    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $view->with('cats', $this->cats);
    }
}