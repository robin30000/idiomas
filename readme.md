# 📘 Aplicación de Búsqueda de Clases y Exámenes de Idiomas (Consola PHP)

Una aplicación de consola en PHP que permite buscar clases y exámenes por coincidencia parcial en sus nombres. Está diseñada siguiendo principios de **programación orientada a objetos (POO)**, estándares **PSR-4**, y buenas prácticas para código limpio y mantenible.

---

## 🚀 Requisitos

- PHP >= 7.4
- MySQL o MariaDB
- Composer

---

## ⚙️ Instalación

1. **Clona o descomprime el proyecto en tu máquina local.**

2. **Instala las dependencias con Composer:**

```bash
composer install
```

3. **Crea la base de datos:**

Conéctate a tu servidor MySQL y crea una base de datos con el nombre idiomas e importa el archivo de ejemplo `sql/schema.sql` incluido en el proyecto:

Esto creará las tablas `classes` y `exams` con datos de ejemplo.

## ▶️ Ejecución

Desde la terminal, navega hasta el directorio raíz del proyecto y ejecuta:

```bash
php main.php search <palabra_clave>
```

🔍 **Ejemplo:**

```bash
php main.php search trabajo
```

📤 **Salida esperada:**

```
Clase: Vocabulario sobre Trabajo en Inglés | 5/5
Clase: Conversaciones de Trabajo en Inglés | 5/5
Examen: Trabajos y ocupaciones en Inglés | Selección
```

---

## 🧪 Pruebas Unitarias

El proyecto incluye pruebas unitarias usando PHPUnit.

### Ejecutar pruebas

1. Asegúrate de tener la carpeta `/tests` y el archivo `phpunit.xml` configurado.

2. Ejecuta PHPUnit:

```bash
vendor/bin/phpunit
```

✅ Si todo está bien configurado, verás algo como:

```
PHPUnit 10.5.45 by Sebastian Bergmann and contributors.

..                                                                  2 / 2 (100%)

Time: 00:00.015, Memory: 8.00 MB

OK (2 tests, 6 assertions)
```

---

## 📁 Estructura del Proyecto

```
├── main.php
├── src/
│   ├── Models/
│   │   ├── Resource.php
│   │   ├── ClassResource.php
│   │   └── ExamResource.php
│   └── Database/
│       └── Connection.php
├── tests/
│   └── ResourceTest.php
├── database.sql
├── composer.json
├── phpunit.xml
└── .env
```

---

## 📌 Notas

- Sigue los estándares PSR-4 con autoload configurado en `composer.json`.
- Se utiliza MySQL como sistema de base de datos, pero puedes adaptarlo fácilmente a otro.
- No se incluyen frameworks externos, salvo PHPUnit como herramienta de testing.

---

## 💡 Autor

Desarrollado como prueba técnica para una startup de cursos de idiomas.
