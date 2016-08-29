@extends('main')
@section('content')
<div class="main">
	<section id="about-wrap">
		<div class="container">
			<div class="row reset-margin-row">
				@if (Session::has('message'))
				   <div class="alert alert-success">
		  				<strong>Congratulations! </strong> {{ Session::get('message') }}
		  		 </div> <br/>
				@endif
				<div class="col-md-offset-3 col-md-2" id="about">
	 				<div class="header">
	 					<div>
	 						<span>#</span>About_me
	 						<div class="header-triangle"></div>
	 					</div>
	 				</div>
 				</div>
			</div>
			<div class="about-box">
				<div class="row reset-margin-row">
					<div class="col-md-8">
						<div class="about-text">
							<p>Hello, </p>
							<p>I'm Kamil Mach. Two years ago I've become an IT technician.</p>
							<p>I'm an extramural student of IT in Cieszyn.</p>
							<p>I'm Junior front-end developer. I have one-year commercial experience.</p>
							<p>I'm motivated to develop on my skills and open to cooperation.</p>
							<p>Feel free to contact me.</p>	
						</div>	
					</div>
					<div class="col-md-4">
						<div class="card-wrap">
 							<div class="card">
 								<figure class="front"></figure>
								<figure class="back"></figure>
 							</div>
						</div>
						<span>//Kamil Mach</span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="portfolio-wrap">
		<div class="container">
			<div class="row reset-margin-row">
				<div class="col-md-offset-1 col-md-2" id="portfolio">
	 				<div class="header">
	 					<div>
	 						<span>#</span>Portfolio
	 						<div class="header-triangle"></div>
	 					</div>
	 				</div>
 				</div>
			</div>
 			<div class="blue-bar">
 				<div class="portfolio-filter">
 					<p><span class="active" id="designCodeFilter">Design + Code </span>/<span class="" id="designFilter"> Only design </span></p>
 				</div>
 			</div>
 			<div id="projects">
 				<div class="row reset-margin-row">
 					<div class="col-lg-4 col-sm-12">
 						<a class="project-item" href="http://schodypolska.pl/" target="_blank">
 							<img src="img/projects/2.png" alt="schodypolska.pl" class="img-responsive"/>
 						</a>
 					</div>
 					<div class="col-lg-4 col-sm-12">
 						<a class="project-item" href="http://www.moto-pralnia.pl/" target="_blank">
 							<img src="img/projects/4.png" alt="moto-pralnia.pl"  class="img-responsive"/>
 						</a>
 					</div>
 					<div class="col-lg-4 col-sm-12">
 						<a class="project-item" href="http://apartamentm5.pl/" target="_blank">
 							<img src="img/projects/3.png" alt="apartamentm5.pl" class="img-responsive"/>
 						</a>
 					</div>
 				</div>	
 				<div class="row reset-margin-row">
 					<div class="col-lg-4 col-sm-12">
 						<a class="project-item" href="http://intime.3ck.pl/" target="_blank">
 							<img src="img/projects/7.png" alt="intime transport" class="img-responsive"/>
 						</a>
 					</div>
 					<div class="col-lg-4 col-sm-12">
 						<a class="project-item" href="http://utrataprawka.pl/" target="_blank">
 							<img src="img/projects/8.png" alt="utrataprawka.pl" class="img-responsive"/>
 						</a>
 					</div>
 					<div class="col-lg-4 col-sm-12">
 						<a class="project-item" href="http://rempebud.pl/" target="_blank">
 							<img src="img/projects/6.png" alt="rempebud, usługi budowlane" class="img-responsive"/>
 						</a>
 					</div>
 				</div>
 				<div class="row reset-margin-row">
 					<div class="col-lg-4 col-sm-12">
 						<a class="project-item" href="http://staircases.melbourne/" target="_blank">
 							<img src="img/projects/10.png" alt="DSK Staircases melbourne" class="img-responsive"/>
 						</a>
 					</div>
 					<div class="col-lg-4 col-sm-12">
 						<a class="project-item" href="http://ecoenergypoland.pl/" target="_blank">
 							<img src="img/projects/11.png" alt="Eco energy poland" class="img-responsive"/>
 						</a>
 					</div>
 				</div>
 			</div>
 			
 			<div id="design">
 				<div class="row reset-margin-row">
 					<div class="col-lg-6 col-sm-12">
 						<a class="project-item" href="http://kamil-mach.pl/img/design/fortes/index.html" target="_blank">
 							<img src="img/projects/design/1.png" alt="Fortes internet" class="img-responsive"/>
 						</a>
 					</div>
 					<div class="col-lg-6 col-sm-12">
 						<a class="project-item" href="http://kamil-mach.pl/img/design/food/index.html" target="_blank">
 							<img src="img/projects/design/4.png" alt="Szablon restauracja" class="img-responsive"/>
 						</a>
 					</div>
 				</div>	
 				<div class="row reset-margin-row">
 					<div class="col-lg-6 col-sm-12">
 						<a class="project-item" href="http://kamil-mach.pl/img/design/scagel/index.html" target="_blank">
 							<img src="img/projects/design/5.png" alt="Szablon dla produktu firmy farmaceutycznej" class="img-responsive"/>
 						</a>
 					</div>
 					<div class="col-lg-6 col-sm-12">
 						<a class="project-item" href="http://kamil-mach.pl/img/design/secpol/index.html" target="_blank">
 							<img src="img/projects/design/6.png" alt="secpol meble" class="img-responsive"/>
 						</a>
 					</div>
 				</div>
 				<div class="row reset-margin-row">
 					<div class="col-lg-6 col-sm-12">
 						<a class="project-item" href="http://kamil-mach.pl/img/design/pnn/index.html" target="_blank">
 							<img src="img/projects/design/3.png" alt="szablon dla firmy farmaceutycznej" class="img-responsive"/>
 						</a>
 					</div>
 					<div class="col-lg-6 col-sm-12">
 						<a class="project-item" href="http://kamil-mach.pl/img/design/multifan/index.html" target="_blank">
 							<img src="img/projects/design/2.png" alt="mutifan lizaki" class="img-responsive"/>
 						</a>
 					</div>
 				</div>
 				<div class="row reset-margin-row">
 					<div class="col-lg-6 col-sm-12">
 						<a class="project-item" href="http://kamil-mach.pl/img/design/rtv/index.html" target="_blank">
 							<img src="img/projects/design/9.png" alt="szablon allegro, urządzenia rtv" class="img-responsive"/>
 						</a>
 					</div>
 					<div class="col-lg-6 col-sm-12">
 						<a class="project-item" href="http://kamil-mach.pl/img/design/narzedzia/index.html" target="_blank">
 							<img src="img/projects/design/7.png" alt="szablon allegro, narzędzia" class="img-responsive"/>
 						</a>
 					</div>
 					<div class="col-lg-6 col-sm-12">
 						<a class="project-item" href="http://kamil-mach.pl/img/design/ciuchy/index.html" target="_blank">
 							<img src="img/projects/design/8.png" alt="szablon allegro, ciuchy" class="img-responsive"/>
 						</a>
 					</div>
 				</div>
 			</div>
 			
 			
 		</div>		
	</section>
	<section id="clients-wrap">
		<div class="container-fluid padding-reset">
			<div class="row reset-margin-row">
				<div class="col-md-offset-5 col-md-2" id="worked_with">
	 				<div class="header">
	 					<div>
	 						<span>#</span>I_worked_with
	 						<div class="header-triangle clients-fix"></div>
	 					</div>
	 				</div>
 				</div>
			</div>
			<div class="large-blue-bar"></div>
			<div class="clients-box">
				<div class="row reset-margin-row">
 					<ul>
 						<div class=" col-lg-2 col-md-4 col-sm-6">
	 						<li>
	 							<img src="img/clients/1.png" class="img-responsive" alt="" />
	 						</li>
	 					</div>	
 						<div class="col-lg-2 col-md-4 col-sm-6">
	 						<li>
	 							<img src="img/clients/3.png" class="img-responsive" alt="" />
	 						</li>
	 					</div>	
	 					<div class="col-lg-2 col-md-4 col-sm-6">
	 						<li>
	 							<img src="img/clients/4.png" class="img-responsive" alt="" />
	 						</li>
	 					</div>	
	 					<div class="col-lg-3 col-md-4 col-sm-6">
	 						<li>
	 							<img src="img/clients/5.png" class="img-responsive" alt="" />
	 						</li>
	 					</div>	
	 					<div class="col-lg-2 col-md-4 col-sm-6">
	 						<li>
	 							<img src="img/clients/2.png" class="img-responsive" alt="" />
	 						</li>
	 					</div>	
 					</ul>
				</div>
			</div>
			<div class="large-blue-bar"></div>
		</div>
	</section>
	<section id="technology-wrap">
		<div class="container">
			<div class="row reset-margin-row">
				<div class="col-md-offset-10 col-md-2" id="technologies">
	 				<div class="header">
	 					<div>
	 						<span>#</span>I_use
	 					</div>
	 				</div>
 				</div>
			</div>
			<div class="row reset-margin-row">
				<div class="technology-box">
 					<div class="col-md-1">
 						<span class="technology-sign"><</span>
 					</div>
 					<div class="col-md-3 col-sm-6">
 						<div class="technology-item">
 							<img src="img/technology/1.png" alt="" />
 						</div>
 					</div>
 					<div class="col-md-3 col-sm-6">
 						<div class="technology-item">
 							<img src="img/technology/2.png" alt="" />
 						</div>
 					</div>
 					<div class="col-md-3 col-sm-6">
 						<div class="technology-item">
 							<img src="img/technology/3.png" alt="" />
 						</div>
 					</div>
 				</div>
 				<div class="row reset-margin-row">
 					<div class="col-md-offset-1 col-md-3 col-sm-6">
 						<div class="technology-item">
 							<img src="img/technology/4.png" alt="" />
 						</div>
 					</div>
 					<div class="col-md-3 col-sm-6">
 						<div class="technology-item">
 							<img src="img/technology/5.png" alt="" />
 						</div>
 					</div>
 					<div class="col-md-3 col-sm-6">
 						<div class="technology-item">
 							<img src="img/technology/6.png" alt="" />
 						</div>
 					</div>
 				</div>
 				<div class="row reset-margin-row">
 					<div class="col-md-offset-1 col-md-3 col-sm-6">
 						<div class="technology-item">
 							<img src="img/technology/7.png" alt="" />
 						</div>
 					</div>
 					<div class="col-md-3 col-sm-6">
 						<div class="technology-item">
 							<img src="img/technology/8.png" alt="" />
 						</div>
 					</div>
 					<div class="col-md-3 col-sm-6">
 						<div class="technology-item">
 							<img src="img/technology/9.png" alt="" />
 						</div>
 					</div>
 					<div class="col-md-1 col-sm-6">
 						<span class="technology-sign">/></span>
 					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="contact-wrap">
		<div class="container">
			<div class="row reset-margin-row">
 				<div class="row reset-margin-row">
 					<div class="col-sm-offset-5 col-sm-4 col-xs-12" id="contact">
		 				<div class="header contact-header-fix">
		 					<div>
		 						<span>#</span>Contact
		 					</div>
		 				</div>
	 				</div>
 				</div>
				<div class="contact-box">
					<div class="box-border-left hidden-sm hidden-xs"></div>
					<div class="box-border-right hidden-sm hidden-xs"></div>
					<form action="{{url('/')}}" method="post" id="contact-form" accept-charset="UTF-8">
						{{ csrf_field() }}
						<div class="row reset-margin-row">
							<div class="col-md-5">
								 <div class="form-group">
								    <label for="name">.Name</label>
								    <input type="text" class="form-control" name="name" id="name" required="required">
							   	 </div>
							   	 <div class="form-group">
								    <label for="email1">.Email</label>
								    <input type="email" class="form-control" name="email" id="email" required="required">
							   	 </div>
							   	 <div class="form-group">
								    <label for="subject1">.Subject</label>
								    <input type="text" class="form-control" name="subject" id="subject" required="required">
							   	 </div>
							</div>
							<div class="col-md-offset-1 col-md-5">
								<label for="message1">.Message</label>
								<textarea class="form-control message-height" name="message" id="message" rows="7"></textarea>
							</div>
						</div>
						<input type="submit" id="contact-submit" value="<Send>"/>
					 </form>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection
@section('scripts')
	<!-- Latest compiled and minified JavaScript -->
	<script src="js/bootstrap.min.js"></script>	
	<script type='text/javascript' src='js/cookieinfo.js'></script>
	<script src="js/mouse.parallax.js"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-82808964-1', 'auto');
	  ga('send', 'pageview');

	</script>
@endsection
