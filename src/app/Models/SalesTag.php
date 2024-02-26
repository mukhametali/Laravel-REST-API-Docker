<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * App\Models\SalesTag
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SalesLead> $leads
 * @property-read int|null $leads_count
 * @method static \Database\Factories\SalesTagFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|SalesTag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SalesTag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SalesTag query()
 * @method static \Illuminate\Database\Eloquent\Builder|SalesTag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesTag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesTag whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesTag whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SalesTag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function leads(): BelongsToMany
    {
        return $this->belongsToMany(SalesLead::class);
    }
}
