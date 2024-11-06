<main class="mg-top60">
    <section class="review">
        <div class="container my-5">
            <h2 class="title-hot">Đánh Giá Sản Phẩm</h2>

            <!-- Phần Đánh Giá Sao -->
            <div class="review-section mt-4 p-3">
                <h5>Đánh giá chung</h5>
                <div class="d-flex align-items-center">
                    <div class="star-rating me-2">
                        <span class="fs-4">★★★★☆</span> <!-- Đây là ví dụ 4 sao, có thể thay đổi -->
                    </div>
                    <span>(4/5 điểm)</span>
                </div>
                <p>45 lượt đánh giá</p>
            </div>

            <!-- Phần Bình Luận -->
            <div class="mt-4">
                <h5 class="title-hot">Bình luận từ người dùng</h5>

                <!-- Bình luận 1 -->
                <div class="card comment-card">
                    <div class="card-body">
                        <h6 class="card-title">Nguyễn Văn A</h6>
                        <div class="star-rating mb-2">
                            <span>★★★★☆</span> <!-- Ví dụ 4 sao -->
                        </div>
                        <p class="card-text">Sản phẩm rất tốt, đáng mua!</p>
                        <small class="text-muted">Đã đánh giá vào ngày 1 tháng 11, 2024</small>
                    </div>
                </div>

                <!-- Bình luận 2 -->
                <div class="card comment-card">
                    <div class="card-body">
                        <h6 class="card-title">Trần Thị B</h6>
                        <div class="star-rating mb-2">
                            <span>★★★☆☆</span> <!-- Ví dụ 3 sao -->
                        </div>
                        <p class="card-text">Chất lượng ổn nhưng giao hàng hơi chậm.</p>
                        <small class="text-muted">Đã đánh giá vào ngày 3 tháng 11, 2024</small>
                    </div>
                </div>

                <!-- Form thêm bình luận -->
                <div class="mt-4">
                    <h5 class="title-hot">Viết đánh giá của bạn</h5>
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Tên</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="rating" class="form-label">Đánh giá</label>
                            <select class="form-select" id="rating" required>
                                <option value="5">5 sao</option>
                                <option value="4">4 sao</option>
                                <option value="3">3 sao</option>
                                <option value="2">2 sao</option>
                                <option value="1">1 sao</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="comment" class="form-label">Bình luận</label>
                            <textarea class="form-control" id="comment" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="button btn-mid">Gửi đánh giá</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

</main>