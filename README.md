Archiváltam a repot, mivel ez számomra jelengleg idővesztés. Hátha valakinek egyszer hasznos lesz.

A [MesterMC.hu](https://mesterMC.hu) weboldal Laravelben megoldva.

A repo csak olyan publikus fájlokat tartalmaz, amelyek mindenki számára bármikor elérhetők, és nem tartalmaz semmilyen backendet a MesterMC.hu oldalról. Minden backend saját megvalósítás (API stb..).

Még a navbar (header) nem működik, azt is megcsinálom majd, illetve a backend (API + AUTH).

Ez a project funból jött létre, mivel már lassan 4 órája várunk a weboldalra.

Az adatbázis még SQLite, de majd később más lesz.

Az egész weboldal össze-vissza van. Ha lesz időm, akkor rendbe teszek mindent (Leginkább styles, illetve file nevek).
Az elemekhez vannak classok, és a css file is be van linkelve, de még szerepel style attribútum az elemekhez, ami rondítja a kódot.

### Szükséges:

- PHP (8.4.8+)
- Composer
- Laravel (12.19.3+)

Ha mindez megvan:
php artisan migrate
php artisan serve
