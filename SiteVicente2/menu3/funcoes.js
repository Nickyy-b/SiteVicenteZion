        // Função que abre e fecha os sub-menus
        $(document).ready(function(){
            // jquery or toggle sub menus
            $('.sub-btn').click(function(){
                $(this).next('.sub-menu').slideToggle(); 
                $(this).next('.sub-sub-menu').slideToggle();
                $(this).find('.dropdown').toggleClass('rotate'); // Rotatividade da seta do sub-menus
            });
            // jquery abri e fechar menu
            $('.menu-btn').click(function(){
                $('.side-bar').addClass('active');
                $('.menu-btn').css("visibility", "hidden");
            });

            $('.close-btn').click(function(){
                $('.side-bar').removeClass('active');
                $('.menu-btn').css("visibility", "visible");
            });
        });