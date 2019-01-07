<div class="row mt-4 mb-4">
    <div class="col">

       
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.posts.id'))->class('col-md-2 form-control-label')->for('id') }}
            <div class="col-md-10">
       

                {{ $post->id }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.posts.image'))->class('col-md-2 form-control-label')->for('image') }}
            <div class="col-md-10">
       
               @if (!empty($post) && $post->image)
                    <div>{!! html()->img($post->image_url)->class('img-thumbnail')  !!}</div>
                @else
                    <div>{!! html()->i()->class('fa fa-image fa-9x')  !!}</div>
               @endif
       </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.posts.title'))->class('col-md-2 form-control-label')->for('title') }}
            <div class="col-md-10">
       

                {{ $post->title }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.posts.status'))->class('col-md-2 form-control-label')->for('status') }}
            <div class="col-md-10">
       

                {{ $post->status }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.posts.pinned'))->class('col-md-2 form-control-label')->for('pinned') }}
            <div class="col-md-10">
       

                {{ $post->pinned }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.posts.promoted'))->class('col-md-2 form-control-label')->for('promoted') }}
            <div class="col-md-10">
       

                {{ $post->promoted }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.posts.author'))->class('col-md-2 form-control-label')->for('author') }}
            <div class="col-md-10">
       

                {{ $post->author }}

            </div><!--col-->
         </div><!--form-group-->
         

        <!--end-columns-->
      


    </div><!--col-->
</div><!--row-->