 //call paginate
 $('.table_aluno tbody').paginate({
    'perPage': 5,
    'scope': $('tr')
  });
  

// dropify
$(".dropify").dropify({
  messages: {
    default:
      '<span class="fs-25">Arraste e solte ou clique para inserir sua foto</span>',
    replace: "Arraste e solte ou clique para substituir",
    remove: "Remover",
    error: "Ooops, algo errado aconteceu.",
  },
});

// Carregar base64 em um input hidden para o post
$("#foto_url").blur(function() {
  if ($('.dropify-render img').attr('src')) $("#foto_base64").val($('.dropify-render img').attr('src'));
});