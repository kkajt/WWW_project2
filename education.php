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
$CURRENT = "Edukacja";

$P =  new myPage("K Korzycki: Edukacja");
$P->SetDescription($DESCRIPTION);

echo $P->Begin();
echo $P->PageHeader();
echo $P->Menu($CURRENT);
?>
	<div style="height: 1em;"></div>

    <div class="container">
		<nav class="nav-terms">
			<div class="row">
					<a href="#highschool" class="menu-comp col-2-12">
						<div>Szkoła średnia</div>
					</a>
					<a href="#term1" class="menu-comp col-2-12">
						<div>Semestr I</div>
					</a>
					<a href="#term2" class="menu-comp col-2-12">
						<div>Semestr II</div>
					</a>
					<a href="#term3" class="menu-comp col-2-12">
						<div>Semestr III</div>
					</a>
					<a href="#term4" class="menu-comp col-2-12">
						<div>Semestr IV</div>
					</a>
						
			</div>
		</nav>
			<div class="row">	
				<div class="col-12-12">
					<div id="highschool">
						<div class="term">
	                    	<div class="row col-12-12 term-header">
	                    		<h2> Szkoła średnia</h2>
	                    	</div>
	                    	<div class="row">
		                    	<div class="term-inside col-12-12">
		                    		<div class="row">
		                    			<div class="col-8-12">
		                    				<h2>VI LO im. Jana i Jędrzeja Śniadeckich w Bydgoszczy</h2>
		                    				<div style="height: 0.25em;"></div>
			                    			<p>
			                    				Czasy te wspominam bardzo ciepło. W tej szkole spędziłem łącznie 6 lat, gdyż kończyłem gimnazjum przy tymże liceum, i miałem okazję nauczyć się wielu rzeczy. Poza typowo naukowym aspektem szkoły, wynikającej z wysokiego poziomu uczniów oraz nauczycieli, szczególnie cenię sobie także umiejętności niezwiązane z programem edukacyjnym. Działałem aktywnie na kilku płaszczyznach, między innymi w samorządzie, dzięki czemu miałem okazję spróbować się w różnych dziedzinach, podszkolić umiejętności miękkie oraz przede wszystkim nawiązać trwające do dziś przyjaźnie i znajomości.
			                    			</p>
		                    			</div>
		                    			<div class="col-4-12">
		                    				<img src="img/VILO.jpg" alt="photo" id="img-school">
		                    			</div>
		                    		</div>
		                    	</div>
	                    	</div>
	                    	<div class="row">
            					<a href="#logo" class="button retbutton">Powrót</a>
        					</div>
	                    </div>
                	</div>
					<div style="height: 2em;"></div>
					<div id="term1">
						<div class="term">
	                    	<div class="row col-12-12 term-header">
	                    		<h2> Studia: Semestr I (2016/2017) </h2>
	                    	</div>
	                    	<div class="row">
		                    	<div class="term-inside col-12-12">
		                    		<div class="row">
		                    			<h2>Analiza matematyczna 1</h2>
		                    		</div>
		                    		<div class="cont row cont">
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header1">Czego się dowiedziałem?</h3>
		                    				<ul class="ul-skills">
		                    					<li>Podciąg podciągu jest podciągiem ciągu</li>
		                    					<li>Jak brzmią formalne definicje intuicyjnych pojęć </li>
		
		                    				</ul>
		                    			</div>
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header2">Czego warto się douczyć?</h3>
		                    				<ul class="ul-skills">
		                    					<li>Doszkolić całkowanie</li>
		                    					<li>Rachunku różniczkowego</li>
		                    				</ul>
		                    			</div>
		                    		</div>
		                    		<div class="row">
		                    			<h2>Algebra z geometrią analityczną</h2>
		                    		</div>
		                    		<div class="row">
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header1">Czego się dowiedziałem?</h3>
		                    				<ul class="ul-skills">
		                    					<li>Jak istotna jest algebra w informatyce</li>
		                    					<li>Jakie własności algebraiczne i algorytmy są kluczowe</li>
		                    				</ul>
		                    			</div>
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header2">Czego warto się douczyć?</h3>
		                    				<ul class="ul-skills">
		                    					<li>Samemu popracować nad różnymi ciałami : )</li>
		                    					<li>Więcej teorii liczb zespolonych</li>
		                    				</ul>
		                    			</div>
		                    		</div>
		                    		<div class="row">
		                    			<h2>Logika i struktury formalne</h2>
		                    		</div>
		                    		<div class="row">
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header1">Czego się dowiedziałem?</h3>
		                    				<ul class="ul-skills">
		                    					<li>Jak pisać i czytać formalne ślaczki</li>
		                    					<li>Jak prawidłowo dowodzić</li>
		                    				</ul>
		                    			</div>
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header2">Czego warto się douczyć?</h3>
		                    				<ul class="ul-skills">
		                    					<li>Co nieco więcej o strukturach formalnych</li>
		                    					<li>Dowodzenie w teorii grafów</li>
		                    				</ul>
		                    			</div>
		                    		</div>
		                    		<div class="row">
		                    			<h2>Wstęp do informatyki i programowania</h2>
		                    		</div>
		                    		<div class="row">
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header1">Czego się dowiedziałem?</h3>
		                    				<ul class="ul-skills">
		                    					<li>Co to niezmiennik pętli : )</li>
		                    					<li>Jak wiele jest paradygmantów programowania</li>
		                    				</ul>
		                    			</div>
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header2">Czego warto się douczyć?</h3>
		                    				<ul class="ul-skills">
		                    					<li>Standardu ANSI C</li>
		                    					<li>Operacji na drzewach binarnych</li>
		                    				</ul>
		                    			</div>
		                    		</div>
		                    	</div>
	                    	</div>
	                    	<div class="row">
            					<a href="#logo" class="button retbutton">Powrót</a>
        					</div>
	                    </div>
	                </div>
					<div style="height: 2em;"></div>
					<div id="term2">
						<div class="term">
	                    	<div class="row col-12-12 term-header">
	                    		<h2> Studia: Semestr II (2016/2017) </h2>
	                    	</div>
	                    	<div class="row">
		                    	<div class="term-inside col-12-12">
		                    		<div class="row">
		                    			<h2>Analiza matematyczna 2</h2>
		                    		</div>
		                    		<div class="row">
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header1">Czego się dowiedziałem?</h3>
		                    				<ul class="ul-skills">
		                    					<li>Wiele wymiarów komplikuje sprawę</li>
		                    					<li>Reguły łańcucha</li>
		                    				</ul>
		                    			</div>
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header2">Czego warto się douczyć?</h3>
		                    				<ul class="ul-skills">
		                    					<li>Rozumienia analogii dla dowolnej ilości wymiarów</li>
		                    					<li>Zastosowania pochodnych wyższych rzędów w informatyce</li>
		                    				</ul>
		                    			</div>
		                    		</div>
		                    	</div>
	                    	</div>
	                    	<div class="row">
		                    	<div class="term-inside col-12-12">
		                    		<div class="row">
		                    			<h2>Algebra abstrakcyjna i kodowanie</h2>
		                    		</div>
		                    		<div class="row">
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header1">Czego się dowiedziałem?</h3>
		                    				<ul class="ul-skills">
		                    					<li>Jak ciekawa może być algebra</li>
		                    					<li>Warto być na bieżąco z wykładem</li>
		                    				</ul>
		                    			</div>
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header2">Czego warto się douczyć?</h3>
		                    				<ul class="ul-skills">
		                    					<li>Kryptografii, zastosowań poznanych struktur</li>
		                    					<li>Konkretnych zastosowań teorii kodowania</li>
		                    				</ul>
		                    			</div>
		                    		</div>
		                    	</div>
	                    	</div>
	                    	<div class="row">
		                    	<div class="term-inside col-12-12">
		                    		<div class="row">
		                    			<h2>Matematyka dyskretna</h2>
		                    		</div>
		                    		<div class="row">
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header1">Czego się dowiedziałem?</h3>
		                    				<ul class="ul-skills">
		                    					<li>Co to i jak wykorzystać funkcje tworzące</li>
		                    					<li>Jak sprawnie używać duwmianu Newtona i liczb Strilinga</li>
		                    				</ul>
		                    			</div>
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header2">Czego warto się douczyć?</h3>
		                    				<ul class="ul-skills">
		                    					<li>Funkcji tworzących wielu zmiennych</li>
		                    					<li>Tworzenia strategii wygrywających</li>
		                    				</ul>
		                    			</div>
		                    		</div>
		                    	</div>
	                    	</div>
	                    	<div class="row">
		                    	<div class="term-inside col-12-12">
		                    		<div class="row">
		                    			<h2>Kurs programowania</h2>
		                    		</div>
		                    		<div class="row">
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header1">Czego się dowiedziałem?</h3>
		                    				<ul class="ul-skills">
		                    					<li>Java da się lubić</li>
		                    					<li>Czemu applet to nie jest dobry pomysł</li>
		                    				</ul>
		                    			</div>
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header2">Czego warto się douczyć?</h3>
		                    				<ul class="ul-skills">
		                    					<li>Nowych technologii wykorzystujących Javę</li>
		                    					<li>Obiektowego C++</li>
		                    				</ul>
		                    			</div>
		                    		</div>
		                    	</div>
	                    	</div>
	                    	<div class="row">
		                    	<div class="term-inside col-12-12">
		                    		<div class="row">
		                    			<h2>Fizyka</h2>
		                    		</div>
		                    		<div class="row">
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header1">Czego się dowiedziałem?</h3>
		                    				<ul class="ul-skills">
		                    					<li>Jak przedstwić setki slajdów ze złożonymi rachunkami i pojęciami w ciągu jednego wykładu</li>
		                    					<li>Jak wiele zależy od prowadzącego ćwiczenia</li>
		                    				</ul>
		                    			</div>
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header2">Czego warto się douczyć?</h3>
		                    				<ul class="ul-skills">
		                    					<li>Po co fizyka informatykowi</li>
		         
		                    				</ul>
		                    			</div>
		                    		</div>
		                    	</div>
	                    	</div>
	                    	<div class="row">
		                    	<div class="term-inside col-12-12">
		                    		<div class="row">
		                    			<h2>Problemy prawne informatyki</h2>
		                    		</div>
		                    		<div class="row">
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header1">Czego się dowiedziałem?</h3>
		                    				<ul class="ul-skills">
		                    					<li>Jak wiele niebezpieczeństw czycha na twórców i użytkowników oprogramowania</li>
		                    					<li>Jak przepisy są przestarzałe i niekonsekwentne</li>
		                    				</ul>
		                    			</div>
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header2">Czego warto się douczyć?</h3>
		                    				<ul class="ul-skills">
		                    					<li>Jakie dokładnie kary i za co nam grożą</li>
		                    					<li>Gdzie można sie bezpiecznie zaszyć</li>
		                    				</ul>
		                    			</div>
		                    		</div>
		                    	</div>
	                    	</div>
	                    	<div class="row">
            					<a href="#logo" class="button retbutton">Powrót</a>
        					</div>
	                    </div>
	                </div>
					<div style="height: 2em;"></div>
					<div id="term3">
						<div class="term">
	                    	<div class="row col-12-12 term-header">
	                    		<h2> Studia: Semestr III (2017/2018) </h2>
	                    	</div>
	                    	<div class="row">
		                    	<div class="term-inside col-12-12">
		                    		<div class="row">
		                    			<h2>Metody probabilistyczne i statystyka</h2>
		                    		</div>
		                    		<div class="row">
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header1">Czego się dowiedziałem?</h3>
		                    				<ul class="ul-skills">
		                    					<li>Co to wartośc oczekiwana i po co to komu</li>
		                    					<li>Co to rozkład prawdopodobieństwa i dystrybuanta</li>
		                    				</ul>
		                    			</div>
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header2">Czego warto się douczyć?</h3>
		                    				<ul class="ul-skills">
		                    					<li>Współczesnych metod statystyki</li>
		                    					<li>Analizy prawdziwych problemów</li>
		                    				</ul>
		                    			</div>
		                    		</div>
		                    	</div>
	                    	</div>
	                    	<div class="row">
		                    	<div class="term-inside col-12-12">
		                    		<div class="row">
		                    			<h2>Architektura komputerów i systemy operaycjne</h2>
		                    		</div>
		                    		<div class="row">
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header1">Czego się dowiedziałem?</h3>
		                    				<ul class="ul-skills">
		                    					<li>Jak nie pisać bardzo prostych programów w assemblerze : )</li>
		                    					<li>Jak zabłysnąć na rozmowie kwalifykacynej o C</li>
		                    				</ul>
		                    			</div>
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header2">Czego warto się douczyć?</h3>
		                    				<ul class="ul-skills">
		                    					<li>Architektury innych bardzo prostych procesorków</li>
		                    					<li>Współczesnego assemblera</li>
		                    				</ul>
		                    			</div>
		                    		</div>
		                    	</div>
	                    	</div>
	                    	<div class="row">
		                    	<div class="term-inside col-12-12">
		                    		<div class="row">
		                    			<h2>Bazy danych i systemy informacyjne</h2>
		                    		</div>
		                    		<div class="row">
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header1">Czego się dowiedziałem?</h3>
		                    				<ul class="ul-skills">
		                    					<li>Jak pisać złożone zapytania przy użyciu tylko funkcji agregujących</li>
		                    					<li>Warto analizować zasady zaliczenia</li>
		                    				</ul>
		                    			</div>
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header2">Czego warto się douczyć?</h3>
		                    				<ul class="ul-skills">
		                    					<li>Jak praktycznie zabezpieczyć bazę danych</li>
		                    					<li>Jakich baz używać</li>
		                    				</ul>
		                    			</div>
		                    		</div>
		                    	</div>
	                    	</div>
	                    	<div class="row">
		                    	<div class="term-inside col-12-12">
		                    		<div class="row">
		                    			<h2>Technologia programowania</h2>
		                    		</div>
		                    		<div class="row">
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header1">Czego się dowiedziałem?</h3>
		                    				<ul class="ul-skills">
		                    					<li>Jak przydatne są wzorce projektowe</li>
		                    					<li>Jak pracować z użyciem repo</li>
		                    					<li>Jak czytelnie pisać kod</li>
		                    					<li>Co ma na myśli programista mówiąc KISS</li>
		                    				</ul>
		                    			</div>
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header2">Czego warto się douczyć?</h3>
		                    				<ul class="ul-skills">
		                    					<li>Pozostałych wzorców</li>
		                    					<li>Spring</li>
		                    				</ul>
		                    			</div>
		                    		</div>
		                    	</div>
	                    	</div>
	                    	<div class="row">
            					<a href="#logo" class="button retbutton">Powrót</a>
        					</div>
	                    </div>
	                </div>
					<div style="height: 2em;"></div>
					<div id="term4">
						<div class="term">
	                    	<div class="row col-12-12 term-header">
	                    		<h2> Studia: Semestr IV (2016/2017) </h2>
	                    	</div>
	                    	<div class="row">
		                    	<div class="term-inside col-12-12">
		                    		<div class="row">
		                    			<h2>Nowoczesne technologie WWW</h2>
		                    		</div>
		                    		<div class="row">
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header1">Czego się dowiedziałem?</h3>
		                    				<ul class="ul-skills">
		                    					<li>Dlaczego CRAP jest porządany</li>
		                    					<li>Jak szybko szukać pasujących kolorków</li>
		                    				</ul>
		                    			</div>
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header2">Czego warto się douczyć?</h3>
		                    				<ul class="ul-skills">
		                    					<li>Bootstrap</li>
		                    					<li>Tworzenie stron pod WP</li>
		                    				</ul>
		                    			</div>
		                    		</div>
		                    	</div>
	                    	</div>
	                    	<div class="row">
		                    	<div class="term-inside col-12-12">
		                    		<div class="row">
		                    			<h2>Algorytmy i struktury danych</h2>
		                    		</div>
		                    		<div class="row">
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header1">Czego się dowiedziałem?</h3>
		                    				<ul class="ul-skills">
		                    					<li>Po co są statystyki pozycyjne</li>
		                    					<li>Jak wolny jest Insertion Sort</li>
		                    				</ul>
		                    			</div>
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header2">Czego warto się douczyć?</h3>
		                    				<ul class="ul-skills">
		                    					<li>Różnych drzew i ich zastosowań</li>
		                    					<li>Sprawnego testowania algorytmów</li>
		                    				</ul>
		                    			</div>
		                    		</div>
		                    	</div>
	                    	</div>
	                    	<div class="row">
		                    	<div class="term-inside col-12-12">
		                    		<div class="row">
		                    			<h2>Technologie sieciowe</h2>
		                    		</div>
		                    		<div class="row">
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header1">Czego się dowiedziałem?</h3>
		                    				<ul class="ul-skills">
		                    					<li>Ile kabla trzeba na instalację sieci w nowym mieszkaniu</li>
		                    					<li>Jak śledzić pakiety za pomocą pinga</li>
		                    				</ul>
		                    			</div>
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header2">Czego warto się douczyć?</h3>
		                    				<ul class="ul-skills">
		                    					<li>Jak przechwytywać wszystkie pakiety z lokalnej sieci</li>
		                    					<li>Jakie są realne parametry używanych sieci</li>
		                    				</ul>
		                    			</div>
		                    		</div>
		                    	</div>
	                    	</div>
	                    	<div class="row">
		                    	<div class="term-inside col-12-12">
		                    		<div class="row">
		                    			<h2>Wprowadzenie do teorii grafów</h2>
		                    		</div>
		                    		<div class="row">
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header1">Czego się dowiedziałem?</h3>
		                    				<ul class="ul-skills">
		                    					<li>Jak skrupulatnie można przeprowadzać dowody</li>
		                    					<li>Jak mało mogą znaczyć piątki i plusy</li>
		                    				</ul>
		                    			</div>
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header2">Czego warto się douczyć?</h3>
		                    				<ul class="ul-skills">
		                    					<li>Implementacji grafów</li>
		                    					<li>Innych rodzajów grafów</li>
		                    				</ul>
		                    			</div>
		                    		</div>
		                    	</div>
	                    	</div>
	                    	<div class="row">
		                    	<div class="term-inside col-12-12">
		                    		<div class="row">
		                    			<h2>Grafika komputerowa i wizualizja</h2>
		                    		</div>
		                    		<div class="row">
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header1">Czego się dowiedziałem?</h3>
		                    				<ul class="ul-skills">
		                    					<li>Jak rysować w przeglądarce</li>
		                    					<li>Jak ciężko narysować kwadrat w WebGL</li>
		                    				</ul>
		                    			</div>
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header2">Czego warto się douczyć?</h3>
		                    				<ul class="ul-skills">
		                    					<li>Czystego OoenGLa</li>
		                    					<li>DirectX</li>
		                    				</ul>
		                    			</div>
		                    		</div>
		                    	</div>
	                    	</div>
	                    	<div class="row">
		                    	<div class="term-inside col-12-12">
		                    		<div class="row">
		                    			<h2>Podstawy negocjacji</h2>
		                    		</div>
		                    		<div class="row">
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header1">Czego się dowiedziałem?</h3>
		                    				<ul class="ul-skills">
		                    					<li>Jak bardzo można zniechęcić do siebie grupę</li>
		                    					<li>Jak nie przekazać żadnej wiedzy mimo skupionej uwagi audytorium</li>
		                    				</ul>
		                    			</div>
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header2">Czego warto się douczyć?</h3>
		                    				<ul class="ul-skills">
		                    					<li>Podstaw negocjacji</li>
		                    					<li>Jak oszczędzić tego kursu następnym rocznikom</li>
		                    				</ul>
		                    			</div>
		                    		</div>
		                    	</div>
	                    	</div>
	                    	<div class="row">
		                    	<div class="term-inside col-12-12">
		                    		<div class="row">
		                    			<h2>Przedsiębiorczość</h2>
		                    		</div>
		                    		<div class="row">
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header1">Czego się dowiedziałem?</h3>
		                    				<ul class="ul-skills">
		                    					<li>W ilu miejscach zastrzec dowód po zgubieniu</li>
		                    					<li>Wybór formy firmy nie jest nieodwracalny</li>
		                    				</ul>
		                    			</div>
		                    			<div class="skills col-6-12">
		                    				<h3 class="column-header2">Czego warto się douczyć?</h3>
		                    				<ul class="ul-skills">
		                    					<li>Jak założyć firmę i na co uważać</li>
		                    					<li>Jak prowadzić podstawową księgowość</li>
		                    				</ul>
		                    			</div>
		                    		</div>
		                    		
		                    	</div>
	                    	</div>
	                    	<div class="row">
            					<a href="#logo" class="button retbutton">Powrót</a>
        					</div>
	                    </div>
	                </div>
					<div style="height: 2em;"></div>
				</div>
			</div>
	</div>

<?php
echo $P->End();
?>