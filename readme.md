# eLearning Platform

### Contexto
Las plataformas de e learning o lms, son bastante populares, el proyecto final de la carrera técnica era definir uno, y implementarlo. En su momento no existián plataformas para aprender y practica la lectura de notas de solfeo, entonces se diseño esta plataforma. Que enseña a los usuarios a leer partituras.

### Tecnologías
La base de datos se encuentra en **MySQL**.

La lógica de la vista se encuentra entre Js y PHP, estaba en mis fases iniciales de desarrollo y la lógica no esta en su mejor estado, así que en ambos lenguajes se encuentra mixta la lógica.

### Instalación 

1. Clona el repositorio: 
    
    **Importante: Esto se debe de realizar desde la carpeta de xampp de htdocs!!!**

    ```bash
    git clone https://github.com/AntonioNoguera/eLearing-TechnicalSchool-CBTis116.git
    cd eLearing-TechnicalSchool-CBTis116

2. Configura MySQL

    Asegúrate de tener MySQL instalado y configurado correctamente. Puedes instalarlo usando herramientas como XAMPP si no lo tienes aún.
    
    Se requiere de instalar la base de datos de forma manual, con el archivo de **elearningphp** se ocupa de importar la base de datos.

3. Ejecucción

    En este caso levantar la plataforma no es tan complejo, se ocupa de correr MySQL y apache, para poder utilizar el htdocs, y abrir directamente el localhost.

## Funcionalidad

### Registro 
El register es sencillo de la misma forma es sencillo, cuenta con la contraseña, y el nivel de usuario de la petición, para poder contar con los permisos de ambos usuarios, en este caso, se distinguen entre aceptar usuarios, y acceso global a los archivos.
![Texto alternativo](readme_assets/register.png)

### Inicio de Sesion
El inicio de sesión en realidad es bastante sencillo, nada del otro mundo, cuenta con una paleta de colores tirando a rojo, una de las ideas era que en la parte superior derecha se mostrase el nombre de la empresa al que se le haya vendido el sistema, en este caso FIME.
![Texto alternativo](readme_assets/login.png)

### Post de Comentario


### Curso

### Progreso

### Mejoras
- Seguridad: En su tiempo se me hizo sencillo guardar en la tabla las ip que hacian login con el único fin de guardar el ultimo dispositivo que tuvo la sesión de esa cuenta, no estoy seguro de si esto se haya llegado a realizar alguna vez, pero hoy en día es muy mala practica.

- Base de Datos: El formato de la base de datos, se hizo a como dios me dio a entender, y la estructura es objectivamente mala, mejorarala sería un buen fix.

## Contribución
¡Las contribuciones son bienvenidas! 

1. Haz un fork del repositorio.  
2. Crea una nueva rama (`git checkout -b feature/nueva-funcionalidad`).  
3. Haz commit de tus cambios.  
4. Haz un push a la rama (`git push origin feature/nueva-funcionalidad`).  
5. Abre un Pull Request.

### Autor(es)

- **Michael Noguera** - [Github](https://github.com/AntonioNoguera)