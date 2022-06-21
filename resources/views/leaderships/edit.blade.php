<x-layouts.base>
    <x-section name="scripts-hedaer">
        <!-- Some JS and styles -->
    </x-section>

    <!-- Start Content-->
    <div class="container-fluid">
        <!-- start leadership title -->
        <div class="row">
            <div class="col-12">
                <div class="leadership-title-box">
                    <h4 class="leadership-title">{{$leadership->title}}</h4>
                </div>
            </div>
        </div>
        @include('includes/alerts')
        <!-- end leadership title -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-text">
                                <form action="{{route('leaderships.update',['leadership'=> $leadership->id])}}" method="POST" enctype="multipart/form-data">
                                    @method('PATCH')
                                    @csrf
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" value="{{$leadership->title}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="position" class="form-label">Position</label>
                                        <input type="text" class="form-control" id="position" name="position" value="{{$leadership->position}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="facebook" class="form-label">Facebook</label>
                                        <input type="text" class="form-control" id="facebook" name="facebook" value="{{$leadership->facebook}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="linkedin" class="form-label">Linkedin</label>
                                        <input type="text" class="form-control" id="linkedin" name="linkedin" value="{{$leadership->linkedin}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="twitter" class="form-label">Twitter</label>
                                        <input type="text" class="form-control" id="twitter" name="twitter" value="{{$leadership->twitter}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="mail" class="form-label">Mail</label>
                                        <input type="text" class="form-control" id="mail" name="mail" value="{{$leadership->mail}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="text" class="form-label">Description</label>
                                        <textarea class="form-control rich-text" id="text" name="text">{!!$leadership->text!!}</textarea>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-8">
                                            <label for="image" class="form-label">Image</label>
                                            <input type="file" id="image" name="image" class="form-control">
                                        </div>
                                        <div class="col-4 text-center">
                                            <img src="{{URL::to('/')}}{{$leadership->photo}}">
                                        </div>
                                    </div>
                                    <div class="mt-3 mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="active" name="active" value="1" @if($leadership->active) checked @endif>
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