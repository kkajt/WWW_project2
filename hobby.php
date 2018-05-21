<?php
/**
 * Created by PhpStorm.
 * User: kajetan
 * Date: 06/05/2018
 * Time: 18:38
 */

require_once(__DIR__."/php/MyPage.php");

$DESCRIPTION = "Kajetan Korzycki: moje przygody z edukacją.";
$STYLE =<<<EOT
EOT;
$CURRENT = "Hobby";

// generuejmy stronę i ustawiamy jej parametry
$P =  new myPage("K Korzycki: Hobby");
$P->SetDescription($DESCRIPTION);

// Wyświetlamy początek strony
echo $P->Begin();
echo $P->PageHeader();
echo $P->Menu($CURRENT);
?>
	
	<div style="height: 1em;"></div>

    <div class="container">
		<nav class="nav-terms">
			<div class="row">
					<a href="#music" class="menu-comp col-4-12">
						<div>Muzyka</div>
					</a>
					<a href="#travelling" class="menu-comp col-4-12">
						<div>Podróże</div>
					</a>
					<a href="#film" class="menu-comp col-4-12">
						<div>Film</div>
					</a>
			</div>
		</nav>

		<div id="music">
			<div class="hob-elem row">
				<img src="img/drum2.jpg" alt="photo" class="hob-pic" id="pic-drum">
				<div class="col-8-12">
					<div class="hob-title1">
						<h2>Muzyka</h2>
					</div>
					<p> Stanowi ona istotną część mojego życia, której poświęciłem dużo czasu i zawdzięczam wiele przyjemności i znajomości. </p>
					<p>Od szkoły podstawowej pasjonuje mnie gra na perkusji. Przez część gimnazjum i liceum pobierałem lekcje gry na instrumentach perkusyjnych u naczyciela w szkole muzycznej. Dzięki temu miałem okazję nauczyć się czytać podstawowe nuty, poznać świat muzyczny od środka. Potrafię także docenić tak często niedocenianą pracę muzyków.</p>
					<p> Poza tym chętnie udzielałem się przy każdej możliwej okazji w różnych projektach muzycznych i zespołach. </p>
				</div>
			</div>

		</div>

		<div style="height: 5em;"></div>

		<div id="travelling">
			<div class="hob-elem row">
				<img src="img/portugal.jpg" alt="photo" class="hob-pic2" id="pic-portugal">
				<div class="col-4-12"></div>
				<div class="col-8-12">
					<div class="hob-title2">
						<h2>Podróże</h2>
					</div>
					<p> Czas wolny od studiów coraz częściej udaje mi się spędzić na podróżowaniu. I całe szczęścia nie mam na myśli tylko czterogodzinnych podróży PKP z Wrocławia do domu rodzinnego. W ostatnim czasie udało mi się zwiedzić kilka europejskich państw, włączając w to także podróż autostopem. Apetyt nie ustaje, stąd nadal w wolnych chwilach z przyjemnością i rozmarzeniem szukam kolejnych puntków na mapie do zdobycia i czekam na najbliższe dni wolne.</p>
					<p>
					A o tym, że podróże kształcą, wiadomo nie od dziś. Korzyści płynące z podróży nie należą do wymiernych, natomiast z pewnością kształtują one moją osobowość i wpłynęły na mój światopogląd. 
					</p>
				</div>
			</div>
		</div>

		<div style="height: 5em;"></div>

		<div id="film">
			<div class="hob-elem">
				<div class="row">
					<img src="img/frog.jpg" alt="photo" class="hob-pic" id="pic-frog">
					<div class="col-8-12">
						<div class="hob-title1">
							<h2>Film</h2>
						</div>
						<p> Jak zapewne każdy, lubię także dobry film. Uważam, że jest to świetny środek przekazu. Może oddziaływać w bardzo różny sposób na odbiorcę i pełnić przeróżne funkcje.</p>
						<p>Myślę, że zdecydowanie warto zainteresować sie bardziej filmem i eksplorować pozycje niewyświetlane w większości kin. Polecam także festiwale filmowe, w szczególności festiwal operatorów Camerimage odbywający się w Bydgoszczy. Osobiście uczestniczyłem w nim dwukrotnie jako wolontariusz, ale jest to świetne miejsce zarówno dla twórców, jak i po prostu ciekawych widzów. Daje szansę zobaczyć ciekawe produkcje z całego świata, z różnych gatunków kina, spotkać się z ich twórcami oraz dowiedzieć się wiele na temat sztuki filmowej.</p>
					</div>
				</div>
				<div class="row">
					<div class="hob-filmrec col-12-12">
						<h3>Z uwagi na temat strony pragnę polecić ostatnio widziane przeze mnie pozycje związane z szeroko pojętą cyfryzacją świata:</h3>
						<ul>
							<li><cite>Cloud Atlas</cite> - (2012) reż. Tom Tykwer, Lana Wachowski, Lilly Wachowsky</li>
							<li><cite>Black Mirror</cite> - (2011-) serial, twórca Charlie Brooker</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
			
	</div>

<?php
echo $P->End();
?>