<?php

namespace TomatoPHP\TomatoCategory\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $color
 * @property string $icon
 * @property string $created_at
 * @property string $updated_at
 * @property Contact[] $contacts
 * @property Statuable[] $statuables
 */
class Status extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'status';

    /**
     * @var array
     */
    protected $fillable = ['for','name', 'description', 'color', 'icon', 'created_at', 'updated_at'];

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
    public function statuables()
    {
        return $this->hasMany('TomatoPHP\TomatoCategory\Models\Statuable');
    }
}
