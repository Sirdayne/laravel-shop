$(document).ready(function(){

    /* Laravel admin panel */

    $('.lara-burger').click(function() {
        $('.lara-panel').toggleClass('lara-active');
    });
	
	/* BURGER */
	
	$('body').on('click','.burger',function(){
        
        $(this).toggleClass('bur-act');
        $('.nav-center').toggleClass('nav-center-active');
		
    });
    
    /* NAVIGATION */
    
    $('body').on('click','.nav-modal',function(){
        
        $(this).addClass('nav-active')
        
    });
    
    $(document).mouseup(function (functionNavModal) {
        var contNavModal = $('.nav-modal');
                
        if (contNavModal.has(functionNavModal.target).length === 0){
            $('.nav-modal').removeClass('nav-active');
        }
    });
    
    /* СЛАЙДЕР В HEADER */
    
    var timer = 0;
    var result = 0;
    
    $('.header-slider-title').hide();
    $('.js-title-1').show();
            
        window.setInterval(function(){
            ++timer;
                
            result = timer % 2;
                
                if (result == 0){
                    $('.header-slide').removeClass('hs-4').addClass('hs-5');
                    $('.header-slider-title').hide();
                    $('.js-title-1').show();
                }
            
                if (result == 1){
                    $('.header-slide').removeClass('hs-5').addClass('hs-4');
                    $('.header-slider-title').hide();
                    $('.js-title-2').show();
                }
    
            
                
        }, 5000);
    
    
    // ~~~~ КАЛЬКУЛЯТОР НАЧАЛО ~~~~//
    // INPUTS FOR HEIGHT AND WIDTH FOR SIZE CALCULATOR
    
    var jsHeight=1.38;
    var jsWidth=1;
    
    var fixPrice = [16000,18000,16000,16000,16000,10000];
    var fixPriceRoll = [7500,17000,40000,5000,40000,20000];
    
    var coefPrice = [2, 2, 1, 1, 1.8, 3];
    
    var resultPrice;
    var quantity = 1;
    var indexCalc = 0;
    
    var indexFilterText = 0;
    var indexFilterTextRoll = 0;
    
    var indexBtnFilterBig = 0;
    
    function calculateResult(){// ФОРМУЛА - РЕЗУЛЬТАТ ДЛЯ ШТОР
        
        if (indexCalc == 2){
            resultPrice = fixPrice[indexCalc] * coefPrice[indexCalc] * quantity * jsWidth * jsHeight;
        }
        else{
            resultPrice = fixPrice[indexCalc] * coefPrice[indexCalc] * quantity * jsWidth; 
        }

        resultPrice = Math.round(resultPrice);
        
        $('#option-price').html('от '+resultPrice.toLocaleString()+' тг.');
    }
    
    function calculateResultRoll(){// ФОРМУЛА - РЕЗУЛЬТАТ ДЛЯ РОЛЛ-ШТОР
        
        resultPrice = fixPriceRoll[indexCalc] * quantity * jsWidth * jsHeight;

        resultPrice = Math.round(resultPrice);
        
        $('#option-price').html('от '+resultPrice.toLocaleString()+' тг.');
    }
    
    // ИЗМЕНЕНИЕ ВЫСОТЫ И ШИРИНЫ В КАЛЬКУЛЯТОРЕ
    function changeValues(){
        jsHeight = $('#js-height').val();
        jsWidth = $('#js-width').val();
        quantity = $('#js-quantity').val();
        
        $('#js-size').html(jsWidth+'x'+jsHeight+' м.');
        
        if (indexBtnFilterBig == 0){
            calculateResult();
        }
        else{
            calculateResultRoll();
        }
    }
    
    $('#js-width, #js-height, #js-quantity').change(function() {
        changeValues();
    });
    
    $('.main-filters').mousemove(function(){
        changeValues();                      
    });
    
    /* ФИЛЬТРЫ ВЫБЕРИТЕ ШТОРЫ РОЛЛ-ШТОРЫ */
    var inner = [];
    
    inner[1] = $('.filter-text.filter-active').html();
    inner[2] = $('.filter-text-roll.filter-active').html();
    // ФИЛЬТРЫ НА ШТОРЫ ИЛИ РОЛЛЫ
    $('.btn-filter-big').click(function() {
        
        indexBtnFilterBig = $(".btn-filter-big").index(this);
            $('.js-row, .js-shtori-main, .filter-select').removeClass('filter-active');
            
            $('.js-shtori-main').eq( indexBtnFilterBig ).addClass('filter-active');
            $('.js-row').eq( indexBtnFilterBig ).addClass('filter-active');
            $('.filter-select').eq( indexBtnFilterBig ).addClass('filter-active');
        
            
            $('.js-model').html(inner[indexBtnFilterBig+1]);
            
        
        $('.btn-filter-big').removeClass('filter-active');
        $(this).addClass('filter-active');
        
        if (indexBtnFilterBig == 0){
            indexCalc = indexFilterText;
            changeValues();
        }else{
            indexCalc = indexFilterTextRoll;
            changeValues();
        }
        
    });
    // НАЖАТИЕ НА ФИЛЬТР ШТОР
    $('.filter-text').click(function() {
        
        indexFilterText = $(".filter-text").index(this);
            $('.js-shtori').removeClass('filter-active');
            $('.js-shtori').eq( indexFilterText ).addClass('filter-active');
        
            inner[1] = $('.filter-text').eq( indexFilterText ).html();
            $('.js-model').html(inner[1]);
        
        $('.filter-text').removeClass('filter-active');
        $(this).addClass('filter-active');
        
        indexCalc = indexFilterText;
        
        changeValues(); 
        
    });
    // НАЖАТИЕ НА ФИЛЬТР РОЛЛ
    $('.filter-text-roll').click(function() {
        
        indexFilterTextRoll = $(".filter-text-roll").index(this);
            $('.js-roll').removeClass('filter-active');
            $('.js-roll').eq( indexFilterTextRoll ).addClass('filter-active');
        
            inner[2] = $('.filter-text-roll').eq( indexFilterTextRoll ).html();
            $('.js-model').html(inner[2]);
        
        indexCalc = indexFilterTextRoll;
        
        changeValues(); 
        
        $('.filter-text-roll').removeClass('filter-active');
        $(this).addClass('filter-active');
        
    });
    
    /* MOBILE FILTERS */
    $('#filter-select-1').change(function(){
		if($(this).val() == 'f-1'){ 
			$('.filter-text').eq(0).click();
		}
		if($(this).val() == 'f-2'){ 
			$('.filter-text').eq(1).click();
		}
		if($(this).val() == 'f-3'){ 
			$('.filter-text').eq(2).click();
		}
		if($(this).val() == 'f-4'){ 
			$('.filter-text').eq(3).click();
		}
		if($(this).val() == 'f-5'){ 
			$('.filter-text').eq(4).click();
		}
		if($(this).val() == 'f-6'){ 
			$('.filter-text').eq(5).click();
		}
		if($(this).val() == 'f-7'){ 
			$('.filter-text').eq(6).click();
		}
    });
    
    $('#filter-select-2').change(function(){
		if($(this).val() == 'r-1'){ 
			$('.filter-text-roll').eq(0).click();
		}
		if($(this).val() == 'r-2'){ 
			$('.filter-text-roll').eq(1).click();
		}
		if($(this).val() == 'r-3'){ 
			$('.filter-text-roll').eq(2).click();
		}
		if($(this).val() == 'r-4'){ 
			$('.filter-text-roll').eq(3).click();
		}
		if($(this).val() == 'r-5'){ 
			$('.filter-text-roll').eq(4).click();
		}
		if($(this).val() == 'r-6'){ 
			$('.filter-text-roll').eq(5).click();
		}
		if($(this).val() == 'r-7'){ 
			$('.filter-text-roll').eq(6).click();
		}
    });
    // ~~~~ КАЛЬКУЛЯТОР КОНЕЦ ~~~~//
    
    /* КЛИК НА КАРТИНКУ ГАЛЕРЕИ */
    /*
    $(".modal-gallery .slick-prev").click();

    $('.modal-gallery').fadeOut(500).addClass('opacity-one');
 
    $('.js-modal-gallery').click(function() {
        $('.modal-back, .modal-gallery').fadeIn(500);
    });
    */
                                    
    $('body').on('click','.modal-back, .modal-close',function(){
        $('.modal-back, .modal, .thx, .modal-gallery, .modal-calc').fadeOut(500);
    });
    
    $('body').on('click','.jk',function(){
        $('.modal-back, .modal').fadeIn(500);
    });

    setTimeout(function(){
        $('.js-lara-thx').fadeOut('4000');
    },2000);
    
    $('.jk-calc').click(function() {
        $('.modal-back, .modal-calc').fadeIn(500);
        
        var calcModel = $('.js-model').html();
        var calcSize = $('#js-size').html();
        var calcQuantity = $('#js-quantity').val();
        var calcPrice = $('#option-price').html();
        
        $('#calc-model').val(calcModel);
        $('#calc-size').val(calcSize);
        $('#calc-quantity').val(calcQuantity);
        $('#calc-price').val(calcPrice);
        
    });
    
    /*
    $('.js-modal-gallery').click(function() {
        
        var indexModalGallery = $(".js-modal-gallery").index(this);
        
        $( "#slick-slider-3" ).slick('slickGoTo', indexModalGallery);
        
    });
    */
   
    
    /* PORTFOLIO */
    $('.portfolio-filter').click(function() {
        
        $('.portfolio-filter').removeClass('pf-active');
        $(this).addClass('pf-active');
        
        var indexPortfolioFilter = $('.portfolio-filter').index(this);
        
        if (indexPortfolioFilter == 0){
            $('.portfolio-photo').removeClass('pf-active');
            $('.portfolio-photo').addClass('pf-active');
        }
        else{
            var indexPhoto = indexPortfolioFilter;
            $('.portfolio-photo').removeClass('pf-active');
            $('.portfolio-photo-'+indexPhoto).addClass('pf-active');
        }
        
    });
    
    
	$('#decor-select').change(function(){
		if($(this).val() == 'd-1'){ 
			window.location.href = "/sew";
		}
		if($(this).val() == 'd-2'){ 
			window.location.href = "/decor";
		}
		if($(this).val() == 'd-3'){ 
			window.location.href = "/wallpapers";
		}
		if($(this).val() == 'd-4'){ 
			window.location.href = "/jalousie";
		}
		if($(this).val() == 'd-5'){ 
			window.location.href = "/floor";
		}
		if($(this).val() == 'd-6'){ 
			window.location.href = "/business";
		}
		if($(this).val() == 'd-7'){ 
			window.location.href = "/dealers";
		}
    });

    
});

