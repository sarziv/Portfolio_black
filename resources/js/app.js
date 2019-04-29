require('./bootstrap');
$(document).ready(function(){
    //laxx
    window.onload = function() {
        //mini loader
        $('.lds-blocks').css('display','none');
        lax.setup() // init

        const updateLax = () => {
            lax.update(window.scrollY)
            window.requestAnimationFrame(updateLax)
        }
        window.requestAnimationFrame(updateLax)
    };
});
