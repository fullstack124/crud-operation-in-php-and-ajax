$(document).ready(function(){

    // get student

    function getStudent(){
        $.ajax({
            type:'GET',
            url:'/php/get_student.php',
            success:function(data){
                $("#get_student").html(data)
            }
        })
    }
    getStudent()
    // student save

    $("#save_student").on('click',function(e){
        e.preventDefault();
        
        const name=$("#name").val();
        const email=$("#email").val();
        const dob=$("#dob").val();
        const phone=$("#phone").val();


        if(!name || !email || !dob || !phone){
            alert('Please fill the field');
        }else{
            $.ajax({
                type:'POST',
                url:'/php/insert.php',
                data:{
                    name:name,
                    email:email,
                    dob:dob,
                    phone:phone
                },
                success:function(data){
                    if(data == 1){
                        alert('Student add successfully')
                        $("#empty_form").trigger('reset');
                        window.location.href='/index.php';
                    }else{
                        alert('Student not add successfully')

                    }
                }
            })
        }

    })
})