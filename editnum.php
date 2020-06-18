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

    <style>
    a {color:lightgreen;}
    </style>
</head>
<body background="../invoice/imgs/w1680.jpg">
<tbody>
<div class="container">
<form action="SaveInvoice2.php" method="post">
    <table class="table table-dark">
    
    <div class="text-center">
    <a href="index.php"><button type="button" class="btn btn-secondary btn-lg ">新增發票</a>
    <a href="List.php?period=1"><button type="button" class="btn btn-secondary btn-lg ">中獎發票</a>
    <a href="List2.php?period=1"><button type="button" class="btn btn-secondary btn-lg ">發票列表</a>
    <a href="editnum.php"><button type="button" class="btn btn-secondary btn-lg ">新增獎號</a>
    </div>    

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
      <th scope="row">數字編號3碼(六獎):</th>
      <td><input type="number" name="num"></input></td>
     
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

