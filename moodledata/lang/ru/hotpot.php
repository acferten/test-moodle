<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'hotpot', language 'ru', version '4.1'.
 *
 * @package     hotpot
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abandoned'] = 'Не законченные';
$string['abandonhotpot'] = 'Ваши текущие результаты будут сохранены, но Вы позже не сможете продолжить или начать заново эту деятельность.';
$string['activitycloses'] = 'Элемент закрывается';
$string['activitygrade'] = 'Оценка деятельности';
$string['activityopens'] = 'Элемент открывается';
$string['added'] = 'Добавлено';
$string['addquizchain'] = 'Добавить опрос';
$string['addquizchain_help'] = 'Должны ли быть добавлены все тесты в цепь тестов?

**Нет**
: только один тест будет добавлен в курс

**Да**
: если исходным файлом является **файл теста**, то он рассматривается как начало цепочки тестов и всех тестов в цепи, которые будут добавлены в курс с одинаковыми настройками. Каждый тест в цепи должен иметь ссылку на следующий файл в цепочке.

Если исходным файлом является **папка**, то все распознанные тесты в папке будут добавлен в курс в виде цепочки тестов с идентичными настройками.

Если исходным файлом является **файл элемента** (например,  файл Hot Potatoes или index.html), то перечисленные в файле элемента тесты будут добавлены в курс как цепочка тестов с идентичными настройками.';
$string['allowpaste'] = 'Разрешить вставку';
$string['allowpaste_help'] = 'При включенном параметре студентам будет разрешено копировать, вставлять и перетаскивать текст в поля ввода текста.';
$string['allowreview'] = 'Разрешить просмотр';
$string['allowreview_help'] = 'При включенном параметре студенты могут пересмотреть свои попытки после окончания теста.';
$string['analysisreport'] = 'Анализ элемента';
$string['attemptlimit'] = 'Предел попыток';
$string['attemptlimit_help'] = 'Максимальное число попыток, которые обучающийся может выполнить в этом Hotpot';
$string['attemptnumber'] = 'Номер попытки';
$string['attempts'] = 'Попытки';
$string['attemptscore'] = 'Балл за попытку';
$string['attemptsunlimited'] = 'Неограниченное число попыток';
$string['average'] = 'Среднее';
$string['averagescore'] = 'Средний балл';
$string['bodystyles'] = 'Стиль объекта';
$string['bodystylesbackground'] = 'Цвет и изображение фона';
$string['bodystylescolor'] = 'Цвет текста';
$string['bodystylesfont'] = 'Размер и тип шрифта';
$string['bodystylesmargin'] = 'Левый и правый отступ';
$string['cacherecords'] = 'Записи кэша HotPot';
$string['canrestarthotpot'] = 'Ваши текущие результаты будут сохранены и Вы позже сможете заново начать «{$a}»';
$string['canresumehotpot'] = 'Ваши текущие результаты будут сохранены и Вы позже сможете продолжить «{$a}»';
$string['checks'] = 'Проверки';
$string['checksomeboxes'] = 'Пожалуйста, отметьте несколько полей';
$string['clearcache'] = 'Очистить кэш HotPot';
$string['cleardetails'] = 'Очистить сведения HotPot';
$string['clearedcache'] = 'Кэш HotPot очищен';
$string['cleareddetails'] = 'Сведения HotPot очищены';
$string['clickreporting'] = 'Включить отчет о кликах';
$string['clickreporting_help'] = 'При включенном параметре отдельная запись все время хранит нажатия кнопки "подсказка", "ключ" или "проверка". Это позволяет учителю видеть очень подробный отчет, показывающий состояние теста для каждого нажатия кнопки. В противном случае хранится только одна запись на попытку в тесте.';
$string['clicktrailreport'] = 'Отслеживание нажатий';
$string['closed'] = 'Этот элемент курса закрыт';
$string['clues'] = 'Ключи';
$string['completed'] = 'Завершено';
$string['configbodystyles'] = 'По умолчанию, стиль темы Moodle переопределяет тему HotPot. Однако, любые выбранные здесь активные стили HotPot будут иметь приоритет над стилем темы Moodle.';
$string['configenablecache'] = 'Сохраненные в кэше тесты HotPot могут значительно ускорить отображение тестов для студентов.';
$string['configenablecron'] = 'Укажите часы своей временной зоны, когда будет запускаться скрипт cron HotPot';
$string['configenablemymoodle'] = 'Будут ли показаны на странице МойMoodle эти настройки управления HotPots или нет';
$string['configenableobfuscate'] = 'Скрытие кода javascript в вставке медиаплееров усложняет определение имени медиафайла и догадку о его содержимом.';
$string['configenableswf'] = 'Разрешить встраивать SWF-файлы в HotPot. Этот включенный параметр переопределяет filter_mediaplugin_enable_swf.';
$string['configfile'] = 'Файл конфигурации';
$string['configframeheight'] = 'Когда тест отображается во фрейме, это значение определяет высоту (в пикселях) от верхней части фрейма, содержащей панель навигации Moodle.';
$string['configlocation'] = 'Местонахождение файла конфигурации';
$string['configlockframe'] = 'Если эти параметры включены, то используемый навигационный фрейм будет заблокирован для перемотки, изменения размера и не будет иметь видимой границы';
$string['configmaxeventlength'] = 'Если у HotPot указаны время открытия и время закрытия, и различие между ними больше, чем указанное здесь число дней, то эти два отдельных события будут добавлены в календарь курса. При более короткой продолжительности или если указано только одно время, тогда только одно событие будет добавлено в календарь. Если не указано ни одно из значений, то событие не будет добавлено в календарь.';
$string['configstoredetails'] = 'При включенном параметре необработанные XML-сведения попыток теста HotPot будут сохранены в таблице hotpot_details. Это позволит в будущем пересчитать  попытки теста, чтобы они соответствовали изменениям в системе оценивания тестов HotPot. Однако, включение этой опции на загруженном сайте может привести к быстрому росту таблицы hotpot_details.';
$string['confirmdeleteattempts'] = 'Вы действительно хотите удалить эти попытки?';
$string['confirmstop'] = 'Вы уверены, что хотите уйти с этой страницы?';
$string['correct'] = 'Исправить';
$string['couldnotinsertsubmissionform'] = 'Не удалось вставить форму представления';
$string['d_index'] = 'Индекс дискриминации';
$string['delay1'] = 'Задержка 1';
$string['delay1_help'] = 'Минимальная задержка между первой и второй попытками';
$string['delay1summary'] = 'Задержка времени между первой и второй попытками';
$string['delay2'] = 'Задержка 2';
$string['delay2_help'] = 'Минимальная задержка между второй и последующими попытками';
$string['delay2summary'] = 'Время задержки между последними попытками';
$string['delay3'] = 'Задержка 3';
$string['delay3_help'] = 'Эти параметры определяют задержку между окончанием теста и возвращением к управлению, отображаемом в Moodle.

**Использовать указанное время (в секундах)**
: управление будет возвращено в Moodle после указанного числа секунд.

**Использовать настройки исходного файла/шаблона**
: управление будет возвращено в Moodle после заданного числа секунд, указанных в исходном файле или в файле шаблона для этого выходного формата.

**Ожидать, когда студент нажмет ОК**
: управление будет возвращено в Moodle после того, как студент нажмет кнопку ОК на сообщении о завершении теста.

**Не продолжать автоматически**
: управление будет возвращено в Moodle после того, как тест будет закончен. Студенту будет разрешено уйти со страницы теста.

Примечание: независимо от этих настроек результаты теста всегда сразу же передаются в Moodle, когда тест закончен или прерван.';
$string['delay3afterok'] = 'Ожидать, когда студент нажмет ОК';
$string['delay3disable'] = 'Не продолжать автоматически';
$string['delay3specific'] = 'Использовать указанное время (в секундах)';
$string['delay3summary'] = 'Время задержки при окончании теста';
$string['delay3template'] = 'Использовать настройки исходного файла/шаблона';
$string['deleteallattempts'] = 'Удалить все попытки';
$string['deleteattempts'] = 'Удалить попытки';
$string['detailsrecords'] = 'Сведения записей HotPot';
$string['duration'] = 'Продолжительность';
$string['enablecache'] = 'Разрешить кэш HotPot';
$string['enablecron'] = 'Разрешить cron HotPot';
$string['enablemymoodle'] = 'Показать HotPots в МойMoodle';
$string['enableobfuscate'] = 'Включить скрытие кода медиаплеера';
$string['enableswf'] = 'Разрешить встраивание SWF-файла в HotPot';
$string['entry_attempts'] = 'Попытки';
$string['entry_dates'] = 'Даты';
$string['entry_grading'] = 'Оценивание';
$string['entry_title'] = 'Название элемента в качестве заголовка';
$string['entrycm'] = 'Предыдущий элемент';
$string['entrycm_help'] = 'Этот параметр определяет элемент курса Moodle и минимальную оценку для этого элемента, которая должна быть получена перед началом попытки этого HotPot.

Учитель может выбрать определенный элемент курса или один из следующих общих параметров:

* Предыдущий элемент в этом курсе
* Предыдущий элемент в этом разделе
* Предыдущий HotPot в этом курсе
* Предыдущий HotPot в этом разделе';
$string['entrycmcourse'] = 'Предыдущий элемент в этом курсе';
$string['entrycmsection'] = 'Предыдущий элемент в этом разделе курса';
$string['entrycompletionwarning'] = 'Перед тем как начать этот элемент, Вы можете посмотреть {$a}.';
$string['entrygrade'] = 'Оценка предыдущего элемента';
$string['entrygradewarning'] = 'Вы не можете начать этот элемент, пока не получите {$a->entrygrade}% в {$a->entryactivity}. В настоящее время Ваша оценка за тот элемент {$a->usergrade}%';
$string['entryhotpotcourse'] = 'Предыдущий HotPot в этом курсе';
$string['entryhotpotsection'] = 'Предыдущий HotPot в этом разделе курса';
$string['entryoptions'] = 'Настройки страницы входа';
$string['entryoptions_help'] = 'Эти флажки включают и отключают отображение элементов на странице входа в HotPot.

**Название элемента в качестве названия**
: если отмечено, то название элемента будет отображаться в качестве заголовка страницы входа.

**Оценивание**
: если отмечено, то информация об оценивании HotPot будет отображаться на странице входа.

**Даты**
: если отмечено, то даты открытия и закрытия HotPot будут отображаться на странице входа.

**Попытки**
: если отмечено, то таблица со сведениями о предыдущих попытках пользователей в этом HotPot, будет отображаться на странице входа. Попытки, которые могут быть продолжены, будут иметь кнопку продолжения в крайней правой колонке.';
$string['entrypage'] = 'Показать страницу входа';
$string['entrypage_help'] = 'Должна ли быть показана студентам начальная страница перед началом выполнения HotPot?

**Да**
: перед началом этого HotPot студентам будет показана страница входа. Её содержимое определяется настройками страницы входа HotPot.

**Нет**
: студентам не будет показана страница входа, и сразу начнется HotPot.

Страница входа всегда показывается учителю, в порядке для предоставления доступа к отчетам и редактирования страницы тестов';
$string['entrypagehdr'] = 'Страница входа';
$string['entrytext'] = 'Текст страницы входа';
$string['exit_areyouok'] = 'Здравствуйте, Вы еще здесь?';
$string['exit_attemptscore'] = 'Ваша оценка для этой попытки - {$a}';
$string['exit_course'] = 'Курс';
$string['exit_course_text'] = 'Вернуться на главную страницу курса';
$string['exit_encouragement'] = 'Поощрение';
$string['exit_excellent'] = 'Отлично!';
$string['exit_feedback'] = 'Отзыв на странице выхода';
$string['exit_feedback_help'] = 'Этот параметр разрешает или запрещает показ отзыва на странице выхода HotPot.

**Название элемента в качестве названия**
: если выбрано, то название элемента будет отображено в качестве заголовка страницы выхода.

**Поощрение**
: если выбрано, то на странице выхода будут отображены некоторые поощрения. Поощрение зависит от оценки HotPot:
: **> 90%**: Отлично!
: **> 60%**: Молодец
: **> 0%**: Неплохая попытка
: **= 0%**: Вы в порядке?

**Оценка за попытку**
: если выбрано, то на странице выхода будет показана оценка за только что завершенную попытку.

**Итоговая оценка**
: если выбрано, оценка HotPot будет показана на странице выхода.

В дополнение, если используется метод оценки по наивысшему баллу, то пользователю будет показано сообщение об улучшении полученной оценки по сравнению с предыдущей попыткой';
$string['exit_goodtry'] = 'Неплохая попытка';
$string['exit_grades'] = 'Оценки';
$string['exit_grades_text'] = 'Посмотрите свои текущие оценки в этом курсе';
$string['exit_hotpotgrade'] = 'Ваша оценка за это элемент курса - {$a}';
$string['exit_hotpotgrade_average'] = 'Ваш текущая средняя оценка для этого элемента - {$a}';
$string['exit_hotpotgrade_highest'] = 'Ваша текущая высшая оценка для этого элемента - {$a}';
$string['exit_hotpotgrade_highest_equal'] = 'Вы повторили свой прежний рекорд для этого элемента!';
$string['exit_hotpotgrade_highest_previous'] = 'Ваша предыдущая высшая оценка для этого элемента была {$a}';
$string['exit_hotpotgrade_highest_zero'] = 'Вы не заработали больше, чем {$a} для этого элемента';
$string['exit_index'] = 'Индекс';
$string['exit_index_text'] = 'Перейти к индексу элементов';
$string['exit_links'] = 'Ссылки страницы выхода';
$string['exit_links_help'] = 'Эти параметры позволяют отключать и включать отображение некоторых навигационных ссылок на странице выхода из HotPot.

**Повторить**
: если разрешено несколько раз проходить этот HotPot и студент все еще имеет несколько попыток, то студенту будет отображаться ссылка, позволяющая ему повторить HotPot,

**Индекс**
: если выбрано, то будет отображена ссылка на индекс HotPot.

**Курс**
: если выбрано, то будет отображена ссылка на курс Moodle.

**Оценки**
: если выбрано, то будет отображена ссылка на журнал оценок курса Moodle.';
$string['exit_next'] = 'Следующий';
$string['exit_next_text'] = 'Попробуйте следующий элемент';
$string['exit_noscore'] = 'Вы успешно завершили этот элемент!';
$string['exit_retry'] = 'Повторить';
$string['exit_retry_text'] = 'Повторить эту деятельность';
$string['exit_welldone'] = 'Молодец!';
$string['exit_whatnext_0'] = 'Что бы Вы хотели сделать дальше?';
$string['exit_whatnext_1'] = 'Выберите свою судьбу ...';
$string['exit_whatnext_default'] = 'Выберите один из следующих вариантов:';
$string['exitcm'] = 'Следующий элемент';
$string['exitcm_help'] = 'Этот параметр определяет элемент курса Moodle, который будет запущен после завершения текущего HotPot. Для показа следующего элемента может быть задана минимальная необходимая оценка за этот HotPot (не обязательно).

Учитель может выбрать определенный элемент курса или один из следующих общих параметров:

* Предыдущий элемент в этом курсе
* Предыдущий элемент в этом разделе
* Предыдущий HotPot в этом курсе
* Предыдущий HotPot в этом разделе

Если другие параметры страницы выхода отключены и студент достиг необходимой оценки в этом HotPot, то следующий элемент курса будет показан сразу. В противном случае студенту будет показана ссылка на следующий элемент курса, которую он сможет нажать, когда будет готов.';
$string['exitcmcourse'] = 'Следующий элемент в этом курсе';
$string['exitcmsection'] = 'Следующий элемент в этом разделе курса';
$string['exitgrade'] = 'Оценка следующего элемента';
$string['exithotpotcourse'] = 'Следующий HotPot в этом курсе';
$string['exithotpotsection'] = 'Следующий HotPot в этом разделе курса';
$string['exitoptions'] = 'Настройки страницы выхода';
$string['exitpage'] = 'Показать страницу выхода';
$string['exitpage_help'] = 'Должна ли отображаться страница выхода после завершения теста HotPot?

**Да**
: студенты увидят страницу выхода после завершения HotPot. Содержимое страницы выхода HotPot определяется настройками отзывов и ссылок страницы.

**Нет**
: студенты не увидят страницу выхода. Вместо этого они сразу смогут перейти либо к следующему элементу, либо на страницу курса Moodle.';
$string['exitpagehdr'] = 'Страница выхода';
$string['exittext'] = 'Текст страницы выхода';
$string['feedbackdiscuss'] = 'Обсудить этот тест на форуме';
$string['feedbackformmail'] = 'Ответ от';
$string['feedbackmoodleforum'] = 'Форум Moodle';
$string['feedbackmoodlemessaging'] = 'Сообщения Moodle';
$string['feedbacknone'] = 'Ничего';
$string['feedbacksendmessage'] = 'Отправить сообщение своему инструктору';
$string['feedbackwebpage'] = 'Веб страница';
$string['firstattempt'] = 'Первая попытка';
$string['forceplugins'] = 'Принудительные медиа плагины';
$string['forceplugins_help'] = 'При включенном параметре совместимые с Moodle медиаплееры будут воспроизводить такие файлы как AVI, MPEG, MPG, MP3, MOV и WMV. В противном случае Moodle не изменит настройки любых медиаплееров в тесте.';
$string['frameheight'] = 'Высота фрейма';
$string['giveup'] = 'Дать';
$string['grademethod'] = 'Метод оценки';
$string['grademethod_help'] = 'Эти настройки определяют как итоговая оценка HotPot  рассчитывается из баллов за попытки.

**Высший балл**
: оценка будет равна наивысшему баллу за попытки в этом HotPot.

**Средний балл**
: оценка будет равна среднему результату за попытки в этом HotPot.

**Первая попытка**
: оценка будет равна баллу за первую попытку в этом HotPot.

**Последняя попытка**
: Оценка будет равна баллу за последнюю попытку в этом HotPot.';
$string['gradeweighting'] = 'Вес оценки';
$string['gradeweighting_help'] = 'Оценки за HotPot будут умножаться на этот коэффициент в журнале оценок Moodle.';
$string['highestscore'] = 'Высший балл';
$string['hints'] = 'Подсказки';
$string['hotpot:addinstance'] = 'Добавить новый элемент HotPot';
$string['hotpot:attempt'] = 'Пройти тест HotPot и отправить результаты';
$string['hotpot:deleteallattempts'] = 'Удалить попытки всех пользователей для этого HotPot';
$string['hotpot:deletemyattempts'] = 'Удалить свои собственные попытки для этого HotPot';
$string['hotpot:ignoretimelimits'] = 'Игнорировать ограничения времени в этом HotPot';
$string['hotpot:manage'] = 'Изменить настройки HotPot';
$string['hotpot:preview'] = 'Предварительный просмотр HotPot';
$string['hotpot:reviewallattempts'] = 'Просмотреть попытки всех пользователей в HotPot';
$string['hotpot:reviewmyattempts'] = 'Просмотреть свои собственные попытки в HotPot';
$string['hotpot:view'] = 'Использовать опрос';
$string['hotpotname'] = 'Название HotPot';
$string['ignored'] = 'Игнорируется';
$string['inprogress'] = 'В процессе';
$string['isgreaterthan'] = 'больше, чем';
$string['islessthan'] = 'меньше';
$string['lastaccess'] = 'Последний доступ';
$string['lastattempt'] = 'Последняя попытка';
$string['lockframe'] = 'Блокировка кадров';
$string['maxeventlength'] = 'Максимальное количество дней для одного календарного события';
$string['mediafilter_hotpot'] = 'Медиафильтр HotPot';
$string['mediafilter_moodle'] = 'Стандартные медиафильтры Moodle';
$string['migratingfiles'] = 'Перенос файлов тестов HotPot';
$string['missingsourcetype'] = 'Отсутствует тип источника записи HotPot';
$string['modulename'] = 'HotPot';
$string['modulename_help'] = 'Модуль HotPot позволяет учителям распространять в Moodle интерактивные учебные материалы для своих студентов и просматривать отчеты об ответах и результатах студентов.

Одиночный элемент курса HotPot состоит из необязательной страницы входа, одного упражнения электронного обучения и необязательной страницы выхода. Упражнение электронного обучения может быть статической или интерактивной веб-страницей, на которой студентам доступны текст, аудио- и визуальные подсказки. Ответы студентов записываются. Упражнение электронного обучения создается на компьютере учителя с помощью специальной программы и загружается в Moodle.

HotPot может обрабатывать упражнения, созданные с помощью следующих программ:

* Hot Potatoes (version 6)
* Qedoc
* Xerte
* iSpring
* любой HTML-редактор';
$string['modulenameplural'] = 'HotPots';
$string['nameadd'] = 'Название';
$string['nameadd_help'] = 'Название может быть определенным текстом, введенным учителем или может быть автоматически сгенерировано.

**Получить из исходного файла**
: название будет получено из исходного файла.

**Использовать имя исходного файла**
: имя исходного файла будет использовано как название.

**Использовать путь исходного файла**
: путь исходного файла будет использован как название. Все слэши в пути файла будут заменены пробелами.

**Определенный текст**
: Определенный текст, введенный учителем, будет использован как название.';
$string['nameedit'] = 'Название';
$string['nameedit_help'] = 'Определенный текст, отображаемый студентам';
$string['navigation'] = 'Навигация';
$string['navigation_embed'] = 'Внедренная веб-страница';
$string['navigation_frame'] = 'Навигационный фрейм Moodle';
$string['navigation_give_up'] = 'Только кнопка «Сдаюсь»';
$string['navigation_help'] = 'Этот параметр определяют способ навигации, используемый в тесте:

**Навигационная панель Moodle**
Панель навигации Moodle будет отображена в верхней части страницы в том же самом окне, что и тест.

**Навигационный фрейм Moodle**
Панель навигации Moodle будет отображена в отдельном фрейме вверху теста.

**Внедренная веб-страница**
Панель навигации Moodle будет отображаться в тесте Hot Potatoes, внедренном в страницу.

**Встроенные средства навигации**
В тесте будут отображаться кнопки навигации, если, конечно, они были определены в тесте.

**Только кнопка «Сдаюсь»**
В тесте будет отображаться только кнопка «Сдаюсь» в верхней части страницы.

**Отсутствует**
Тест будет отображаться вообще без средств навигации. Когда будет получен ответ на все вопросы в текущем тесте, Moodle или вернется к странице курса или перейдет к следующему тесту, в зависимости от установки «Показать следующий тест?» для текущего теста.';
$string['navigation_moodle'] = 'Навигационная панель Moodle (вверху и сбоку)';
$string['navigation_none'] = 'Отсутствует';
$string['navigation_original'] = 'Встроенные средства навигации';
$string['navigation_topbar'] = 'Навигационная панель Moodle (только вверху)';
$string['noactivity'] = 'Нет элемента';
$string['nohotpots'] = 'Нет HotPots';
$string['nomoreattempts'] = 'К сожалению, у Вас нет больше попыток';
$string['noresponses'] = 'Никакой информации по отдельным вопросам и ответам не было найдено.';
$string['noreview'] = 'К сожалению, Вы не можете получить подробные сведения об этой попытке теста.';
$string['noreviewafterclose'] = 'Этот тест закрыт. Вы больше не можете просматривать сведения о попытках этого теста.';
$string['noreviewbeforeclose'] = 'К сожалению, Вы не можете увидеть сведения о попытке этого теста до {$a}';
$string['nosourcefilesettings'] = 'Информация об исходном файле отсутствует в записи HotPot';
$string['notavailable'] = 'К сожалению, этот элемент курса в настоящее время Вам не доступен.';
$string['outputformat'] = 'Формат вывода';
$string['outputformat_best'] = 'Лучший';
$string['outputformat_help'] = 'Формат вывода определяет, как содержимое будет представлено студенту.

Форматы вывода,  доступны в зависимости от типа исходного файла. Некоторые виды исходного файла имеют только один формат, в то время как другие виды исходного файла имеют несколько форматов вывода.

Параметр "Лучший" будет отображать содержимое с помощью оптимального формата вывода в браузере студента.';
$string['outputformat_hp_6_jcloze_html'] = 'JCloze (v6) с HTML';
$string['outputformat_hp_6_jcloze_xml_anctscan'] = 'ANCT-Сканирование с HP6 JCloze XML';
$string['outputformat_hp_6_jcloze_xml_dropdown'] = 'DropDown с HP6 JCloze XML';
$string['outputformat_hp_6_jcloze_xml_findit_a'] = 'FindIt (а) с HP6 JCloze XML';
$string['outputformat_hp_6_jcloze_xml_findit_b'] = 'FindIt (б) с HP6 JCloze XML';
$string['outputformat_hp_6_jcloze_xml_jgloss'] = 'JGloss с HP6 JCloze XML';
$string['outputformat_hp_6_jcloze_xml_v6'] = 'JCloze (v6) с hp6 XML';
$string['outputformat_hp_6_jcloze_xml_v6_autoadvance'] = 'JCloze (v6) с hp6 XML (Auto-прогресс)';
$string['outputformat_hp_6_jcross_html'] = 'JCross (v6) с HTML';
$string['outputformat_hp_6_jcross_xml_v6'] = 'JCross (v6) с XML';
$string['outputformat_hp_6_jmatch_html'] = 'JMatch (v6) с HTML';
$string['outputformat_hp_6_jmatch_xml_flashcard'] = 'JMatch (флэш) с XML';
$string['outputformat_hp_6_jmatch_xml_jmemori'] = 'JMemori с XML';
$string['outputformat_hp_6_jmatch_xml_sort'] = 'JMatch-сортировка с XML';
$string['outputformat_hp_6_jmatch_xml_v6'] = 'JMatch (v6) от XML';
$string['outputformat_hp_6_jmatch_xml_v6_plus'] = 'JMatch (v6 +) с XML';
$string['outputformat_hp_6_jmix_html'] = 'JMix (v6) с HTML';
$string['outputformat_hp_6_jmix_xml_v6'] = 'JMix (v6) с XML';
$string['outputformat_hp_6_jmix_xml_v6_plus'] = 'JMix (v6 +) с XML';
$string['outputformat_hp_6_jmix_xml_v6_plus_deluxe'] = 'JMix (v6 + с префиксом, суффикс с дистракторами) с XML';
$string['outputformat_hp_6_jmix_xml_v6_plus_keypress'] = 'JMix (v6 + с нажатием клавиши) с XML';
$string['outputformat_hp_6_jquiz_html'] = 'JQuiz (v6) с HTML';
$string['outputformat_hp_6_jquiz_xml_v6'] = 'JQuiz (v6) с XML';
$string['outputformat_hp_6_jquiz_xml_v6_autoadvance'] = 'JQuiz (v6) с XML (Auto-прогресс)';
$string['outputformat_hp_6_jquiz_xml_v6_exam'] = 'JQuiz (v6) с XML (Exam)';
$string['outputformat_hp_6_rhubarb_html'] = 'Rhubarb (v6) с HTML';
$string['outputformat_hp_6_rhubarb_xml'] = 'Rhubarb (v6) с XML';
$string['outputformat_hp_6_sequitur_html'] = 'Sequitur (v6) с HTML';
$string['outputformat_hp_6_sequitur_html_incremental'] = 'Sequitur (v6) с HTML, добавочное оценивание';
$string['outputformat_hp_6_sequitur_xml'] = 'Sequitur (v6) с XML';
$string['outputformat_hp_6_sequitur_xml_incremental'] = 'Sequitur (v6) с XML, добавочное оценивание';
$string['outputformat_html_ispring'] = 'Файл iSpring HTML';
$string['outputformat_html_xerte'] = 'Файл Xerte HTML';
$string['outputformat_html_xhtml'] = 'Стандартный HTML-файл';
$string['outputformat_qedoc'] = 'Файл Qedoc';
$string['overviewreport'] = 'Обзор';
$string['penalties'] = 'Штрафы';
$string['percent'] = 'Процент';
$string['pluginadministration'] = 'Управление HotPot';
$string['pluginname'] = 'Модуль HotPot';
$string['pressoktocontinue'] = 'Нажмите ОК для продолжения или Отмена, чтобы остаться на текущей странице.';
$string['questionshort'] = 'В-{$a}';
$string['quizname_help'] = 'Текст справки по названию теста';
$string['quizzes'] = 'Тесты';
$string['responses'] = 'Ответы';
$string['responsesreport'] = 'Ответы';
$string['reviewafterattempt'] = 'Разрешить просмотр после попытки';
$string['reviewafterclose'] = 'Разрешить просмотр после закрытия HotPot';
$string['reviewduringattempt'] = 'Разрешить просмотр во время попытки';
$string['reviewoptions'] = 'Опции просмотра';
$string['score'] = 'Балл';
$string['scoresreport'] = 'Баллы';
$string['selectattempts'] = 'Выберите попытки';
$string['showerrormessage'] = 'Ошибка HotPot: {$a}';
$string['sourcefile'] = 'Имя исходного файла';
$string['sourcefile_help'] = 'Этот параметр определяет файл, содержащий контент, который будет показан студентам.

Обычно исходный файл создается вне Moodle, а затем загружается в область файлов курса Moodle.
Это может быть HTML-файл или еще один вид файла, который создается с помощью специальных программ, таких как Hot Potatoes или Qedoc.

Исходный файл может быть указан в виде папки или пути к файлу в области файлов курса Moodle. Он может быть и гиперссылкой, начинающейся с http:// или https://

Для материалов Qedoc исходный файл должен быть url-адресом из Qedoc модуля, который был загружен на сервер Qedoc.

* Например: http://www.qedoc.net/library/ABCDE_123.zip
* Для получения информации о загрузке модулей Qedoc см.: [Qedoc documentation: Uploading_modules](http://www.qedoc.org/en/index.php?title=Uploading_modules)';
$string['sourcefilenotfound'] = 'Исходный файл не найден (или пустой): {$a}';
$string['status'] = 'Статус';
$string['stopbutton'] = 'Показать кнопку «Стоп»';
$string['stopbutton_help'] = 'При включенном параметре кнопка «Стоп» будет вставлена внутрь теста.

Если студент нажмет на кнопку «Стоп», то текущий результат будет передан в Moodle и попытка тестирования будет считаться прерванной.

Текст, который отображается на кнопке «Стоп» может быть одной из заданных фраз в языковом пакете Moodle или учитель может задать свой собственный текст для кнопки.';
$string['stopbutton_langpack'] = 'Из языкового пакета';
$string['stopbutton_specific'] = 'Использовать определенный текст';
$string['stoptext'] = 'Текст кнопки «Стоп»';
$string['storedetails'] = 'Хранить необработанные сведения XML из попытки теста HotPot';
$string['studentfeedback'] = 'Обратная связь студента';
$string['studentfeedback_help'] = 'При включенном параметре, когда студент нажмет на кнопку "Показать", ему будет показана ссылка на всплывающее окно обратной связи. Окно обратной связи позволяет студентам обсудить этот тест с учителем и сокурсниками одним из следующих способом:

**Веб-страница**
: требуется URL-адрес веб-страницы, например http://myserver.com/feedbackform.html

**Форма обратной связи**
: требуется URL-адрес для скрипта формы, например http://myserver.com/cgi-bin/formmail.pl

**Форум Moodle**
: будет показан индекс форума курса

**Сообщение Moodle**
: будет показано окно обмена сообщениями Moodle. Если в курсе есть несколько учителей, то студентам будет предложено выбрать учителя перед появлением окна сообщения.';
$string['submits'] = 'Представления';
$string['subplugintype_hotpotattempt'] = 'Формат вывода';
$string['subplugintype_hotpotattempt_plural'] = 'Форматы вывода';
$string['subplugintype_hotpotreport'] = 'Отчет';
$string['subplugintype_hotpotreport_plural'] = 'Отчеты';
$string['subplugintype_hotpotsource'] = 'Исходный файл';
$string['subplugintype_hotpotsource_plural'] = 'Исходные файлы';
$string['textsourcefile'] = 'Получить из исходного файла';
$string['textsourcefilename'] = 'Использовать имя исходного файла';
$string['textsourcefilepath'] = 'Использовать путь исходного файла';
$string['textsourcequiz'] = 'Взять из теста';
$string['textsourcespecific'] = 'Определенный текст';
$string['timeclose'] = 'Доступно до';
$string['timedout'] = 'Время истекло';
$string['timelimit'] = 'Ограничение по времени';
$string['timelimit_help'] = 'Этот параметр задает максимальную продолжительность одной попытки.

**Использовать настройки исходного файла/шаблона**
: ограничения времени будут получены из исходного файла или файла шаблона для этого формата вывода

**Использовать определенное время**
: ограничения времени, указанное на странице настроек теста HotPot, будет использовано как ограничение для попытки этого теста. Эта настройка переопределит ограничения времени в исходном файле, файле конфигурации или файле шаблона для этого формата вывода.

**Отключить**
: ограничения времени для этого теста не будут заданы.

Заметьте, что если попытка была продолжена, то таймер возобновит отсчет с момента предыдущего прерывания.';
$string['timelimitexpired'] = 'Срок для этой попытки истек';
$string['timelimitspecific'] = 'Использовать определенное время';
$string['timelimitsummary'] = 'Ограничение времени для одной попытки';
$string['timelimittemplate'] = 'Использовать параметры исходного файла/шаблона';
$string['timeopen'] = 'Доступно с';
$string['timeopenclose'] = 'Время открытия и закрытия';
$string['timeopenclose_help'] = 'Вы можете задать время, когда тест будет доступен для совершения попыток его прохождения. Перед временем открытия и после закрытия тест будет недоступен.';
$string['title'] = 'Название';
$string['title_help'] = 'Этот параметр определяет название, которое будет отображено на веб-странице.

**Название элемента курса HotPot**
: название этого модуля HotPot будет показано в виде заголовка веб-страницы.

**Получить из исходного файла**
: если в исходном файле имеется любой заголовок, то он будет показан как заголовок веб-страницы.

**Использовать исходное имя файла**
: имя исходного файла, исключая любые названия папок, будет использовано как заголовок веб-страницы.

**Использовать исходный путь к файлу**
: исходный путь к файлу, включая любые названия папок, будет использован как заголовок веб-страницы.';
$string['unitname_help'] = 'Текст помощи для названия элемента';
$string['unrecognizedsourcefile'] = 'К сожалению, модуль HotPot не может определить тип исходного файла: {$a}';
$string['updated'] = 'Обновлен';
$string['updatinggrades'] = 'Обновляются оценки HotPot';
$string['usefilters'] = 'Использовать фильтры';
$string['usefilters_help'] = 'При включенном параметре содержимое будет обработано фильтрами Moodle перед его передачей в браузер.';
$string['useglossary'] = 'Использовать глоссарий';
$string['useglossary_help'] = 'При включенном параметре содержимое будет обработано фильтром «Автосвязывание записей глосария» перед его передачей в браузер.

Учтите, что этот параметр переопределяет настройки администрирования сайта для включения или выключения фильтра «Автосвязывание записей глосария».';
$string['usemediafilter'] = 'Использовать медиафильтр';
$string['usemediafilter_help'] = 'widthЭтот параметр определяет какой медиафильтр будет использоваться.

**Нет**
: содержимое не будет обработано любым медиафильтром.

**Стандартные медиафильтры Moodle**
: содержимое будет обработано стандартными медиафильтрами Moodle. Эти фильтры ищут ссылки на общие типы звуковых и видео файлов, и конвертируют эти ссылки для подходящих медиаплееров.

**Медиафильтр HotPot **
: содержимое будет обработано фильтрами, которые обнаруживают ссылки на изображения, звуки и видео, заключенные в квадратные скобки.

Запись в квадратных скобках имеет следующий синтаксис:
<code>[url player width height options]</code>

**url**
: относительный или абсолютный url-адрес на медиафайл

**player** (не обязательно)
: наименование вставляемого плеера. Значением по умолчанию для этого параметра является "moodle". Стандартная версия модуля HotPot также предлагает следующие плееры:
: **dew**: как mp3-плеер
: **dyer**: mp3-плеер от Bernard Dyer
: **hbs**: mp3-плеер от Half-Baked Software
: **image**: вставка изображения на веб-страницу
: **link**: вставка гиперссылки на другую веб-страницу

**width** (не обязательно)
: требуемая ширина плеера

**height** (не обязательно)
: требуемая высота плеера. Если пропустить, это значение, то высота будет установлена такой же, как и ширина.

**options** (не обязательно)
: разделенный запятыми список параметров, передаваемый плееру. Каждый параметр может быть простым переключателем вкл/выкл или парным наименованием-значением.
: **name=value
: **name="some value with spaces" (**наименование="некоторые значения с пробелами")';
$string['viewreports'] = 'Просмотр отчетов пользователей - {$a}';
$string['views'] = 'Просмотров';
$string['weighting'] = 'С учетом веса';
$string['wrong'] = 'Неправильно';
$string['zeroduration'] = 'Нет продолжительности';
$string['zeroscore'] = 'Нулевой балл';
