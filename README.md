# Proyecto Laravel

## Descripción
Este proyecto desarrollado en Laravel implementa un sistema con autenticación, gestión de pedidos y clientes, soporte multilingüe y una interfaz mejorada con alertas y mensajes de sesión.

## Funcionalidades implementadas

### 📌 Últimos cambios
- **(09/03/2025)** Añadidos mensajes de sesión y SweetAlerts para mejorar la experiencia de usuario.
- **(09/03/2025)** Implementados paquetes de idiomas para permitir la internacionalización.

### 📌 Desarrollo de funcionalidades
- **(08/03/2025)** Creación del modelo `Pedido` para gestionar pedidos dentro de la aplicación.
- **(08/03/2025)** Añadido contenido en las vistas Blade para la sección de clientes.
- **(07/03/2025)** Creación de vistas Blade para clientes.
- **(04/03/2025)** Añadidos métodos en el controlador de `Cliente` para gestionar operaciones CRUD.
- **(03/03/2025)** Agregados enlaces de navegación en los botones del menú.

### 📌 Configuración y estructura inicial
- **(28/02/2025)** Creación del modelo `Cliente`.
- **(28/02/2025)** Añadido `docker-compose` para facilitar la ejecución del proyecto en entornos de desarrollo.
- **(28/02/2025)** Creación de múltiples vistas Blade para distintas secciones del sistema.

### 📌 Commits iniciales
- **(11/02/2025 - 14/02/2025)** Primeros commits inicializando el repositorio y sentando las bases del proyecto.

## Instalación y ejecución
1. Clona el repositorio:
   ```sh
   git clone https://github.com/tuusuario/tu-repositorio.git
   ```
2. Instala las dependencias con Composer:
   ```sh
   composer install
   ```
3. Copia el archivo de configuración de entorno:
   ```sh
   cp .env.example .env
   ```
4. Genera la clave de la aplicación:
   ```sh
   php artisan key:generate
   ```
5. Ejecuta las migraciones y seeders:
   ```sh
   php artisan migrate --seed
   ```
6. Levanta el entorno con Docker:
   ```sh
   docker-compose up -d
   ```
7. Accede a la aplicación en `http://localhost`.

## Tecnologías utilizadas
- Laravel
- Blade Templates
- Docker
- SweetAlert
- Multilenguaje con paquetes de idiomas

## Autor
[Pablo Lahoz]


