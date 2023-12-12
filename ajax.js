$(document).on('click','#btn-add',function(e) {

        var data = $("#user_form").serialize();

        $.ajax({

            data: data,

            type: "post",

         url: "save.php",

            success: function(dataResult){

                    var dataResult = JSON.parse(dataResult);

                    if(dataResult.statusCode==200){

                        $('#addEmployeeModal').modal('hide');

                        alert('Data added successfully !');

                        location.reload();                     

                    }

                    else if(dataResult.statusCode==201){

                       alert(dataResult);

                    }

            }

        });

    });

    $(document).on('click','.update',function(e) {

        var student_id=$(this).attr("data-student_id");

        var firstname=$(this).attr("data-firstname");

        var lastname=$(this).attr("data-lastname");

        var age=$(this).attr("data-age");

        var extensionname=$(this).attr("data-extensionname");

        $('#student_id_u').val(student_id);

        $('#firstname_u').val(firstname);

        $('#lastname_u').val(lastname);

        $('#age_u').val(age);

        $('#extensionname_u').val(extensionname);

    });

     

    $(document).on('click','#update',function(e) {

        var data = $("#update_form").serialize();

        $.ajax({

            data: data,

            type: "post",

            url: "save.php",

            success: function(dataResult){

                    var dataResult = JSON.parse(dataResult);

                    if(dataResult.statusCode==200){

                        $('#editEmployeeModal').modal('hide');

                        alert('Data updated successfully !');

                        location.reload();                     

                    }

                    else if(dataResult.statusCode==201){

                       alert(dataResult);

                    }

            }

        });

    });

    $(document).on("click", ".delete", function() {

        var student_id=$(this).attr("student_id");

        $('#student_id_d').val(student_id);

         

    });

    $(document).on("click", "#delete", function() {

        $.ajax({
            url: "save.php",

            type: "POST",

            cache: false,

            data:{

                type:3,

                student_id: $("#student_id_d").val()

            },

            success: function(dataResult){

         location.reload(); 

                    $('#deleteEmployeeModal').modal('hide');

                    $("#"+dataResult).remove();

                     

            }

        });

    });

    $(document).on("click", "#delete_multiple", function() {

        var user = [];

        $(".user_checkbox:checked").each(function() {

            user.push($(this).data('user-id'));

        });

        if(user.length <=0) {

            alert("Please select records.");

        }

        else {

            WRN_PROFILE_DELETE = "Are you sure you want to delete "+(user.length>1?"these":"this")+" row?";

            var checked = confirm(WRN_PROFILE_DELETE);

            if(checked == true) {

                var selected_values = user.join(",");

                console.log(selected_values);

                $.ajax({

                    type: "POST",

                    url: "save.php",
                    cache:false,

                    data:{

                        type: 4,                       

                        id : selected_values

                    },

                    success: function(response) {

                        var ids = response.split(",");

                        for (var i=0; i < ids.length; i++ ) {   

                            $("#"+ids[i]).remove();

                        }  

                    }

                });location.reload();   

            } 
        }
    });
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
        var checkbox = $('table tbody input[type="checkbox"]');
        $("#selectAll").click(function(){
            if(this.checked){
                checkbox.each(function(){
                    this.checked = true;                       
                });
            } else{
                checkbox.each(function(){
                    this.checked = false;                       
                });
            }
        });
        checkbox.click(function(){

            if(!this.checked){
                $("#selectAll").prop("checked", false);
            }
        });

    });
