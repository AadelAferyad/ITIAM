<?php
    $pr = $_GET['pr_variable'];
    $conn = new mysqli ("localhost", "haruma", "kjkszpj987", "Test1");
    if ($conn->connect_error)
        die("Failed".$conn->connect_error);
    $stmt = $conn->prepare("SELECT * FROM sharshar WHERE title LIKE ?");
    $search = '%'.$pr.'%';
    $stmt->bind_param("s", $search);
    $stmt->execute();
    $result = $stmt->get_result();
    echo '<div class="cards_cont">';
    if ($result)
    {
        while ($row = $result->fetch_assoc())
        {
            $img_path = "./img/".$row['img'];
            echo "<div class=\"cards\">
                  <img src='{$img_path}'/>
                  <div class='cards_info'>
                    <h1>{$row['title']}</h1>
                    <h4>$ {$row['price_2']}</h4>
                  </div>
                </div>";
        }
        echo '</div>';
    }
    else
        echo "Erorr".$stmt->error;
    $stmt->close();
    $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <input type="submit" value="Update" style="width:200px;">
    
</body>
</html>