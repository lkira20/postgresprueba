## Sobre el proyecto

Esto es una prueba tecnica elaborada por luis briceño 
¿Como ejecutar la aplicación?
- 
- En la terminal ubiquese en el directorio raiz del proyecto
- Ejecute en la terminal "composer install"
- En la raiz del proyecto cree un archivo llamado .env
- Copie el contenido del archivo .env.example en el archivo .env que acaba de crear
- Configure su base de datos en el archivo .env , DB_DATABASE(nombre de la base de datos), DB_USERNAME(nombre de usuario), DB_PASSWORD(contraseña), si necesita tambien puede configurar el puerto (DB_PORT), el host (DB_HOST), y la conexion (DB_CONNECTION), que por defecto esta en postgres
- ejecute el comando "php artisan key:generate"
-luego "php artisan migrate"

Listo tu aplicacion ya deberia poder correr sin problemas
