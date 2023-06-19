<?php
include 'includes/header.php';
?>
<div class="container mx-auto p-8">
    <h1 class="text-3xl font-bold mb-8">User List</h1>

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
            <tbody>
                <tr>
                    <td class="border-t py-2 px-4">John Doe</td>
                    <td class="border-t py-2 px-4">john.doe@example.com</td>
                    <td class="border-t py-2 px-4">1234567890</td>
                    <td class="border-t py-2 px-4">1990-01-01</td>
                    <td class="border-t py-2 px-4"><a href="update.php" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-4 rounded">Edit</a></td>
                    <td class="border-t py-2 px-4"><a class="bg-red-500 hover:bg-blue-600 text-white font-bold py-1 px-4 rounded">Delete</a></td>
                </tr>
                <tr>
                    <td class="border-t py-2 px-4">John Doe</td>
                    <td class="border-t py-2 px-4">john.doe@example.com</td>
                    <td class="border-t py-2 px-4">1234567890</td>
                    <td class="border-t py-2 px-4">1990-01-01</td>
                    <td class="border-t py-2 px-4"><a href="update.php" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-4 rounded">Edit</a></td>
                    <td class="border-t py-2 px-4"><a class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-4 rounded">Delete</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php
include 'includes/footer.php';
?>