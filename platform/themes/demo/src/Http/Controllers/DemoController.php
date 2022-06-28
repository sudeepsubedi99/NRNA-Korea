<?php

namespace Theme\Demo\Http\Controllers;

use Botble\Page\Models\Page;
use Botble\Project\Models\Project;
use Botble\Theme\Http\Controllers\PublicController;
use Request;

class DemoController extends PublicController
{
    /**
     * {@inheritDoc}
     */
    public function getIndex()
    {

        $projects = Project::all()->first();
        dd($projects);
        $pages = Page::find(1);
        $author = get_field($projects, 'name');
        // dd($author);

        // compact('projects', 'author')
        return parent::getIndex(compact('projects', 'author', 'pages'));
    }

    /**
     * {@inheritDoc}
     */
    public function getView($key = null)
    {
        return parent::getView($key);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteMap()
    {
        return parent::getSiteMap();
    }
}
