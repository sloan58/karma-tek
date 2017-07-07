{{-- Navigation --}}
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
  <div class="container-fluid">
    {{-- Brand and toggle get grouped for better mobile display --}}
    <div class="navbar-header page-scroll">
      <button type="button" class="navbar-toggle" data-toggle="collapse"
              data-target="#navbar-main">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">{{ config('blog.name') }}</a>
    </div>

      @if(Route::is('/'))
      <div class="collapse navbar-collapse" id="navbar-main">
          <ul class="nav navbar-nav">
              <li>
                  <a href="/">Home</a>
              </li>
              <li>
                  <a href="#services" class="smoothScroll">Services</a>
              </li>
              <li>
                  <a href="#portfoliowrap" class="smoothScroll">Lifecycle</a>
              </li>
              <li>
                  <a href="#about" class="smoothScroll">About</a>
              </li>
              {{--<li>--}}
                  {{--<a href="/blog">Blog</a>--}}
              {{--</li>--}}
          </ul>
          <ul class="nav navbar-nav navbar-right">
              <li>
                  {{--<a href="/contact">Contact</a>--}}
              </li>
          </ul>
      </div>
      @else
      <div class="collapse navbar-collapse" id="navbar-main">
          <ul class="nav navbar-nav">
              <li>
                  <a href="/">Home</a>
              </li>
              <li>
                  <a href="/#services" class="smoothScroll">Services</a>
              </li>
              <li>
                  <a href="/#portfoliowrap" class="smoothScroll">Lifecycle</a>
              </li>
              <li>
                  <a href="/#about" class="smoothScroll">About</a>
              </li>
              <li>
                  <a href="/blog">Blog</a>
              </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
              <li>
                  {{--<a href="/contact">Contact</a>--}}
              </li>
          </ul>
      </div>
      @endif

  </div>
</nav>
