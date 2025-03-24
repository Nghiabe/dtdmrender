

function view(){
    if(localStorage.getItem('data')!=null){
        var data = JSON.parse(localStorage.getItem('data'));
        for(i=0; i<data.length; i++){
            var name = data[i].name;
            var price = data[i].price;
            var img = data[i].img;
            // $("#name").append(data);
        }
    }
}
function add_wistlist(clicked_id){
    var id=clicked_id;
    var name = document.getElementById('Product_title_'+id).title;
    var img = document.getElementById('Product_img_'+id).src;
    var price = document.getElementById('Product_price_'+id).title;
    // alert(name)
    var newItem ={
        'img ' :img,
        'name': name,
        'price':price
    }
    // alert(newItem)
    if(localStorage.getItem('data')== null){
        localStorage.setItem('data', '[]');

    }
    var old_data = JSON.parse(localStorage.getItem('data'));
    var matches =$.grep(old_data, function(obj){
        return obj.id == id;
    })
    if(matches.length){
        alert('Sản phẩm đã có trong mục yêu thích');

    }else{
        old_data.push(newItem);
        // $('#row-wishlist').append('<tr class="text-center"><td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td><td class="image-prod"><div class="img" style="background-image:url('+img+');"></div></td><td class="product-name"><h3>'+name+'</h3></td><td class="price">'+price+'</td></tr>')

    //     $("#price").append(price + "<span>Days</span>");
    // $("#name").append(name + "<span>Hours</span>");


    }




    localStorage.setItem('data', JSON.stringify(old_data));

}

function addtocart(event){
    event.preventDefault();
    let urlCart = $(this).data('url');
  $.ajax({
    type:'GET',
    url:urlCart,
    dataType: 'json',
    success:function(data){
        if(data.code ===200){
            alert('Thêm sản phẩm vào giỏ hàng thành công')
        }

    },
    error:function(){

    }
  });

}
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


}
$(function()
{
   $('.addtocart').on('click',addtocart );
});
$(function()
{
   $('#cartdelete').on('click',cartdelete );
});
