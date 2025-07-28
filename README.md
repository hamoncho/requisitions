# Programa para el manejo de requisiciones en el tecnologico de uruapan.
![imagen de la paguina web](docs/img/page-view.png)
## Configuración del Entorno de Desarrollo.

Esta seccion contiene los pasos necesarios para configurar tu entorno de desarrollo y comenzar a trabajar en el proyecto.

### Requisitos Previos

#### Instalación de Programas Necesarios

Para desarrollar en Laravel, es necesario contar con varias herramientas y programas:

- **PHP (>= 8.1)**: Laravel requiere PHP 8 o superior.
- **Composer**: El gestor de dependencias para PHP.
- **MySQL/MariaDB**: Base de datos relacional para almacenar los datos del proyecto.
- **Node.js & npm**: Para manejar las dependencias de frontend.
- **Git**: Para clonar y gestionar el repositorio.
- **Laravel Installer (opcional)**: Para iniciar nuevos proyectos Laravel fácilmente.

##### Instrucciones de Instalación

1. **PHP**
   - Para Arch Linux:  
     ```bash
     sudo pacman -S php
     ```
   - Para Mac:  
     Puedes instalar PHP usando [Homebrew](https://brew.sh/):
     ```bash
     brew install php
     ```

2. **Composer**
   - Para Arch Linux:  
     ```bash
     sudo pacman -S composer
     ```
   - Para Windows:
     Descarga e instala Composer desde su [sitio oficial](https://getcomposer.org/).

3. **MySQL/Mariadb**
   - Para Arch Linux:  
     ```bash
     sudo pacman -S mariadb
     ```
   - Para Windows: 
     Instala MySQL desde su [sitio oficial](https://dev.mysql.com/downloads/) o utiliza servicios como **Laragon** (Windows) o **MAMP** (Mac).

4. **Node.js & npm**
   - Para Arch Linux:  
     ```bash
     sudo pacman -S nodejs
     ```
   - Para Windows:  
     Descarga e instala Node.js desde su [sitio oficial](https://nodejs.org/en/).

5. **Git**
   - Para Arch Linux:  
     ```bash
     sudo pacman -S git
     ```
   - Para Windows: 
     Instala Git desde su [sitio oficial](https://git-scm.com/).

6. **Laravel Installer (opcional).**  
      Para instalar el instalador global de Laravel, usa:
      ```bash
      composer global require laravel/installer
      ```
### 2. Empezar a desarrollar.

No importa el sistema operativo que estes usando los pasos son los mismos.

#### 1. Descargar el proyecto.

   - **Clonar el repositorio.**
     ```bash
     git clone git@github.com:hamoncho/requisitions.git
     ```
     Es probable que no puedas clonar este repositorio si todavia no has agregado
     una `ssh` a github.
   
   - **Acceder a la carpeta del proyecto.**
     ```bash
     cd requisitions
     ```
#### 2. Configurar archivo `.env`.

   - **Crear archivo `.env`.**
     
     El proyecto ya viene con un archivo de ejemplo `.env.example` copielo y cambie el nombre a `.env`.
     
     ```bash
     cp .env.example .env
     ```
   - **Editar `.env`.**
     
     Configura las variables del entorno, como la conexión a la base de datos.
     En el archivo .env, ajusta los valores de las siguientes variables según tu configuración.
     
     ```.env
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=nombre_base_datos
     DB_USERNAME=usuario
     DB_PASSWORD=contraseña
     ```

#### 3. Instalar dependencias.

Dentro de la carpeta del proyecto ejecutar:
- **Instalar las dependencias de composer.**
```bach
composer install
```
- **Instala las dependecias de npm.**
```npm
npm install
```
- **Compila el proyecto.**
```npm
npm run build
```
#### 4. Comandos artisan.

- **Generar una `key`.**
```bash
php artisan key:generate
```
- **Generar las tablas de la bases de datos.**
```bash
php artisan migrate
```
- **Llenar las tablas con datos auto generados.**
```bash
php artisan db:seed
```
- **Crea un link a la carpeta publica.**
```bash
php artisan storage:link
```
Descarga los archivos de la carpeta storage aqui: [google-drive](https://drive.google.com/drive/folders/1mAQ3NwbmqhafZVN2Hwtqab4GtB329NHw?usp=sharing)
y colocalos en la carpeta `requisitions/storage/app/public/`.
- **Iniciar el servidor de desarrrollo.**
```bash
php artisan serve
```
Este comando iniciará el servidor y podrás acceder a la aplicación en `http://localhost:8000`.

## Despliegue de la app en produccion.
Los requisitos de Laravel incluyen un servidor web, una base de datos, PHP y Composer.
También necesitarás otro software como Git para enviar los archivos de la aplicación desde tu ordenador local al equipo remoto.
### Aplicaciones necesarias.
- **Actualiza tu servidor ubuntu con este comando**
```bash
sudo apt update && sudo apt upgrade
```

- **Instala el servidor web.**
```bash
sudo apt install -y apache2
```

- **Instalar php y sus dependencias.**
```bash
sudo apt install -y php php-cli php-fpm php-mysql php-xml php-mbstring
```
Son dependencias que ocupa laravel para poder funcionar. Tambien las tienes que habilitar en tu archivo de configuracion php. `/etc/php.ini`

- **Instalar la base de datos.**
```bash
sudo apt install -y mysql-server
```

- **Instalar composer para manegar las dependencias de Laravel.**
```bash
sudo apt install -y composer
```

- **Instalar git**
```bash
sudo apt install -y git
```

### Despliegue de la aplicacion.
1. **Crea un virtual host para la aplicacion.**
```bash
sudo vim /etc/apache2/sites-available/requisitions.conf
```
**Contenido del archivo.**
```
<VirtualHost *:100>
   ServerName thedomain.com
ServerAdmin tucorreo@tudominio.com
   DocumentRoot /var/www/html/requisitions/public
   <Directory /var/www/html/requisitions/public>
      AllowOverride All
   </Directory>
   ErrorLog ${APACHE_LOG_DIR}/error.log
   CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```
2. **Clonar el repositorio de git.**
Ir a la carpeta dónde se va clonar el repositorio.
```bash
cd /var/www/html
```

Clonar el repositorio.
```bash
git clone  https://github.com/hamoncho/requisitions.git
```

3. Instalar todas las dependencias.
Entrar en la carpeta del proyecto.
```bash 
cd requisitions
```

Instalar dependencias de php usando composer.
```bash
sudo composer install
```

Instalar dependencias de npm.
```bash 
npm install
```
4. Configurar el archivo `.env`.

Crear arhivo `.env`.

El proyecto ya viene con un archivo de ejemplo `.env.example` copielo y cambie el nombre a `.env`.
 
```bash
cp .env.example .env
```

Editar `.env`.
Configura las variables del entorno, como la conexión a la base de datos.
En el archivo .env, ajusta los valores de las siguientes variables según tu configuración.
 ```.env
 DB_CONNECTION=mysql
 DB_HOST=127.0.0.1
 DB_PORT=3306
 DB_DATABASE=nombre_base_datos
 DB_USERNAME=usuario
 DB_PASSWORD=contraseña
 ```

5. Asignar los permisos correctos.

Cambiar el propietario del proyecto.
```bash
sudo chown -R www-data /var/www/html/requisitions
```

Cambiar los permisos a la carpeta storage.
```bash
sudo chmod -R 755 /var/www/html/requisitions/storage
```

6. Generar una key.
```bash 
sudo php artisan key:generate
```

7. Hacer las migraciones de las bases de datos.
```bash
sudo php artisan migrate
```
8. Compilar el projecto.
```bash
npm run build.
```

9. Habilitar el sitio web.
```bash
sudo a2ensite requisitions.conf
```

```bash
sudo a2enmod rewrite
```

10. Reiniciar el servicio.
```bash
sudo systemctl restart apache2
```

