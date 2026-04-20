# 🌮 Rincón Azteca

Sitio web de restaurante de comida mexicana con sistema de usuarios, reservaciones y carrito de compras. Desarrollado con HTML, CSS, JavaScript y PHP, con base de datos MySQL.

---

## 📋 Tabla de Contenidos

- [Descripción](#descripción)
- [Características](#características)
- [Tecnologías](#tecnologías)
- [Estructura del Proyecto](#estructura-del-proyecto)
- [Base de Datos](#base-de-datos)
- [Instalación](#instalación)
- [Uso](#uso)
- [Advertencias de Seguridad](#advertencias-de-seguridad)

---

## Descripción

**Rincón Azteca** es una aplicación web para un restaurante mexicano que permite a los visitantes explorar el menú, realizar reservaciones, ver la galería del lugar y gestionar su cuenta de usuario. Incluye un sistema de autenticación, carrito de compras y modo oscuro.

- 📞 Contacto: +503 7507 7621 | rinconazteca0@gmail.com
- 🕒 Horario: Lun – Vie 9:00–20:00 | Sáb – Dom 10:00–22:00

---

## Características

- **Página principal** con carrusel de imágenes y animaciones AOS
- **Menú interactivo** con categorías: Platillos, Entradas, Bebidas y Postres
- **Carrito de compras** con contador en tiempo real
- **Sistema de reservaciones** con fecha, hora y tipo de reserva
- **Registro e inicio de sesión** de usuarios
- **Galería** de imágenes del restaurante con lightbox
- **Modo oscuro** activable desde la barra de navegación
- **Sección de eventos** y contacto con enlaces a redes sociales
- **Integración con pasarela de pagos** (formulario básico)

---

## Tecnologías

| Capa | Tecnología |
|---|---|
| Frontend | HTML5, CSS3, JavaScript |
| Backend | PHP |
| Base de datos | MySQL / MariaDB |
| Librerías UI | Boxicons, Font Awesome, AOS, Owl Carousel, LightGallery |

---

## Estructura del Proyecto

```
RinconAzteca/
├── index.html           # Página principal (visitantes)
├── indexuser.html       # Página principal (usuarios autenticados)
├── index3.html          # Página de inicio de sesión / registro
├── index4.html          # Página auxiliar
├── indexreservas.html   # Vista de reservaciones
├── style.css            # Estilos principales
├── style2.css           # Estilos secundarios
├── style3.css           # Estilos de login/registro
├── style4.css           # Estilos adicionales
├── script.js            # Lógica principal (carrito, modo oscuro, etc.)
├── script2.js           # Lógica auxiliar
├── scriptuser.js        # Lógica para usuario autenticado
├── conexion.php         # Configuración de conexión a la BD
├── iniciarsesion.php    # Lógica de autenticación
├── registro.php         # Lógica de registro de usuario
├── reserva.php          # Lógica de reservaciones
├── tiporeserva.php      # Lógica de tipo de reserva
├── pagos.php            # Lógica de pagos
├── principal.php        # Redirección post-login
├── LOGOO.ico            # Favicon del sitio
├── img/                 # Imágenes de fondo y generales
├── Galeria/             # Imágenes de la galería del restaurante
├── menu/
│   ├── Bebidas/         # Imágenes de bebidas
│   ├── Entrads/         # Imágenes de entradas
│   ├── Platillo/        # Imágenes de platillos principales
│   └── Postre/          # Imágenes de postres
└── BASE/
    └── ra.sql           # Script de creación de la base de datos
```

---

## Base de Datos

El archivo `BASE/ra.sql` contiene el esquema completo. Las tablas son:

| Tabla | Descripción |
|---|---|
| `usuario` | Datos de usuarios registrados (nombre, correo, clave, teléfono) |
| `reserva` | Reservaciones realizadas (nombre, correo, teléfono, fecha, hora) |
| `tiporeserva` | Reservaciones con tipo de evento especificado |
| `pagos` | Información de pagos (nombre, tarjeta, expiración, CVV) |

---

## Instalación

### Requisitos

- Servidor web con soporte PHP (ej. XAMPP, WAMP, Laragon)
- MySQL / MariaDB
- PHP 7.4 o superior

### Pasos

1. **Clona el repositorio:**
   ```bash
   git clone https://github.com/PanConPoio/RinconAzteca.git
   ```

2. **Copia los archivos** a la carpeta raíz de tu servidor (ej. `htdocs` en XAMPP).

3. **Importa la base de datos** desde phpMyAdmin o consola:
   ```bash
   mysql -u root -p < BASE/ra.sql
   ```

4. **Configura la conexión** en `conexion.php`:
   ```php
   $dbhost = "localhost";
   $dbuser = "tu_usuario";
   $dbpass = "tu_contraseña";
   $dbname = "ra";
   ```

5. **Abre el sitio** en tu navegador:
   ```
   http://localhost/RinconAzteca/index.html
   ```

---

## Uso

- Visita `index.html` para ver el sitio como visitante.
- Usa `index3.html` para registrarte o iniciar sesión.
- Una vez autenticado, serás redirigido a `indexuser.html` con acceso a reservaciones y carrito.

---

## ⚠️ Advertencias de Seguridad

> Este proyecto fue desarrollado con fines educativos. Antes de cualquier despliegue en producción, se recomienda corregir los siguientes puntos:

- **Credenciales expuestas:** el archivo `conexion.php` contiene usuario y contraseña de la BD en texto plano. Usa variables de entorno (`.env`) en su lugar.
- **SQL Injection:** las consultas en `iniciarsesion.php` y `registro.php` concatenan directamente los valores del usuario. Migrar a **consultas preparadas** (`mysqli_prepare`).
- **Contraseñas sin cifrar:** las claves se guardan y comparan en texto plano. Usar `password_hash()` y `password_verify()` de PHP.
- **Datos de pago:** no almacenar datos de tarjetas sin un sistema PCI-DSS certificado.

---
