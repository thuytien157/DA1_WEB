document.addEventListener("DOMContentLoaded", function () {
    const ipsl = document.querySelectorAll('.cart-quantity'); // all ô nhập số lượng
    const checkboxes = document.querySelectorAll('.cart-checkbox'); // all checkbox
    const tamtinh = document.getElementById('cart-total');  // tạm tính
    const tong = document.getElementById('cart-total-final');  // Tổng cuối cùng

    function tinhTong() {
        let total = 0;

        // duyệt qua từng hàng trong giỏ hàng
        document.querySelectorAll('.cart-table tbody tr').forEach(function (row) {
            //console.log(row);
            
            const checkbox = row.querySelector('.cart-checkbox');

            if (checkbox.checked) {  // chỉ tính khi checkbox đc chọn
                const giaText = row.querySelector('.cart-table-price').innerText;  
                const gia = parseInt(giaText.replace(/[^0-9]/g, '')); // loại bỏ ký tự không phải số
                const sl = row.querySelector('.cart-quantity').value; // lấy số lượng

                total += gia * sl;
            }
        });
        tamtinh.innerText = total + 'đ';  
        tong.innerText = total + 'đ';
    }

    ipsl.forEach(function (input) {
        input.addEventListener('change', tinhTong); 
    });

    checkboxes.forEach(function (checkbox) {
        checkbox.addEventListener('change', tinhTong);  
    });

    tinhTong();  
});
