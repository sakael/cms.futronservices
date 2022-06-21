<x-layouts.base>
    <x-section name="scripts-hedaer">
        <!-- Some JS and styles -->
    </x-section>

    <!-- Start Content-->
    <div class="container-fluid">
        <!-- start career title -->
        <div class="row">
            <div class="col-12">
                <div class="career-title-box">
                    <h4 class="career-title">{{$career->title}}</h4>
                </div>
            </div>
        </div>
        @include('includes/alerts')
        <!-- end career title -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-text">
                                <form action="{{route('careers.update',['career'=> $career->id])}}" method="POST" enctype="multipart/form-data">
                                    @method('PATCH')
                                    @csrf
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" value="{{$career->title}}">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="text" class="form-label">Description</label>
                                        <textarea class="form-control rich-text" id="text" name="text">{!!$career->text!!}</textarea>
                                    </div>
                                    
                                    <div class="mt-3 mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="active" name="active" value="1" @if($career->active) checked @endif>
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