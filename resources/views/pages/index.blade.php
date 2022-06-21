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
                    <h4 class="page-title">Pages</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-text">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Last Time Updated</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pages as $page)
                                        <tr>
                                            <th scope="row">{{$page->id}}</th>
                                            <td>{{$page->title}}</td>
                                            <td>{{$page->updated_at}}</td>
                                            
                                            <td><a href="{{route('pages.update',['page'=>$page->id])}}">Edit</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- container -->


        <x-section name="scripts-footer">
            <!-- Some JS and styles -->
        </x-section>
</x-layouts.base>
