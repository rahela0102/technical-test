$(document).ready(() => {
    $('.open-popup').on('click', event => {
        $('.popup').addClass('show-popup');
    });

    $('.popup').on('click', event => {
        const isOutside = event.target === $('.popup')[0] || event.target === $('.popup-container')[0]

        if(isOutside) {
            $('.popup').removeClass('show-popup');
        }
    });
});


