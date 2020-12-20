<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Check
 *
 * @property int $id
 * @property int $response_status
 * @property string $response_content
 * @property int $elapsed_time
 * @property int $site_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Check newModelQuery()
 * @method static Builder|Check newQuery()
 * @method static Builder|Check query()
 * @method static Builder|Check whereCreatedAt($value)
 * @method static Builder|Check whereElapsedTime($value)
 * @method static Builder|Check whereId($value)
 * @method static Builder|Check whereResponseContent($value)
 * @method static Builder|Check whereResponseStatus($value)
 * @method static Builder|Check whereSiteId($value)
 * @method static Builder|Check whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Check extends Model
{
    use HasFactory;

    protected $guarded = [];
}
