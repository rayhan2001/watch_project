<header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="{{url('/')}}">
          <span>
            Timups
          </span>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/products')}}"> Products </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"> About </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
          </ul>
          <div class="user_option-box">
            <a href="{{url('/account')}}">
              <i class="fa fa-user" aria-hidden="true"></i>
            </a>
            <a href="{{url('/cart')}}">
              <i class="fa fa-cart-plus" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-search" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </nav>
    </div>
  </header>