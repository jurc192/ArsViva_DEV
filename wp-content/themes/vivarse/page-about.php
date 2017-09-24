<?php get_header(); ?>

<main id="main" class="site-main">

	<?php get_sidebar(); ?>
	<article class="section" data-anchor="zgodovina">
		<img class="backgr" src="<?php the_field('ozavodu-slika1'); ?>" alt="Fotografija predstavitev">
		<div class="text-tile static little-text">
			<?php the_field('ozavodu-predstavitev'); ?>
		</div>
	</article>

	<article style="background-color: black;" class="section" data-anchor="about_video">
		<video class="htmlvideo" controls>
		<source src="<?php bloginfo('template_url'); ?>/images/video-ozavodu.mp4" type="video/mp4">
		Your browser does not support the video tag.
		</video>
	</article>
	
	<article class="section">
		<img class="backgr" src="<?php the_field('ozavodu-slika4'); ?>" alt="Fotografija prostori">
		<div class="text-tile">
			<?php the_field('ozavodu-prostori'); ?>
		</div>
	</article>

	<article class="section" data-anchor="map">
		<div id="zemljevid-area">
			<img id="zemljevid" src="<?php bloginfo('template_url'); ?>/images/zemljevid.png">
			<img id="myImg1" src="<?php bloginfo('template_url'); ?>/images/zemljevid-amfiteater.jpg">
			<img id="myImg3" src="<?php bloginfo('template_url'); ?>/images/zemljevid-apartma.jpg">
			<img id="myImg4" src="<?php bloginfo('template_url'); ?>/images/zemljevid-dvorisce.jpg">
			<img id="myImg5" src="<?php bloginfo('template_url'); ?>/images/zemljevid-vhod.jpg">
		</div>
		<div id="myModal1" class="modal">
			<span id="close2" onclick="document.getElementById('myModal1').style.display='none'">&times;</span>
			<img class="modal-content" src="<?php bloginfo('template_url'); ?>/images/zemljevid-amfiteater.jpg">
		</div>
		<div id="myModal3" class="modal">
			<span id="close3" onclick="document.getElementById('myModal3').style.display='none'">&times;</span>
			<img class="modal-content" src="<?php bloginfo('template_url'); ?>/images/zemljevid-apartma.jpg">
		</div>
		<div id="myModal4" class="modal">
			<span id="close4" onclick="document.getElementById('myModal4').style.display='none'">&times;</span>
			<img class="modal-content" src="<?php bloginfo('template_url'); ?>/images/zemljevid-dvorisce.jpg">
		</div>
		<div id="myModal5" class="modal">
			<span id="close5" onclick="document.getElementById('myModal5').style.display='none'">&times;</span>
			<iframe class="modal-content" id="modal-map"src="https://www.google.com/maps/embed?pb=!1m0!3m2!1ssl!2sus!4v1504112212072!6m8!1m7!1sCAoSLEFGMVFpcE5kNFlhLWRWM2JkS2ZLUUZpNHhrMkFZcVRPenBEZDFmZm0yVnNz!2m2!1d45.71218779648877!2d14.45914779806241!3f141.89!4f-3.8299999999999983!5f0.7820865974627469" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</article>

	<article class="section" data-anchor="poslanstvo">
		<img class="backgr" src="<?php the_field('ozavodu-slika2'); ?>" alt="Fotografija poslanstvo">
		<div class="text-tile static">
			<?php the_field('ozavodu-poslanstvo'); ?>
		</div>
	</article>

	<article class="section" data-anchor="zgodovina">
		<img class="backgr" src="<?php the_field('ozavodu-slika3'); ?>" alt="Fotografija zgodovina">
		<div class="text-tile static">
			<?php the_field('ozavodu-zgodovina'); ?>
		</div>
	</article>


<!-- JURE BACKP -->
	<!-- <main id="main" class="site-main">

		<article class="section">
			<img class="backgr" src="<?php bloginfo('template_url'); ?>/images/fotke_2/ars_viva.jpg" alt="Zavod Ars Viva">

			<div class="text-tile-static">
				<h2>Predstavitev</h2>
				<p class="dosti-teksta">
					Domačija Žnidaršič se nahaja v občini Loška dolina, natančneje v vasi Podcerkev. Tu je kot sad pridnega
					dela, vztrajnosti ter dobre volje nastala domačija, ki se je v dobrem stoletju razvila v pravi kulturni cen-ter
					na podeželju.
				</p>
				<p class="dosti-teksta">
					Tak kulturni center in inkubator razvojnih in tehnoloških idej, ki bodo spremenile življenje prebivalcev na
					vasi in jim ponudile rešitve, da bodo lahko v tem okolju preživeli. Kultura in kulturna dediščina nam bo
					sredstvo in polje izražanja ter možnost za uveljavljanja drugačnosti.
				</p>
			</div>
		</article>



		<article style="background-color: black;" class="section">
			<video class="htmlvideo" controls>
			<source src="http://video.webmfiles.org/elephants-dream.webm" type="video/webm">
			Your browser does not support the video tag.
			</video>
		</article>


		<article class="section">
			<img class="backgr" src="<?php bloginfo('template_url'); ?>/images/fotke_2/knjiznica.jpg" alt="Knjiznica">

			<div class="slide">
				<div class="text-tile-static">
					<h2>Prostori</h2>
					<p>
						Obiskovalcem domačije nudimo različne možnosti za druženje in sprostitev. Tako so vam na voljo različni
						prostori in okolja, kjer boste zagotovo našli nekaj zase.
					</p>
				</div>
			</div>

			<div class="slide">
				<div class="text-tile-static">
					<h2>Kuhinja s krušno pečjo</h2>
					<p>
						V »hiši« - kot se je včasih reklo - si lahko privoščite oddih na krušni peči ali pa se ob branju dobre knjige
						preprosto prepustite trenutku in užijete veličino domačnosti.
					</p>
				</div>
			</div>

			<div class="slide">
				<div class="text-tile-static">
					<h2>Dvorana</h2>
					<p>
						Dvorana, ki sprejme od 80 do 100 oseb, ponuja možnosti za vrsto različnih aktivnosti, kot so različna
						praznovanja in drugo.
					</p>
				</div>
			</div>

			<div class="slide">
				<div class="text-tile-static">
					<h2>Galerija</h2>
					<p>
						V galeriji si lahko ogledate stalne in občasne razstave slikarja, pesnika in pisatelja Benjamina Žnidaršiča in
						drugih umetnikov, ki s svojim talentom pričajo o lepoti, ki nas obkroža. Prav tako se v samem pro-storu
						nahaja tudi info točka.
					</p>
				</div>
			</div>

			<div class="slide">
				<div class="text-tile-static">
					<h2>Piknik prostor</h2>
					<p>
						Piknik prostor vam ponuja možnost za različna praznovanja, prav tako pa se v okviru omenjenega prostora
						odvijajo različna izobraževanja in delavnice. Prostor tako ponuja nepozabno izkušnjo podeželja.
					</p>
				</div>
			</div>

			<div class="slide">
				<div class="text-tile-static">
					<h2>Stara žaga</h2>
					<p>
						Stara žaga se nahaja le nekaj kilometrov od same domačije. Če si želite sprostitve in oddiha, je to idealen
						kraj za vas. Tu si namreč lahko privoščite oddih za telo in dušo ter prisluhnete žuborenju reke in se
						sprostite v objemu narave.
					</p>
				</div>
			</div>

			<div class="slide">
				<div class="text-tile-static">
					<h2>Gledališče</h2>
					<p>
						V izgradnji je letno gledališče, ki bo ponujalo pester program, v okviru katerega bomo za vas pripravili
						številne nastope, gledališke predstave, predavanja, filmske festivale, kino na prostem in še mnogo
						aktivnosti.
					</p>
				</div>
			</div>

			<div class="slide">
				<div class="text-tile-static">
					<h2>Hostel in kamp</h2>
					<p>
						Naša ponudba turistične nastanitve je zanimiva tudi za ranljive skupine. Ponujamo nastanitev v apartmaju
						in hostlu v Podcerkvi ter kampu na izviru Veliki Obrh.
					</p>
					<p>
						Več o nastanitvi na: <a href="http://youthostel.znidarsic.net">http://youthostel.znidarsic.net</a>
					</p>
				</div>
			</div>

		</article>


		<article class="section">

			<div id="zemljevid-area">
				<img id="zemljevid" src="<?php bloginfo('template_url'); ?>/images/zemljevid.png">
				<img id="myImg1" src="<?php bloginfo('template_url'); ?>/images/sidebar-insta.png">
				<img id="myImg2" src="<?php bloginfo('template_url'); ?>/images/sidebar-insta.png">
				<img id="myImg3" src="<?php bloginfo('template_url'); ?>/images/sidebar-insta.png">
				<img id="myImg4" src="<?php bloginfo('template_url'); ?>/images/sidebar-insta.png">
				<img id="myImg5" src="<?php bloginfo('template_url'); ?>/images/sidebar-insta.png">
			</div>

			<div id="myModal1" class="modal">
				<span id="close2" onclick="document.getElementById('myModal1').style.display='none'">&times;</span>
				<iframe class="modal-content"  src="https://www.google.com/maps/embed?pb=!1m0!3m2!1ssl!2sus!4v1504112212072!6m8!1m7!1sCAoSLEFGMVFpcE5kNFlhLWRWM2JkS2ZLUUZpNHhrMkFZcVRPenBEZDFmZm0yVnNz!2m2!1d45.71218779648877!2d14.45914779806241!3f141.89!4f-3.8299999999999983!5f0.7820865974627469" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div id="myModal2" class="modal">
				<span id="close2" onclick="document.getElementById('myModal2').style.display='none'">&times;</span>
				<img class="modal-content" src="<?php bloginfo('template_url'); ?>/images/ozavodu-fotka1.jpg">
			</div>
			<div id="myModal3" class="modal">
				<span id="close3" onclick="document.getElementById('myModal3').style.display='none'">&times;</span>
				<img class="modal-content" src="<?php bloginfo('template_url'); ?>/images/ozavodu-fotka1.jpg">
			</div>
			<div id="myModal4" class="modal">
				<span id="close4" onclick="document.getElementById('myModal4').style.display='none'">&times;</span>
				<img class="modal-content" src="<?php bloginfo('template_url'); ?>/images/ozavodu-fotka1.jpg">
			</div>
			<div id="myModal5" class="modal">
				<span id="close5" onclick="document.getElementById('myModal5').style.display='none'">&times;</span>
				<img class="modal-content" src="<?php bloginfo('template_url'); ?>/images/ozavodu-fotka1.jpg">
			</div>

		</article>


		<article class="section">
			<img class="backgr" src="<?php bloginfo('template_url'); ?>/images/fotke_2/otroci_na_delavnici.jpg" alt="Otroci na delavnici">

			<div class="slide">
				<div class="text-tile-static">
					<h2>Poslanstvo</h2>
					<p class="dosti-teksta">
						Poslanstvo Zavoda ARS VIVA je poiskati odgovore na vprašanja, povezana z enakimi možnostmi ter
						neodvisnostjo družbenih skupin, še posebno tistih, ki pri svojem vključevanju potrebujejo pomoč.
					</p>
					<p class="dosti-teksta">
						Naš cilj je, da z vzgojno- izobraževalnimi, raziskovalnimi in socialnimi dejavnostmi širimo zavest in znanja o
						človeku in kompleksnosti ter načinih njegovega vključevanja v sodobno raznoliko družbo.
					</p>
				</div>
			</div>


			<div class="slide">
				<div class="text-tile-static">
					<h2>Poslanstvo</h2>
					<p class="dosti-teksta">
						Naše prizadevanje je usmerjeno k izboljšanju poznavanja in razumevanja življenja na podeželju in
						razumevanje različnih družbenih skupin, da bi tako izničili strah in demistificirali dojemanje le-tega in s
						tem omogočili vračanje prebivalstva na podeželje. Obenem bomo odpirati in kazati na nove možnosti
						vključevanja depriviligiranih skupin in posameznikov. Predvsem pa hočemo mladino skozi neformalno
						izobraževanje seznaniti z mnogimi možnostmi za zaposlitev.
					</p>
				</div>
			</div>

		</article>


		<article class="section">
			<img class="backgr" src="<?php bloginfo('template_url'); ?>/images/fotke_2/stara_hisa.jpg" alt="Stara hisa">

			<div class="slide">
				<div class="text-tile-static">
					<h2>Zgodovina</h2>
					<p class="dosti-teksta">
						Nekoč je kmetijo sestavljala »bajta« z majhnim delom njive, kasneje pa je prerasla v večje zemljišče. »Pri
						Lužarjevih« se je vedno živelo skromno. Lužarjev ata - Janez Žnidaršič- je imel dva sina Ivana in Justina ter
						hčerko Ano. Nekdanji lastnik Janez je bili obenem tudi znan kontrabantar (tihotapec čez nekdanjo mejo v
						Italijo), ki je tihotapili konje čez takratno jugoslovansko – italijansko mejo. Zbirališče konj je bilo prav v
						Lužarjevi štali, kjer se danes nahaja galerija.
					</p>
				</div>
			</div>

			<div class="slide">
				<div class="text-tile-static">
					<h2>Zgodovina</h2>
					<p>
						Leta 1996 je kmetijo prevzel invalid tetraplegik Benjamin Žnidaršič, ki se je kot pesnik, pisatelj, slikar in
						dolgoletni kulturni delavec pri Zvezi paraplegikov Slovenije, leta 2009 odločil iz kmetije narediti kulturni
						center.
					</p>
				</div>
			</div>

		</article> -->

<?php
get_sidebar();
get_footer();
 ?>
