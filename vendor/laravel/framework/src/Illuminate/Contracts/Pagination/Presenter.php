<?php

namespace Illuminate\Contracts\Pagination;

interface Presenter
{
    /**
     * Render the given paginator.
     *
     * @return \Illuminate\Contracts\Support\Htmlable|string
     */
    public function render();

    /**
     * Determine if the underlying paginator being presented has pages to krpano.
     *
     * @return bool
     */
    public function hasPages();
}
