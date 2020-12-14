@section('navbar')
<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="order-last" class="img" style="background-image: url(images/unnamed.jpg);">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
        <div class="">
		  		<h1><a href="index.html" class="logo">Pintores<span></span></a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="{{action('controlador@home')}}"><span class="fa fa-home mr-3"></span>Inicio</a>
	          </li>
	          <li>
	              <a href="{{action('controlador@pintor1')}}"><span class="fa fa-user mr-3"></span>Vincent van Gogh</a>
	          </li>
              <li>
	              <a href="{{action('controlador@pintor2')}}"><span class="fa fa-user mr-3"></span>Salvador Dali</a>
	          </li>
              <li>
	              <a href="{{action('controlador@pintor3')}}"><span class="fa fa-user mr-3"></span>Pablo Picasso</a>
	          </li>
              <li>
	              <a href="{{action('controlador@pintor4')}}"><span class="fa fa-user mr-3"></span>Leonardo da Vinci</a>
	          </li>
              <li>
	              <a href="{{action('controlador@pintor5')}}"><span class="fa fa-user mr-3"></span>Frida Kahlo</a>
	          </li>

	        </ul>

	       

	        <div class="footer px-4">
	        	
	        </div>

	      </div>

    	</nav>
    @show