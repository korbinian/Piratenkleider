Piratenkleider
- Wordpress-Theme für Webauftritte der Piratenpartei 
====================================================

Version 2.20.5 von Wolfgang Wiese (xwolf), 19. Dezember 2013


DOWNLOADS

    Aus dem GIT-Repo (Letzte Arbeitsversion und Betas):
        https://github.com/xwolfde/Piratenkleider	
    
    Projekt-Website (Releases)
        http://www.piratenkleider.de
    



CREDITS & COPYRIGHT

 CC-BY-SA 3.0, http://creativecommons.org/licenses/by-sa/3.0/de/deed.de


AUTOREN / ENTWICKLER

   Wolfgang Wiese (xwolf), http://www.xwolf.de 

   Mit Hilfe und Unterstützung von:      
     - Martin Stoppler, http://www.stoppe-gp.de/
     - Matthias Kopp, http://piratenkleider.emkay,de 
     - Kerstin Probiesch, http://www.barrierefreie-informationskultur.de
     - Fabian Müller, http://www.feals.de
     - Georg Sinn, http://zwitschi.net
     - Andre Sendowski, http://www.iphone-notes.de/
     - Heiko Philippski, http://www.phindie.de/
     - Ralph Hinterleitner, rcs@deixis.at
     - Jan Schejbal, http://janschejbal.wordpress.com/
     - Marc Schieferdecker,  http://thegeek.de 
     - Benjamin Stöcker, http://freiheitsworte.de     
     - le Grand, http://www.lenz-online.org 
     - Nicole Britz, http://twitter.com/dyfustic
     - und vielen mehr!

   Quellen für Defaultbilder und CI-Materialen (CC-BY 3.0)
     - Defaultgrafiken für Slider/Seitenbilder: Tobias M. Eckrich
     - Plakatbilder ab Version 2.17: SG Gestaltung, sowie Projekt Piratestarter
     - Weitere Bilder: Piratenwiki mit unterschiedlichen Autoren
     - Bildbearbeitung für Piratenkleider 2.x: Wolfgang Wiese
     - Comicbild Wombat: CC BY CA, Nicole Britz

   Weitere verwendete Inhalte:
     - Social Media Icons: Paul Robert Lloyd, http://paulrobertlloyd.com/2009/06/social_media_icons      
     - YAML CSS Framework (Lizensiert unter der Creative Commons Attribution 2.0 License).
     - JavaScript Framework jQuery (GNU General Public License (GPL) Version 2)
     - jQuery FlexSlider 2 (GPL v2)
     - Schrift Bebas Neue von Dharmatype (SIL Open Font License 1.1)
     - Schrift Droid Sans von Ascender (http://www.droidfonts.com/), Apache License 2.0 http://www.apache.org/licenses/LICENSE-2.0
     - Schrift Awesome http://fontawesome.io von Dave Gandy (SIL Open Font License 1.1)
     - Circle Player, http://jplayer.org (GNU General Public License (GPL) Version 2)


FEEDBACK & BUGS

Feedback, Vorschläge für neue Features aber auch Bugs können im GitHub
gemeldet werden: https://github.com/xwolfde/Piratenkleider/issues
Alternativ zum GitHub stehen auch die Kommentarfelder bei http://www.piratenkleider.de
zur Verfügung.  


VORVERSION

Dieses Theme basiert auf die Wordpress-Basisvorlage von Korbinian Polk.  
Das alte Original von @korbinian kann auf Github gefunden werden: 
 https://github.com/korbinian/Piratenkleider



MENÜS
   Die Seite besteht aus drei verschiedenen Menüs.

    - Hauptnavigation
        Hierin werden alle statischen Seiten des Webauftritts aufgeführt, die
        in der Hauptnavigation im oberen Teil der Seite, aber unter dem Logo
        erscheinen.
        Zu beachten ist, daß neben den Seiten des Webauftritts auch die 
        Startseite hinzugefügt werden muss. Unter der Option Menuüs
        findet sich die Startseite, wenn man bei der Box
          "Listen" auf "Zeige alle" klickt.   
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
   Sollte kein Menu angelegt und der hauptnavigation zugewiesen werden,
   wird ersatzweise ein Menü ausgehend von den vorhandenen Seiten aufgebaut.



INHALTE

1. Alle Seiten und Artikel sollten Artikel/Seitenbilder haben, da diese
   als Teaser angezeigt werden können.
2. Welche Artikel im Slider vorgestellt werden, wird in der Slider-
   Kategorie-Einstellung definiert.
3. Besondere Artikel können auf der Startseite im Slider erscheinen.
   Dies ist ein von selbst wechselndes Artikelbild mit der Verlinkung
   zu einem Artikel. 
   Um dies für einen Artikel zu machen, muss der Artikel in der
   für den Slider aktivierten Kategorie sein. (Siehe Punkt "Startseite" unter 
   den  Optionen)
   Sollte ein Artikel über kein definiertes Artikelbild verfügen, wird
   das Defaultsliderbilder verwendet.       


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
    befinden sich dort 3 Links zu Spendern/Mitmachen und Mitglied werden.
    Dieser 3 Teaserlinks können über die Theme-Option Takelage setzen
    verändert werden. Wird das Widget genommen, wird dessen Inhalt jedoch
    diese Änderungen überschreiben und der Widgetinhalt angezeigt.
5. "Startseite: Introbereich"
    Dieser Bereich befindet sich unter dem SLider bzw. Teaser auf der
    Startseite und oberhalb des Inhalts. 
    Es ist eine Möglichkeit, um feststehenden Inhalt unabhängig von den
    aktuellen Artikeln auf der Startseite zu plazieren. 
6. "Startseite: Links unten" 
    Dies ist auf der Startseite der Bereich rechts neben der Liste der weiteren
    Artikel.
    Es empfiehlt das Widget mit der Schlagwortliste zu füllen.
7. "Startseite: Rechts unten" 
    Bereich rechts unterhalb der drei Presseartikel.
    Wenn leer, wird hier eine Schlagwortliste gezeigt.
8. "Fußbereich: Linke Seite"
   Bereich im Fußteil unter dem Haupttextbereich. Dieser Bereich eignet sich 
   insbesondere für externe Links zu anderen Piratenwebsites auf regionaler oder 
   überegionaler Ebene. Diese werden dann als Menu mit externen Links definiert 
   und dann als Widget dieser Sidebar zugeordnet. Wenn leer, wird hier nichts 
    angezeigt.
9. "Fußbereich: Rechte Spalte"
   Rechte Spalte im Fußbereich. Wenn leer, erscheint hier das technische Menu 
   (siehe Menüs). Wenn auch dieses nicht definiert ist, wird die Blogadresse und 
   dessen RSS-Feedadresse gezeigt
10. "Indexseiten"
   Dieser Bereich wird bei Indexseiten (Kategorien, Tags, Authorseiten, etc.)
   unterhalb der jeweiligen Artikelliste plaziert.  


THEME-OPTION 
 
  Unter der Optionen sind die grundlegenden
  Optionen für das Theme einstellbar:
    - Newsletter-Box einschalten/abschalten
    - Social Media Buttons ein/ausschalten         
    - Anzahl der Nachrichten auf der Startseite und dessen Anordnung
      einstellen
    - Slider steuern     
    - Teaserlinks ändern oder setzen
    - Sticker ändern oder setzen
    - Webadressen für Newsletter anpassbar
    - Metatag-Angaben ändern
    - Optionale Anzeige für Seitenbilder steuern
    - Menutyp  für die Darstellung der Seiten und Unterseiten in der
      Sidebar steuern.
   Sowie viele mehr...  

   Weitere besondere Funktionen:

   Seiten & Artikel, sowie Sidebar:

   Auf diesen Laschen können u.a. auch Ersatzbilder ausgewählt werden, die angezeigt
   werden, wenn  Artikel oder  Seiten kein "Artikelbild" besitzen.
   Werden für den Slider keine Vorgaben gemacht, wird per Default die erste 
   Kategorie ("Allgemein") verwendet und Bilder per Zufall ausgegeben.

   Ausserdem können hier die Werbeposter beim Slider in der rechten Sidebar
   ausgewählt und über URL-Angaben zusätzliche definiert werden.
   Werden keine Bilder vorausgewählt, werden alle Werbeposter im
   Slider definiert.

   Die Defaultbilder die in der rechten Sidebar als Werbeplakate erscheinen
   liegen im Ordner /plakate/ . 
   Bei einem anderen Größe wird das Bild entsprechend durch den Browser
   umskaliert. Dies kann jedoch mit Qualitätseinbußen verbunden sein.
   Neue und eigene Plakate können jederzeit durch Anlegen eines
   neuen Unterordners unter /plakate/ inkl. der Bilddateien eingebunden werden.   
  

   Captn&Crew:

   Diese Option dient der Eintragung von Kontaktinformationen für die
   Templateseiten um das Impressum, die Datenschutzerklärung und
   optionalen Formularseiten.
     

   Design(Klüverbaum):

   Diese Option ermöglicht die Änderungen spezieller CSS-Anweisungen im
   Kopfteil der Seite, sowie das Einfügen eigener CSS-Anweisungen.
   Ausserdem können hier die bekannten Farbcodes anderer Länder aktiviert 
   werden.
   So ist es hier bspw. möglich anstelle der Wellen und dem Schiff
   eine eigene Skyline als Hintergrundgrafik zu wählen.
   Diese Optionenseite sollte nun vor erfahrenen Webadmins geändert werden,
   die genau wissen was sie tun.
   
   
THEME OPTION "Kopfzeile"   

   Diese Option dient dazu, das Logo zu ändern und ein eigenes Logo 
   hochzuladen.
   Wichtiger Hinweis:
   Das Logo ist derzeit festgelegt auf eine Größe von 300x130 Pixeln.
   Der Hintergrund sollte  in RGB #eeeeee sein.
   Leider werden alle Bilder die hochgeladen werden in JPG umgewandelt,
   wenn sie es nicht schon sind. Die Qualität der Umwandlung ist jedoch
   nicht so gut.
   Aus diesem Grund empfiehlt es sich, das Logo in der passenden
   Größe und dem Hintergrund über einem eigenen Grafikprogramm 
   vorzubereiten.

THEME OPTION "Hintergrund"   
    
    Hier ist die Änderung des Hintergrundbildes, dessen Farben und 
    Positionierung möglich.


THEME EIGENE WIDGETS

    Das Piratenkleider Theme enthält zwei Widgets, die für die verschiedenen
    Sidebars eingesetzt werden können:
    1. Widget "Piraten Linkliste"
        Das Widget kann eine vorgegebene Liste von Bereichen oder
        Gliederungen anzeigen. Dies entspricht der Liste die als Default
        im Fußteil angezeigt werden kann.

    2. Widget "Piraten Newsletter"
        Das Widget kann ein Eingabeformular für den Newsletter 
        verwendet werden, zu dem die Adresse unter den Optionen eingegeben
        wurde.

        

UNTERSTÜTZE PLUGINS
  - Wenn das Plugin "Related Posts by Category" vorhanden und aktiviert ist,
    werden bei der Anzeige eines Artikels weitere Artikel verlinkt, die
    ggf. relevant sein könnten.
 - Das Plugin "ICS Calendar" kann verwendet werden um Termin in Widgets
   darzustellen.
   Unter "Einstellungen -> "ICS Calendar" sollte dieses wie folgt 
   konfiguriert werden:

    General Settings:
        URL to ICS File(s):
         zum Beispiel für Bayern:
         1. http://events.piratenpartei-bayern.de/events/ical?gid=&gid[]=10&cid=&subgroups=1&start=&end=
         2. http://events.piratenpartei-bayern.de/index.php/events/ical?gid=&gid[]=13&cid=


    Formatting:
        Date Format:  "j.m."
        Time Format:  "G:i"
        Custom Event Format: (Yes)
             %date-time%, %start-date%, %start-time%, %end-date%, %end-time%, 
                %event-title%, %description%, %location%   

   Die Zeitzone sollte auf UTC-Time gestellt werden.     

 -Advanced Custom Fields
  Mit Hilfe des Plugins Advanced Custom Fields können Seiten und Artikel um 
  zusätzliche Felder ergänzt werden.
  Im Theme wird dies bei Seiten (nicht Artikeln) unterstützt durch den 
  optionalen Parameter “right_column”. Dieser erlaubt es, zusätzliche 
  Informationen in der rechte Spalte (der Sidebar) zu ergänzen.

  Konfiguration von Advanced Custom Fields. Siehe Online Doku.

 - The Events Calendar
   Das Plugin "The Events Calendar" wird oft verwendet um eine
   Terminkalenderansicht zu ermöglichen. Um diese optimal in das Theme
   einzubauen, wurden eigene Templatefiles im Verzeichnis /events/ hinterlegt.

 - Kraehennest Podcaster
   (http://thegeek.de/neues-wordpress-plugin-der-krahennest-podcaster/)
   Dieses Plugin ermöglicht das Einlesen der Krähennest Podcasts. Dabei handelt
   es sich um vertonte Meldungen (http://kraehennest.piraten-wagen-mehr-demokratie.de/ )
   Das Plugin erkennt wenn Artikel mit gleichem Titel wie im Podcast 
   vorhanden sind und bindet in diesem Fall das Embedding für einen
   Flashplayer ein.

- Fancier Author Box    
  (http://wordpress.org/support/plugin/fancier-author-box)  
  Mit Hilfe dieses Plugins können Informationen über den Blogautoren angezeigt 
  werden. Im Theme wurden einige wenige CSS Anpassungen gemacht um dieses
  optiomal zu unterstützen.  

- xwolf Progress Bar
  (https://github.com/xwolfde/xw-progressbar)
  Anzeige von Fortschrittsbalken.

- 2 Click Social Media Buttons
  Anzeige von Social Media Buttons auf Artikelseiten.


EMPFEHLUNGEN FÜR WIDGETS
 
1. Terminkalender mit "ICS Calendar":
   Im Widget "Sidebar (Rechte Spalte) " sollte der ICS-Kalender für Termine 
   eingetragen werden.
   Darunter folgt eine weitere Text-Widget mit dem Inhalt:
   <a href="http:// ..  link-zur-eventseite ...">Weitere Termine anzeigen</a>

   (Leider verfügt das ICS Plugin in der aktuellen Version noch  
    über keine Einstellung hinsichtlich der Sparche des Links zu 
    dem Kalendersystem oder zu einzelnen Terminen. Daher ist es aus
    Usability-Gründen derzeit besser, dies mit einem Textwidget danach
    zu machen.)
   

    

Administrative Hinweise für Wordpress Theme-Editoren:

1. Default-Bilder
   Die Auswahl der default-Bilder ist in Arrays in der Datei
   theme-options.php abgelegt. Die Bilder liegen im Verzeichnis /images/  
2. Default-Werbeplakate 
   Die Defaultbilder die in der rechten Sidebar als Werbeplakate erscheinen
   liegen im Ordner /plakate/ . 
3. Bilder in Inhaltsbereich, unter dem Menu
   Bei  Artikeln werden die jeweiligen Thumbnails der Artikelbilder 
   eingeblendet.
   Dabei wird die Standardgröße für die Artikelbilder welche im Blog
   festgelegt ist, verwendet. Bei neu eingerichteten Blogs wird die mittlere
   Bildgröße verwendet, die in x und y maximal 300 Pixel definieren und
   dann entsprechend umrechnen. 
   Unter Einstellungen-Mediathek sollte daher  die mittlere Größe der Bilder 
   auf 740 Pixel Breite und 240 Pixel Höhe festgesetzt werden.
   Bei Artikelbilder, die aber auf der Breite eine Höherskalierung bedürften
   klappt dies nicht so toll. Die Y-Achse wird dann doch gross gemacht.
   Daher sollte man darauf achten, daß nur solche Bilder gewählt werden die 
   auch tatsächlich entsprechend Breit sind.
   Am Besten bearbeitet man die Sliderbilder vor.
   Bei der optischen Darstellung des Sliders werden Bilder, die höher sind als
   240 Pixel nach unten abgeschnitten. 

4. Es können bis zu drei Sticker im Kopfteil der Webseite plaziert werden.
   Unter der Theme-Optionen "Takelage setzen" kann man den Content
   des Sticker sund die Ziel-Adresse eingeben.
   Als Content kann HTML eingegeben werden um Bilder direkt einzublenden.
   Es kann aber auch nur ein Text als COntent eingegeben werden.
   Hierbei können über CSS-Klassen auch Farben und eine 5 Grad Drehung
   für die Texte bestimmt werden.
   Siehe hier zu die FAQ der Dokumentation für Beispiele.

    Vorhandene CSS-Klassen für Texte:
     cicolor =  setzt die Farbe die jeweils als Grundfarbe des Designs 
                definiert ist. (Default: orange)
     gedreht = Dreht den ganzen Text um 5 Grad
     animate = Lässt den Text bei einem Hover sich drehen und skalieren
     shadow  = Gibt den Text einen Schattenwurf
               (Bei gedrehten Text wird ein Schattenwurf automatisch gesetzt) 

5.  Die Teaserlinks rechts neben dem Bildslider auf der Startseite können
    individuell über die Theme-Option "Takelage setzen" gesetzt
    werden. Auch hier können bis zu 3 solcher Links eingegeben werden.
    Symbol, Zieladresse, Titel und Untertitel sind
    eingebbar. Titel und Untertitel sollten jedoch nicht länger als
    40 Zeichen sein.
    Das Symbol kann aus einer vorgegebenen Liste ausgewählt werden.
    
    Die Teaserlinks können als Option auch als ganzes
    deaktiviert werden indem ein Text-/Link-Widget in der
       "Startseite: Rechter Aktionlinkbereich"
    positioniert wuird.
    

6. Linkicons für bestimmte Dokumente werden über CSS gesteuert.
   Um dies "abszuschalten", muss in der CSS-Datei style.css lediglich
   das Stylesheet
       @import url(css/basemod_linkicons.css);
   auskommentiert werden.
   Bei besonderen Links die nicht mit einem Icon ausgestattet werden sollen, 
   kann auch die Klasse  .nolinkicon  gesetzt werden.
   Linkicons werden nur für den Inhaltsbereich gesetzt.

7. Farbcodes und Sprache der Texte
   Laenderspezifische Farbcodes werden in den Dateien
    /css/colors_tk.css  (für Türkei)
    /css/colors_lu.css (für Luxemburg)
    /css/colors_at.css  (für Österreich)
    /css/colors_us.css  (für USA)
    /css/colors_hu.css  (für Ungarn)
    /css/colors_de.css (für Deutschland, jedoch nicht notwendig da Default)
   abgelegt.
   Diese greifen teilweise auf eigene Bilder zu. 
   Diese Bilder sollten in /images/ liegen wenn sie allgemein sind und
   in /images/int/ wenn es um Bilder geht, die länderspezifisch sind.

   Hinsichtlich der Sprachübersetzung von Texten können eigene Language-Dateien
   in einem Verzeichnis  /laguages/ abgelegt werden. Das Theme berücksichtigt
   diese, wenn solche Sprachdateien vorhanden sind.
   Zur Nutzung und Erstellung von Sprachdateien siehe
    http://www.catswhocode.com/blog/how-to-make-a-translatable-wordpress-theme

   Die Sprachdateien werden in der Form
        Sprachcode_Landescode.mo   und
        Sprachcode_Landescode.po
   abgelegt. Beispielsweise
        en_UK.po
        en_UK.mo
   
   Um auf die andere Sprache zu wechseln wird im Backend und Settings die
   Sprache auf die jeweilige Sprache gewechselt, sofern dies durch die
   ortsabhängige Version der Wordpress-Installation nicht bereits geschehen ist.
   Ab der Version 2.7 ist  bereits eine britisch englische Sprachübersetzung
   beigelegt.
   Zur eigenen Übersetzung kann die Datei
      default.po
   mit Hilfe des Editors poedit bearbeitet werden.

8. Schriftfonts
   Da die Standard-BEBAS-Schrift nicht ueberall passt, unterstützt das backend 
   ab der Version 2.12 die Möglichkeit den Schriftfont zu aendern auf
   DroidSans oder Standardschrift (Helvetica/Aria/Sans-Serif).
  
9. Es werden teilweise Funktionen verwendet, die mit WP 3.4 "deprecated" sind.
   Da das Theme allerdings noch bei einigen Installationen unter WP 3.4
   eingesetzt wird, wurden diese Funktionen absichtlich noch nicht umgestellt.

10. Mit der Version 2.13 ist eine optionale Fullsize-Sicht pro Seiten und Artikel
   aber auch global für die gesamte Website möglich. Dabei wird die Sidebar
   nach dem Inhaltsbereich positioniert.
   Vgl: hierzu die FAQ: http://piratenkleider.xwolf.de/faq/artikel-und-seiten-mit-voller-inhaltsbreite-sidebar-verschieben/

11. Mit Version 2.13 ist es möglich mit Hilfe der Takelage-Sonstiges
   Funktion "Disclaimer für (Gast-)Artikel" einen Text (HTML) zu definieren
   der mit Hilfe des Custom Fields show-post-disclaimer um den Artikel
   angezeigt werden kann.

12. Ab Version 2.14 können auf der Startseite Thumbnails für in den Artikeln
    vorhandene Bilder anstelle des Datums eingeblendet werden. Hierzu gibt es
    im Backend eine Option: "Thumbnails anstelle Datum" 
    (Takelage einstellen->Startseite)

13. Ab Version 2.14.5 ist der Circleplayer funktionsfähig. Dieser eingebaute 
    HTML5-Audioplayer basiert auf den jPlayer (http://jplayer.org/download/)
    und ermöglicht es, im Text eingebettete ogg/mp3-Dateien zu erkennen und in 
    der Sidebar rechts abspielen zu lassen.
 
14. Ab Version 2.14.5 kann der Hintergrund des Kopfteiles über das Backend
    (fast) frei definiert werden.

15. Ab Version 2.14.6 kann die Kategorieseite optisch genauso wie die Startseite
    gezeigt werden (per Default aktiv). 
    Als Slider werden dabei dann die letzten Artikel der Kategorie angezeigt.
    Über das Backend kann wieder  (Takelage einstellen->Sonstiges) kann 
    alternativ wieder die Listenansicht angezeigt werden.

16. Mit der Version 2.17 sind wurden neue Defaultbilder eingeführt, sowie
    Socialmedia- und Länderflaggen als Sprite umgesetzt.
    
17. Die bis zur Version enthaltene Twitter-Integration musste aufgrund der API-
    Änderung von Twitter ab dem 11. Juni 2013 abgeschaltet werden. 
    Für die Integration von Twitternachrichten oder Streams sollten stattdessen
    eigene Plugins verwendet werden. 

18. Ab der Version 2.18 ist es möglich, die Darstellung der Artikelauszüge
    auf Startseite und Spezialseiten zu definieren. So ist angebbar ob die
    Auszuege ein- oder zwei spaltig nebeneinander sind, ob Überschriften
    über oder neben der Datumsbox sind, ob eine Datumsbox da ist oder ein
    Thumbnail usw.
    Ausserdem lassen sich gleichzweitig ein und zweispalter darstellen
    wobei diese jeweils unterschiedliche Eigenschaften haben.
    Es ist somit möglich ganz oben als ersten Artikelauszug 500 Zeichen
    und ein Bild anzugeben, während alle folgenden zweispalter kürzer sind
    und nur eine Datumsbox zeigen anstelle des Thumbnails.
    Ebenso können YouTube-Videos angezeigt werden.
   (Hinweis: Diese werden per Default auf youtube-nocookie.com umgeschrieben.)


19. Ab der Version 2.18.5 werden YouTube-Embeddings optional mit einem eigenen
    iFRame-Embedding versehen welches aus Gründen der Barrierefreiheit
    vor dem Embedding einen Link zu YouTube setzt. Ausserdem wird das Embedding
    selbst über youtube-nocookie.com geholt.

20. Ab der Version 2.18.7 ist ein neues Widget enthalten mit dessen Hilfe
    auf einfache Weise Bilder oder Logolinks in die Sidebar plaziert werden
    können. Diese Bilder können via URL oder aus der Mediathek ausgewählt
    werden und haben dann gleich die korrekten Größe für die Sidebar.

21. Aufgrund der Beliebtheit der Wombat-Bilder wurden zwei Plakate zum
    Wahlkampf mit Wombats hinzugefügt und ein Wombat-Comicbild, welches
    zusätzlich und optional eingeschaltet werden kann (Unter "Sonstiges").

22. Ab 2.19.7 wurden einige veraltete Plakatbilder entfernt und eine
    Funktion zur Darstellung von Lesetipps auf der Startseite eingefügt.
    Die Lesetipps müssen gesondert aktiviert werden.

    Zur Darstellung einzelner Lesetipps oder einer Liste von diesen
    innerhalb von Artikeln kann ein Shortcode [linktipps num="<num>"] verwendet werden
    wobei <num> die Zahl der anzuzeigenden Lesetipps ist.
    Ebenso kann die Kategorie der Linktipps eingegrenzt werden, wenn 
    diese verwendet wurden: [linktipps cat="<name>"]

    Für Artikel und Pages wurde eine neue Custom Field "piratenkleider_nosidebar"
    eingefuegt. Wenn dieses gesetzt ist, wird die Sidebar weggelassen und
    nicht nru ausgeblendet und nach unten verschoben.

23. Ab der version 2.19.10 ist das Hochladen und Aktivieren eigenes CSS-Dateien
    möglich; Somit kann man auch ohne Wechsel des Themes das komplette Design
    ändern. 
    Alle Designer die hiermit neue Piratenwebsites mit eigenen Designs
    erstellen werden gebeten, die neuen CSS-Dateien bereitzustellen, so
    dass sie hier in diesem Theme mit als ALternativdesigns aufgenommen
    werden können.

24. Ab Version 2.20 ist dei Scapegoat-Designadaption in einem gebrauchsfähigen 
    Format. Wichtig dabei: Farbkombis sind abzuschalten.

25. Ab version 2.20.2 werden neue Schriften und ein alternativer Style fuer
    Mediensites eingebracht.
    Neue Schriften: Linux Libertine (Open Font Lizenz).
    Zudem wurde das Layout zur Unterstützung der Plugins Liveblog und 
    WP Liveticker angepasst.
