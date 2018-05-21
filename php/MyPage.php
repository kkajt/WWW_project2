<?php
/**
 * Created by PhpStorm.
 * User: kajetan
 * Date: 06/05/2018
 * Time: 18:54
 */

$HEADER =<<<EOT
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <title>{{TITLE}}</title> 
  <meta name="description" content= "{{DESCRIPTION}}">
  <meta name="author" content="{{AUTHOR}}">
  <meta name="viewport" content = "width=device-width, initial-scale=1.0"/>
{{STYLES}}
{{FONTS}}
{{SCRIPTS}}
{{INNER-STYLE}}
</head>
<body>
<div class="container">
EOT;

$PAGE_HEADER =<<<EOT
    <header>
        <div class="row">
			<div class="col-4-12">
    			<img src="img/portrait.jpg" alt="logo" id="logo">
            </div>
            <div class="col-8-12">
				<div class="header-greeting">
					<h1>Kajetan Korzycki</h1>
					<h2>moje przygody z edukacją</h2>
				</div>
			</div>
		</div>
	</header>
</div>
EOT;

$FOOTER =<<<EOT
</body>
</html>   
EOT;

$MAIN_MENU_TMPL =<<<EOT
    <div class="row">
		<nav>
			<hr>
			<ul class="menu">
				    {{ITEM_1}}
				    {{ITEM_2}}
                    {{ITEM_3}}
            </ul>
            <hr>
        </nav>
    </div>
EOT;

$MAIN_MENU_ITEMS = [
    "ITEM_1"   => ["Start","index.php"],
    "ITEM_2"   => ["Edukacja", "education.php"],
    "ITEM_3" => ["Hobby", "hobby.php"]
];

$MAIN_MENU_LI_1 = '<li class="active">{{T}}</li>';
$MAIN_MENU_LI_2 = '<li><a href="{{H}}">{{T}}</a></li>';


class MyPage {
  private $title        = "";
  private $author       = "";
  private $description  = "";
  private $root         = "";
  private $cssfiles     = [];
  private $jsfiles      = [];
  private $innerStyle   = "";
  private $fonts        = [];

  public function AddCSS($filename) {
    $this->cssfiles[] = $filename;
  }

  public function AddJS($filename) {
    $this->jsfiles[] = $filename;
  }

  public function AddFont($fontlink) {
      $this->fonts[] = $fontlink;
  }

  public function SetDescription($s) {
    $this->description = $s;
  }

  public function AddInnerStyle($s) {
    $this->innerStyle = $s;
  }

  
  public function __construct($title = "", $root="") {
    $this->title = $title;
    $this->root  = $root;
    $this->author = "Kajetan Korzycki";
    $this->AddCSS("reset.css");
    $this->AddCSS("styles.css");
    $this->AddCSS("grid.css");
    $this->AddFont("https://fonts.googleapis.com/css?family=Roboto");
    $this->AddFont("https://fonts.googleapis.com/css?family=Khand");
    $this->AddFont("https://fonts.googleapis.com/css?family=Merriweather");

  }

  public function Begin() {
    global $HEADER;
    $s = str_replace(["{{TITLE}}", "{{DESCRIPTION}}", "{{AUTHOR}}"], [$this->title, $this->description, $this->author], $HEADER);

    $X = [];
    $C = $this->cssfiles;
    $TMP = '  <link rel="stylesheet" href="{{R}}css/{{CSS}}">' . "\n";
    for ($i = 0; $i < count($C); $i++){
      $X[]= (string) str_replace(["{{R}}", "{{CSS}}"], [$this->root, (string) $C[$i]], $TMP);
    }
    $s= str_replace("{{STYLES}}", join("\n",$X), $s);

    $X = [];
    $C = $this->fonts;
    $TMP = '<link href="{{FONT}}" rel="stylesheet">'."\n";
    for ($i = 0; $i < count($C); $i++){
          $X[]= (string) str_replace(["{{FONT}}"], [(string) $C[$i]], $TMP);
    }
    $s= str_replace("{{FONTS}}", join("\n",$X), $s);

    $X = [];
    $C = $this->jsfiles;
    $T = '  <script src="{{R}}js/{{JS}}"></script>' . "\n";
    for ($i = 0; $i < count($this->jsfiles); $i++){
      $X[]= str_replace(["{{R}}", "{{JS}}"], [$this->root, (string) $C[$i]], $T);
    }
    $s= str_replace("{{SCRIPTS}}", join("\n",$X), $s);

    $X = ($this->innerStyle === "") ? "" : "<style>\n" . $this->innerStyle . "\n</style>\n";
    $s= str_replace("{{INNER-STYLE}}", $X, $s);

    return preg_replace('/^\h*\v+/m', '', $s);
    // \h : dowolny poziomy pusty znak
    // \v : dowolny pionowy pusty znak
    // /m : multiline

  }

  function Menu($active) {
      global $MAIN_MENU_TMPL, $MAIN_MENU_ITEMS, $MAIN_MENU_LI_1, $MAIN_MENU_LI_2;
      $s = $MAIN_MENU_TMPL;
      foreach ($MAIN_MENU_ITEMS as $key => $array) {
          $mkey = "{{" . $key . "}}";
          $item = ($array[0] === $active)? $MAIN_MENU_LI_1 : $MAIN_MENU_LI_2;
          $item = (string)str_replace(["{{T}}","{{H}}"], $array, $item);
          $s    = (string)str_replace($mkey, $item, $s);
      }
      return $s;
  }

  public function PageHeader(){
    global $PAGE_HEADER;
    return $PAGE_HEADER;
  }

  public function End() {
    global $FOOTER;
    return $FOOTER;    
  }  

}


