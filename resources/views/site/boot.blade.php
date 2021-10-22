 @extends('lay.master')
 @section('content')



 <a class="btn btn-primary me-2" href="{{url('post')}}">Create Post</a>
            <div class="row flex-grow">
              @foreach ($posts as $post )  
              <div class="col-6 grid-margin stretch-card">
                <div class="card card-rounded table-darkBGImg">
                  <div class="card-body">
                    <div class="row">
                      <div style="color: #fff" class="col-md-9">
                        <h3 class="text-white upgrade-info mb-0">
                          {{$post->name}}
                        </h3>
                          <span class="fw-bold">{{$post->price}}</span>
                        <p>
                          {{$post->desc}}
                        </p>
                      </div>
                      <div style="" class="col-md-3">
                        <img class="rounded float-end" width="250px" src="{{asset($post->file)}}">
                      </div>
                    </div>
                    <a href="#" class="btn btn-info upgrade-btn">Show</a>
                  </div>
                </div>
              </div>
              @endforeach

              {{-- <div class="col-6 grid-margin stretch-card">
                <div class="card card-rounded table-darkBGImg">
                  <div class="card-body">
                    <div class="col-sm-3">
                      <h3 class="text-white upgrade-info mb-0">
                        Post 2 <span class="fw-bold">price</span> Desc
                      </h3>
                      <a href="#" class="btn btn-info upgrade-btn">Show</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 grid-margin stretch-card">
                <div class="card card-rounded table-darkBGImg">
                  <div class="card-body">
                    <div class="col-sm-3">
                      <h3 class="text-white upgrade-info mb-0">
                        Post 3 <span class="fw-bold">Price</span> Desc
                      </h3>
                      <a href="#" class="btn btn-info upgrade-btn">Show</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 grid-margin stretch-card">
                <div class="card card-rounded table-darkBGImg">
                  <div class="card-body">
                    <div class="col-sm-3">
                      <h3 class="text-white upgrade-info mb-0">
                        Post 4 <span class="fw-bold">Price</span> Desc
                      </h3>
                      <a href="#" class="btn btn-info upgrade-btn">Show</a>
                    </div>
                  </div>
                </div>
              </div> --}}

            </div>


    </div>
  </div>
</div>
</div>






@endsection