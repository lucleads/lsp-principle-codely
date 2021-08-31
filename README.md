# LISKOV SUBSTITUTION PRINCIPLE

Repositorio con ejemplos de cómo aplicar el principio que representa la letra L de `SOLID`, y lo que representaría una violación de este principio.

El principio de sustitución de Liskov, establece que:

"*Si **S** es un subtipo de **T**, las instancias de **T** deberían poderse sustituir por instancias de **S** sin alterar el programa.*"

### Despliegue

Para desplegar el proyecto en un contenedor docker, abrir una terminal en el directorio donde se encuentre el archivo `docker-compose.yml` y ejecutar el siguiente comando:

`docker-compose up -d`

### Requisitos

- [Docker](https://docs.docker.com/engine/install/)

- [Docker compose](https://docs.docker.com/compose/install/)

- [PHP](https://www.php.net/manual/es/install.php)

### Prueba

Para probar el programa una vez levantado el contenedor de docker en el puerto deseado, accedemos desde nuestro navegador a la dirección http://localhost:81 (en nuestro caso hemos desplegado en el puerto 81).

Por defecto deberá aparecer la salida del código que SI respeta el principio de Liskov.

Si queremos probar con el código que no lo hace, comentaremos los `uses` de la clase `src/index.php` y descomentaremos los que aparecen en el comentario.

### Explicación

En el caso donde tenemos las clases mal definidas, la clase "*Cow*" extiende de "*Bird*" como un subtipo de este. Sin embargo, al utilizar un objeto del tipo "*Cow*" en uno de los métodos donde se solicita "*Bird*", el código pierde el sentido generando una excepción.

Por el contrario, en las clases donde este código es correcto, ambos tipos de animales extienden de la clase "*Animal*", haciendo que utilizar uno de los objetos en el método donde se solicita un "*Animal*", no genera ningún problema.