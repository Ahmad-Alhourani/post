<?php namespace App\Events\Backend\Post;

use Illuminate\Queue\SerializesModels;
/**
 * Class PostDeleted.
 */

class PostDeleted
{
    use SerializesModels;
    /**
     * @var
     */

    public $post;

    /**
     * @param $post
     */
    public function __construct($post)
    {
        $this->post = $post;
    }
}
