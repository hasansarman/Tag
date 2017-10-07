<?php

namespace Modules\Tag\Entities;

use Illuminate\Database\Eloquent\Model;

class TagTranslation extends Model
{
    public $timestamps = false;
    protected $primaryKey="ID";
    public $translationForeignKey="TAG_ID";
    public $localeKey="LOCALE";
    protected $fillable = ['SLUG', 'NAME'];
    protected $table = 'tag_translations';
}
