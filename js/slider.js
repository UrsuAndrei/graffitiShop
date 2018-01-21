$(document).ready(function(){
    var listItem = $( ".slider ul" );
    // var index=$('li').index(listItem);
    var slideWidth = $('.slider ul li').width();
    var timer= setInterval(function () {
        moveRight();
    }, 5000);
    $('.slider ul li:last-child').prependTo('.slider ul');

    function moveLeft() {
        slideWidth = $('.slider ul li').width();
        $('.slider ul').animate({
            right: - slideWidth
        }, 1500, function () {
            $('.slider ul li:last-child').prependTo('.slider ul');
            $('.slider ul').css('right', '');
        });
        slideWidth = $('.slider ul li').width();
        console.log($('li').index(listItem));
    }
    function moveRight() {
        slideWidth = $('.slider ul li').width();
        $('.slider ul').animate({
            left: - slideWidth
        }, 1500, function () {
            $('.slider ul li:first-child').appendTo('.slider ul');
            $('.slider ul').css('left', '');
        });
    }
    $('.prev').click(function () {
        moveLeft();
        clearInterval(timer);
        timer= setInterval(function () {
            moveRight();
        }, 5000);
    });

    $('.next').click(function () {
        moveRight();
        clearInterval(timer);
        timer= setInterval(function () {
            moveRight();
        }, 5000);
    });
    $('.social a').click(function(){
        window.open(this.href);
        return false;
    });
});