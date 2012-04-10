Dokumentation des Themes Piratenkleider

(Auf Basis der Version von xwolf,  basierend auf dem Ursprungstheme von 
 Korbinian Polk)




MENÜS
   Die Seite besteht aus drei verschiedenen Menüs.
   (Im Orginaltheme waren dies das Primary Menu, Top und Secondary Menu.)
   Im aktuellen Theme wurden diese umbenannt, damit deren Zweck klarer ist:
    - Hauptnavigation
        Hierin werden alle statischen Seiten des Webauftritts aufgeführt, die
        in der Hauptnavigation im oberen Teil der Seite, aber unter dem Logo
        erscheinen.
    - Linkmenu
        Hier befinden sich Links zu Werkzeugen oder Arbeitsportalen, wie
        bspw. das Wiki oder das Forum.
    - Technische Navigation
        In das technsiche Menu kommen (statische) Seiten, die etwas über
        den Webauftritt sagen, wie bspw. das Impressum, Kontakt, Credits.

   Die Menüs müssen unter Design->Menüs selbst angelegt werden und die
   jeweiligen Seiten den Menus zugeordnet werden.
   Diese selbst angelegten Menüs werden dann unter dem Punkt
    "Anordnung im Theme" den 3 genannten Bereichen zugeordnet.
   Bei dem menü, welches der Hauptnavigation zugeordnet ist, sollte die
   Startseite der Website enthalten sein. Diese wird mittels CSS dann
   in ein Häuschensymbol umgewandelt.



INHALTE

1. Alle Seiten und Artikel sollten Artikel/Seitenbilder haben, da diese
   als Teaser angezeigt werden können.
2. Alle Artikel, die Pressemeldungen sein sollen, müssen der Kategorie "pm" 
   zugeordnet werden. Wenn diese Kategorie noch nicht vorhanden ist, muss
   sie erstellt werden.
3. Besondere Artikel können auf der Startseite im Slider erscheinen.
   Dies ist ein von selbst wechselndes Artikelbild mit der Verlinkung
   zu einem Artikel. 
   Um dies für einen Artikel zu machen, muss der Artikel zwei Dinge erfüllen:
    a) Er muss die  Kategorie "Slider" haben.
    b) Der Artikel sollte ein Artikelbild haben. 


BEREICHE/WIDGETS

1. "Startseite: Sliderbereich"
    Hier werden per default die Artikelbilder der 3 Artikel gezeigt, die
    der Kategorie "Slider" zugeordnet sind.
    Wenn das Widget mit einemr anderer Finktion gefüllt wird, dann
    entfällt der Slider.
2. "Startseite: Rechter Aktionlinkbereich"
    Dieser Bereich ist rechts neben dem Slider. Auf der Piraten-Hauptsite
    befinden sich dort 3 Links zu Spendern/Mitmachen und mitglied werden.
    Diese drei sind auch hier als Default eingegeben. Durch Setzen einer
    anderer Widgetfunktion kann hier was anderes erscheinen.
3. "Startseite: Links unten" 
    Dies ist auf der Startseite der Bereich rechts neben der Liste der weiteren
    Artikel.
    Es empfiehlt das Widget mit der Schlagwortliste zu füllen.
4. "Startseite: Rechts unten" 
    Bereich rechts unterhalb der drei Presseartikel.
    Wenn leer, wird hier eine Schlagwortliste gezeigt.
5. Footer:
   Der Footer wird aus den beiden Widgets 
    First Footer Widget Area 
    und
    Second Footer Widget Area 
   gebildet. 
    Im First Footer Widget Area sollte man Links zu anderen Websites
    machen. Auf der Hauptwebsite der Piratenpartei findet sich hier
    eine Linkliste zu den internationelann Piratenwebsites.
    Im Second Footer Widget Area wird per Default das
    Technische Menu sichtbar gemacht.
    Wenn das technische Menu noch nicht definiert wurde, werden dort
    zunächst die Seiten unstrukturiert aufgeführt.


THEME-OPTIONS "Piratenkleider pimpen"
 
  Das Ursprungstheme von Korbinian hatte noch keine eigene Theme-Option Seite.
  Die neue Version enthält dagegen Theme Options, die nach und nach ausgebaut 
  werden um "lokale" Einstellungen zu ändern.
    - Newsletter-Box einschalten/abschalten
    - Social Media Buttons ein/ausschalten         
    - Slider steuern
        (max. Zahl der Slider-Artikel festlegen, Dauer für Bildwechsel und Dauer der
         Bildanzeige)
    - Metatag-Angaben ändern
    - Default Werbe-Sticker optional schaltbar

  Geplante weitere Optionen:
    - Logo ändern (für eigenes Logo aus Bezirks/Land/etc )
    - Welle+Schiff aendern (vgl. piraten-bonn.de) 
    - Social Media Buttons einzelnt steuern und URLs ändern
    - Twitteradresse ändern
    - Default-Bilder für Artikel, Posts und Slider festlegen
   


Notizen
/Dieser Bereich ist in Arbeit/
Bugs
1. Wenn man eine "frische" Bloginstallation betreibt, werden durch Aktivierung 
   des Themes die Widgets, die vorher in der einfachen "Sidebar" waren, der 
   neuer Sidebar "Sticker Widget Area" zugeordnet.
   Dies hat zur Folge, dass anstelle von Links oder Widgetelementen
   eine Reihe von Iconbilder "Werde Pirat" erscheien.

2. Es fehlen Fallback-Artikelbilder, Fallback-Seitenbilder und 
   Fallback-Sliderbilder.
    a) Wenn ein Artikel in der Kategorie Slider ist, aber kein Artikelbild
       hat, wird zwar der SLiderwechsel gezeigt, aber kein Bild.
       Auch dann, wenn im Artikel selbst ein Bild vorhanden ist.
3. Blöd auch: Wenn ein Artikel ein Artikelbild hat, dann wird dieses
   sonst nirgends gezeigt. Dabei wäre es -wie bei den Pages-
   doch auch sinnvoll, dieses bei der EInzelanzeige des Artikels anzugeben.

4. Gravatar.com wird bei den Kommentaren verwenden. Da ist noch
   nichts gefährliches bei, aber wir sollten da nicht naiv sein. Gerade sowas
   kann zum Tracking verwendet werden. Daher sollte dies rausgenommen werden
    und/oder durch eine statische Lösung ersetzt werden.


Hinweise zur Startseite:
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
    Unter Einstellungen-Mediathek sollte daher  die mittlere Größe der Bilder auf
    640 Pixel Breite und 240 Pixel Höhe festgesetzt werden.
    Bei Artikelbilder, die aber auf der Breite eine Höherskalierung bedürften
    klappt dies nicht so toll. Die Y-Achse wird dann doch gross gemacht.
    Daher sollte man darauf achten, daß nur solche Bilder gewählt werden die 
    auch tatsächlich entsprechend Breit sind.
    Am Besten bearbeitet man die Sliderbilder vor.


 Nach den 3 Artikeln kommen weitere Artikel. Dies sind die letzten Artikel 4-9
 nach der Artikelliste. (Oben sind ja 1-3).


   

Seiten:
  Als Teaser für die Seiten wird das Thumbnail eines Seitenbildes angezeigt.




