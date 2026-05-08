# [Harcovníci.cz](https://harcovnici.cz/)

Veřejné zrcadlo harcovnického repa. Web, maily, doménu, hosting i zálohování spravuje [Aleš](https://ales.net/), takže jestli je něco třeba upravit nebo vysvětlit, dejte vědět.

## Grafika

Práce s vizuální stránkou je popsána v [grafickém manuálu](https://ales.net/manual/harcovnici) a [případovce](https://ales.net/2016/harcovnici-pripadova-studie-k-nove-identite).

## Správa webu

Přístupy do [administrace webu](https://harcovnici.cz/wp-admin/) řeší Aleš.

### Přidání fotek na web

Pro přidání nových fotek je třeba se [přihlásit na FTP](http://webftp.harcovnici.cz) (přístupy u Aleše) a vytvořit novou složku ve formátu `Rok - Název akce` (například `2019 - Podzimní harc`).

Ideální je fotky před nahráním optimalizovat: momentálně používám zmenšení na 2000px na delší straně a kompresi na 80%. Po nahrání se automaticky objeví ve [fotogalerii](https://harcovnici.cz/galerie/). Je dobré nechat si u sebe zálohu ve vyšším rozlišení, většinu z nich má Aleš.

Galerie běží na základě [h5ai](https://github.com/lrsjng/h5ai). Aby fungovalo přihlašování, je třeba zkontrolovat existenci `.htpasswd` v rootu, ten se naschvál neverzuje.

### Přihlášky na tábor

- Stručným mailem rodičům z předchozího ročníku (minus noví kadeti) posíláme odkaz na [pozvánku](https://harcovnici.cz/tabor/) veřejně přístupnou na webu. V ní jsou všechny podrobnosti a v případě změn ji průběžně aktualizujeme (změny škrtáme a zvýrazňujeme), ať na ni rodiče můžeme vždy odkázat.
- Z pozvánky vede odkaz na přihlášku = Googlí formulář.
- Ten sbírá všechna data od rodičů do naší tabulky, do které je třeba překopírovat skript (přes volbu `Rozšíření → Apps Scripts`), jehož obsah je tu v souboru [pdf-generator.gs](www/prihlasky/pdf-generator.gs). Díky němu v nabídce přímo v Google tabulce přibude funkce „Generovat pro každou řádku…“. Nutné je ve skriptu změnit akorát ID šablon a cílových složek (odpovídají alfanumerické změti v adrese).
  - Jen pozor, že skript vždy vygeneruje podklady pro celou tabulku znova, je tedy lepší nově přihlášené vykopírovat na vedlejší list a generovat z něj.
- Podklady pak akorát mailem pošleme (většinou dávkově jednou za týden) rodičům ke kontrole, že se někde nepřepsali. Dovyplněné a podepsané nám to stačí přinést až k busu.

## Vývoj webu

Vše je připraveno, takže stačí nahodit akorát Docker, importovat [DB dump](https://harcovnici.cz/wp-admin/options-general.php?page=updraftplus#updraft-existing-backups-heading), nainstalovat NPM moduly a nastartovat Gulp.

```
cd www
docker compose up -d
# importovat DB dump např. přes Sequel Pro (host: 127.0.0.1; user: user; password: password; db: wordpress)
npm install
gulp watch
```

- V adresáři [www/wp-content/themes/harcovnici/](www/wp-content/themes/harcovnici/) je šablona pro WordPress postavená nad [Blankslate](https://github.com/tidythemes/blankslate).
- Zbytek se neverzuje a žije si vlastním životem – WP & pluginy se aktualizují automaticky. Idea je zhruba [takováto](https://ales.net/2018/zacinam-s-gitem-verzovani-wordpressu).
- Databáze a soubory se zálohují na [AWS S3](https://ales.net/2021/wordpress-kompletni-zaloha-webu-na-amazon-s3).

### Nasazení změn na produkci

Po naklonování je třeba nalinkovat druhý remote, který leží na Blueboardu a fakticky je produkcí. Stačí ovšem přispět sem a Aleš už to přenese.

```
git remote set-url --add --push origin git@github.com:aleskrejci/harcovnici.cz.git
git remote set-url --add --push origin git@www.harcovnici.cz:harcovnici.cz
```
