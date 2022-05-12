<?php

namespace App\Console\Commands\Traits;

use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Permission;
use TCG\Voyager\Models\Role;

trait VoyagerTable
{
    public function getPrefixClassName()
    {
        return 'Latest';
    }


    public function getTables()
    {
        return [
            (new DataType())->getTable(),
            (new DataRow())->getTable(),
            (new Menu())->getTable(),
            (new MenuItem())->getTable(),
            (new Role())->getTable(),
            (new Permission())->getTable(),
            'permission_role'
        ];
    }
}