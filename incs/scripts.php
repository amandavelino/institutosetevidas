<script src="./bower_components/jquery/dist/jquery.min.js"></script>
<script src="./bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>
<script src="./js/smoothscroll.min.js"></script>
<script src="./bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="./js/spinners/spinners.min.js"></script>
<script src="./js/lightview/lightview.js"></script>
<script>
    $(document).ready(function(){      

        $('.owl-home').owlCarousel({
            items: 1,
            nav: true,
            dots: true,
            navText: ['<i class="fa fa-chevron-left fa-3x" aria-hidden="true"></i>','<i class="fa fa-chevron-right fa-3x" aria-hidden="true"></i>'],
            loop: false,
            margin: 0
        });

        $('.owl-testemunhos').owlCarousel({
            autoplay: true,
            autoplayTimeout: 7000,
            autoplayHoverPause: true,              
            items: 1,
            nav: true,
            navText: ['<i class="fa fa-chevron-left fa-3x" aria-hidden="true"></i>','<i class="fa fa-chevron-right fa-3x" aria-hidden="true"></i>'],
            loop: true,
            margin: 0
        });

        $('.owl-lista-criancas').owlCarousel({
            autoplay: true,
            autoplayTimeout: 7000,
            autoplayHoverPause: true,            
            items: 3,
            nav: true,
            dots: true,
            navText: ['<i class="fa fa-chevron-left fa-3x" aria-hidden="true"></i>','<i class="fa fa-chevron-right fa-3x" aria-hidden="true"></i>'],
            loop: false,
            margin: 20          
        });

        //numeracao do slider apadrinhe - escolha um sonho
        var i = 1;
        $('.owl-lista-criancas .owl-dot > span').each(function(){
            $(this).text(i);
            i++;
        });          

        $(".owl-lista-criancas .conteudo-lista").on("click", function(){

            //item
            var item = $(this).closest(".item-row");
            //se não tiver a classe amei, adiciona-a... e a caixa se expande.
            if(!item.hasClass('amei')){
                item.addClass('amei');
                item.animate({
                height: '305px'
                }, 300, function() {}); 
            }else{
                item.removeClass('amei');
                item.animate({
                height: '180px'
                }, 300, function() {}); 
            }//

        });// on click - favoritar

        //efeito hover ou click do slider - escolha um sonho
        /*
        $(".owl-lista-criancas .item").hover(function(){
            
            //in...
            console.log("in");
            $(this).animate({
                height: '305px'
            }, 300, function() {  });

        }, function(){
            
            //out...
            console.log("out");
            $(this).animate({
                height: '180px'
            }, 300, function() { });

        });//
        */

    });//
</script> 