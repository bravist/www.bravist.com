<?php

namespace App\Http\ViewComposers\Admin;

use Illuminate\View\View;
use Illuminate\Auth\AuthManager;

class ProfileComposer
{
    protected $auth;

    /**
     * Construct
     *
     * @param AuthManager $auth
     */
    public function __construct(AuthManager $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Get login manager
     * @return Manager
     */
    public function getManager()
    {
        return $this->auth->guard('manager')->user();
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('manager', $this->getManager());
    }
}
