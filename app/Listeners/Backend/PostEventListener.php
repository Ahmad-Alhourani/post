<?php
namespace App\Listeners\Backend;

/**
 * Class PostEventListener.
 */
/**
 * Class PostCreated.
 */
class PostEventListener
{
    /**
     * @param $event
     */
    public function onCreated($event)
    {
        \Log::info('Post Created');
    }

    /**
     * @param $event
     */
    public function onUpdated($event)
    {
        \Log::info('Post  Updated');
    }

    /**
     * @param $event
     */
    public function onDeleted($event)
    {
        \Log::info('Post Deleted');
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            \App\Events\Backend\Post\PostCreated::class,
            'App\Listeners\Backend\PostEventListener@onCreated'
        );

        $events->listen(
            \App\Events\Backend\Post\PostUpdated::class,
            'App\Listeners\Backend\PostEventListener@onUpdated'
        );

        $events->listen(
            \App\Events\Backend\Post\PostDeleted::class,
            'App\Listeners\Backend\PostEventListener@onDeleted'
        );
    }
}
