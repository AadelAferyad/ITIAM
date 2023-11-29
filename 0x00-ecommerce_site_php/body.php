<?php
 include ('./part_1.php');
$conn = new mysqli("localhost", "haruma", "kjkszpj987", "Test1");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$result = $conn->query("SELECT * FROM sharshar");

echo '<div class="cards_cont">';
while ($data = $result->fetch_assoc())
{
    $img_path = "./img/".$data['img'];
    echo "<div class=\"cards\">
          <img src='{$img_path}'/>
          <div class='cards_info'>
            <h1>PRODUCT</h1>
            <h1>{$data['title']}</h1>
            <h4>{$data['price_2']}</h4>
          </div>
        </div>";

}
echo ' </div>';
include ('./top_products.php');
$result_2 = $conn->query("SELECT * FROM sharshar");

echo '<div class="cards_cont">';
while ($data_2 = $result_2 ->fetch_assoc())
{
    $img_path = "./img/".$data_2['img'];
    echo "<div class=\"cards\">
          <img src='{$img_path}'/>
          <div class='cards_info'>
            <h1>PRODUCT</h1>
            <h1>{$data_2['title']}</h1>
            <h4>{$data_2['price_2']}</h4>
          </div>
        </div>";

}
echo ' </div>';
$conn->close();
?>


      <div class="top_pr">
        <h6>BEST IN BUSINESS</h6>
        <h1>WHY CHOOSE US</h1>
      </div>
      <div class="why">
        <h4>
          Jam a man of fortune, and J must seek my fortune. hanrry ivariss
        </h4>
        <h4>look me up on github or linkedin.</h4>
        <h4>Aadel aferyad</h4>
        <h4>&copy; Copyright by lhbil</h4>
      </div>
      <div class="ft_lib">
        <div class="strlen">
          <div class="spons">
            <h1>BIG DISCOUNTS</h1>
            <h4>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
              cupiditate ex assumenda recusandae a tempora.
            </h4>
          </div>
        </div>
        <div class="strlen_cus">
          <div class="spons">
            <h1>FREE SHIPPING</h1>
            <h4>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
              cupiditate ex assumenda recusandae a tempora.
            </h4>
          </div>
        </div>
        <div class="strlen_cus">
          <div class="spons">
            <h1>SECURE PAYMENTS</h1>
            <h4>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
              cupiditate ex assumenda recusandae a tempora.
            </h4>
          </div>
        </div>
        <div class="strlen">
          <div class="spons">
            <h1>ORDER TRACKING</h1>
            <h4>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
              cupiditate ex assumenda recusandae a tempora.
            </h4>
          </div>
        </div>
      </div>
    </div>