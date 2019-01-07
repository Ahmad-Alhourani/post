@extends ('backend.layouts.app')

@section ('title', __('labels.backend.posts.management') . ' | ' . __('labels.backend.posts.view'))

@section('breadcrumb-links')
@include('backend.posts.includes.breadcrumb-links')
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.posts.management') }}
                        <small class="text-muted">{{ __('labels.backend.posts.view') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4 mb-4">
                <div class="col">
                    @include('backend.posts.view')
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <small class="float-right text-muted">
                {{--       <strong>{{ __('labels.backend.posts.content.created_at') }}:</strong> {{ $post->updated_at->timezone(get_user_timezone()) }} ({{ $post->created_at->diffForHumans() }}),--}}
                {{--       <strong>{{__('labels.backend.posts.content.last_updated') }}:</strong> {{ $post->created_at->timezone(get_user_timezone()) }} ({{$post->updated_at->diffForHumans() }})--}}
                        @if ($post->trashed())
                            <strong>{{ __('labels.backend.posts.content.deleted_at') }}:</strong> $post->deleted_at->timezone(get_user_timezone())  ($post->deleted_at->diffForHumans() )
                        @endif
                    </small>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
@endsection