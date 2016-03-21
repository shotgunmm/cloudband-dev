$(document).ready(function(){
	var postsArr = new Array(),
    $postsList = $('.read-news');
    $postsList.find('.left-data .read-left ul li').each(function(){
    postsArr.push($(this).html());
    })
    var firstList = postsArr.splice(0, Math.round(postsArr.length / 2));
    secondList = postsArr,
    ListHTML = '';
    function createHTML(list){
    ListHTML = '<div class="col-md-6 left-data"><div class="read-left"><ul>';
    for (var i = 0; i < list.length; i++) {
    ListHTML += '<li>' + list[i] + '</li>'
    };
      ListHTML += '</ul></div></div>';
    }
    createHTML(firstList);
    $postsList.html(ListHTML);
    createHTML(secondList);
    $('.read-news').append(ListHTML);

    menu();

});

function menu(){
    $('#navbar-collapse-1 .navbar-nav .menu-item a').unbind('click').click(function(){
      $(this).parent().find('.sub-menu').slideToggle();
    });    
}

$(window).resize(function(){
    menu();
});