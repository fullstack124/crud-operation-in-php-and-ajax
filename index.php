<?php
include 'includes/header.php';
?>
<div class="container mx-auto p-8">
    <div class="flex items-center justify-between">
        <h1 class="text-3xl font-bold mb-8">User List</h1>
        <a href="create.php" class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-4 rounded">Add New</a>
    </div>
    <input type="text" id="search" name="search" placeholder="Search here..." class="w-full p-2 border border-gray-300 rounded">

    <!-- Table -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
       <div id="get_student"></div>
    </div>
</div>
<?php
include 'includes/footer.php';
?>