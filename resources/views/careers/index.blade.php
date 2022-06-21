<x-layouts.base>
    <x-section name="scripts-hedaer">
        <!-- Some JS and styles -->
    </x-section>

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-10">
                <div class="page-title-box">
                    <h4 class="page-title">careers</h4>
                </div>
            </div>
            <div class="col-2 text-end">
                <a href="{{route('careers.create')}}" class="btn btn-info mt-3">Add</a>
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
                                        @foreach ($careers as $career)
                                        <tr>
                                            <th scope="row">{{$career->id}}</th>
                                            <td>{{$career->title}}</td>
                                            <td>{{$career->updated_at}}</td>
                                            <td><a href="{{route('careers.update',['career'=>$career->id])}}">Edit</a></td>
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
