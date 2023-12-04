<?php
if (isset($_POST['submit']))
{
    $id = $_POST["id"];
    $title = $_POST["title"];
    $price_1 = $_POST["price_1"];
    $price_2 = $_POST["price_2"];
    $img_name = $_FILES["img"]["name"];
    $img_tmp = $_FILES["img"]["tmp_name"];
    $folder = "./img/".$img_name;
    $conn = new mysqli("localhost", "haruma", "kjkszpj987", "Test1");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO sharshar (id, title, price_1, price_2, img) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $id, $title, $price_1, $price_2, $img_name);

    if ($stmt->execute()) {

        move_uploaded_file($img_tmp, $folder);
        echo "wooow";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Input</title>
</head>
<body>

<div class="con">

    <form method="POST" enctype="multipart/form-data"  class="fr">
            <label>Id:</label><input type="text"  name="id" >
            
            <label>Title:<input type="text"  name="title" ></label>
            
            <label>Old Price:<input type="text"  name="price_1" ></label>
            
            <label>New Price:<input type="text"  name="price_2" ></label>
            <input type="file"  name="img">
            
            <button type="submit" name="submit">Submit</button>
      
    </form>
</div>

</body>
</html>
