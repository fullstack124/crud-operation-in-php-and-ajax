$(document).ready(function(){

    // get student

    function getStudent(page){
        $.ajax({
            type:'GET',
            url:'/php/get_student.php',
            data:{page:page},
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

    // delete student

    $(document).on('click','#delete-student',function(){
        if(confirm('Are you sure you want to delete data')){
            const id=$(this).data('id');
            $.ajax({
                type:'POST',
                url:'/php/delete.php',
                data:{id:id},
                success:(data)=>{
                    if(data == 1){
                        alert('data delete successfully')
                        getStudent();
                    }else{
                        alert('some error')
                    }
                }
            })
        }
        
    })


    // UPDATE STUDENT
    $("#update_data").on('click',function(e){
        e.preventDefault();
        
        const name=$("#name").val();
        const id=$("#id").val();
        const email=$("#email").val();
        const dob=$("#dob").val();
        const phone=$("#phone").val();


        if(!name || !email || !dob || !phone){
            alert('Please fill the field');
        }else{
            $.ajax({
                type:'POST',
                url:'/php/update.php',
                data:{
                    id:id,
                    name:name,
                    email:email,
                    dob:dob,
                    phone:phone
                },
                success:function(data){
                    if(data == 1){
                        alert('Student Update successfully')
                        $("#update_form").trigger('reset');
                        window.location.href='/index.php';
                    }else{
                        alert('Student not Update successfully')

                    }
                }
            })
        }

    })

    // pagiantion

    $(document).on('click','.pagination a',function(e){
        e.preventDefault()
        const id=$(this).data('id')
        getStudent(id)
    })


    // search

    $("#search").keyup(function(){
        const value=$(this).val();

        $.ajax({
            type:'POST',
            url:'/php/search_student.php',
            data:{value:value},
            success:function(data){
                $("#get_student").html(data)
            }
        })
    })
})