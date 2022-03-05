# [Harcovníci.cz](https://harcovnici.cz/): jak řešíme přihlašování dětí (vzor podle roku 2022)

- Na webu (přístupy do [administrace](https://harcovnici.cz/wp-admin/) řeší [Aleš](https://ales.net)) mají rodiče [v pozvánce](https://harcovnici.cz/tabor/tabor-22/) všechny podrobnosti a odkaz na [Googlí formulář](https://docs.google.com/forms/d/e/1FAIpQLScROEuhxzQmeC40QFQT0nK52oU8_URWiETt0vcRmFJKnbG1FQ/viewform).
- Ten sbírá všechna data od rodičů do [tabulky](https://docs.google.com/spreadsheets/d/1v0bnJovwj7cqCte7T0ktITcjVSVSwuGecQGkfhcOHhc/edit).
- V tabulce je skript (`Rozšíření > Apps Scripts`), jehož obsah je možné vidět v souboru [pdf-generator.gs](www/prihlasky/pdf-generator.gs). Díky němu v nabídce přibude funkce "Generovat PDF". Nutné je v něm změnit akorát ID šablony a cílové složky (odpovídají alfanumerické změti v URL):
  - `TEMPLATE_ID`: nastylovaný [Google dokument](https://docs.google.com/document/d/14qUgX4gsSTfDdmZZxGQ-fUJ8OFvz_2UI3qXiXDqagLY/edit), který se použije jako šablona k vygenerování PDF;
  - `RESULTS_FOLDER_ID`: [složka](https://drive.google.com/drive/u/0/folders/1YwE-wK1AETLW1JQsFCwg3QvygGvvnIBW), do které se PDF uloží.
- PDF pak akorát mailem pošleme rodičům k vyplnění a vyběhání u doktorů, ať nám to komplet přinesou k busu.
