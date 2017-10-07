<?php

namespace Modules\Tag\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use Translatable;

        	const CREATED_AT = 'IDATE';
        	const UPDATED_AT = 'UDATE';
    protected $table = 'tags';
    protected $primaryKey="ID";
    public $translatedAttributes = ['SLUG', 'NAME'];
    protected $fillable = ['NAMESPACE', 'SLUG', 'NAME'];
    public $translationForeignKey="TAG_ID";
    public $localeKey="LOCALE";
}
