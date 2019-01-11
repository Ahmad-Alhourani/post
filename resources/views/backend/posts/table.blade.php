<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                <th>{{ __('labels.backend.posts.table.name') }}</th>
                <th>{{ __('labels.backend.posts.table.description') }}</th>
                <th>{{ __('labels.backend.posts.table.visible_radius') }}</th>
                <th>{{ __('labels.backend.posts.table.order') }}</th>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)
        <tr>
             
                <td>{{  $post->name }}</td>  
                <td>{{  $post->description }}</td>  
                <td>{{  $post->visible_radius }}</td>  
                <td>{{  $post->order }}</td>  
                

               <td>{!! $post->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>