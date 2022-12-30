<?php

use Laravel\Scout\Searchable;

if (! function_exists('search')) {
    function search(string $model, string $keyword, bool $paginate = false)
    {
        abort_if(
            ! class_exists($model),
            "Class model $model not exists."
        );

        throw_if(
            ! in_array(
                Searchable::class,
                class_uses_recursive($model)
            )
        );

        $class = $model;

        $query = $class::search($keyword);

        return $paginate
            ? $query->paginate()
            : $query->first();
    }
}
