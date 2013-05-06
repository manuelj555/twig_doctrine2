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
