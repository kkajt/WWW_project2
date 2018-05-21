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
$CURRENT = "Start";

$P =  new myPage("K Korzycki: Start");
$P->SetDescription($DESCRIPTION);

echo $P->Begin();
echo $P->PageHeader();
echo $P->Menu($CURRENT);
?>


<div class="container">
    <div class="row">
        <div class="col-12-12 aboutme" id="aboutme">
            <h3>Witaj!</h3>
            <p class="slogan">Jestem studentem informatyki na Politechnice Wrocławskiej, a to jest strona poświęcona mojej edukacji. Została wykonana w ramach projektu na kursie "Nowoczesne technologie WWW". Zapraszam Cię do przejrzenia części mojej historii.</p>
        </div>
    </div>
    <div style="height: 3em;"></div>
    <div class="row">
        <div class="col-3-12"></div>
        <a href="education.php" class="menu-comp col-3-12">
            <div>Edukacja</div>
        </a>
        <a href="hobby.php" class="menu-comp col-3-12">
            <div>Hobby</div>
        </a>
    </div>
</div>


<?php
echo $P->End();
?>

