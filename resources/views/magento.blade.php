@include('header')


<section class="container-flued shadow-none">
    <div class="container">
        <img src="{{url('/assets/img/magento-logo.png')}}" alt="" class="img-l">
        <span class="n">Mangento</span>
        
    </div>
</section>
    
    



<!-- Begin page content -->
<main class="flex-shrink-0">
    
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                @foreach ($posts as $data)
                <div class="row">
                    
                    <a id="{{$data->id}}"><h4 class="mt-1">{{ $data->title }}</h4></a>
                    <img src="{{ URL::asset('storage/app/public'.$data->image) }}">
                    <p>{{ $data->excerpt }} </p>
                    
                </div>
                @endforeach
            </div>
            
            <div class="col-md-3">
                
                    <h5 class="mt-1">CATEGORIES</h5>
                    <ul class="left-bar">
                    @foreach ($posts as $data)
                    <li><a href="{{'#'.$data->id}}">{{ $data->title}}</a></li>
                    @endforeach
                    
                </ul>
               
                
            </div>
        </div>
       </div>
  </main>
  
  
@include('footer')