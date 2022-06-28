<?php

namespace Botble\Project\Providers;

use Botble\Project\Models\Project;
use Illuminate\Support\ServiceProvider;
use Botble\Project\Repositories\Caches\ProjectCacheDecorator;
use Botble\Project\Repositories\Eloquent\ProjectRepository;
use Botble\Project\Repositories\Interfaces\ProjectInterface;
use Illuminate\Support\Facades\Event;
use Botble\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Routing\Events\RouteMatched;

class ProjectServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register()
    {
        $this->app->bind(ProjectInterface::class, function () {
            return new ProjectCacheDecorator(new ProjectRepository(new Project));
        });

        $this->setNamespace('plugins/project')->loadHelpers();
    }

    public function boot()
    {
        $this
            ->loadAndPublishConfigurations(['permissions'])
            ->loadMigrations()
            ->loadAndPublishTranslations()
            ->loadAndPublishViews()
            ->loadRoutes(['web']);

        if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
            if (defined('LANGUAGE_ADVANCED_MODULE_SCREEN_NAME')) {
                // Use language v2
                \Botble\LanguageAdvanced\Supports\LanguageAdvancedManager::registerModule(Project::class, [
                    'name',
                ]);
            } else {
                // Use language v1
                $this->app->booted(function () {
                    \Language::registerModule([Project::class]);
                });
            }
        }

        Event::listen(RouteMatched::class, function () {
            dashboard_menu()->registerItem([
                'id'          => 'cms-plugins-project',
                'priority'    => 5,
                'parent_id'   => null,
                'name'        => 'plugins/project::project.name',
                'icon'        => 'fa fa-list',
                'url'         => route('project.index'),
                'permissions' => ['project.index'],
            ]);
        });
        $this->app->booted(function () {
            if (defined('CUSTOM_FIELD_MODULE_SCREEN_NAME')) {
                \CustomField::registerModule(Project::class)
                    ->registerRule('basic', __('Projects'), Project::class, function () {
                        return $this->app->make(ProjectInterface::class)->pluck('name', 'id');
                    })
                    ->expandRule('other', 'Model', 'model_name', function () {
                        return [
                            Project::class => __('Project'),
                        ];
                    });
            }
        });
    }
}
