#!/bin/bash

read -p "Entra un dels mètodes per enviar la informació (GET,POST,PUT,DELETE): " metode


if [ "$metode" = "GET" ]; then
	curl "http://localhost/php-methods/rest.php?num1=2&num2=5"

elif [ "$metode" = "POST" ]; then
	curl -X POST http://localhost/php-methods/rest.php \
	     -H "Content-Type: application/json" \
	     -d '{"num1": "2", "num2": "6"}'

elif [ "$metode" = "PUT" ]; then
        curl -X PUT http://localhost/php-methods/rest.php \
             -H "Content-Type: application/json" \
             -d '{"num1": "2", "num2": "7"}'

elif [ "$metode" = "DELETE" ]; then
        curl -X DELETE http://localhost/php-methods/rest.php \
             -H "Content-Type: application/json" \
             -d '{"num1": "2", "num2": "8"}'

fi


