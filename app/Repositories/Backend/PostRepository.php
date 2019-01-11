<?php
namespace App\Repositories\Backend;

use App\Models\Post;
use App\Repositories\BaseRepository;
use Prettus\Repository\Contracts\CacheableInterface;
use Prettus\Repository\Traits\CacheableRepository;

class PostRepository extends BaseRepository implements CacheableInterface
{
    use CacheableRepository;

    protected $defaultOrderBy = 'id';
    protected $defaultSortBy = 'asc';

    protected $fieldSearchable = [
        "title",
        "status",
        "pinned",
        "promoted",
        "author"
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Post::class;
    }

    public function getPaginated($paged = 25, $condions_array = null)
    {
        if ($condions_array) {
            return $this->model->where($condions_array)->paginate($paged);
        }
        return $this->model->paginate($paged);
    }
}
