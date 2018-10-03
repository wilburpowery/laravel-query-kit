<?php

namespace Makeable\QueryKit\Constraints;

use Carbon\Carbon;

class WhereDate extends Where
{
    /**
     * @param $model
     * @return Carbon
     */
    protected function attribute($model)
    {
        $attribute = $model->{$this->property};
        $attribute = $attribute instanceof Carbon ? $attribute : Carbon::parse($model);

        return $attribute->toDateString();
    }
}