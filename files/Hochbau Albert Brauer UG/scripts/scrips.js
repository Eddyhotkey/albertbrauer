
// rsce_luxemburg
$(document).ready( function () {
    // define variables;
    let rsce_luxemburg__item = $('.rsce_luxemburg__item');

    // .hover function
    $(rsce_luxemburg__item).hover(
        function () {
            // define text container
            let rsce_luxemburg__text =  $(this).find('.rsce_luxemburg__text_container');

            // if window width 1024px show text block
            if (window.innerWidth >= 1023) {
                $(rsce_luxemburg__text).fadeToggle();
            }
        }
    );
});