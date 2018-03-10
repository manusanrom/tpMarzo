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

Uso 
-----------------------
Para usarlo simplemente copiar la carpeta rss-php al document root, en nuestro
caso /var/www/html y probarlo en el navegador.
