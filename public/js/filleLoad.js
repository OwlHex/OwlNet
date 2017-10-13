$(document).ready(function () {
    $('#addProduct').on('click', function (e) {
        
        e.preventDefault();

        var formData = new FormData();   
        formData.append('file', $('.upload-file')[0].files[0]);





        $.ajax({

            type: "POST",
            url: '/avatarEdit1',
            data: formData,
            async: true,
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response.success) {
                    debugger;
                    $('div.user-block').find('img').html(
                        
                        '<img src="img/' + response.avatar + '" alt="avatar" id="avatar" class="imageConstruct">' 
                       
                    );
                    // console.log(response.avatar);
                } else if (response.error){
                    alert(response.message);
                } else {
                    alert(response.message);
                }
            }
        });
    });

});