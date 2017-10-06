$(document).ready(function () {
    $('#uploadImage').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData($(this)[0]);
        $.ajax({
            type: "POST",
            url: '/product',
            data: formData,
            async: true,
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response.success) {
                    $('.user-block').find('#avatar').append(
                        
                        '"<img src="img/' + response.product.image + '" alt="avatar" id="avatar" class="imageConstruct">"' 
                       
                    );
                } else if (response.error){
                    alert(response.message);
                } else {
                    alert(response.message);
                }
            }
        });
    });

});