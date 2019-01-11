<?php

namespace App\Http\Controllers\Backend\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Backend\Post\CreatePost;
use App\Http\Requests\Backend\Post\UpdatePost;
use App\Repositories\Backend\PostRepository;
use App\Events\Backend\Post\PostCreated;
use App\Events\Backend\Post\PostUpdated;
use App\Events\Backend\Post\PostDeleted;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\Post;

class PostController extends Controller
{
    /** @var $postRepository */
    private $postRepository;

    public function __construct(PostRepository $postRepo)
    {
        $this->postRepository = $postRepo;
    }

    /**
     * Display a listing of the Post.
     *
     * @param  Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */

    public function index(Request $request)
    {
        $this->postRepository->pushCriteria(new RequestCriteria($request));
        $data = $this->postRepository->paginate(25);

        return view('backend.posts.index')->with('posts', $data);
    }

    /**
     * Show the form for creating a new Post.
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function create()
    {
        return view('backend.posts.create');
    }

    /**
     * Store a newly created Post in storage.
     *
     * @param CreatePost $request
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CreatePost $request)
    {
        $obj = $this->postRepository->create(
            $request->only(["name", "description", "visible_radius", "order"])
        );

        event(new PostCreated($obj));
        return redirect()
            ->route('admin.post.index')
            ->withFlashSuccess(__('alerts.frontend.post.saved'));
    }

    /**
     * Display the specified Post.
     *
     * @param Post $post
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function show(Post $post)
    {
        return view('backend.posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified Post.
     *
     * @param Post $post
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function edit(Post $post)
    {
        return view('backend.posts.edit')->with('post', $post);
    }

    /**
     * Update the specified Post in storage.
     *
     * @param UpdatePost $request
     *
     * @param Post $post
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(UpdatePost $request, Post $post)
    {
        $obj = $this->postRepository->update($post, $request->all());

        event(new PostUpdated($obj));
        return redirect()
            ->route('admin.post.index')
            ->withFlashSuccess(__('alerts.frontend.post.updated'));
    }

    /**
     * Remove the specified Post from storage.
     *
     * @param Post $post
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function destroy(Post $post)
    {
        $obj = $this->postRepository->delete($post);
        event(new PostDeleted($obj));
        return redirect()
            ->back()
            ->withFlashSuccess(__('alerts.frontend.post.deleted'));
    }
}
