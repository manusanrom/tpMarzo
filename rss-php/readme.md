RSS & Atom Feeds for PHP
========================
RSS Feeds for PHP
========================

El trabajo consiste en un canal de feeds rss deportivos.

Me he basado en el proyecto de github https://github.com/dg/rss-php
adaptándolo a mi gusto.

Descarga
-----------------------
Lo he descargado con composer.

php composer.phar require dg/rss-php

Modificación
-----------------------
He añadido tres archivos .php que muestran la información de tres
periódicos deportivos distintos. También he creado un archivo index.html 
que nos hace de "portada" en el canal y tiene link a cada periódico.

Nota: No consigo hacer que se vea la descripción del item en el fichero 
marca-rss.php. La descripcion que me gustaría que se viera, viene en una
etiqueta xml que se llama <meta:description(más un atributo)> dentro de cada
item.

Uso 
-----------------------
Para usarlo simplemente copiar esta carpeta al document root, en nuestro
caso /var/www/html y probarlo en el navegador.
