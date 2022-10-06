// efeito para o icone do instaram nas redes sociais
$('a.icone_instagram').mouseover(function(){
  $(this).attr('style', 'background-color: #517fa4; color: white;')
});
$('a.icone_instagram').mouseout(function(){
  $(this).removeAttr('style')
});
