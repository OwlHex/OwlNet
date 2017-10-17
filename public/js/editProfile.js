$(document).ready(function () {
    $('#changeProfile').on('click', function () {

        var firtname = $('input[name=first_name]').val(); 
        var lastname = $('input[name=last_name]').val();
        var gender = $('input[name=gender]:checked').val();
   

        $.ajax({

            type: "POST",
            url: '/avatarEdit1',
            contentType: 'application/json; charset=utf-8',
            data:{ "firtname": firtname,
                   "lastname": lastname,
                   "gender": gender,
            },
            dataType:'json',
            async: true,
            cache: false,
            
            success: function (response) {
                if (response.success) {
                    
                    $('div.floatbox').html(
                        
                        
                        '<div class="text-box ">'
                           + {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}+'
                        </div>' +
                        '<div class="text-box">'+
                            {{{ isset(Auth::user()->id) ? Auth::user()->first_name :  Auth::user()->id}}} +
                        '</div>' +
                        '<div class="text-box">'+
                            {{{ isset(Auth::user()->id) ? Auth::user()->last_name :  Auth::user()->id}}} +
                        '</div>'+
                        '<div class="text-box">' +
                            {{{ isset(Auth::user()->id) ? Auth::user()->age :  Auth::user()->id}}} +
                        '</div>' +
                        '<div class="text-box">'+
                            {{{ isset(Auth::user()->id) ? Auth::user()->gender :  Auth::user()->id}}} +
                        '</div>' +
                        '<a href="{{ route('avatarEdit1') }}">edit</a>'
                       

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