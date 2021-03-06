<h1>Integration amoCRM & Justclick, and not only</h1>

<h3>Objective:</h3>

This Script automatically creates connected Lead and Contact in amoCRM when ordering Goods in Justclick.
<br/>After payment, amoCRM status changes to "Successfully Implemented".

With small adjustments, this Script can be easily adapted to integrate amoCRM <b><u>with ANY OTHER external System</u></b> that sends data Array in the time of order.

<h3>Features:</h3>

<b>Binding of Contact to the Lead</b>
<br/>All Contacts are linking to the relevant Leads.
<br/>If Contact with the Email already exists, Leads are linking to the existing Contact. The new Contact isn't creating.
<br/>However, there is a small bug in the internal contacts search algorithm of amoCRM. If an email address before or after the at sign @ contains less than 3 characters, then these characters are not considered in the search, and the Lead can be attached to a similar Contact. <br/>Fortunately this bug occurs very rarely.

<h3>Setting up:</h3>

Set up in your account JustClick (or any other Service) Webhook submitting to the <i>order_jc.php</i> when ordering, and to the <i>paid_jc.php</i> when you pay;
<br/>The file <i>prepare.php</i>: Edit the Data and Variables from the resulting Array;
<br/>The file <i>auth.php</i>: Replace the authorization Data on your amoCRM Data: Username (email), Hash (API key) and Subdomain;
<br/>The file <i>fields_info.php</i>: Edit the list of Variables for the custom Fields as you need at the top of the Script;
<br/>The files <i>lead_add.php</i> and <i>lead_update.php</i>: Edit additional Fields Id as well as Variables that you want to send to them.

<h3>Testing:</h3>

At this Repository I created a convenient test function.
<br/>You needn't to fill out a form each time and make an order on Service that you are integrating.
<br/>Just open the root folder (file <i>index.html</i>) after loading the Script on your hosting, and you'll see two buttons: Order and Paid. Clicking on any of them, you'll simulate sending an Array by the Service.
<br/>To use the test, remove the # icon before the last line in the file prepare.php while testing, and replace the Array in the file <i>test/prepare.php</i> with the one that the Service sends at the time of order or payment.

<h3>Support:</h3>

If you have any questions, write to me in PM.
<br>I'll be glad to help you!
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
4. В файле fields_info.php в верхней части скрипта отредактируйте список переменных для дополнительных полей, как вам нужно;
5. В файлах lead_add.php и lead_update.php отредактируйте id дополнительных полей и какие переменные вы хотите в них отправлять.

<h3>Тестирование:</h3>
В этом репозитории я создал удобную функцию тестирования. 
<br>Вам не нужно каждый раз заполнять форму и делать заказ на интегрируемом сервисе. 
<br>Просто откройте корневую папку (файл index.html) после загрузки скрипта на Ваш хостинг, и вы увидите 2 кнопки: Order (Заказать) и Paid (Оплачено). Нажав на любую из них, Вы симитируете отправку массива сервисом.
<br>Чтобы воспользоваться функцией тестирования, уберите на время тестирования значок # перед последней строкой в файле prepare.php, и замените массив в файле test/prepare.php на тот, который отправляет при заказе и оплате сторонний сервер.

<h3>Техподдержка:</h3>
Если у вас что-то не получается или появились какие-то вопросы, пишите мне в личку. 
<br>С удовольствием Вам помогу!
