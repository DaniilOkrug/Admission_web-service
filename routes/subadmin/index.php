<?php
require '../../config.php';
require '../scripts/settings.php';

$stmt = $con->prepare('SELECT fname, sname, tname, date, phone, address, email, iin, id_number FROM students WHERE ready = ?');

$value = 1;
$stmt->bind_param('i', $value);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_all();

$result->free_result();
$stmt->close();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Приемная комиссия</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<?php require '../modules/header.php';?>

<div class="container">
  
  <div>
    <h2 class="mt-3 mb-3">Кандидаты</h2>
    <hr>
    <p>Тут представлены абитуренты, подавшие заявку на обучение в университете.</p>
  </div>

  <?php
  echo "
  <div class='accordion' id='accordionExample'>";

  foreach ($row as $col){
    echo "
    <div class='card'>
      <div class='card-header' id='headingOne'>
        <h2 class='mb-0'>
          <button class='btn btn-link collapsed' type='button' data-toggle='collapse' data-target='#"; echo $target = generate_string(); echo"' aria-expanded='true' aria-controls='"; echo $target; echo "'>";
        echo $col[1]." ".$col[0]." ".$col[2];
    echo "
          </button>
        </h2>
      </div>
      <div id='"; echo $target; echo "' class='collapse' aria-labelledby='headingOne' data-parent='#accordionExample'>
        <div class='card-body'>
        <ul class='list-unstyled'>
          <li>Номер удостоверения личности: ".$col[8]."</li>
          <li>ИИН: ".$col[7]."</li>
          <li>E-mail: ".$col[6]."</li>
          <li>Номер телефона: ".$col[4]."</li>
          <li>Адрес: ".$col[5]."</li>
          <li>Дата рождения: ".$col[3]."</li>
        </ul>
        </div>
      </div>
    </div>";
  }

  echo '</div>';
   ?>
</div>
</body>
</html>