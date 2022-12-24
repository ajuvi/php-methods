#!/bin/bash

read -p "Entra un dels mètodes per enviar la informació (POST,PUT,GET,DELETE): " metode
nom="Artur"

curl "http://localhost/rest.php?nom=${nom}"
