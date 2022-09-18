<section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Latest Products
        </h2>
      </div>
      <div class="row">
        @foreach ($latest_products as $product)
            
        <div class="col-md-6 ">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="{{asset('storage/'.$product->image)}}" alt="">
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
                  Featured
                </span>
              </div>
            </a>
          </div>
        </div>
        
        @endforeach
      </div>
      <div class="btn-box">
        <a href="{{url('/products')}}">
          View All
        </a>
      </div>
    </div>
  </section>