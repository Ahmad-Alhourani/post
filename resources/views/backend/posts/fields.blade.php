<div class="row mt-4 mb-4">
    <div class="col">
         
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.posts.image'))->class('col-md-2 form-control-label')->for('image') }}
            <div class="col-md-10">
                
                        {{ html()->text('image_file')
                          ->class('form-control-file')
                          ->type("file")
                            ->placeholder(__('validation.attributes.backend.posts.image'))
                       }}


                    @if (!empty($post) && $post->image)
                        <div>{!! html()->img($post->image_url)->class('img-thumbnail')  !!}</div>
                    @endif


                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.posts.title'))->class('col-md-2 form-control-label')->for('title') }}
            <div class="col-md-10">
                
                        {{ html()->text('title')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.posts.title'))
                        
                        
                      
                            ->required() 
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.posts.status'))->class('col-md-2 form-control-label')->for('status') }}
            <div class="col-md-10">
                
                    {{ html()->select('status',[   'Draft'=>'Draft',   'Pending'=>'Pending', ])
                    ->class('form-control')
                    ->placeholder(__('validation.attributes.backend.posts.status'))
                        ->required()
                    }}

                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.posts.pinned'))->class('col-md-2 form-control-label')->for('pinned') }}
            <div class="col-md-10">
                
                    <label class="switch switch-3d switch-primary">
                        {{ html()->checkbox('pinned', isset($post->pinned) and $post->pinned==1 ?true: false, 1)->class('switch-input') }}
                        <span class="switch-slider" data-checked="yes" data-unchecked="no" aria-selected="true"></span>
                    </label>
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.posts.promoted'))->class('col-md-2 form-control-label')->for('promoted') }}
            <div class="col-md-10">
                
                    <label class="switch switch-3d switch-primary">
                        {{ html()->checkbox('promoted', isset($post->promoted) and $post->promoted==1 ?true: false, 1)->class('switch-input') }}
                        <span class="switch-slider" data-checked="yes" data-unchecked="no" aria-selected="true"></span>
                    </label>
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.posts.author'))->class('col-md-2 form-control-label')->for('author') }}
            <div class="col-md-10">
                
                    {{ html()->select('author',[   'Administrator'=>'Administrator',   'Demo'=>'Demo', ])
                    ->class('form-control')
                    ->placeholder(__('validation.attributes.backend.posts.author'))
                        ->required()
                    }}

                

            </div><!--col-->
        </div><!--form-group-->
        

        <!--end-columns-->
             



    </div><!--col-->
</div><!--row-->