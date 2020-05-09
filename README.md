# [Harcovníci.cz](https://harcovnici.cz/)
WordPress šablona na základě [Blankslate](https://github.com/tidythemes/blankslate).

## Deploy
- Aby deploy neselhal, je třeba nejdříve dočasně odemknout FTP přístup pro všechny IP adresy v [administraci Onebit](https://www.oneadmin.cz/onebit/?mng=service&subcat=ftpsrv).
- Web je hostován na OneBitu, ten bohužel neumí Git repozitáře. Proto verzujeme na GitHubu a deploy je prováděn [akcí](https://github.com/aleskrejci/harcovnici.cz/actions?query=workflow%3A%22FTP+deploy%22).