<?php

namespace TomatoPHP\TomatoCategory\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $key
 * @property string $description
 * @property string $color
 * @property string $icon
 * @property string $created_at
 * @property string $updated_at
 * @property Contact[] $contacts
 * @property Content[] $contents
 * @property Typable[] $typables
 */
class Type extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['for','name', 'key', 'description', 'color', 'icon', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contacts()
    {
        return $this->hasMany('TomatoPHP\TomatoCategory\Models\Contact');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contents()
    {
        return $this->hasMany('TomatoPHP\TomatoCategory\Models\Content');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function typables()
    {
        return $this->hasMany('TomatoPHP\TomatoCategory\Models\Typable');
    }
}
