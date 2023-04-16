<?php

// Каждый файл должен иметь GPL и авторское право в заголовке - мы пропускаем это в руководствах, но вы не должны пропускать это на самом деле.

// Эта строка защищает файл от прямого доступа по URL.
определено('MOODLE_INTERNAL') || die();

// $THEME определена до включения этой страницы, и мы можем определить настройки, добавив свойства к этому глобальному объекту.

// Первая настройка, которая нам нужна, - это название темы. Это должна быть последняя часть названия компонента, и такая же
// как имя каталога для нашей темы.
$THEME->name = 'coursePro';

// В этом параметре перечислены таблицы стилей, которые мы хотим включить в нашу тему. Поскольку мы хотим использовать SCSS вместо CSS, мы не будем
// перечислять какие-либо таблицы стилей. Если бы мы это сделали, мы бы указали имя файла в папке /style / для нашей темы без каких-либо расширений css-файла
//.
$THEME->sheets = [];

// Это параметр, который можно использовать для придания некоторого стиля содержимому в текстовом редакторе TinyMCE. Это больше не
текстовый редактор // по умолчанию, и "Atto" не нуждается в этой настройке, поэтому мы ничего не будем предоставлять. Если бы мы это сделали, это работало бы так же,
// как и предыдущая настройка - перечисление файла в папке /styles /.
$THEME->editor_sheets = [];

// Это критический параметр. Мы хотим наследовать от theme_boost, потому что это отличная отправная точка для SCSS bootstrap4
// темы. Мы могли бы добавить сюда более одного родительского элемента для наследования от нескольких родительских элементов, и если бы мы это сделали, они были бы обработаны в
// порядке важности (более поздние темы переопределяют более ранние). Вещи, которые мы унаследуем от родительской темы, включают в себя
// стили и шаблоны усов, а также некоторые (не все) настройки.
$THEME->parents = ['boost'];

// Dock - это способ удалить блоки со страницы и поместить их в постоянную плавающую область сбоку страницы. Boost
// не поддерживает dock, поэтому мы тоже не будем - но посмотрите на bootstrapbase пример темы с dock.
$THEME->enable_dock = false;

// Это старая настройка, используемая для загрузки определенного CSS для некоторых YUI JS. Нам это не нужно в темах на основе Boost, потому что Boost
// предоставляет стиль по умолчанию для модулей YUI, которые мы используем. Больше не рекомендуется использовать этот параметр.
$THEME->yuicssmodules = array();

// Большинство тем будут использовать этот rendererfactory, поскольку именно он позволяет теме переопределять любой другой инструмент визуализации.
$THEME->rendererfactory = 'theme_overridden_render_factory';

// Это список блоков, которые должны присутствовать на всех страницах для корректной работы этой темы. Например,
для // bootstrap base требуются настройки и навигационные блоки, потому что в противном случае не было бы возможности перейти ко всем
// страницам в Moodle. Для Boost не требуются эти блоки, поскольку он предоставляет другие способы навигации, встроенные в тему.
$THEME->требуемые блоки = ";

// Это функция, которая сообщает библиотеке blocks не использовать блок "Добавить блок". Мы не хотим этого в темах на основе boost, потому что
// это вытесняет область блока на страницу, когда редактирование включено, и это занимает слишком много места.
$THEME->addblockposition = BLOCK_ADDBLOCK_POSITION_FLATNAV;
