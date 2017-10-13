$(document).ready(function () {
    $('#changeProfile').on('click', function () {

        var firtname = $('#first_name').val();
        var lastname = $('#last_name').val();
        var gender = $('input[name=gender]:checked').val();

        // var formData = new FormData();   
        // formData.append(firtname, value);
        // formData.append(lastname, value);
        // formData.append(gender, value);


        // var values = {};
        // var formdata = new FormData();
        // $('form').find(':input:not(:checkbox, :radio)').each(function () {
        //     formdata.append(this.name, $(this).val());
        // });

        // $('form').find(':checkbox:checked, :radio:checked').each(function () {
        //     formdata.append(this.name, $(this).val());
        // });



         // var testForm = document.getElementById('editProfile');

         //    testForm.onsubmit = function(event) {
         //    event.preventDefault();

         //    var request = new XMLHttpRequest();
         //    // POST to httpbin which returns the POST data as JSON
         //    request.open('POST', 'http://httpbin.org/post', /* async = */ false);

         //    var formData = new FormData(document.getElementById('test-form'));
         //    request.send(formData);

         //    console.log(request.response);
         //  }
        

        $.ajax({

            type: "POST",
            url: '/avatarEdit1',
            data:{ "firtname": firtname,
                   "lastname": lastname,
                   "gender": gender,
            },
            dataType:'json',
            async: true,
            cache: false,
            
            success: function (response) {if (response.success) {

            }
        }

        
       
        });

    });
});