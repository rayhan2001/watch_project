<section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <h2>
          Latest Products
        </h2>
      </div>
      <div class="row">
        @foreach ($products as $product)
        <div class="col-sm-6 col-xl-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <a href="{{url('/products/'.$product->id)}}"><img src="{{asset('storage/'.$product->image)}}" alt=""></a>
                
              </div>
              <div class="detail-box">
                <h6>
                  {{$product->name}}
                </h6>
                <h6>
                  Price:
                  <span>
                    {{$product->price}}৳
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>
        @endforeach
      </div>
      <div class="btn-box">
        {{$products->links('vendor.pagination.default')}}
      </div>
    </div>
  </section>