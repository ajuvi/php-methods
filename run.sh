#!/bin/bash

read -p "Entra una operació (+,-,*,/): " operacio


if [ "$operacio" = "+" ]; then
	#envia a través del mètode HTTP GET
	curl "http://localhost/php-methods/rest.php?num1=80&num2=5"

elif [ "$operacio" = "-" ]; then
	#envia a través del mètode HTTP POST
	curl -X POST http://localhost/php-methods/rest.php \
	     -H "Content-Type: application/json" \
	     -d '{"num1": "80", "num2": "5"}'

elif [ "$operacio" = "*" ]; then
	#envia a través del mètode HTTP PUT
        curl -X PUT http://localhost/php-methods/rest.php \
             -H "Content-Type: application/json" \
             -d '{"num1": "80", "num2": "5"}'

elif [ "$operacio" = "/" ]; then
	#envia a través del mètode HTTP DELETE
        curl -X DELETE http://localhost/php-methods/rest.php \
             -H "Content-Type: application/json" \
             -d '{"num1": "80", "num2": "5"}'

else
	echo "ERROR: Has d'escriure una operació vàlida."

fi
