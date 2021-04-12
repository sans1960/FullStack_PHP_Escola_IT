Descripció

En aquesta pràctica aprendras a aplicar mecanismes bàsics d’autenticació d’usuaris en Laravel. Hauras de c rear una aplicació, per la gestió dels partits de la Lliga de Futbol, aplicant el patró de disseny de software MVC(Model-Vista-Controlador). 

Nivell 1
- Exercici 1

Crear una aplicació, per la gestió dels partits de la Lliga de Futbol, aplicant el patró de disseny de software MVC(Model-Vista-Controlador). 

Definir les rutes principals que tindrà el nostre lloc web. El domini ha de tindre el CRUD al complet (Create, Read, Update, Delete) d'equips i partits utilitzant els mètodes HTTP corresponents.

- Exercici 2

Crea les vistes php y associa-la a cadascuna de les rutes .

Defineix els Models de dades, middleware i controllers que consideres necessaris. Recorda que al menys tindràs dues taules en base de dades; equips i partits. Els partits han de relacionar dos equips, contenir la data de joc y el resultat final del marcador de cada equip.  

La interacció amb la base de dades es realitzarà per mitjà del ORM Eloquent i per tant els objectes seran persistits únicament en memòria.
- Exercici 3

Crear els formularis necessaris per poder realitzar el CRUD sobre el sistema de gestió d'equips i partits. Heu de validar que la informació introduïda a l'usuari sigui correcta.

Afegeix el sistema de control d’accés de Laravel Breeze, defineix la vista de login, registre i recuperació de contrasenya que l'usuari necessita per accedir a l'aplicació. Fes ús de la configuració per defecte.

Nivell 2
- Exercici 4

Customitza la vista de login, registre i recuperació de contrasenya que l'usuari necessita per accedir a l'aplicació. Defineix sistema de rols i bloqueja el accés a les diferents vistes segons el seu nivell de privilegis.

- Exercici 5

Defineix la vista home de benvinguda a l’aplicació i introdueix una navbar.

Crea un sistema que gestiona l'error 404 a nivell de projecte. Podeu utilitzar la funció Resposta i la redirecció de Laravel.

Nivell 3
- Exercici 6

Agafeu les dades d'inici de sessió al sistema de galetes de Laravel. En cadascuna de les vistes has d'incrustar al navbar el nom d'usuari registrat i el rol d’aquest.


Recursos
Rols i permisos
Relationships: Eloquent