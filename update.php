<?php
include 'includes/header.php';
?>

<div class="container mx-auto p-8 max-w-xl">
    <h1 class="text-3xl font-bold mb-8">User Information</h1>

    <!-- Form -->
    <div class="bg-white rounded-lg shadow p-6 mb-8">
        <form>
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="phone" class="block text-gray-700 font-bold mb-2">Phone</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="dob" class="block text-gray-700 font-bold mb-2">Date of Birth</label>
                <input type="date" id="dob" name="dob" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                Submit
            </button>
        </form>
    </div>
</div>
<?php
include 'includes/footer.php';
?>