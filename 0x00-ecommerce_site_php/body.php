<?php
$conn = new mysqli("localhost", "haruma", "kjkszpj987", "Test1");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$result = $conn->query("SELECT * FROM sharshar");

while ($data = $result->fetch_assoc())
{
    echo $data['id'] . "<br>";
    echo $data['title'] . "<br>";
    echo $data['price_1'] . "<br>";
    echo $data['price_2'] . "<br>";
    $img_path = "./img/".$data['img'];
    echo "<img src='{$img_path}' width='100px'>";

}

$conn->close();
?>

<div class="core">
      <div class="cont">
        <img src="./img/bg_1.jpg" alt="" id="banner" />
      </div>
      <div class="ichhar">
        <h6>NEW COLLECTION</h6>
        <h1>THE NEW RING</h1>
        <h1>SENSATION</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <p id="parag">Est maxime, numquam rem ipsam corrupti sapiente?</p>
        <a href="">SHOP NOW</a>
      </div>
    </div>
    <div class="container">
      <div class="top_pr">
        <h6>POPULAR PRODUCTS</h6>
        <h1>TRENDING NOW</h1>
      </div>
      <div class="cards_cont">
        <div class="cards">
          <img src="./img/pr_4.jpg" alt="" />
          <div class="cards_info">
            <h1>PRODUCT</h1>
            <h1>NAME 1</h1>
            <h4>$495.00</h4>
          </div>
        </div>
        <div class="cards">
          <img src="./img/pr_3.jpg" alt="" />
          <div class="cards_info">
            <h1>PRODUCT</h1>
            <h1>NAME 10</h1>
            <h4>$1770.00</h4>
          </div>
        </div>
        <div class="cards">
          <img src="./img/pr_2.jpg" alt="" />
          <div class="cards_info">
            <h1>PRODUCT</h1>
            <h1>NAME 11</h1>
            <h4>$1452.00</h4>
          </div>
        </div>
        <div class="cards">
          <img src="./img/pr_1.jpg" alt="" />
          <div class="cards_info">
            <h1>PRODUCT</h1>
            <h1>NAME 12</h1>
            <h4>$2445.00</h4>
          </div>
        </div>
      </div>
      <div class="top_pr">
        <h6>SHOP</h6>
        <h1>BEST SELLING</h1>
      </div>
      <div class="cards_cont">
        <div class="cards">
          <img src="./img/pr_4.jpg" alt="" />
          <div class="cards_info">
            <h1>PRODUCT</h1>
            <h1>NAME 1</h1>
            <h4>$495.00</h4>
          </div>
        </div>
        <div class="cards">
          <img src="./img/pr_3.jpg" alt="" />
          <div class="cards_info">
            <h1>PRODUCT</h1>
            <h1>NAME 10</h1>
            <h4>$1770.00</h4>
          </div>
        </div>
        <div class="cards">
          <img src="./img/pr_2.jpg" alt="" />
          <div class="cards_info">
            <h1>PRODUCT</h1>
            <h1>NAME 11</h1>
            <h4>$1452.00</h4>
          </div>
        </div>
        <div class="cards">
          <img src="./img/pr_1.jpg" alt="" />
          <div class="cards_info">
            <h1>PRODUCT</h1>
            <h1>NAME 12</h1>
            <h4>$2445.00</h4>
          </div>
        </div>
      </div>
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