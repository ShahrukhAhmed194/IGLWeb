    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });
        
    $('#phone_number').show();
    $('#phone').hide();
    $('#change').show();
    $('#update').hide();

    function editNumber(){
        $('#phone_number').hide();
        $('#phone').show();
        $('#change').hide();
        $('#update').show();
    }

    function updateNumber(){
        let number = $('#phone_number').val();
        let phone = $('#phone').val();

        $.ajax({
            url: "{{route('change')}}",
            type: "POST",
            data: {number:number, phone:phone},
            success:function(data){
                event.preventDefault();
                $('#phone_number').val(phone);
                $('#phone_number').show();
                $('#phone').hide();
                $('#change').show();
                $('#update').hide();

            }
        })
    }

    
    $(document).ready(function(){
        $('#label_driving_license').hide();
        $('#driving_license').hide();
        $('#label_passport').hide();
        $('#passport').hide();

        $('input[type="checkbox"]').click(function(){
            let inputValue = $(this).attr("value");
            
            $("#" + inputValue).toggle();
            $("#label_" + inputValue).toggle();
        });
    
    });
    

    function myFunction() {
        document.getElementById("myForm").submit();
    }

    $('#division').change(function(){
        let divison_id = $(this).val();
        let html = '<option >Select District</option>';
        $.ajax({
            type : "GET",
            url  : "{{route('select_district')}}",
            data : { divison_id: divison_id},
            success: function (response) {
                $.each(response,function(key,value){
                    html += '<option value="'+value.id+'">'+value.name+'</option>'
                });
                $('#district').html(html);
            },
            error: function (data){
                console.log('fail');
            }
        });    
    });
     

    $('#district').change(function(){
        let district_id = $(this).val();
        let html = '<option >Select Upazila</option>';
        $.ajax({
            type : "GET",
            url  : "{{route('select_upazila')}}",
            data : {district_id: district_id},
            success: function(response){
                $.each(response, function(key,value){
                    html+='<option value="'+value.name+'">'+value.name+'</option>'
                   
                });
                $('#upazila').html(html);
            },
            error: function(data){
                console.log('failed');
            }
        })
    })

    $('#nid_msg').hide();
    $('#license_msg').hide();
    $('#passport_msg').hide();

    function validateNID(){
        let nid;
        nid = $('#NID_BRN').val();
        nid_len = $('#NID_BRN').val().length;

       if(isNaN(nid)){
            $('#nid_msg').text('NID or Birth Certificate must be digiis only');
            $('#nid_msg').show();
       }
       else
       {
            if(nid==0){
                $('#nid_msg').hide();     
            }
            else{
                if(nid_len!=10 && nid_len!=17 ){
                $('#nid_msg').text('NID or Birth Certificate must be 10 or 17 digits');
                $('#nid_msg').show();

                }else{
                    $('#nid_msg').hide();

                }

            }
            
            
       }
        
    }

    function validateDrivingLicense(){
        let license;
        license = $('#driving_license').val();
        license_len = $('#driving_license').val().length;

        if(isNaN(license)){
            $('#license_msg').text('Driving License must be digiis only');
            $('#license_msg').show();
        }
        else
        {
            if(license==0){
                $('#license_msg').hide();     
            }
            else{
                if(license_len!=8 ){
                $('#license_msg').text('Driving License must be 8 digits');
                $('#license_msg').show();

                }else{
                    $('#license_msg').hide();

                }

            }
        }
    }

    function validatePassport(){
        let passport;
        passport = $('#passport').val();
        passport_len = $('#passport').val().length;

        if(isNaN(passport)){
            $('#passport_msg').text('Passport can be digiis only');
            $('#passport_msg').show();
        }
        else
        {
            if(passport==0){
                $('#passport_msg').hide();     
            }
            else{
                if(passport_len!=8 ){
                $('#passport_msg').text('Passport must be 8 digits');
                $('#passport_msg').show();

                }else{
                    $('#passport_msg').hide();

                }

            }
        }
    }