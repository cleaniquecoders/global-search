<?php

use Laravel\Scout\Searchable;

if (! function_exists('search')) {
    function search(string $type, string $keyword, bool $paginate = false)
    {
        abort_if(
            ! class_exists($type),
            "Class $type not exists."
        );

        throw_if(
            ! in_array(
                Searchable::class,
                class_uses_recursive($type)
            )
        );

        $class = $type;

        $query = $class::search($keyword);

        return $paginate
            ? $query->paginate()
            : $query->first();
    }
}
