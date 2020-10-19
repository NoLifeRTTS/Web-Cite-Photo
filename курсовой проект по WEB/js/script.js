
// Функция для плавного перемещения на блок Контакты
$("#Down").click(function(event){
    event.preventDefault();
     let id = $(this).attr("href");
     let top = $(id).offset().top;
     $("*").animate({scrollTop:top},1000);
 });
 // Функция для плавного перемещения на блоки с Товарами
 $(".submenu").on("click","a",function(event){
    event.preventDefault();
     let id = $(this).attr("href");
     let top = $(id).offset().top;
     $("*").animate({scrollTop:top},1000);
 });

// Для стрелочки вверх

 $(window).scroll(function() {
    ($(this).scrollTop() != 0) ? $('#toTop').fadeIn() : $('#toTop').fadeOut(); 
});

$('#toTop').click(function() {
    $('*').animate({scrollTop:0},1000);
});

// Для отображения блока, который выбрали, а также для его скрытия
$("#repair-1").click(function(){
    $(".product").addClass("popup__active");
    $(".popup__bg").fadeIn();
    $(".product__title").html("Цена на послегарантийный ремонт фотоаппаратов");
    $(".info1").html("Чистка видоискателя");
    $(".info2").html("Чистка матрицы");
    $(".info3").html("Настройка (юстировка) автофокуса");
    $(".info4").html("Ремонт 'битых' пикелей");
    $(".info5").html("Ремонт слота карты памяти");
    $(".info6").html("Ремонт и замена затвора");
    $(".info7").html("PRO-диагностика, экспертная оценка");
    $(".info8").html("Предварительная диагностика");
    $(".cost1").html("от 500 рублей");
    $(".cost2").html("от 1200 рублей");
    $(".cost3").html("от 2200 рублей");
    $(".cost4").html("от 2200 рублей");
    $(".cost5").html("от 500 рублей");
    $(".cost6").html("от 600 рублей");
    $(".cost7").html("от 1700 рублей");
    $(".cost8").html("бесплатно");
        $(".popup__bg").click(function(){
           $(".product").removeClass("popup__active");
            $(".popup__bg").fadeOut();
        });
});
$("#repair-2").click(function(){
    $(".product").addClass("popup__active");
    $(".popup__bg").fadeIn();
    $(".product__title").html("Цена на послегарантийный ремонт объективов");
    $(".info1").html("Чистка внешних поверхностей");
    $(".info2").html("Калибровка объектива");
    $(".info3").html("Чистка с полной разборкой");
    $(".info4").html("Юстировка автофокуса");
    $(".info5").html("Юстировка оптической системы");
    $(".info6").html("Полная PRO-диагностика объектива");
    $(".info7").html("Предварительная диагностика объектива");
    $(".info8").html("");
    $(".cost1").html("от 500 рублей");
    $(".cost2").html("от 2400 рублей");
    $(".cost3").html("от 3000 рублей");
    $(".cost4").html("от 2500 рублей");
    $(".cost5").html("от 2500 рублей");
    $(".cost6").html("от 1700 рублей");
    $(".cost7").html("бесплатно");
    $(".cost8").html("");
        $(".popup__bg").click(function(){
           $(".product").removeClass("popup__active");
            $(".popup__bg").fadeOut();
        });
});
$("#repair-3").click(function(){
    $(".product").addClass("popup__active");
    $(".popup__bg").fadeIn();
    $(".product__title").html("Цена на послегарантийный ремонт вспышек");
    $(".info1").html("Полная PRO-диагностика вспышки");
    $(".info2").html("Калибровка вспышки");
    $(".info3").html("Предварительная диагностика");
    $(".info4").html("");
    $(".info5").html("");
    $(".info6").html("");
    $(".info7").html("");
    $(".info8").html("");
    $(".cost1").html("от 800 рублей");
    $(".cost2").html("от 1400 рублей");
    $(".cost3").html("бесплатно");
    $(".cost4").html("");
    $(".cost5").html("");
    $(".cost6").html("");
    $(".cost7").html("");
    $(".cost8").html("");
        $(".popup__bg").click(function(){
           $(".product").removeClass("popup__active");
            $(".popup__bg").fadeOut();
        });
});
$("#repair-4").click(function(){
    $(".product").addClass("popup__active");
    $(".popup__bg").fadeIn();
    $(".product__title").html("Цена на послегарантийный ремонт аксессуаров");
    $(".info1").html("PRO-диагностика, экспертная оценка");
    $(".info2").html("Предварительная диагностика");
    $(".info3").html("");
    $(".info4").html("");
    $(".info5").html("");
    $(".info6").html("");
    $(".info7").html("");
    $(".info8").html("");
    $(".cost1").html("от 800 рублей");
    $(".cost2").html("бесплатно");
    $(".cost3").html("");
    $(".cost4").html("");
    $(".cost5").html("");
    $(".cost6").html("");
    $(".cost7").html("");
    $(".cost8").html("");
        $(".popup__bg").click(function(){
           $(".product").removeClass("popup__active");
            $(".popup__bg").fadeOut();
        });
});
$("#repair-5").click(function(){
    $(".product").addClass("popup__active");
    $(".popup__bg").fadeIn();
    $(".product__title").html("Цена на оцифровку пленочных предметов");
    $(".info1").html("Оцифровка видеокасет");
    $(".info2").html("Оцифровка фотопленок");
    $(".info3").html("Оцифровка кинопленок");
    $(".info4").html("Оцифровка слайдов");
    $(".info5").html("");
    $(".info6").html("");
    $(".info7").html("");
    $(".info8").html("");
    $(".cost1").html("от 300 рублей");
    $(".cost2").html("от 150 рублей");
    $(".cost3").html("от 500 рублей");
    $(".cost4").html("от 400 рублей");
    $(".cost5").html("");
    $(".cost6").html("");
    $(".cost7").html("");
    $(".cost8").html("");
        $(".popup__bg").click(function(){
           $(".product").removeClass("popup__active");
            $(".popup__bg").fadeOut();
        });
});
$("#repair-6").click(function(){
    $(".product").addClass("popup__active");
    $(".popup__bg").fadeIn();
    $(".product__title").html("Цена на печать фотографий");
    $(".info1").html("Печать глянцевых фотографий (15Х10)");
    $(".info2").html("Печать матовых фотографий (15Х10)");
    $(".info3").html("");
    $(".info4").html("");
    $(".info5").html("");
    $(".info6").html("");
    $(".info7").html("");
    $(".info8").html("");
    $(".cost1").html("12 рублей за шт");
    $(".cost2").html("10 рублей за шт");
    $(".cost3").html("");
    $(".cost4").html("");
    $(".cost5").html("");
    $(".cost6").html("");
    $(".cost7").html("");
    $(".cost8").html("");
        $(".popup__bg").click(function(){
           $(".product").removeClass("popup__active");
            $(".popup__bg").fadeOut();
        });
});
// Для отображения блока регистрации, который выбрали, а также для его скрытия
$("#account").click(function(){
    $(".register").addClass("popup__active");
    $(".popup__bg").fadeIn();
    $(".popup__bg").click(function(){
        $(".register").removeClass("popup__active");
        $(".popup__bg").fadeOut();
    });
});
$("#reg").click(function(){
    $(".author").removeClass("popup__active");
    $(".register").addClass("popup__active");
    $(".popup__bg").fadeIn();
    $(".popup__bg").click(function(){
        $(".register").removeClass("popup__active");
        $(".popup__bg").fadeOut();
    });
});
// Для отображения блока авторизации, который выбрали, а также для его скрытия
$("#log").click(function(){
    $(".register").removeClass("popup__active");
    $(".author").addClass("popup__active");
    $(".popup__bg").fadeIn();
    $(".popup__bg").click(function(){
        $(".author").removeClass("popup__active");
        $(".popup__bg").fadeOut();
    });
});

