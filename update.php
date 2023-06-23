<?php
include 'includes/header.php';
include './connection/config.php';
?>

<div class="container mx-auto p-8 max-w-xl">
    <h1 class="text-3xl font-bold mb-8">User Information</h1>

    <?php
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM `students` WHERE `id`='{$id}'";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $name = $row['name'];
            $email = $row['email'];
            $phone = $row['phone'];
            $date = $row['date_of_birth'];
            $id = $row['id'];
        }
    }else{
        echo "id not set";
    }
    
    ?>

    <!-- Form -->
    <div class="bg-white rounded-lg shadow p-6 mb-8">
        <form id="update_form">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                <input type="text" id="name" value="<?php echo $name;?>" name="name" placeholder="Enter your name" class="w-full p-2 border border-gray-300 rounded">
                <input type="hidden" id="id" value="<?php echo $id;?>" name="id" placeholder="Enter your name" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                <input type="email" id="email" value="<?php echo $email;?>"  name="email" placeholder="Enter your email" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="phone" class="block text-gray-700 font-bold mb-2">Phone</label>
                <input type="tel" id="phone" value="<?php echo $phone;?>"  name="phone" placeholder="Enter your phone number" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="dob" class="block text-gray-700 font-bold mb-2">Date of Birth</label>
                <input type="date" id="dob" value="<?php echo $date;?>" name="dob" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <button type="button" id="update_data" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                Submit
            </button>
        </form>
    </div>
</div>
<?php
include 'includes/footer.php';
?>