# [Harcovníci.cz](https://harcovnici.cz/): jak řešíme přihlašování dětí (vzor podle roku 2021)

- Na webu (přístupy do [administrace](https://harcovnici.cz/wp-admin/) řeší Aleš) mají rodiče [v pozvánce](https://harcovnici.cz/tabor/tabor-21/) všechny podrobnosti a odkaz na [Googlí formulář](https://docs.google.com/forms/d/12lp4X5_ug7XfvIoTq4uQ4Ba929op2uLri3mt6E1nNmE/edit?usp=sharing).
- Ten sbírá všechna data od rodičů do [tabulky](https://docs.google.com/spreadsheets/d/1ckls4rN1984aaFeXxdL3RyMyyvJYZESnCDJpc3J5rJA/edit?usp=sharing).
- V tabulce je skript (Nástroje > Editor skriptu), jehož obsah je možné vidět v souboru [pdf-generator.gs](pdf-generator.gs). Díky němu v nabídce přibude funkce "Generovat PDF". Nutné je v něm změnit akorát ID šablony a cílové složky (odpovídají alfanumerické změti v URL):
  - `TEMPLATE_ID`: nastylovaný [Google dokument](https://docs.google.com/document/d/1uyuw-qDRtbHZlYQxVC4jvtHi8CE4oMfaAWJSYLKTO34/edit?usp=sharing), který se použije jako šablona k vygenerování PDF;
  - `RESULTS_FOLDER_ID`: [složka](https://drive.google.com/drive/folders/1uDIdfoXchDCvxH15LUC3MCsqRz4bInvR?usp=sharing), do které se PDF uloží.
- PDF pak akorát pošleme rodičům k vyplnění a vyběhání u doktorů, ať nám to komplet přinesou k busu.
