
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  <table class="table">
  <thead>
    <tr>
      <th scope="col"> S.N</th>
      <th scope="col">Day</th>
      <th scope="col">date</th>
      <th scope="col">month</th>
      <th scope="col">year </th>
    </tr>
  </thead>
  <tbody>

  <?php
   date_default_timezone_set('Asia/Dhaka');

   $year = date('Y');
   $momth = date('m');
   $daysInMonth = date ('t');

   for ($day = 1; $day <= $daysInMonth; $day++ ){
    $dateString = sprintf('%d-%d-%d ', $year, $momth, $day);
    $formattedDate = date ('D, F j/y', strtotime($dateString));
    $formattedDate1 = date ('d', strtotime($dateString));
    $formattedDate2 = date ('l', strtotime($dateString));
    $formattedDate3 = date ('d', strtotime($dateString));
    $formattedDate4 = date ('M', strtotime($dateString));
    $formattedDate5 = date ('y', strtotime($dateString));
   // echo $formattedDate . "\n";
   
   
  ?>
    <tr>
      <th scope="row"> <?php   echo $formattedDate1 ?> </th>
      <td> <?php echo $formattedDate2  ?> </td>
      <td> <?php echo $formattedDate3     ?>   </td>
      <td> <?php echo $formattedDate4                          ?> </td>
      <td> <?php echo $formattedDate5     ?> </td>
    </tr>
  <?php }  ?>

  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>