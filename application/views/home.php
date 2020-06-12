		<!-- Header -->
		<header>
			<div class="container">
				<div class="slider-container">
					<div class="intro-text">
						<div class="intro-lead-in .textheader">Aprenda com profissionais qualificados!</div>
						<div class="intro-heading .textheader">Corujinha Cursos</div>
						<a href="#about" class="page-scroll btn btn-xl">CONHEÇA NOSSOS CURSOS</a>
					</div>
				</div>
			</div>
		</header>
		<section id="about" class="light-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2>SOBRE</h2>
							<p>Promovemos cursos de alta qualidade, elaborado pelos melhores profissionais qualificados.</p>
						</div>
					</div>
				</div>
				
			</div>
			<!-- /.container -->
		</section>
		
		<section class="overlay-dark bg-img1 dark-bg short-section">
			<div class="container text-center">
				<div class="row">
					<div class="col-md-offset-3 col-md-3 mb-sm-30">
						<div class="counter-item">
							<a href="#course" class="page-scroll"><h6>Cursos</h6></a>
						</div>
					</div>
					
					<div class="col-md-3 mb-sm-30">
						<div class="counter-item">
							<a href="#team" class="page-scroll"><h6>Equipe</h6></a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="course" class="light-bg">
			<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="section-title">
						<h2>CURSOS</h2>
						<p>Confira abaixo os nossos cursos</p>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- start portfolio item -->
				<?php 
				if(!empty($courses)){
					foreach($courses as $course){ ?>
				<div class="col-md-4">
					<div class="ot-portfolio-item">
						<figure class="effect-bubba">
							<img src="<?= base_url().$course["course_img"]; ?>" alt="img02" class="img-responsive center-block" />
							<figcaption>
								<a href="#" data-toggle="modal" data-target="#course_<?= $course["course_id"]?>"></a>
							</figcaption>
						</figure>
					</div>
				</div>
				
				<!-- Modal for portfolio item 1 -->
				<div class="modal fade" id="course_<?= $course["course_id"]?>" tabindex="-1" role="dialog" aria-labelledby="Modal-label-1">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="Modal-label-1"><?= $course["course_name"]?></h4>
							</div>
							<div class="modal-body">
								<img src="<?= base_url().$course["course_img"]; ?>" alt="img01" class="img-responsive center-block" />
								<div class="modal-works"><span>Duração: <?= intval($course["course_duration"])?> (h)</span></div>
								<p><?= $course["course_description"]?></p>
							</div>
							<div class="modal-footer">
								<a href="http://tattudc.github.io/pagelaboleite"><button type="button" class="btn btn-success">Comprar - R$50</button></a>
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
				<?php } //Foreach
				} //if ?>
				<!-- end portfolio item -->
			</div>
			</div><!-- end container -->
		</section>
		
		<section id="team" class="light-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2>Nossos Instrutores</h2>
							<p>Profissionais altamente qualificados.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- team member item -->
					<?php 
					if(!empty($teams)){
					foreach($teams as $team){ ?>
					<div class="col-md-3">
						<div class="team-item">
							<div class="team-image">
								<img src="<?= base_url().$team["member_photo"];?>" class="img-responsive img-circle center-block" alt="author">
							</div>
							<div class="team-text">
								<h3><?= $team["member_name"]?></h3>
								<div class="team-position"><?= $team["member_description"]?></div>
							</div>
						</div>
					</div>
					<?php } //Foreach
					} //if ?>
					<!-- end team member item -->
				</div>
			</div>
		</section>
		<section id="contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2>CONTATOS</h2>
							<p>Entre em contato conosco.<br>Responderemos o mais breve possível!</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<h3>Nosso escritório</h3>
						<p>Rua São Francisco J02, Centro, Extremoz</p>
						<p><i class="fa fa-phone"></i> (84)99820-3016</p>
						<p><i class="fa fa-envelope"></i> corujinhacursos@gmail.com</p>
					</div>
					<div class="col-md-3">
						<h3>Horários</h3>
						<p><i class="fa fa-clock-o"></i> <span class="day">Semana:</span><span>8h às 18h</span></p>
						<p><i class="fa fa-clock-o"></i> <span class="day">Sábados:</span><span>8h às 12h</span></p>
						<p><i class="fa fa-clock-o"></i> <span class="day">Domingos:</span><span>Fechado</span></p>
					</div>
					<div class="col-md-6">
						<form name="sentMessage" id="contactForm" novalidate="">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Insira o seu nome" id="name" required="" data-validation-required-message="Por favor insira o seu nome">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Insira o seu email" id="email" required="" data-validation-required-message="Por favor insira o seu email">
										<p class="help-block text-danger"></p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="form-control" placeholder="Digite sua mensagem aqui..." id="message" required="" data-validation-required-message="Digite uma mensagem"></textarea>
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								<div class="col-lg-12 text-center">
									<div id="success"></div>
									<button type="submit" class="btn">Enviar</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<p id="back-top">
			<a href="#top"><i class="fa fa-angle-up"></i></a>
		</p>