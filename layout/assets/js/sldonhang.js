    const ipsl = document.querySelectorAll('.cart-quantity'); // all ô nhập số lượng
    const tamtinh = document.getElementById('cart-total');  // tạm tính
    const tong = document.getElementById('cart-total-final');  // Tổng cuối cùng

    function tinhTong() {
        let total = 0;

        // duyệt qua từng hàng trong giỏ hàng
        document.querySelectorAll('.cart-table tbody tr').forEach(function(row) {
            const giaText = row.querySelector('.cart-table-price').innerText;  
            const gia = giaText.replace('đ', '').replace('.', '').trim(); // Loại bỏ 'đ' và dấu phẩy trong giá
            const sl = row.querySelector('.cart-quantity').value; // Lấy số lượng

            total += gia * sl;
        });

        tamtinh.innerText = total + 'đ';  
        tong.innerText = total + 'đ';      
    }

    ipsl.forEach(function(input) {
        input.addEventListener('input', tinhTong);  // gọi lại hàm tính tổng mỗi khi thay đổi số lượng
    });

    tinhTong();
