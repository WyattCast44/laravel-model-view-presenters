<?php

namespace Wyattcast44\ModelViewPresenter;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Wyattcast44\ModelViewPresenter\ModelViewPresenter
 */
class ModelViewPresenterFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-model-view-presenters';
    }
}
