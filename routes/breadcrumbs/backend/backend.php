<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(
        __('strings.backend.dashboard.title'),
        route('admin.dashboard')
    );
});

//start_Post_start
Breadcrumbs::register('admin.post.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(
        __('strings.backend.posts.title'),
        route('admin.post.index')
    );
});

Breadcrumbs::register('admin.post.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.post.index');
    $breadcrumbs->push(
        __('labels.backend.posts.create'),
        route('admin.post.create')
    );
});

Breadcrumbs::register('admin.post.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.post.index');
    $breadcrumbs->push(
        __('menus.backend.posts.view'),
        route('admin.post.show', $id)
    );
});

Breadcrumbs::register('admin.post.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.post.index');
    $breadcrumbs->push(
        __('menus.backend.posts.edit'),
        route('admin.post.edit', $id)
    );
});
//end_Post_end

//*****Do Not Delete Me

require __DIR__ . '/auth.php';
require __DIR__ . '/log-viewer.php';
