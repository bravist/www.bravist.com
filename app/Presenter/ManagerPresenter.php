<?php
namespace App\Presenter;

use Laracasts\Presenter\Presenter;

class ManagerPresenter extends Presenter
{

    /**
     * Show roles
     * @return void
     */
    public function displayRoles()
    {
        $show = $this->roles->map(function ($role) {
            return '<button type="button" class="btn bg-purple margin-r-5 btn-xs">' . $role->display_name . '</button>';
        });
        return implode('', $show->toArray());

        // return array_map(function ($item) {
        // 	return '<button type="button" class="btn bg-purple margin">' . $item . '</button>';
        // }, $this->roles->pluck('display_name')->all());
    }
}
