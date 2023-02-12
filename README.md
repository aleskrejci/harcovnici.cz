# [Harcovníci.cz](https://harcovnici.cz/)

Veřejné zrcadlo harcovnického repa. Web, maily, doménu, hosting i zálohování spravuje [Aleš](https://ales.net/), takže jestli je něco třeba upravit nebo vysvětlit, dejte vědět.

## Grafika

Práce s vizuální stránkou je popsána v [grafickém manuálu](https://ales.net/manual/harcovnici) a [případovce](https://ales.net/2016/harcovnici-pripadova-studie-k-nove-identite).

## Správa webu

Přístupy do [administrace webu](https://harcovnici.cz/wp-admin/) řeší Aleš.

### Přidání fotek na web

Pro přidání nových fotek je třeba se přihlásit na FTP (přístupy u Aleše) a v existující složce `www/fotky` vytvořit novou složku ve formátu `Rok - Název akce` (například `2019 - Podzimní harc`).

Ideální je fotky před nahráním optimalizovat: momentálně používám zmenšení na 2000px na delší straně a kompresi na 80%. Po nahrání se automaticky objeví ve [fotogalerii](https://harcovnici.cz/fotky/). Je dobré nechat si u sebe zálohu ve vyšším rozlišení, většinu z nich má Aleš.

Galerie běží na základě [h5ai](https://github.com/lrsjng/h5ai).

### Přihlášky na tábor (vzor podle roku '22)

- Stručným mailem rodičům z předchozího ročníku (minus noví kadeti) posíláme odkaz na [pozvánku](https://harcovnici.cz/tabor/tabor-22/) veřejně přístupnou na webu. V ní jsou všechny podrobnosti a v případě změn ji průběžně aktualizujeme (změny škrtáme a zvýrazňujeme), ať je na ni můžeme vždy odkázat.
- Z pozvánky vede odkaz na [přihlášku = Googlí formulář](https://docs.google.com/forms/d/e/1FAIpQLScROEuhxzQmeC40QFQT0nK52oU8_URWiETt0vcRmFJKnbG1FQ/viewform).
- Ten sbírá všechna data od rodičů do [tabulky](https://docs.google.com/spreadsheets/d/1v0bnJovwj7cqCte7T0ktITcjVSVSwuGecQGkfhcOHhc/edit).
- V tabulce je zkopírovaný skript (`Rozšíření > Apps Scripts`), jehož obsah je tu možné vidět v souboru [pdf-generator.gs](www/prihlasky/pdf-generator.gs). Díky němu v nabídce přímo v Google tabulce přibude funkce "Generovat PDF". Nutné je ve skriptu změnit akorát ID šablony a cílové složky (odpovídají alfanumerické změti v URL):
  - `TEMPLATE_ID`: nastylovaný [Google dokument](https://docs.google.com/document/d/14qUgX4gsSTfDdmZZxGQ-fUJ8OFvz_2UI3qXiXDqagLY/edit), který se použije jako šablona k vygenerování PDF;
  - `RESULTS_FOLDER_ID`: [složka](https://drive.google.com/drive/u/0/folders/1YwE-wK1AETLW1JQsFCwg3QvygGvvnIBW), do které se PDF uloží. Jen pozor, že skript vždy vygeneruje podklady pro celou tabulku znova, je tedy lepší nově přihlášené vykopírovat na vedlejší list a generovat z něj.
- PDF pak akorát mailem pošleme (většinou dávkově jednou za týden) rodičům ke kontrole, že se někde nepřepsali. Vyplněné nám to stačí přinést až k busu.

## Vývoj webu

Vše je připraveno, takže stačí nahodit akorát Docker, importovat [DB dump](https://harcovnici.cz/wp-admin/options-general.php?page=updraftplus#updraft-existing-backups-heading), nainstalovat NPM moduly a nastartovat Gulp.

- V adresáři [www/wp-content/themes/harcovnici/](www/wp-content/themes/harcovnici/) je šablona pro WordPress postavená nad [Blankslate](https://github.com/tidythemes/blankslate).
- Zbytek se neverzuje a žije si vlastním životem – WP & pluginy se aktualizují automaticky. Idea je zhruba [takováto](https://ales.net/2018/zacinam-s-gitem-verzovani-wordpressu).
- Databáze a soubory se zálohují na [AWS S3](https://ales.net/2021/wordpress-kompletni-zaloha-webu-na-amazon-s3).

### Nasazení změn na produkci

Po naklonování je třeba nalinkovat druhý remote, který leží na Blueboardu a fakticky je produkcí. Stačí ovšem přispět sem a Aleš už to přenese.

```
git remote set-url --add --push origin git@github.com:aleskrejci/harcovnici.cz.git
git remote set-url --add --push origin git@www.harcovnici.cz:harcovnici.cz
```
