## Actividad 1 aplicación web de boletos 

# Desarrollada con vainilla php y bootstrap, implementando MVC con MySQL. cumpliendo con los requisitos exigidos.
# esquemas de las tablas de base de datos:

usuarios: id, nombre, apellido_1, apellido_2, cedula, role_id, email, password, estado
role: id, nombre_rol
reservas: id, id_usuario, id_ciudad, boletos
ciudades: id, ciudad, boletos
