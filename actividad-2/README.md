## Actividad N°2 api-rest

# Aqui se encuentra el api-rest desarrollado con el framework laravel y hace uso de Sanctum para la autorización por Token
# para usar el token agregar el Header Athorization: Bearer "Token generado" , respetando el espacio entre la palabra Bearer y el token. Ejecutar las respectivas migraciones. cambiar env.example por .env.

# Rutas

# ruta base /api

/login POST
/register POST
/logout POST
/compradores GET
/compradores POST
/compradores/{id} GET
/compradores/{id} PUT
/compradores/{id} DELETE
/boletos GET


