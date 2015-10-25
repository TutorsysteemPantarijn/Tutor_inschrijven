<?php

namespace Magister\Services\Foundation\Bootstrap;

use Magister\Magister;
use Magister\Models\Enrollment\Enrollment;
use Magister\Models\User;

/**
 * Class MakeReplacements.
 */
class MakeReplacements
{
    /**
     * Bootstrap the given application.
     *
     * @param \Magister\Magister $app
     *
     * @return void
     */
    public function bootstrap(Magister $app)
    {
        if ($app->auth->check()) {
            $app->config->replace('url', 'id', User::profile()->Id);

            $app->config->replace('url', 'enrollment', Enrollment::current()->Id);
        }
    }
}
