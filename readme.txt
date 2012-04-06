Hinweise/Notizen zur Nutzung



Grundlegens:
1. Alle Seiten und Artikel sollten Artikel/Seitenbilder haben, da diese
   als teaser angezeigt werden.
2. Alle Pressemeldungen müssen der Kategorie "pm" zugeordnet werden.
   in home.php ist in Zeile 84 diese Kategory für ALLE Artikel definiert.
    ggf. dies ändern. Oder hier die Default-Category von WP nutzen.
3. Der Footer wird aus den beiden Widgets 
    First Footer Widget Area 
    und
    Second Footer Widget Area 
   gebildet. Hier eignen sich ebenfalls Linklisten oder Menüs.



Bugs
1. Wenn man eine "frische" Bloginstallation betreibt, werden durch Aktivierung 
   des Themes die Widgets, die vorher in der einfachen "Sidebar" waren, der 
   neuer Sidebar "Sticker Widget Area" zugeordnet.
   Dies hat zur Folge, dass anstelle von Links oder Widgetelementen
   eine Reihe von Iconbilder "Werde Pirat" erscheien.
2. Die Sucheingabe funktioniert nicht
3. Standard Pages werden oben links angefangen angezeigt, mit vertikaler
   Reihenfolge von jnten nach oben und Blocksatzbreite 
   Sie erscheinen nicht im Standardmenu
4. Es fehlen Fallback-Artikelbilder, Fallback-Seitenbilder und 
   Fallback-Sliderbilder

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
  Als Teaser für die Seiten wird das Thumbnail eines Seitenbildes a gezeigt.




