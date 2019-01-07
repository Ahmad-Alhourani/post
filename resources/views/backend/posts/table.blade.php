<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                <th>{{ __('labels.backend.posts.table.image') }}</th>
                <th>{{ __('labels.backend.posts.table.title') }}</th>
                <th>{{ __('labels.backend.posts.table.status') }}</th>
                <th>{{ __('labels.backend.posts.table.pinned') }}</th>
                <th>{{ __('labels.backend.posts.table.promoted') }}</th>
                <th>{{ __('labels.backend.posts.table.author') }}</th>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)
        <tr>
             
                <td style="width:30px">
                    @if (!empty($post) && $post->image)
                       {!! html()->img($post->image_url)->class('img-fluid')  !!}
                   @else
                       {!! html()->i()->class('fa fa-image fa-3x')  !!}
                   @endif
               </td> 
                <td>{{  $post->title }}</td>  
                @php   $status_arr=[];@endphp
                <td>{{ $post->status ? $status_arr [$post->status ]:'N/A'}}</td>  
                <td>{{  $post->pinned }}</td>  
                <td>{{  $post->promoted }}</td>  
                @php   $author_arr=[];@endphp
                <td>{{ $post->author ? $author_arr [$post->author ]:'N/A'}}</td>  
                

               <td>{!! $post->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>