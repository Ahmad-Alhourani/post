@extends ('backend.layouts.app')

@section ('title', __('labels.backend.posts.management') . ' | ' . __('labels.backend.posts.edit'))

@section('breadcrumb-links')
@include('backend.posts.includes.breadcrumb-links')
@endsection
@section('content')
    {{ html()->modelForm($post, 'PATCH', route('admin.post.update', $post->id))->acceptsFiles()->class('form-horizontal')->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.posts.management') }}
                        <small class="text-muted">{{ __('labels.backend.posts.edit') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <hr />

            @include('backend.posts.fields')

        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    {{ form_cancel(route('admin.post.index'), __('buttons.general.cancel')) }}
                </div><!--col-->

                <div class="col text-right">
                    {{ form_submit(__('buttons.general.crud.update')) }}
                </div><!--row-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
  {{ html()->closeModelForm() }}
@endsection