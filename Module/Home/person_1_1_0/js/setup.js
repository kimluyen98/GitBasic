$('.person_1_0_0 .owl-carousel').owlCarousel({
    loop: false,
    margin: 10,
    items: 1,
    responsive: {
        0: {
            items: 1
        },
        414: {
            items: 1
        },
        768: {
            items: 1
        },
        1024: {
            items: 1
        },
        1280: {
            items: 1
        },
    }
});
var $tabs1 = $('.tabs1 .tab');
$tabs1.click(function(event) {
    var selectedClass = 'active';
    $('.tabs1 .tab,.tabs1 .tab img').removeClass(selectedClass);
    $(event.target).addClass(selectedClass);
});
var $tabs2 = $('.tabs2 .tab');
$tabs2.click(function(event) {
    var selectedClass = 'active';
    $('.tabs2 .tab,.tabs2 .tab img').removeClass(selectedClass);
    $(event.target).addClass(selectedClass);
});