<h1>Integration amoCRM & Justclick, and not only</h1>

<h3>What is this Script:</h3>

This Script automatically creates connected Lead and Contact in amoCRM when ordering goods in Justclick.
<br/>And when you pay - amoCRM status changes to "Successfully Implemented".

With small adjustments, this Script can be easily adapted to integrate amoCRM <b><u>with any other external System</u></b> that sends data array in the time of order.

<h3>Features:</h3>

Binding of Contact to the Lead
<br/>All Contacts are linking to the relevant Leads.
<br/>If Contact with the email address already exists, Leads are tying to the existing Contact. The new one isn't creating.
<br/>However, there is a small bug in the internal contacts search algorithm of amoCRM. If in an email before or after the at sign @ contains less than 3 characters, then these characters are not considered in the search, and the Lead can be attached to a similar Contact. <br>Fortunately this bug occurs very rarely.

<h3>Setting up:</h3>

Set up your account amoCRM submitting webhook when ordering to the order_jc.php, and when you pay - to paid_jc.php;
<br/>The file prepare.php: Edit the data and variables from the resulting array that you want to use;
<br/>The file auth.php: Replace the authorization data on your data amoCRM: Username (email), Hash (key API) and a Subdomain;
<br/>The file leads_info.php: Edit the list of variables for the custom fields as you need at the top of the Script;
<br/>The files lead_add.php and lead_update.php: Edit additional fields id and which variables you want to send them.

<h3>Testing:</h3>

At this repository I created a convenient test function.
<br/>You needn't to fill out a form every time and make an order for the integrable service.
<br/>Just open the root folder (file index.html) after loading the script on your hosting, and you'll see two buttons: Order (Order) and Paid (paid). Clicking on any of them, you are sending an array symitiruete service.
<br/>To use the test, remove the test on the # icon before the last line in the file prepare.php, and replace the array in the file test / prepare.php the one who sends the order and pay at the server side.

<h3>Maintenance:</h3>

If you have something does not work or there are any questions, write to me in PM.
<br>I'm pleased to help you!
<br/><br/><br/>


<h1>Интеграция amoCRM с Justclick, и не только</h1>

<h3>Зачем нужен этот скрипт:</h3>
Этот скрипт автоматически создает связанные сделку и контакт в amoCRM при заказе товара в Justclick.
<br>А при оплате заказа - статус в amoCRM меняется на "Успешно реализовано".

С помощью небольших корректировок этот скрипт легко можно адаптировать для интеграции amoCRM <b><u>с любой другой внешней системой</u></b>, отправляющей массив данных при заказе.

<h3>Особенности работы:</h3>
<b>Привязка контакта к сделке</b>
<br>Все контакты привязываются к соответствующим сделкам.
<br>В случае, если контакт с таким email уже существует, сделка привязывается к уже существующему контакту. Новый не создается.
<br>Однако есть небольшой баг во внутреннем алгоритме поиска контактов amoCRM. Если в email до или после собачки содержит @ меньше 3 знаков, то эти знаки в поиске не учитываются, и сделка может привязаться к похожему контакту. К счастью ошибки из-за этой особенности возникают крайне редко.

<h3>Настройка:</h3>
1. Настройте в аккаунте amoCRM отправку веб-хука при заказе на адрес файла order_jc.php, а при оплате - на paid_jc.php;
2. В файле prepare.php отредактируйте данные и переменные из полученного массива, которые вы хотите использовать;
3. В файле auth.php замените данные для авторизации на ваши данные amoCRM: Логин (email), Хэш (ключ API) и субдомен;
4. В файле leads_info.php в верхней части скрипта отредактируйте список переменных для дополнительных полей, как вам нужно;
5. В файлах lead_add.php и lead_update.php отредактируйте id дополнительных полей и какие переменные вы хотите в них отправлять.

<h3>Тестирование:</h3>
В этом репозитории я создал удобную функцию тестирования. 
<br>Вам не нужно каждый раз заполнять форму и делать заказ на интегрируемом сервисе. 
<br>Просто откройте корневую папку (файл index.html) после загрузки скрипта на Ваш хостинг, и вы увидите 2 кнопки: Order (Заказать) и Paid (Оплачено). Нажав на любую из них, Вы сымитируете отправку массива сервисом.
<br>Чтобы воспользоваться функцией тестирования, уберите на время тестирования значок # перед последней строкой в файле prepare.php, и замените массив в файле test/prepare.php на тот, который отправляет при заказе и оплате сторонний сервер.

<h3>Техподдержка:</h3>
Если у вас что-то не получается или появились какие-то вопросы, пишите мне в личку. 
<br>С удовольствием Вам помогу!
