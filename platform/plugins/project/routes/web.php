<?php

use Botble\Project\Models\Project;

Route::group(['namespace' => 'Botble\Project\Http\Controllers', 'middleware' => ['web', 'core']], function () {

    Route::group(['prefix' => BaseHelper::getAdminPrefix(), 'middleware' => 'auth'], function () {

        Route::group(['prefix' => 'projects', 'as' => 'project.'], function () {
            Route::resource('', 'ProjectController')->parameters(['' => 'project']);
            Route::delete('items/destroy', [
                'as'         => 'deletes',
                'uses'       => 'ProjectController@deletes',
                'permission' => 'project.destroy',
            ]);
        });
    });

    // Route::get('demo/display', function () {
    //     $project = Project::all();
    //     $author = get_field($project, 'author');
    //     echo $author;
    // });
});
