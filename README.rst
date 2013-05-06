Twig Doctrine2
==============
Introducción al uso de las librerias `Twig <http://twig.sensiolabs.org/>`_ y `Doctrine2 <http://www.doctrine-project.org/>`_ en un proyecto cualquiera con PHP

Se implementa el patron `Front Controller <http://retrorock.info/construyendo-front-controller-en-php/>`_ en la App para mejorar la utilización de librerias y concentrar la configuración general de los ejemplos.

Configuración
-------------
La configuración de la aplicacion (BASE_URL, conexión a BD, etc) se realiza en el archivo **public/index.php**, este archivo se encarga de establecer valores para constantes usadas en varios archivos más, crea la función path, que es usada para crear urls para movernos en la app, entre otros.

Contantes
_________
+-------------+------------------------------------------------------------------------------------------+
|**BASE_URL** | Contiene la ruta hasta el public del proyecto, ejemplo http://localhost/proyecto/public/ |
+-------------+------------------------------------------------------------------------------------------+
|**DEBUG**    | Indica si se usa el debug en Twig y en Doctrine si es true, se asume que se está         |
|             | en desarrollo                                                                            |
+-------------+------------------------------------------------------------------------------------------+
|**DB_HOST**  | el host donde se encuentra la BD                                                         |
+-------------+------------------------------------------------------------------------------------------+
|**DB_NAME**  | el nombre de la base de datos a la que se conectará                                      |
+-------------+------------------------------------------------------------------------------------------+
|**DB_USER**  | el nombre de usuario para la conexión a la BD                                            |
+-------------+------------------------------------------------------------------------------------------+
|**DB_PASS**  | la contraseña para la conexión a la BD                                                   |
+-------------+------------------------------------------------------------------------------------------+
|**DB_DRIVER**| el driver de conexión a la BD                                                            |
+-------------+------------------------------------------------------------------------------------------+

Vistas
______

Las vistas son archivos **.twig** que se encuentran en la carpeta **app/Views/**, para llamar y mostrar estas vistas, se usa la clase App, la cual tiene un método estático twig() que devuelve la instancia de la libreria, ejemplo de uso:

.. code-block:: php

    <?php //cualquier php controlador

    $nombre = $_GET['nombre'];

    App::twig()->display('index.twig', array( 'nombre' => $nombre ));
    //Equivalente a:
    echo App::twig()->render('index.twig', array( 'nombre' => $nombre ));

    //Sin pasar variables a la vista:
    App::twig()->display('index.twig');

Controladores
___________

Los controladores son archivos php que se encuentran en **app/Controllers** y ejecutan cualquier tipo de código, generalmente llamando y renderizando una vista twig al final del mismo, ejemplo:

.. code-block:: php

    <?php // app/Controllers/personas/index.php
    
    //consultamos las personas en la BD
    $personas = App::doctrine()->getRepository('Persona')->findAll();

    //Llamamos a la vista y le pasamos el array con los registros.
    App::twig()->display("personas/index.twig", array(
        'personas' => $personas,
    ));

Doctrine
________

Para obtener la instancia de Doctrine ( En este caso el EntityManager ) se usa nuevamente la clase App llamando al método estático doctine() el cual devuelve la instancia del EM de doctrine, ejemplo

.. code-block:: php

    <?php

    $doctrine = App::doctrine(); //devuelve la instancia del EntityManager

    $personas = $doctrine->getRepository('Persona')->findAll();

    //Equivale a:

    $personas = App::doctrine()->getRepository('Persona')->findAll();
    
