document.addEventListener("DOMContentLoaded", function () {
    const ipsl = document.querySelectorAll('.cart-quantity');
    const checkboxes = document.querySelectorAll('.cart-checkbox');
    const tamtinh = document.getElementById('cart-total');
    const tong = document.getElementById('cart-total-final');

    function tinhTong() {
        let total = 0;
        document.querySelectorAll('.cart-table tbody tr').forEach(function (row) {
            const checkbox = row.querySelector('.cart-checkbox');
            if (checkbox.checked) {
                const giaText = row.querySelector('.cart-table-price').innerText;
                const gia = parseInt(giaText.replace(/[^0-9]/g, ''));
                const sl = row.querySelector('.cart-quantity').value;
                total += gia * sl;
            }
        });
        tamtinh.innerText = total + 'đ';
        tong.innerText = total + 'đ';
    }

    ipsl.forEach(function (ipsl) {
        ipsl.addEventListener('change', function() {
            this.form.submit(); // gửi form để cập nhật số lượng trong giỏ hàng
        });
    });

    checkboxes.forEach(function (checkbox) {
        checkbox.addEventListener('change', tinhTong);
    });

    tinhTong();
});
