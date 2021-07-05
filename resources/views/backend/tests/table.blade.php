<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($tests as $test)
        <tr>
            
                

               <td>{!! $test->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>