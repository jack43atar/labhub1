$(document).ready(function(){
  $('.book_now').click(function (e) {
    $('.modal_fon').css({
      display: 'flex'
    })
  })


  $('.modal_fon').click(function () {
    $('.modal_fon').css({
      display: 'none'
    })
  })


  $('.modal_container').click(function (e) {
    e.stopPropagation()
  })
});