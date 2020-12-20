<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Site
 *
 * @property int $id
 * @property string $name
 * @property string $url
 * @property int|null $is_online
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read User $user
 * @method static Builder|Site newModelQuery()
 * @method static Builder|Site newQuery()
 * @method static Builder|Site query()
 * @method static Builder|Site whereCreatedAt($value)
 * @method static Builder|Site whereId($value)
 * @method static Builder|Site whereIsOnline($value)
 * @method static Builder|Site whereName($value)
 * @method static Builder|Site whereUpdatedAt($value)
 * @method static Builder|Site whereUrl($value)
 * @method static Builder|Site whereUserId($value)
 * @mixin Eloquent
 */
class Site extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
