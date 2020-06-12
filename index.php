<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>發票輸入</title>
    <link rel="stylesheet" href="plugins/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/my.css">
    <link rel="shortuct icon" href="imgs/1591068508.ico" type="images/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@700&family=Roboto:wght@100&family=Teko:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6a1827a07d.js" crossorigin="anonymous"></script>
    <script src="plugins/jquery-3.5.1.min.js"></script>
    <script src="plugins/bootstrap.bundle.min.js"></script>
</head>
<body>
<tbody>
<div class="container">
<form action="SaveInvoice.php" method="post">
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">期別:</th>
      <th scope="col"><select name="period">
    <option value="1">1,2</option>
    <option value="2">3,4</option>
    <option value="3">5,6</option>
    <option value="4">7,8</option>
    <option value="5">9,10</option>
    <option value="6">11,12</option>
</select></th>
      
    </tr>
  </thead>
  
    <tr>
      <th scope="row">年分:</th>
      <td><select name="year">
    <option value="2020">2020</option>
    <option value="2021">2021</option>
    <option value="2022">2022</option>
</select></td>
    </tr>
    <tr>
      <th scope="row">英文編號:</th>
      <td>  <input type="text" name="code"></input></td>
    </tr>
    <tr>
      <th scope="row">數字編號::</th>
      <td><input type="number" name="number"></input></td>
     
    </tr>
    <tr>
      <th scope="row">花費:</th>
      <td><input type="number" name="expend"></input></td>
    </tr>
    <tr>
    
    <td class="text-right"><input type="reset" value="reset"></input></td>
    <td class="text-left"><input type="submit" value="save"></input></td>
  </tbody>
</table>
</form>
</div>
</body>
</html>

