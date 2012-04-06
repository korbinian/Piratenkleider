Hinweise/Notizen zur Nutzung



Grundlegens:
1. Alle Seiten und Artikel sollten Artikel/Seitenbilder haben, da diese
   als Teaser angezeigt werden.
2. Alle Pressemeldungen müssen der Kategorie "pm" zugeordnet werden.
   in home.php ist in Zeile 84 diese Kategory für ALLE Artikel definiert.
    ggf. dies ändern. Oder hier die Default-Category von WP nutzen.
3. Der Footer wird aus den beiden Widgets 
    First Footer Widget Area 
    und
    Second Footer Widget Area 
   gebildet. Hier eignen sich ebenfalls Linklisten oder Menüs.
4. Das Ursprungstheme von korbinian hat noch keine eigene Theme-Option Seite.
   Die neue Version enthält dagegen Theme Options, die nun ausgebaut werden.
    - Newsletter-Box einschalten/abschalten
    - Social Media Buttons ein/ausschalten 
        (hier kommt noch eine Verfeinerung zur Auswahl ein Eingabe eigener URLs)




Bugs
1. Wenn man eine "frische" Bloginstallation betreibt, werden durch Aktivierung 
   des Themes die Widgets, die vorher in der einfachen "Sidebar" waren, der 
   neuer Sidebar "Sticker Widget Area" zugeordnet.
   Dies hat zur Folge, dass anstelle von Links oder Widgetelementen
   eine Reihe von Iconbilder "Werde Pirat" erscheien.
2. Die Sucheingabe funktioniert nicht, da sie überlagert wird
3. Standard Pages werden oben links angefangen angezeigt, mit vertikaler
   Reihenfolge von jnten nach oben und Blocksatzbreite 
   Sie erscheinen nicht im Standardmenu
4. Es fehlen Fallback-Artikelbilder, Fallback-Seitenbilder und 
   Fallback-Sliderbilder.
    a) Wenn ein Artikel in der Kategorie Slider ist, aber kein Artikelbild
       hat, wird zwar der SLiderwechsel gezeigt, aber kein Bild.
       Auch dann, wenn im Artikel selbst ein Bild vorhanden ist.
5. Blöd auch: Wenn ein Artikel ein Artikelbild hat, dann wird dieses
   sonst nirgends gezeigt. Dabei wäre es -wie bei den Pages-
   doch auch sinnvoll, dieses bei der EInzelanzeige des Artikels anzugeben.
6. Es wird die Vorlage von TwentyTen in functions.php verwendet inkl. 
   die Settings für Kopfteil und Background. Diese finden aber im Theme keine
   Anwendung. 
7. Das Menü für Seiten funktioniert noch garnicht



Startseite:
 Die Startseite zeigt die letzten 3 Artikel, sowie den Teaser und weitere 
 dynamische Teile.

 Unterhalb des menus kommt der Teaser.
  (bedient aus sidebar-teaser.php)
    Die first teaser Wdiget Area wird momentan nicht verwendet.

    Die sidebar-Teaser bindet eine Bildliste  sich aus den 3 (letzten?) 
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

    

    Danach kann die 
        Second Teaser Widget Area 
    angezeigt werden.
    Dies sollte in der Regel eine kurze Linkliste sein.
    Diese wird optisch rechts von der Bildliste angezeigt.


 Nach den 3 Artikeln kommen weitere Artikel. Dies sind die letzten Artikel 4-9
 nach der Artikelliste. (Oben sind ja 1-3).



Danaben  gibt es einen Bereich, der von der
Widget "Second Startpage Widget Area" 
definiert  ist.
Hierin eigenet sich eine Schlagwort-Wolke.


   

Seiten:
  Als Teaser für die Seiten wird das Thumbnail eines Seitenbildes angezeigt.




