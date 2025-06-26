# 🎮 What's Next: Biblioteca de Videojuegos

Formulario web funcional para crear reseñas de videojuegos. Este proyecto permite al usuario registrar una opinión valorando el juego con estrellas, seleccionando una categoría, describiendo virtudes y carencias, y enviando esa información a una base de datos (simulada en entorno local).

## 📁 Estructura del proyecto

Agregar reseñas/

│

├── css/
│ └── style3.css # Estilos del formulario de reseñas
│
├── scripts/
│ └── script1.js # JavaScript para interacción (estrellas, select, alert)
│
├── demo/
│ └── demo_resena.html # Demo funcional en frontend sin PHP
│
├── index.php # Formulario HTML+PHP (requiere sesión iniciada)
├── verificar_sesion.php # Redirige si el usuario no ha iniciado sesión
├── conexion.php # Inserta datos en base de datos si el usuario está autenticado
├── iniciar_sesion.html # Página a la que se redirige si no hay sesión (no incluida en el repositorio)
├── README.md
└── …


---

## ✨ Funcionalidades principales

### ⭐ Selección de estrellas
- El usuario puede seleccionar de 1 a 5 estrellas.
- El número seleccionado se guarda en un campo oculto (`input[type="number"]`) y se muestra por consola.

### 📂 Menú desplegable de categoría
- Al seleccionar una categoría de videojuego, se imprime en la consola su valor numérico (del 1 al 9).

### 🧾 Textareas
- Dos campos de texto para describir las virtudes y carencias del videojuego.

### ✅ Validaciones
- Todos los campos son obligatorios.
- Al enviar el formulario se muestra una alerta de confirmación.

---

## 🧪 Demo funcional (solo frontend)

Si no se desea usar entorno PHP o base de datos, puedes probar la demo sin backend:

👉 Abrir el archivo: `/demo_resena.html`  
✅ Simula el comportamiento de selección de estrellas, categorías y envío con alertas.

---

## 💻 Backend en PHP (opcional)

El proyecto cuenta con conexión a una base de datos MySQL usando PHP y control de sesiones básicas:

### 🔐 `verificar_sesion.php`
Verifica si el usuario tiene sesión iniciada, en caso contrario lo redirige a `iniciar_sesion.html`.

### 💾 `conexion.php`
- Inserta los datos del formulario en la tabla `rating` si hay una sesión iniciada.
- Usa `mysqli_real_escape_string()` para evitar inyecciones SQL.
- Conecta a la base de datos local `bdwhatsnext`.

> ⚠️ Este backend está pensado para entorno local como XAMPP/MAMP, no funcionará directamente desde GitHub Pages.

---

## 🧠 Tecnologías utilizadas

- **HTML5**
- **CSS3**
- **JavaScript (DOM + Eventos)**
- **PHP (básico)**
- **MySQL**
- **Bootstrap Icons** (CDN)

---

## 🚀 Cómo ejecutarlo

### Opción 1: Solo frontend (demo)
1. Abre `/demo_resena.html` en tu navegador.
2. Interactúa con el formulario y observa los `console.log`.

### Opción 2: Con backend (PHP + MySQL)
1. Clona este repositorio en tu máquina local.
2. Usa un entorno como **XAMPP**.
3. Crea una base de datos `bdwhatsnext` y una tabla `rating` con la estructura adecuada.
4. Asegúrate de tener un sistema de login que establezca la variable de sesión `$_SESSION['usuario']`.
5. Ejecuta `introducir_reseña.php` desde el navegador.

---

## 📩 Autor

**Ian Seijas**  
Desarrollador, centrado en proyectos prácticos con HTML, CSS, JavaScript y PHP.

---

## 📌 Nota

Este repositorio está pensado como proyecto de práctica para portafolio personal. No debe usarse en producción sin revisar la seguridad y estructura de base de datos completa.

