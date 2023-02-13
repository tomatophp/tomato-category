<?php

namespace TomatoPHP\TomatoCategory\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $parent_id
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property string $icon
 * @property string $color
 * @property boolean $activated
 * @property boolean $menu
 * @property string $created_at
 * @property string $updated_at
 * @property Categorable[] $categorables
 * @property Category $category
 * @property CategoriesMeta[] $categoriesMetas
 * @property Content[] $contents
 */
class Category extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['parent_id', 'name', 'slug', 'description', 'icon', 'color', 'activated', 'menu', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function categorables()
    {
        return $this->hasMany('TomatoPHP\TomatoCategory\Models\Categorable');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('TomatoPHP\TomatoCategory\Models\Category', 'parent_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function categoriesMetas()
    {
        return $this->hasMany('TomatoPHP\TomatoCategory\Models\CategoriesMeta');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contents()
    {
        return $this->hasMany('TomatoPHP\TomatoCategory\Models\Content');
    }
}
