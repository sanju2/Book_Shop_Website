<?php
$connect = mysqli_connect('localhost', 'root', '', 'bookshop');

/* if( $connect ){
  echo 'Yes. It is working';
  } */

$search = $_POST['search'];

if (!empty($search)) {

    $query = "SELECT * FROM book WHERE name LIKE '$search%'";
    $search_query = mysqli_query($connect, $query);

    if (!$search_query) {
        // die('QUERY FAILED' . mysqli_error($connect));
    }

    while ($row = mysqli_fetch_array($search_query)) {
        $brand = $row['name'];
        $price3 = $row['price'];
        ?>

        <ul class="list-unstyled">
            <?php echo "<li>{$brand}</li> . <br />" ?>
            <?php echo "<li>{$price3}</li> . <br />" ?>


        </ul>
        <?php
    }
}
