$(function()
{
   $('#cartdelete').on('click',cartdelete );
});
function cartdelete(event){
    event.preventDefault();
    let urlDelete = $('.cartdetete').data('url');
    let id = $(this).data('id');
  $.ajax({
    type:'GET',
    url:urlDelete,
    data: {id:id},
    success:function(data){
        if(data.code ===200){
            $('.goto-here').html(data.cart_component);
            alert('Xóa sản phẩm thành công')
        }

    },
    error:function(){

    }
  });

  $(function()
  {
     $('#cartupdate').on('click',cartupdate );
  });
  function cartupdate(event){
   alert('a');
}
}
