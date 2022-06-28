<?php

namespace Botble\Project;

use Illuminate\Support\Facades\Schema;
use Botble\PluginManagement\Abstracts\PluginOperationAbstract;

class Plugin extends PluginOperationAbstract
{
    public static function remove()
    {
        Schema::dropIfExists('projects');
        Schema::dropIfExists('projects_translations');
    }
}
