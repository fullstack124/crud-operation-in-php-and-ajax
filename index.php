<?php
include 'includes/header.php';
?>
<div class="container mx-auto p-8">
    <div class="flex items-center justify-between">
        <h1 class="text-3xl font-bold mb-8">User List</h1>
        <a href="create.php" class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-4 rounded">Add New</a>
    </div>

    <!-- Table -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-100">
                <tr>
                    <th class="text-left py-2 px-4 font-bold text-gray-700">Name</th>
                    <th class="text-left py-2 px-4 font-bold text-gray-700">Email</th>
                    <th class="text-left py-2 px-4 font-bold text-gray-700">Phone</th>
                    <th class="text-left py-2 px-4 font-bold text-gray-700">Date of Birth</th>
                    <th class="text-left py-2 px-4 font-bold text-gray-700">Edit</th>
                    <th class="text-left py-2 px-4 font-bold text-gray-700">Delete</th>
                </tr>
            </thead>
            <tbody id="get_student"> 
            </tbody>
        </table>
    </div>
</div>
<?php
include 'includes/footer.php';
?>