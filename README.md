# [Harcovníci.cz](https://harcovnici.cz/)

Veřejné zrcadlo harcovnického repa. Web, maily, doménu, hosting i zálohování spravuje [Aleš](https://ales.net/), takže jestli je něco třeba upravit, dejte vědět.

- Práce s vizuální stránkou je popsána v [grafickém manuálu](https://ales.net/manual/harcovnici) a [případovce](https://ales.net/2016/harcovnici-pripadova-studie-k-nove-identite).
- V adresáři [www/wp-content/themes/harcovnici/](www/wp-content/themes/harcovnici/) je šablona pro WordPress postavená nad [Blankslate](https://github.com/tidythemes/blankslate).
  - Přístupy do [administrace webu](https://harcovnici.cz/wp-admin/) řeší Aleš.
  - Zbytek se neverzuje a žije si vlastním životem – WP & pluginy se aktualizují automaticky. Idea je zhruba [takováto](https://ales.net/2018/zacinam-s-gitem-verzovani-wordpressu).
  - Databáze a soubory se zálohují na [AWS S3](https://ales.net/2021/wordpress-kompletni-zaloha-webu-na-amazon-s3).
- V adresáři [www/fotky/](www/fotky/) je galerie na základě [h5ai](https://github.com/lrsjng/h5ai). Fotky se přidávají přes FTP, postup je ve vlastním [README](www/fotky/README.md). Jejich zálohu ve vyšším rozlišení má u sebe Aleš.
- Systém přihlášek na tábor je popsaný ve vlastním [README](www/prihlasky/README.md).

## Vývoj

Vše je připraveno, takže stačí nahodit akorát Docker, stáhnout DB dump, nainstalovat NPM moduly a nastartovat Gulp.

## Produkce

Po naklonování je třeba nalinkovat druhý remote, který leží na Blueboardu a fakticky je produkcí.

```
git remote set-url --add --push origin git@github.com:aleskrejci/harcovnici.cz.git
git remote set-url --add --push origin git@www.harcovnici.cz:harcovnici.cz
```

Stačí ovšem přispět sem a Aleš už to přenese.
