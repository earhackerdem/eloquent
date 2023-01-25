<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\{Builder,Model,Scope};

class NotDeparted implements Scope
{
    public function apply(Builder $builder,Model $model)
    {
        $builder->where('departed',true);
    }
}
