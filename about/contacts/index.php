<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Задайте вопрос");
?>
 <b>Телефон:</b> 8 900 513 20 38<br>
 <b>Адрес:</b> г. Тамбов, ул. Лермонтовская, д. 72
	<div id="yandex-map" style="width: 100%; height: 490px;">
		 <script>
    BX.ready(function() {
        // Подключаем Яндекс.Карты
        if (!window.ymaps) {
            var script = document.createElement('script');
            script.src = 'https://api-maps.yandex.ru/2.1/?lang=ru_RU&onload=initYandexMap';
            document.head.appendChild(script);
        }

        window.initYandexMap = function() {
            ymaps.ready(function() {
                var myMap = new ymaps.Map('yandex-map', {
                    center: [52.709409, 41.453181],
                    zoom: 15
                });

                var myPlacemark = new ymaps.Placemark([52.709409, 41.453181], {
                    hintContent: 'Наш магазин',
                    balloonContent: 'г. Тамбов, ул. Лермонтовская, д. 72'
                });

                myMap.geoObjects.add(myPlacemark);
            });
        };
    });
</script>
</div>
		<small><a href="https://maps.google.ru/maps?f=q&source=embed&hl=ru&geocode=&q=%D0%B3.+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+%D1%83%D0%BB.+2-%D1%8F+%D0%A5%D1%83%D1%82%D0%BE%D1%80%D1%81%D0%BA%D0%B0%D1%8F,+%D0%B4.+38%D0%90&aq=&sll=55,103&sspn=90.84699,270.527344&t=m&ie=UTF8&hq=&hnear=2-%D1%8F+%D0%A5%D1%83%D1%82%D0%BE%D1%80%D1%81%D0%BA%D0%B0%D1%8F+%D1%83%D0%BB.,+38,+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+127287&ll=55.805478,37.569551&spn=0.023154,0.054932&z=14&iwloc=A" style="text-align:left">Просмотреть увеличенную карту</a></small>
<h2>Задать вопрос</h2>
 <?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback", 
	"bootstrap_v4", 
	array(
		"EMAIL_TO" => "sale@nyuta.bx",
		"EVENT_MESSAGE_ID" => array(
		),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(
			0 => "NAME",
			1 => "MESSAGE",
		),
		"USE_CAPTCHA" => "Y",
		"COMPONENT_TEMPLATE" => "bootstrap_v4"
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")?>