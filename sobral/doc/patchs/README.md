Aqui aparecen todos los parches que no forman parte de los proyectos que vamos arreglando. 
Es necesario parchear las versiones nuevas con estos parches, por ejemplo la del symfony.

Listado:

check_radio_array.patch:
    Problemas al rellenar controles del tipo array (checkboxes o radios)
    ver situacion en http://trac.symfony-project.com/trac/ticket/1776

newMimeTypes.pacth:
    Se agregan mime types para documentos de openoffice 
    de esta forma cuando se agregan documentos a la libreria de archivos
    se obtiene el mime correcto
    ver situacion en http://trac.symfony-project.com/ticket/2362

reemplazar_mktime_por_time.patch: 
    Warning de php 5.2, se debe cambiar mktime() por time()
    Parche para el tbs (tiny but strong) 3.0

tinybts_remdir.patch:
    Warnings cuando no se puede borrar un directorio o archivo.
