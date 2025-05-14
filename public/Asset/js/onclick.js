function view() {
    if (localStorage.getItem('data') != null) {
        var data = JSON.parse(localStorage.getItem('data'));
        for (i = 0; i < data.length; i++) {
            var name = data[i].name;
            var price = data[i].price;
            var img = data[i].img;
        }
    }
}

function add_wistlist(clicked_id) {
    var id = clicked_id;
    var name = document.getElementById('Product_title_' + id).title;
    var img = document.getElementById('Product_img_' + id).src;
    var price = document.getElementById('Product_price_' + id).title;

    var newItem = {
        'img': img,
        'name': name,
        'price': price
    };

    // Sử dụng AJAX để thêm sản phẩm vào danh sách yêu thích (Lưu vào CSDL)
    $.ajax({
        type: 'POST',
        url: '/add-wishlist', // URL API của bạn để lưu vào cơ sở dữ liệu
        data: {
            'id': id,
            'name': name,
            'img': img,
            'price': price,
            '_token': $('input[name="_token"]').val()
        },
        success: function(response) {
            if (response.success) {
                alert('Sản phẩm đã được thêm vào danh sách yêu thích.');
            } else {
                alert('Sản phẩm đã có trong danh sách yêu thích.');
            }
        },
        error: function() {
            alert('Có lỗi xảy ra.');
        }
    });
}

function addtocart(event) {
    event.preventDefault();
    let urlCart = $(this).data('url'); // Lấy URL từ data-attribute

    $.ajax({
        type: 'GET',
        url: urlCart,
        dataType: 'json',
        success: function(data) {
            if (data.code === 200) {
                alert('Thêm sản phẩm vào giỏ hàng thành công');
            } else {
                alert('Có lỗi xảy ra khi thêm sản phẩm vào giỏ hàng');
            }
        },
        error: function() {
            alert('Có lỗi xảy ra.');
        }
    });
}

$(function() {
    $('.addtocart').on('click', addtocart);
});

function updatecart(event) {
    event.preventDefault();
    let id = $(this).data('id');
    let quantity = $(this).parents('tr').find('input').val(); // Lấy số lượng mới từ input

    $.ajax({
        type: 'GET',
        url: '/update-cart',  // URL API của bạn để cập nhật giỏ hàng
        data: { id: id, quantity: quantity, _token: $('input[name="_token"]').val() },
        success: function(data) {
            if (data.code === 200) {
                $('.goto-here').html(data.cart_component);  // Cập nhật lại giỏ hàng
                alert('Giỏ hàng đã được cập nhật');
            }
        },
        error: function() {
            alert('Có lỗi xảy ra.');
        }
    });
}

$(function() {
    $('.updatecart').on('click', updatecart);
});

function addcoupon(event) {
    var coupon = $('.coupon').val();

    $.ajax({
        type: 'POST',
        url: '/apply-coupon',  // URL xử lý mã giảm giá
        data: { coupon: coupon, _token: $('input[name="_token"]').val() },
        success: function(data) {
            if (data.success) {
                alert('Mã giảm giá đã được áp dụng');
            } else {
                alert('Mã giảm giá không hợp lệ');
            }
        },
        error: function() {
            alert('Có lỗi xảy ra.');
        }
    });
}

$(document).ready(function() {
    $('.apply-coupon').on('click', addcoupon);
});

function choose() {
    var action = $(this).attr('id');
    var matp = $(this).val();
    var _token = $('input[name="_token"]').val();
    var result = '';

    if (action === 'city') {
        result = 'province';
    } else {
        result = 'wards';
    }

    $.ajax({
        type: 'POST',
        url: "select-delivery",
        data: { action: action, matp: matp, _token: _token },
        success: function(data) {
            $('#' + result).html(data);
        }
    });
}

$(function() {
    $('.choose').on('change', choose);
});

function xacnhan(event) {
    event.preventDefault();
    var matp = $('.city').val();
    var maqh = $('.province').val();
    var xaid = $('#wards').val();
    var coupon = $('.coupon').val();
    var _token = $('input[name="_token"]').val();

    $.ajax({
        type: 'POST',
        url: "tinhphi",
        data: { maqh: maqh, matp: matp, _token: _token, xaid: xaid, coupon: coupon },
        success: function(data) {
            // Xử lý sau khi tính phí
            alert('Phí vận chuyển và mã giảm giá đã được tính.');
        }
    });
}

$(document).ready(function() {
    $('.xacnhan').on('click', xacnhan);
});
