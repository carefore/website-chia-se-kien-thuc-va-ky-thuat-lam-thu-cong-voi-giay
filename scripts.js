function submitForm() {
    // Lấy dữ liệu từ form
    var title = $("#title").val();
    var content = $("#content").val();

    // Sử dụng jQuery để gửi dữ liệu đến server (PHP)
    $.ajax({
        type: "POST",
        url: "save_data.php",
        data: {
            title: title,
            content: content
        },
        success: function(response) {
            alert("Dữ liệu đã được lưu thành công!");
            // Có thể thêm các xử lý khác sau khi lưu dữ liệu
        },
        error: function(error) {
            alert("Đã xảy ra lỗi trong quá trình lưu dữ liệu.");
            console.error(error);
        }
    });
}
