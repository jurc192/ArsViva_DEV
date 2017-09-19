# IMPROVING WORKFLOW

Ok, hočem fejkat to kar ima daraskolnick.github.io/WCTO-dev-workflow/ na slajdih.
Torej uporaba Git-a, Github-a in pushanje sprememb na server preko git/ssh.

Tudi ta blog https://roybarber.com/version-controlling-wordpress/ je zanmiv:

  "Personally i don't touch the site once its live, just make the changes locally,
  update the repository and pull down the latest version on the server.
  Then just a quick export and import of the database."

- Kakšna je situacija z bazo podatkov in varnostjo?
- Kaj morem dat v .gitignore
- Kako je najboljše (varno) uploadat spremembe?
  - ssh v server in pol pullat github repozitorij
  - git push direkt iz local na github repo in na server



# EDITING NOTES

- Inštaliral stvari s tem
[tutorialom](https://www.digitalocean.com/community/tutorials/how-to-install-wordpress-with-lamp-on-ubuntu-16-04)  


- Kako naredim symlink server roota v neko bližjo mapco? :)
  - $ln -s /path/to/original/ /path/to/linkName (original obstaja, linkName ne)


- Probaj na drugi mašini syncat wp_repo
- Pushaj svoj local git repo na GitHub!
  - Naredi repo na GitHub
  - Git init, git add, git commit
  - (še prej nastavi git usrname, mail in default editor)
    - $ git config --global core.editor "atom --wait"
  - git remote add origin [GitHub repo URL]
  - git remote -v (pokaži remote serverje, za preverit)
  - git push origin master

- Baje je boljše imet v gitu samo theme-folder; kaj je z ostalim? -> wp-content v bistvu
- Sledim temu tutorialu, zgleda kul:
  https://davidwinter.me/install-and-manage-wordpress-with-git/
  http://www.designcollective.io/blogs/manage-wordpress-with-git
  - Zaenkrat preskočim Wordpress submodule -> preštudiraj če rabiš to (zgleda kul)

- Za inspector = CTR + SHIFT + C


## DESIGN RESEARCH

  - za fiksno scrollanje = full page scrolling (fullPage.js)
  - starter themes: underscores, understrap, quark
  - go underscores :P


## IMPLEMENTING FullPage.js

  - Naredil svoj **page template** v /templates/about.php
  - Dodal css v /custom.css
  - Dodal fullPage stuff v /js/fullPage.js in /fullPage.css
  - Enqueual v functions.php

## Hooks, filters and actions

 - Filters -> spreminjanje nekega parametra WP, naredis funkcijo s parametrom
 - Actions -> npr dodajanje html kode al kej...

 - kaj je ta add_theme_support()?


## Server stuff

Uporabljam virt-manager v terminalu za povezavo. Kako je to različno od SSH-ja?
VNC je bolj kul kao.

- Sledim tutorialu za setup LAMP:   https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-16-04

- sudo apt-get install apache2
- sudo apt-get install x11-xkb-utils

- ok pogruntaj kaj je fora SSH vs VNC
  - Za CMD povezavo je SSH the thing. Ko bom hodu imet GUI bom postudiral VNC stuff.

- Tutorialu za HTTPS/TLS (Let's Encrypt) naredim na koncu:   https://www.digitalocean.com/community/tutorials/how-to-secure-apache-with-let-s-encrypt-on-ubuntu-16-04

- Za development fazo sledim temu:  
https://www.digitalocean.com/community/tutorials/how-to-create-a-self-signed-ssl-certificate-for-apache-in-ubuntu-16-04

- ZA UPGRADE poglej ta del tutoriala (upgrading wordpress):  
https://www.digitalocean.com/community/tutorials/how-to-install-wordpress-with-lamp-on-ubuntu-16-04


SERVER DELA! :D


## Setting up backup mechanisms (LVM snapshots)
- Tutorial: http://www.tutonics.com/2012/11/ubuntu-lvm-guide-part-1.html  
- Zaenkrat opustil; Zajebal pri inštalaciji. NASLEDNJIČ PUSTI PAR GB UNPARTITIONED!

## Setting up GIT workflow
- naredil nov GIT repo
- spisal wp-config za dev in prod server
- TEGA NESMEM DAT NA GITHUB! (povej primozu naj si naredi svoj wp-config)
- TODO: debugiraj tisti if stavek v wp-config (apache global variable)-> sploh rabim to?
  - NE! wp-config.php naj pač ne bo na githubu- vsak po svoje. (ŠE VEDNO ME MUČI, POGLEJ KO BO ČAS)

- ČE SPREMINJAŠ LOKACIJO (ali ime) WP-MAPC:  
https://codex.wordpress.org/Moving_WordPress poglavje "If you forget to change locations"
  - poglej wp_options tabelo v db. Pomembna polja:
  "siteurl", "home", "template", "stylesheet", "current_theme"


~~TODO: uredi sranje ki si ga naredu z databazami~~
  - possible fix: server ima SSL/HTTPS certifikat, localhost ne (apache), vrjetno so pokvarjeni linki!.
  - wordpress address URL: https://194.249.1.139/arsviva
  - site address URL: https://194.249.1.139
  - za dashboard mors napisat celo pot: https://194.249.1.139/arsviva/wp-admin

- SiteURL = address of WP core files  = https://194.249.1.139/arsviva
- Home    = addres in browser to reach your blog  = https://194.249.1.139

- naredi svoj branch na localhost `git branch testBranch` in preklopi na ta branchž
`git checkout testBranch` ali vseskupaj `git checkout -b testBranch`
- kako pogledaš kateri local branch je povezan (upstream) s katerim remote?
  - TODO


## MIGRACIJA DATABAZE

```
  scp db.sql jure@194.249.1.139:~/

  mysql -u root -p wordpress < db.sql
```

- Log into mysql, da popraviš poti
```
  use wordpress;

  pager less -SFX

  select * from wp_options;

  update wp_options set option_value='https://194.249.1.139/' where option_name='siteurl';
  update wp_options set option_value='https://194.249.1.139/arsviva' where option_name='home';


```

# THEME DEVELOPMENT

- začnem z underscores temo
- odstranjujem bloat (sidebar, widgets, footer...)
- ZA TEXT SE UPORABLJA TEXT WIDGET?
- naredil strani, static home page "home"
- uporabljam SASS s SCSS sintaxo (recommended)
- vse .scss datoteke ki se začnejo s podčrtajem so "sass partials"
- TODO: naredi navigation menu https://www.youtube.com/watch?v=AShql_Ap1Yo


## CSS STUFF
### NAVIGATION MENU

[https://www.w3schools.com/css/css_navbar.asp]

- še pred tem, kakšne so tipične širine strani?
  [http://www.websitedimensions.com/]
  [https://webmasters.stackexchange.com/questions/7932/what-is-the-standard-width-for-a-website-in-pixels]

- ~~TODO: usposobi SASS (mogoče GULP in COMPASS)~~
  [https://css-tricks.com/gulp-for-beginners/]
  - samo GULP (kul stvar!!), COMPASS-a ne rabim
  - inštaliral node-js in npm
  - napiši svoj gulpfile.js

- ~~uredi git branch / pushing~~
  - spremenil default push mode- simple
  (push only current branch if origin branch name matches):
  ```
  $ git config --global default.push simple
  ```
  - kako pushat local branch na remote repo in ga trackat?
  ```
  $ git push -u origin <branch>
  ```
  // -u je enako kot --set-upstream

- Naredi skripto, ki bo povedala na katerem branchu je trenutno server (popup message)
  - moram dobit spremenljivko/string v php
  - pol direkt iz phpja "sprintat" html alipa "podat" v js
  - moram definirat svojo php funkcijo in jo klicat v "html-ju" - WP HOOKS / ACTION
    - to sem naredil v /inc/template-functions.php
    - bi moral dat na dnu "add_action()"? zakaj?

- Kako mergat branch v master?
  - *ko si na master branchu* git merge <BranchName>


- Responsive design guideliness
[https://premium.wpmudev.org/blog/responsive-wordpress-design/]

- JEBADA s "sticky footer". Končno uspelo! :D


## Full page stuff

- Design je full width. Na ful širokem monitorju, ševedno?
  - mogoče naredit menu full width, vsebino menuja stisnit, kaj z contentom?

- NO JAVASCRIPT! :D
https://blog.hospodarets.com/demos/scroll-snap-full-screen/
uporabim css3 funkcijo "calc"

- dodal "display current page template used" v header za debug
- dodal scroll_template.php
- zaenkrat pusti to sceno z home/front, ki je offtopic zaenkrat

- implementing fullPage.js
- zdej dela ampak imam totalno posrano html strukturo
- grem delat svoj template file

- nastavil "DOMOV" za static front page, "DOGODKI" za blog posts page
- "DOMOV", "O ZAVODU", "NASTANITEV" in "KONTAK" uporabljajo scroll_template.php
- "DOGODKI" uporabljajo home.php

- KAJ ČE IMAM VEČ ČLANKOV KOT JE (max-displayed)? Strani? Load more...?
- zdej query dela, TODO: fix sticky footer, dej elseIf v loop, poglej kako dela home.php
https://codex.wordpress.org/Function_Reference/WP_Query

- nastavil sliko za backgr v articlih
- problem footerja je, da je bil wp_footer pred <footer> elementom!

- backgr image vs image element? Hm...
- FINISHED homepage. Moving to colors & fonts

- TODO: Fix server page, fix slow image loading,...


## Colors and fonts

Probam z guglovimi fonti...dela
Naredi da bo tisti backgr image = featured image
http://www.makeuseof.com/tag/complete-guide-featured-thumbnails-image-sizes-wordpress/


## Spreading to other pages
- je kul da imam hardcodan link/logo z absolutnim URLjem?

## Batch image resizing with imagemagick CMD
- napisal skripto ki pomanjša vse slike
```
#!/bin/bash

COUNT=0
for file in fotke/*.jpg; do
  COUNT=$((COUNT+1))
  printf "$COUNT\n"
  echo ${file##*/}
  convert $file -resize 1920 fotke_resized/${file##*/}
done
```


## Making dynamic content / templates
- MANJKA o zavodu fotka2, manjka nastanitev fotka, manjka URA pri eventih
- ok zaenkrat pustim hardcoded- najbolj simpl & working varianta.
- za evente (metadata, organizacija...) napišem sam al uporabim plugin?
  - nebi blo neumno probat najprej plugin

## Getting into events stuff
- Bom probal naredit svoj plugin za post metadato za dogodke
- Jebeš, preveč reinventing the weel dela
- Uporabim very simple event list plugin...
  - moram imet podprto "post-thumbnails v TEMI če hočem da to dela zaprav"
  - naredil dva queryija za homepage -razmisli kako najprej
  - TODO: parsing meta podatkov v templejtih

  https://codex.wordpress.org/Class_Reference/WP_Query#Taxonomy_Parameters

  - za dobit kategorijo eventa imam več funkcij:
    - get_the_terms() (cusotm taxonomy should work)
    - wp_get_post_terms()

- kako oblikovat ploščice, da bo text lepo zafilal? Zdej je prevče belega?
  - pushaj besedilo malo nižje od naslova. Centrirat? Nah...
  - za center uporabil inline-block, text align center na parentu...

- sticky footer na events page
  Using "calc" method [https://css-tricks.com/couple-takes-sticky-footer/]  

- Rešil overflow texta čez padding:
  [https://stackoverflow.com/questions/8981811/overflowhidden-ignoring-bottom-padding]  

- Ploščice različnih širi lahko rešim z pure CSS masonry
  [https://codepen.io/AdamBlum/pen/fwrnE]  
  [http://w3bits.com/css-masonry/]  
  - jebeš, bojo istih višin pač :'D


## Last week
> Fuck

DONE:
- single post/event page [DONE-ish]
- paginacija dogodkov [Design?]
- definirat funkcionalnost prve strani do konca
- integrirat zemljevide
- vsebina v nogo
- sidebar

TO DO list:
- responsive dizajn text-ploščic
- spremenit horizontalno scrollanje text-ploščic
- filter v dogodkih
- 404 page
- jeziki / prevajanje tekstov
- indikatorji za scrollanje?


### Single post / event page
- disabled VSEL's filter @vsel-single.php
- image looks ugly, find a better solution
- kaj dodamo kak gumb, da se vrneš tam od koder si prišu?
- TO FIX: ko ni lokacije vpisane, grdo skoči labela Kje:

### Pagination
- Katero funkcijo uporabit?
  - the posts pagination zgleda kul
- CSS: Če je naslov predolg skoči "Read more prenizko"
- TODO: design? responsiveness? "load more?"

### Front page definition & organization
- Pokaži 5 stvari
- KAJ JE PRVI SLAJD?
- Mešano (kronološko po datumu objave), poste in evente
  - Naredu backup od front-page.php
  - Max 5 objav, ne glede na tip
  - Definiraj bolj natančno to sranje- algoritem, lot of manual shitty work

### Filter v dogodkih
- Najprej probam uporabit "Search & Filter plugin"
- Morem registrirat svoj sidebar? Al samo oblikovat plugin?
  - Naredi svoj sidebar, not hitiš shortcode

  - Naredil sidebar-filter.php
  - Dodal get_sidebar('filter'); v home.php
  - Registriral sidebar v functions.php
  - Premaknu shortcode iz home v sidebar-filter.php
  - v shortcode nastavitvah ne uporabljaj presledkov!

  - JEBEŠ PLUGIN!
  - Naredim formo sam, toggle ne dela iz prve?


## Popravljanje tekst ploščic
- Na laptopu sploh ni placa za text
- Naslove omejimo na 60 znakov (s presledki)

- Je možno spreminjat velikost fonta glede na št znakov?
  - max višina naslova 100px ?
- Omeji max velikost text ploščice
- Vrgu ven tip dogodka


## DESIGN UPDATE
- Manjka scroll indicator pri o_zavodu
- Bi morali naredit dropdown meni pri O_ZAVODU?
- Po mojem bi morali dodat event_date pri DOGODKI
// spet NASTAVLJAM GULP na svojem repotu
TODO: gitignore package.json

## Back to filter stuff
- Naredim najprej sortiranje glede na post-type (objave, dogodki)
- post typi ki me zanimajo so "post" in "event"
- delam ta tutorial [https://premium.wpmudev.org/blog/load-posts-ajax/]
  - ostal pri "Loading Posts With AJAX"
  - tisto kar me je mučlo pri search-filter.php je "class method"
  [https://developer.wordpress.org/reference/functions/add_filter/#more-information]
  ```
  //add query vars
  add_filter('query_vars', array($this,'add_queryvars') );
  ```
- ZA IZKLOPIT VSEL FILTER uporabi "remove_filter"!!!
- Ok, ne bom delal z AJAXOM (preveč dela)

- mogoče add_query_arg?()
- KO KIKNEŠ SUBMIT, se stran automatsko "refresha" (zaradi action=""this"")

- Uporaljam POST method. Dodal svojo funkcijo v functions.php:
  vivarse_filter_posts() in add_action(pre_get_posts)
  - TODO: naredi da bo obkljukan tisti post-type ki si ga submital (v GET...)
  - TODO: naredi da ko klikneš kamorkoli se skrije filter, RESET GUMB
  - TODO: kaj če submitaš brez označit karkoli? Brez post-typa? Brez kategorije?
  - TODO: če si na drugi (ne prvi) strani, ti preklop filtra ne dela
  - TODO: FIX ERROR @admin page -> filtering stuff naj dela samo na home.php!

- JS dynamic form https://stackoverflow.com/questions/3297143/dynamically-create-a-html-form-with-javascript
- neznam nrdit click-outside-close (brainfart)
  -temp fix, close button
  - TODO: Če odpreš filter in imaš že izbran "evnet" radio, ni odprt event-options div!


- jQuery datepicker
  - Dodal stuff v functions.php
  - TODO: downloadaj samo potrebno, ne linkat cele knjižnice!!
  - TODO: naredi padding/margin na front-page za sidebar
  - če ga daš na skrit element (kot jst) je BUG -se prikaže na dnu
    - solution: dej v css za #datepicker display:none;

OK, ne gre dovolj hitro delo -> grem na izgled / CSS / frontend. Funkcionalnost
se vrnem kasneje.

- TODO: Če refreshas stran (/events -no GET params), ostane dogodek označen. Why?
- Definiral funkcijo za filter stuff v inc/template-tags.php

## Dynamic text stuff
- Probam z jQuery pluginom textFill
- BTW jQuery UI je že v WPju tkoda samo enque script uno kar rabiš
  [https://stackoverflow.com/questions/27462984/use-jquery-datepicker-in-wordpress]

- Naredi da bojo naslovi v PLOŠČICAH visoki 60px max [DONE!]
  - popravi, ko je naslov v eni vrstici naj gre v sredino!

  - ploščica ni nikoli manjša kot 600 x 500
  - Naslovi na malih zaslonih so od 40 - 80px višine
  - Naredi da bo imela metadata fixen spodnji rob!
  - Če je ekrat ožji od 1300px naredi breakpoint -> odreže ploščico!

  - PREVEČ JEBANJA -> Naredi fixno velikost ploščice po breakpointih!
  - Modified inc/template-tags/posted-on() -> removed hyperlink


TODO: spremeni class name contenta v template-content-post [DONE]
TODO: Justify text (paragraphi) na front-page-u


## LAST DAYS
TODO:
- Filter design + functionality
- Dodajanje galerije / videa v objave

### Filter design
- Uporabim search2 ikono, ker mi je lepša? XD
- Rihtanje datuma: kako deluje VSEL meta_query
  - CUSTOM POST META = keyword, v tabeli wp_postmeta vidim vse meta fielde :)
  - event_start_date je shranjeno v unixTimestampu fix (int)
  - JEBIGA, ne znam še tega zaenkrat
