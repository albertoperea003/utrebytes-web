<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# UtreBytes Web

Aplicación web desarrollada con Laravel 12 y tecnologías modernas.

## 📋 Requisitos Previos

- **PHP:** 8.2 o superior
- **Laravel:** 12.0
- **Composer:** Última versión
- **Node.js:** 18.0 o superior
- **npm:** 9.0 o superior
- **Git:** Para control de versiones

## 🚀 Instalación y Configuración

### 1. Clonar el Repositorio

```bash
git clone <url-del-repositorio>
cd utrebytesweb
```

### 2. Instalar Dependencias de PHP

```bash
composer install
```

### 3. Instalar Dependencias de Node.js

```bash
npm install
```

### 4. Configurar Variables de Entorno

Copiar el archivo `.env.example` a `.env`:

```bash
cp .env.example .env
```

Luego, editar el archivo `.env` y configurar:

```env
APP_NAME="UtreBytes"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=utrebytes_web
DB_USERNAME=root
DB_PASSWORD=

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_FROM_ADDRESS=noreply@example.com
```

### 5. Generar Clave de Aplicación

```bash
php artisan key:generate
```

### 6. Crear Base de Datos

```bash
php artisan migrate
```

Opcionalmente, llenar la base de datos con datos de ejemplo:

```bash
php artisan migrate:seed
```

## 🛠️ Desarrollo

### Iniciar el Servidor de Desarrollo

**En una terminal (Backend):**

```bash
php artisan serve
```

La aplicación estará disponible en `http://localhost:8000`

**En otra terminal (Frontend):**

```bash
npm run dev
```

Esto compilará los assets en tiempo real usando Vite.

### Comandos Útiles

```bash
# Limpiar caché
php artisan cache:clear
php artisan config:clear

# Ejecutar migraciones
php artisan migrate
php artisan migrate:rollback
php artisan migrate:refresh

# Ejecutar seeders
php artisan db:seed

# Crear controlador
php artisan make:controller NombreController

# Crear modelo
php artisan make:model NombreModelo -m

# Generar rutas
php artisan route:list

# Ejecutar tests
php artisan test
```

## 📦 Compilar para Producción

```bash
npm run build
```

Esto minificará y optimizará todos los assets para producción.

### Variables de Entorno en Producción

En el servidor, configurar `.env` con:

```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://tudominio.com

DB_HOST=tu-host-db
DB_DATABASE=tu-base-datos
DB_USERNAME=tu-usuario
DB_PASSWORD=tu-contraseña

MAIL_HOST=tu-servidor-smtp
```

## 🔒 Seguridad

- Nunca commitear el archivo `.env` al repositorio
- Usar `.env.example` como referencia
- Mantener las dependencias actualizadas: `composer update` y `npm update`
- Ejecutar tests regularmente: `php artisan test`
