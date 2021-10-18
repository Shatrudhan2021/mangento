@include('header')

<div class="card" style="height: 200px; background:#444444bd;">
    
    <div class="container card-body text-white">
      <h1 class="card-title">Projects</h1>
      <div class="row col-md-6">
        
        {{-- <i class="fa fa-search"></i> --}}
        <select class="form-select text-white mt-3 p-2" aria-label="Default select example" style=" background:#3f3d3dbd; border: 1px solid #3f3d3dbd;">
            <option selected>Featured</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
    </div>
    
  </div>
  
</div>
<div class="container">
  <div class="row">
    @foreach ($category as $data)
      <div class="col-lg-4">
        <div class="card m-1" style="width:300px; height:250px;">
           <div class="card-body">
            <h4 class="card-title">{{ $data->name}}
              <img class="card-img" src="{{url('/assets/img/magento-logo.png')}}" alt="Avatar">
            </h4>
            <p class="card-content">Some example text some example text.Some example text some example text.</p>
           <a href="magento/{{ $data->id}}">VIEW PROJECT</a>
            </div>
        </div>
      </div>
      @endforeach
  </div>

</div>
@include('footer')