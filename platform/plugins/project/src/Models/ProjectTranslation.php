<?php

namespace Botble\Project\Models;

use Botble\Base\Models\BaseModel;

class ProjectTranslation extends BaseModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'projects_translations';

    /**
     * @var array
     */
    protected $fillable = [
        'lang_code',
        'projects_id',
        'name',
    ];

    /**
     * @var bool
     */
    public $timestamps = false;
}
