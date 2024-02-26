<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * App\Models\SalesLead
 *
 * @property int $id
 * @property string $title
 * @property string $message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SalesTag> $tags
 * @property-read int|null $tags_count
 * @method static \Database\Factories\SalesLeadFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|SalesLead newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SalesLead newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SalesLead query()
 * @method static \Illuminate\Database\Eloquent\Builder|SalesLead whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesLead whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesLead whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesLead whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesLead whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SalesLead extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'message'
    ];

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(SalesTag::class);
    }
}
