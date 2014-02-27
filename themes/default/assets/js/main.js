function ajaxFilter(element) {
    var sub_array = [];
    $("#subcategories").children(".checked").each(function(indx, element){
        sub_array.push($(element).attr("data"));
    })
    
    jQuery.ajax({
        type: "GET",
        url: $("#filter").attr("url"),
        data: {
            'ajax': 'ajax',
            //'sub': [element.attr("data")]
            'sub': sub_array
        },
        dataType: "json",
        success: 
            function(data) { 
                $("#results").html(data);
            },
        cache: false
    });
    
}

$(document).ready(function(){

  //Значения и параметры слайдеров.

   $( ".floor-space .slider" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 10, 410 ],
    });

   $( ".area .slider" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 40, 410 ],
    });

   $( ".building-up .slider" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 10, 100 ],
    });

   $( ".roof .slider" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 400, 500 ],
    });

   //Чекбоксы в фильтре
//    $('ul.checkbox li').click(function(){
//   		$(this).toggleClass("checked");
//   		event.preventDefault();
//   	});
    $('#subcategories li').click(function(){
        $(this).toggleClass("checked");
        ajaxFilter($(this));
        //event.preventDefault();
    });

   //Раскрывающийся блок в фильтре.

   $('.folded-wrap .knob').click(function(){
		if ($(this).hasClass('active')) {
			$(this).parent().find('.folded').slideUp("slow");
			$(this).removeClass('active');
		}

		else {
			$(this).parent().find('.folded').slideDown("slow");
			$(this).addClass('active');

		}
    
	});

   //Значения и цвет в инпутах при фокусе

   $('.input input').each(function(){

        var Input = $(this);
        var default_value = Input.val();
        var default_color = $(this).css('color');
        $(Input).focus(function() {
            $(this).css('color', default_color);
            if($(this).val() == default_value)
            {
                 $(this).val("");
            }
        }).blur(function(){
            if($(this).val().length == 0)
            {
                $(this).val(default_value);
            }
        });

    });

   $('.input label').each(function(){

        var TextLabel =  $(this);
        var LabelInput = TextLabel.siblings('input');
        var default_value = LabelInput.val();
        var default_color = $(this).css('color');

        $(TextLabel).focus(function() {
            $(this).css('color', default_color);
            if(LabelInput.val() == default_value)
            {
                 LabelInput.val("");
            }
        }).blur(function(){
            if(LabelInput.val().length == 0)
            {
                LabelInput.val(default_value);
            }
        });

    });

   //Валидация формы

   $('.form-line button').click(function(){

        var CurForm = $(this).closest('fieldset');
        var error = 0;
        $(this).closest('fieldset').each(function(){

                if ((CurForm.find('.name').val() == "") || (CurForm.find('.name').val() == "Ваше имя") ) {
                    CurForm.find('.name').css('color', 'red');
                    error=1;
                }

                if ((CurForm.find('.phone').val() == "") || (CurForm.find('.phone').val() == "Ваш телефон") ) {
                    CurForm.find('.phone').css('color', 'red');
                    error=1;
                }

                return false;

        });         

    });

   //Пагинация в разделе с домами.

//   $('.result-nav').pagination({
//        items: 24,
//        itemsOnPage: 1,
//        displayedPages: 3,
//        edges: 1 
//    });

   //Слайдер

   $('#carousel ul').easyPaginate({
       step:1
  });

   //Попапы

   $('.popup-bg').click(function(){
   	$(this).siblings('div').fadeOut('slow');
   	$(this).parent().fadeOut('slow');
   })

   var slider1 = $('#detailed-slider').bxSlider();

   $('.popup-detailed .close').click(function(){
       slider1.destroySlider();
       $(this).parent().fadeOut('slow');
       $(this).parent().parent().fadeOut('slow'); 
   });

   $('.results .line > div').click(function(){
       var dtlPos = parseInt($(document).scrollTop());
       $('.popup-detailed').css({'top':dtlPos});
       $('.popup-wrap').fadeIn('slow');
       $('.popup-detailed').fadeIn('slow');
       $('.buy-it').fadeIn('slow');
       slider1.reloadSlider();
   });

   var slider2 = $('#feedback-slider').bxSlider();

   $('.popup-feedback .close').click(function(){
       slider2.destroySlider();
       $(this).parent().fadeOut('slow');
       $(this).parent().parent().fadeOut('slow'); 
   });

   $('.feedback').click(function(){
       var fdbPos = parseInt($(document).scrollTop());
       $('.popup-feedback').css({'top':fdbPos});
       $('.popup-wrap').fadeIn('slow');
       $('.popup-feedback').fadeIn('slow');
       slider2.reloadSlider();
   });



  //Инициализация слайдеров в попапах. 
  //Необходимо делать не при загрузке страницы как сейчас, а при клике на программируемый элемент.
  //Тоесть попапу применили дисплей блок, затем инициализировали функцию.
  //Тут описания функций релоуд и дистрой в самом низу http://bxslider.com/options


   

});
