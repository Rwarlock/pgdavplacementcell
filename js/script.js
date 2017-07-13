$(function() {
    //highlight the current nav
    $("#home a:contains('Home')").parent().addClass('active');
    $("#aboutcell a:contains('About Cell')").parent().addClass('active');
    $("#hme a:contains('Registrations')").parent().addClass('active');
    $("#ome a:contains('Recruiters')").parent().addClass('active');
    $("#ome a:contains('Resume Format')").parent().addClass('active');
    $("#Contact a:contains('Contact Us')").parent().addClass('active');
    
    //make menus drop automatically
    $('ul.nav li.dropdown').hover(function() {
        $('.dropdown-menu', this).fadeIn();
    }, function() {
        $('.dropdown-menu', this).fadeOut('fast');
    });
});