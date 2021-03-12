# [Harcovníci.cz](https://harcovnici.cz/)

Veřejné zrcadlo harcovnického repa:

- V adresáři [www/wp-content/themes/harcovnici/](www/wp-content/themes/harcovnici/) je šablona pro WordPress postavená nad [Blankslate](https://github.com/tidythemes/blankslate).
- V adresáři [www/fotky/](www/fotky/) je galerie na základě [h5ai](https://github.com/lrsjng/h5ai).

Zbytek se neverzuje a žije si vlastním životem – WP & pluginy se aktualizují automaticky. Fotky se přidávají přes FTP, postup je ve vlastním [README](www/fotky/README.md).

## Vývoj

Vše je připraveno, takže stačí nahodit akorát Docker, nainstalovat NPM moduly a nastartovat Gulp.

## Produkce

Po naklonování je třeba nalinkovat druhý remote, který leží na Blueboardu a fakticky je produkcí.

```
git remote set-url --add --push origin git@github.com:aleskrejci/harcovnici.cz.git
git remote set-url --add --push origin git@www.harcovnici.cz:harcovnici.cz
```

Stačí ovšem přispět sem a Aleš už to přenese.
