@if (count($errors) > 0)
      @foreach ($errors->all() as $error)
         <div class="alert alert-warning alert-dismissible fade show" role="alert">
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             <strong>Warning - </strong> {{ $error }}
         </div>
      @endforeach
@endif

@if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <strong>Success - </strong> {{ session('status') }}
    </div>
@endif