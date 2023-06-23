<?php

include '../connection/config.php';


$sql="SELECT * FROM students WHERE name LIKE '%{$_POST['value']}%' OR  email LIKE '%{$_POST['value']}%' OR  phone LIKE '%{$_POST['value']}%'" ;
$sql_run=mysqli_query($conn,$sql);
$output="";
if(mysqli_num_rows($sql_run) > 0){
    $output .=" <table class='min-w-full bg-white'>
    <thead class='bg-gray-100'>
        <tr>
            <th class='text-left py-2 px-4 font-bold text-gray-700'>Name</th>
            <th class='text-left py-2 px-4 font-bold text-gray-700'>Email</th>
            <th class='text-left py-2 px-4 font-bold text-gray-700'>Phone</th>
            <th class='text-left py-2 px-4 font-bold text-gray-700'>Date of Birth</th>
            <th class='text-left py-2 px-4 font-bold text-gray-700'>Edit</th>
            <th class='text-left py-2 px-4 font-bold text-gray-700'>Delete</th>
        </tr>
    </thead>
    <tbody>";
    while($row=mysqli_fetch_assoc($sql_run)){
        $output .="<tr>
        <td class='border-t py-2 px-4'>{$row['name']}</td>
        <td class='border-t py-2 px-4'>{$row['email']}</td>
        <td class='border-t py-2 px-4'>{$row['phone']}</td>
        <td class='border-t py-2 px-4'>{$row['date_of_birth']}</td>
        <td class='border-t py-2 px-4'><a href='update.php?id={$row['id']}' class='bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-4 rounded'>Edit</a></td>
        <td class='border-t py-2 px-4'><a data-id='{$row['id']}' id='delete-student'  class='bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-4 rounded'>Delete</a></td>
    </tr>";
    }
    $output.="</tbody>
    </table>";
}

   

echo $output;
