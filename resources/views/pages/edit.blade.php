<x-layouts.base>
    <x-section name="scripts-hedaer">
        <!-- Some JS and styles -->
    </x-section>

    <!-- Start Content-->
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">{{$page->title}}</h4>
                </div>
            </div>
        </div>
        @include('includes/alerts')
        <!-- end page title -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-text">
                                <form action="{{route('pages.update',['page'=> $page->id])}}" method="POST">
                                    @method('PATCH')
                                    @csrf
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" value="{{$page->title}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="sub-title" class="form-label">Sub Title</label>
                                        <input type="text" class="form-control" id="sub-title" name="sub_title" value="{{$page->sub_title}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="seo-title" class="form-label">Seo Title</label>
                                        <input type="text" class="form-control" id="title" name="sub_title" value="{{$page->seo_title}}">
                                    </div>
                                    <div class="mb-3">
                                       <label for="slug" class="form-label">Slug</label>
                                        <input type="text" class="form-control" id="slug" name="slug" value="{{$page->slug}}">
                                        <div id="slugHelper" class="form-text">The slug will be generated from the text here</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="seo_disc" class="form-label">Seo Description</label>
                                        <textarea class="form-control" id="seo_disc" name="seo_disc">{{$page->seo_disc}}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="short-content" class="form-label">Short content</label>
                                        <textarea class="form-control rich-text" id="short-content" name="short_content">{!!$page->short_content!!}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="content" class="form-label">Content</label>
                                        <textarea class="form-control rich-text" id="content" name="content">{!!$page->content!!}</textarea>
                                    </div>
                                    <div class="mt-3 mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="active" name="active" value="1" @if($page->active) checked @endif>
                                            <label class="form-check-label" for="active" >Active</label>
                                        </div>
                                    </div>                                    
                                    <button type="submit" class="btn btn-primary col-12">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- container -->
        <x-section name="scripts-footer">
            <!-- Some JS and styles -->
            @include('includes/tinymce')
        </x-section>
</x-layouts.base>