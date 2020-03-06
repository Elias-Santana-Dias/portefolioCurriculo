// inicialização do parallax
$(document).ready(function(){
    $('.parallax').parallax();

//Animação de fadeIn
    $('.fadein').fadeIn(3000)

//Menu Lateral
    $('.sidenav').sidenav();

    (function(){
        //animação de computador
        var t = document.querySelector('.computador')
        function computador (elemento){
            var comparray = elemento.innerHTML.split('')
            elemento.innerHTML = ''
            comparray.forEach(function(letra, i){
                setTimeout(function(){
                    elemento.innerHTML += letra
                }, 75*i)
            })
        }
        computador(t)
        }())
        
        //animação com o scroll
        function animeScroll(){
            var documentTop = $(document).scrollTop();
            $('[data-anime]').each(function(){
                var itemTop = $(this).offset().top
                if(documentTop > itemTop - $(window).height()* 4/5){
                    $(this).addClass('anime-start')
                }else{
                    $(this).removeClass('anime-start')
                }
            })
        }
        
        animeScroll()
        
        if($('[data-anime]').length != 0){
            $(document).scroll(function(){
                animeScroll()
            })
        }
        
        $('#textarea').on('focus', function(){
            $('#res').hide(1000).html('Obrigado por utilizar').show(1000)
        })
        
});

