var swiper = new swiper (".mySwiper-1",{
    slidesPerViem:1,
    spaceBetween:30,
    loop:true,
    paginatio:{
        el:".swiper-pagination",
        clickable:true,
    },
    navigation:{
        nextEl:".swiper-button-next",
        prevEl:".swiper-button-prev",
        }
    });

    var swiper = new swiper (".mySwiper-2",{
        slidesPerViem:3,
        spaceBetween:20,
        loop:true,
       loopFillGroupWithBlank:true,
       navigation:{
            nextEl:".swiper-button-next",
            prevEl:".swiper-button-prev",
            },

            breakpoints: {
                0:{
                    slidesPerViem:1,
                },
                520:{
                    slidesPerViem:2,
                },

                950:{
                    slidesPerViem:3,
                }
            }
        });

        let tabInputs =document.querySelectorAll(".tabInput");
        tabInputs.forEach(function(input){
        input.addEventListener('change',function(){
            let id = input.ariaValueMax;
            let thisSwiper = document.getElementById('swiper'+ id);
            thisSwiper.swiper.update();
        })
    
    });
