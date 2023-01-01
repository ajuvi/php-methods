# rest-calculator

Exemple d'un servidor i d'un client REST per a realitzar càlculs matemàtics.
* El servidor REST és l'script rest.php.
* Els clients REST són els fitxers run.php i run2.php. 
* Els clients REST utilitzen l'aplicació cURL per a fer consultes per GET, POST, PUT i DELETE.

Per a cada mètode del protocol HTTP en realitza una funció matemàtica diferent.
```
GET -> Suma
POST -> Resta
PUT -> Multiplicació
DELETE -> Resta
```

## Instal·lar

Clona el projecte en un servidor web. Per exemple a la ruta /var/www/html de Apache2 o en la capeta htdocs del Xampp.

## Executar el servidor

Executa **run.sh** per a realitzar els càlculs amb dos números prefefinits.
```
bash run.sh
```

Executa **run2.sh** per a realitzar els càlculs de dos números entrats per teclat.
```
bash run2.sh
```
