<?php get_header(); ?>
<section class="content">
	
	<div class="container">
		<div class="col-md-12">
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#kompetencje">Kompetencje</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#uslugi"> Zakres usług </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#cennik">Cennik</a>
				</li>
			</ul>
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="kompetencje">
					<ul class="list-group media-list media-list-stream">
					
						<?php 
$my_postid = 7;
$content_post = get_post($my_postid);
$content = $content_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
echo $content;
						?>
					</ul>
				</div>
				<div role="tabpanel" class="tab-pane fade in" id="uslugi">
					<ul class="list-group media-list media-list-stream">
						<div class="row">
						

							<div class="col-md-6">
							
								<?php the_field('kolumna_lewa', 11); ?>
							</div>
							<div class="col-md-6">
								
								<?php the_field('kolumna_prawa', 11); ?>
							</div>
						</div>
					</ul>
				</div>
				<div role="tabpanel" class="tab-pane fade in" id="cennik">
					<ul class="list-group media-list media-list-stream">
						<div class="row">
<!--							<div class="col-md-6">-->
<!--								<a href="https://www.znanylekarz.pl/renata-bobinska/psychiatra/warszawa">NZOZ Centrum Terapii DIALOG</a>-->
<!--								<table class="table">-->
<!--									<thead>-->
<!--										<tr>-->
<!--											<th width="65%">Usługa</th>-->
<!--											<th width="35%">Cena</th>-->
<!---->
<!--										</tr>-->
<!--									</thead>-->
<!--									<tbody>-->
<!--										<tr>-->
<!--											<td width="65%">--><?php //the_field('usługa_1', 15); ?><!--</td>-->
<!--											<td width="35%">--><?php //the_field('usługa_1_cena', 15); ?><!--</td>-->
<!---->
<!--										</tr>-->
<!--										<tr>-->
<!--											<td width="65%">--><?php //the_field('usługa_2', 15); ?><!--</td>-->
<!--											<td width="35%">--><?php //the_field('usługa_2_cena', 15); ?><!--</td>-->
<!---->
<!--										</tr>-->
<!---->
<!--									</tbody>-->
<!--								</table>-->
<!--							</div>-->
<!--							<div class="col-md-6">-->
<!--								<a href="https://www.znanylekarz.pl/renata-bobinska/psychiatra/warszawa">Centrum Medyczne Salus Pro Domo</a>-->
<!--								<table class="table">-->
<!--									<thead>-->
<!--										<tr>-->
<!--										<th width="65%">Usługa</th>-->
<!--											<th width="35%">Cena</th>-->
<!---->
<!--										</tr>-->
<!--									</thead>-->
<!--									<tbody>-->
<!--										<tr>-->
<!--											<tr>-->
<!--											<td width="65%">--><?php //the_field('usługa_3', 15); ?><!--</td>-->
<!--											<td width="35%">--><?php //the_field('usługa_3_cena', 15); ?><!--</td>-->
<!---->
<!--										</tr>-->
<!---->
<!--										</tr>-->
<!--										<tr>-->
<!--											<td width="65%">--><?php //the_field('usługa_4', 15); ?><!--</td>-->
<!--											<td width="35%">--><?php //the_field('usługa_4_cena', 15); ?><!--</td>-->
<!---->
<!--										</tr>-->
<!--										<tr>-->
<!--											<td width="65%">--><?php //the_field('usługa_5', 15); ?><!--</td>-->
<!--											<td width="35%">--><?php //the_field('usługa_5_cena', 15); ?><!--</td>-->
<!---->
<!--										</tr>-->
<!--										<tr>-->
<!--											<td width="65%">--><?php //the_field('usługa_6', 15); ?><!--</td>-->
<!--											<td width="35%">--><?php //the_field('usługa_6_cena', 15); ?><!--</td>-->
<!---->
<!--										</tr>-->
<!--									</tbody>-->
<!--								</table>-->
<!--							</div>-->
                            <div class="col-sm-12">
                                <?php the_field('tekst', 15); ?>
                            </div>
						</div>
					</ul>
				</div>
			</div>
		</div>

	</div>

</section>





<?php get_footer(); ?>