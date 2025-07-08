# Usa una imagen oficial de PHP con servidor embebido
FROM php:8.2-cli

# Copia todos los archivos del proyecto dentro del contenedor
COPY . /app

# Cambia al directorio del proyecto
WORKDIR /app

# Expone el puerto que usará Render
EXPOSE 10000

# Comando para iniciar el servidor PHP
CMD ["php", "-S", "0.0.0.0:10000"]
