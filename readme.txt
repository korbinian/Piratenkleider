Piratenkleider
- Wordpress-Theme für Webauftritte der Piratenpartei 
=================================================

Version 2.2 von Wolfgang Wiese (xwolf), April 2012


DOWNLOADS

    https://github.com/xwolfde/Piratenkleider
    
    
CREDITS & COPYRIGHT

 CC-BY-SA 3.0, http://creativecommons.org/licenses/by-sa/3.0/de/deed.de


AUTOREN / ENTWICKLER

   Wolfgang Wiese (xwolf), http://www.xwolf.de 

   Mit Hilfe von 
     Heiko Philippski, http://www.phindie.de/
     Kerstin Probiesch, http://www.barrierefreie-informationskultur.de

VORVERSION

Dieses Theme basiert auf die Wordpress-Basisvorlage von Korbinian Polk.  
Das alte Original von korbinian kann auf github gefunden werden: 
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
   für den Slider aktivierten Kategorie sein. (Siehe Punkt "Slider" unter den 
    Optionen "Takelage setzen")
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


THEME-OPTION "Takelage einstellen"
 
  Unter der Option "Takelage setzen" sind die grundlegenden
  Optionen für das Theme einstellbar:
    - Newsletter-Box einschalten/abschalten
    - Social Media Buttons ein/ausschalten         
    - Anzahl der Nachrichten auf der Startseite und dessen Anordnung
      einstellen
    - Slider steuern        
    - Default Werbe-Sticker optional schaltbar
    - Webadressen für Newsletter, Mitgliederanträge und Spenden anpassbar
    - Metatag-Angaben ändern
    - Optionale Anzeige für Seitenbilder steuern
    - Menutyp  für die Darstellung der Seiten und Unterseiten in der
      Sidebar steuern.
   
 

THEME-OPTION "Segel setzen"
   
   Unter dieser Option lassen sich die Ersatzbilder festlegen, die angezeigt
   werden, wenn  Artikel oder  Seiten kein "Artikelbild" besitzen.
   Werden für den Slider keine Vorgaben gemacht, wird per Default die erste 
   Kategorie ("Allgemein") verwendet und Bilder per Zufall ausgegeben.

   Ausserdem können hier die Werbeposter beim Slider in der rechten Sidebar
   ausgewählt und über URL-Angaben zusätzliche definiert werden.
   Werden keine Bilder vorausgewählt, werden alle Werbeposter im
   Slider definiert.

   Die Defaultbilder die in der rechten Sidebar als Werbeplakate erscheinen
   liegen im Ordner /plakate/ . 
   Neue Defaultbilder sollten -egal ob als URL-Angabe oder als Datei-
   in den Maßen 277x391 Pixel abgespeichert sein.
   Bei einem anderen Größe wird das Bild entsprechend durch den Browser
   umskaliert. Dies kann jedoch mit Qualitätseinbußen verbunden sein.

   Eine komplette Liste an Werbeplakaten, die von der Piratenpartei eingesetzt
   wird, kann im Wiki unter der Seite http://wiki.piratenpartei.de/Plakate
   gefunden werden.


THEME-OPTION "Captn & Crew"

   Diese Option dient der Eintragung von Kontaktinformationen für die
   Templateseiten um das Impressum, die Datenschutzerklärung und
   optionalen Formularseiten.
     

THEME-OPTION "Klüverbaum"

   Diese Option ermöglicht die Änderungen spezieller CSS-Anweisungen im
   Kopfteil der Seite, sowie das Einfügen eigener CSS-Anweisungen.
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


VERWENDETE PLUGINS
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

4. Es ist ein CSS für Textsticker (statt grafischer Sticker) im Kopfteil
   hinterlegt.
   Um einsolchen Sticker abzulegen, wird ein Code wie dieser im header.php
        <div class="textsticker">
             <h2 class="skip">Sticker</h2>
              <ul>
                 <li><a class="member" href="<?php echo $options['url-mitgliedwerden']; ?>">Werde <span>Pirat!</span></a></li>
                 <li><a class="spenden" href="<?php echo $options['url-spenden']; ?>">Hilf uns mit einer <span>Spende</span></a></li>                                  
             </ul> 
        </div> 
       
  Da allerdings noch nichtalle Browser CSS3 Transistions beherrschen und bei
  denen die es können, die Transitions leider etwas "flatterig" wirken
  und auch die Qualität der Texte (bei um 5 Grad gedrehten Texten) 
  nicht optimal ist, sind Grafiken noch besser geeignet.

5. Linkicons für bestimmte Dokumente werden über CSS gesteuert.
   Um dies "abszuschalten", muss in der CSS-Datei style.css lediglich
   das Stylesheet
       @import url(css/basemod_linkicons.css);
   auskommentiert werden.
   Bei besonderen Links die nicht mit einem Icon ausgestattet werden sollen, 
   kann auch die Klasse  .nolinkicon  gesetzt werden.
   Linkicons werden nur für den Inhaltsbereich gesetzt.


