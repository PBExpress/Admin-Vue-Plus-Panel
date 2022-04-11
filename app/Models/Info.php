<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Info extends Model implements HasMedia
{
    use HasAdvancedFilter;
    use SoftDeletes;
    use InteractsWithMedia;
    use HasFactory;

    public $table = 'infos';

    protected $appends = [
        'files_related_to_task',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $orderable = [
        'id',
        'name_of_tasks',
        'description_of_tasks',
        'name_created_by',
    ];

    protected $filterable = [
        'id',
        'name_of_tasks',
        'description_of_tasks',
        'name_created_by',
    ];

    protected $fillable = [
        'name_of_tasks',
        'description_of_tasks',
        'name_created_by',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function getFilesRelatedToTaskAttribute()
    {
        return $this->getMedia('info_files_related_to_task')->map(function ($item) {
            $media = $item->toArray();
            $media['url'] = $item->getUrl();

            return $media;
        });
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
