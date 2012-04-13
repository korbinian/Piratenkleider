Piratenkleider
- Wordpress-Theme für Websites der Piratenpartei 
=================================================

Version 2.0 von Wolfgang Wiese (xwolf), 
basierend auf Vorlage von Korbinian Polk fuer die Bundeswebsite
(http://www.piratenpartei.de)


DOWNLOADS
    Version von xwolf: https://github.com/xwolfde/Piratenkleider
    Altes Original von korbinian: https://github.com/korbinian/Piratenkleider
    
CREDITS & COPYRIGHT

 CC-BY-SA 3.0, http://creativecommons.org/licenses/by-sa/3.0/de/deed.de


AUTOREN / ENTWICKLER
   - Wolfgang Wiese, http://www.xwolf.de 
   - Heiko Philippski, http://www.phindie.de/



MENÜS
   Die Seite besteht aus drei verschiedenen Menüs.

    - Hauptnavigation
        Hierin werden alle statischen Seiten des Webauftritts aufgeführt, die
        in der Hauptnavigation im oberen Teil der Seite, aber unter dem Logo
        erscheinen.
    - Linkmenu
        Hier befinden sich Links zu Werkzeugen oder Arbeitsportalen, wie
        bspw. das Wiki oder das Forum.
        Wenn diese Menü nicht definiert ist, wird es mit den Standardlinks
        besetzt: Wiki, Liquid Feedback, Forum, Flaschenpost
    - Technische Navigation
        In das technsiche Menu kommen (statische) Seiten, die etwas über
        den Webauftritt sagen, wie bspw. das Impressum, Kontakt, Credits.
        Das technische Menü kann in der Sidebar "Fußbereich: Rechte Spalte"
        durch anderen Inhalt überschrieben werden.

   Die Menüs müssen unter Design->Menüs selbst angelegt werden und die
   jeweiligen Seiten den Menus zugeordnet werden.
   Diese selbst angelegten Menüs werden dann unter dem Punkt
    "Anordnung im Theme" den drei genannten Bereichen zugeordnet.
   Bei dem Menü, welches der Hauptnavigation zugeordnet ist, sollte die
   Startseite der Website enthalten sein. Diese wird mittels CSS dann
   in ein Häuschensymbol umgewandelt.



INHALTE

1. Alle Seiten und Artikel sollten Artikel/Seitenbilder haben, da diese
   als Teaser angezeigt werden können.
2. Welche Artikel im Slider vorgestellt werden, wird in der Slider-
   Kategorie-Einstellung definiert.
3. Besondere Artikel können auf der Startseite im Slider erscheinen.
   Dies ist ein von selbst wechselndes Artikelbild mit der Verlinkung
   zu einem Artikel. 
   Um dies für einen Artikel zu machen, muss der Artikel zwei Dinge erfüllen:
    a) Er muss die  Kategorie "Slider" haben.
    b) Der Artikel sollte ein Artikelbild haben. 


BEREICHE/WIDGETS

1. "Sidebar (Rechte Spalte)"
    Dieser Bereich befindet sich rechts vom Inhaltsbereich. Er ist geeignet für
    Werbeplakate, Hinweise und ähnliches. Wenn leer, werden als Alternative 
    einige der allgemeinen Standardplakate gezeigt.
2. Sidebar 2 (Rechts unter Plakaten) 
    Dieser Bereich befindet sich rechts vom Inhaltsbereich. Er ist nach den 
    Werbeplakaten positioniert, die über die Optionen ein- oder abgeschaltet 
    werden können.
3. "Startseite: Sliderbereich"
    Hier werden per default die Artikelbilder der 3 Artikel gezeigt, die
    der Kategorie "Slider" zugeordnet sind.
    Wenn das Widget mit einer anderer Funktion gefüllt wird, dann
    entfällt der Slider.
4. "Startseite: Rechter Aktionlinkbereich"
    Dieser Bereich ist rechts neben dem Slider. Auf der Piraten-Hauptsite
    befinden sich dort 3 Links zu Spendern/Mitmachen und mitglied werden.
    Diese drei sind auch hier als Default eingegeben. Durch Setzen einer
    anderer Widgetfunktion kann hier was anderes erscheinen.
5. "Startseite: Links unten" 
    Dies ist auf der Startseite der Bereich rechts neben der Liste der weiteren
    Artikel.
    Es empfiehlt das Widget mit der Schlagwortliste zu füllen.
6. "Startseite: Rechts unten" 
    Bereich rechts unterhalb der drei Presseartikel.
    Wenn leer, wird hier eine Schlagwortliste gezeigt.
7. "Fußbereich: Linke Seite"
   Bereich im Fußteil unter dem Haupttextbereich. Dieser Bereich eignet sich 
   insbesondere für externe Links zu anderen Piratenwebsites auf regionaler oder 
   überegionaler Ebene. Diese werden dann als Menu mit externen Links definiert 
   und dann als Widget dieser Sidebar zugeordnet. Wenn leer, wird hier nichts 
    angezeigt.
8. "Fußbereich: Rechte Spalte"
   Rechte Spalte im Fußbereich. Wenn leer, erscheint hier das technische Menu 
   (siehe Menüs). Wenn auch dieses nicht definiert ist, wird die Blogadresse und 
   dessen RSS-Feedadresse gezeigt


THEME-OPTIONS "Piratenkleider pimpen"
 
  Das Ursprungstheme von Korbinian hatte noch keine eigene Theme-Option Seite.
  Die neue Version enthält dagegen Theme Options, die nach und nach ausgebaut 
  werden um "lokale" Einstellungen zu ändern.
    - Newsletter-Box einschalten/abschalten
    - Social Media Buttons ein/ausschalten         
    - Slider steuern        
    - Metatag-Angaben ändern
    - Default Werbe-Sticker optional schaltbar
    - Logo ändern
       (allerdings derzeit festgelegt auf Logos der Größe 300x130 Pixel mit
        Hintergrund in RGB #eeeeee . Ab Wordpress 3.4 kann eine neue Theme-
        Version dies flexibler machen)


VERWENDETE PLUGINS
  - Wenn das Plugin "Related Posts by Category" vorhanden und aktiviert ist,
    werden bei der Anzeige eines Artikels weitere Artikel verlinkt, die
    ggf. relevant sein könnten.


BUGS, PROBLEME, TODOS, WEITERE INFOS

Denkbare weitere Features (ToDos)

1. Welle+Schiff aendern im Kopfteil anpassbar machen um eigene
   "Stadt-Skyline" o.ä. zu ergänzen. (vgl. piraten-bonn.de) 
2. Bei den Defaultbildern nicht ein bestimmtes auswählen, sondern 
   Zufallssteuerung erlauben
3. Wenn ein Artikel ein Artikelbild hat, dann wird dieses
   sonst nirgends gezeigt. Dabei wäre es -wie bei den Pages-
   doch auch sinnvoll, dieses bei der Einzelanzeige des Artikels anzugeben.
 

Administrative Hinweise für Wordpress Theme-Editoren:

1. Default-Bilder
   Die Auswahl der default-Bilder ist in Arrays in der Datei
   theme-options.php abgelegt. Die Bilder liegen im Verzeichnis /images/  

2. Startseite:
   Die Startseite zeigt die letzten 3 Artikel, sowie den Teaser und weitere 
   dynamische Teile.
    Unterhalb des Menus kommt der Teaser.
   Der Teaser bindet eine Bildliste  sich aus den 3 letzten  
   Artikeln (! nicht Pages), die in der Kategorie "Slider" ein.
  
   Bei diesen Artikeln werden die jeweiligen Thumbnails der Artikelbilder 
   eingeblendet.
   Hinweis: Dabei wird die Standardgröße für die Artikelbilder welche im Blog
   festgelegt ist, verwendet. Bei neu eingerichteten Blogs wird die mittlere
   Bildgröße verwendet, die in x und y maximal 300 Pixel definieren und
   dann entsprechend umrechnen. 
   Unter Einstellungen-Mediathek sollte daher  die mittlere Größe der Bilder 
   auf 640 Pixel Breite und 240 Pixel Höhe festgesetzt werden.
   Bei Artikelbilder, die aber auf der Breite eine Höherskalierung bedürften
   klappt dies nicht so toll. Die Y-Achse wird dann doch gross gemacht.
   Daher sollte man darauf achten, daß nur solche Bilder gewählt werden die 
   auch tatsächlich entsprechend Breit sind.
   Am Besten bearbeitet man die Sliderbilder vor.
   Bei der optischen Darstellung des Sliders werden Bilder, die höher sind als
   240 Pixel nach unten abgeschnitten. 

   Nach den 3 Artikeln kommen weitere Artikel. Dies sind die letzten Artikel 4-9
   nach der Artikelliste. (Oben sind ja 1-3).






 


