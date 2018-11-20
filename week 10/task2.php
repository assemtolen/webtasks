<html>
<head>
<style>
select{
  width:100%;
  background:white;
  padding:5px;
  border-radius:5px;
  color:#444444;
}
input{
  border-radius:5px;
  padding:5px;
}
input[type='text'],input[type='number']{
  width:calc(100% - 12px);
}
table tr td{
  padding:10px;
  border: 1px solid black;

}
table{
  width: 50%;
  border-collapse:collapse; 
}
td{
  width: 25%;
}
<?php
$makers = ["Toyota","BMW","Mercedes"];
$engine = ["gas","diesel","petroleum"];
?>

</style>
</head>
 
<form action="task2_submit.php">
 <table>
  <tr>
    <td >Maker:</td>
    <td><select name="maker" id="makers">
      <option>Toyota</option>
      <option>BMW</option>
      <option>Mercedes</option>
    </select></td>
  </tr>
  <tr>
    <td >Year: </td>
    <td><select name="year" id="years">
      <option>2016</option>
      <option>2015</option>
      <option>2014</option>
      <option>2013</option>
      <option>2012</option>
      <option>2011</option>
      <option>2010</option>
    </select></td>
  </tr>
  <tr>
    <td>Model</td>
    <td><input type="text" name="model">
    </td>
  </tr>
  <tr>
    <td>Engine</td>
    <td><label><input type="radio" name="engine" value="petroleum"  />Petroleum</label>
      <label><input type="radio" name="engine1" value="gas" />Gas</label>
      <label><input type="radio" name="engine2" value="diesel"  />Diesel</label>
    </td>
  </tr>
  <tr>
    <td>Price</td>
    <td><input type="number" name="price">
    </td>
  </tr>
  <tr>
    <td>Additional</td>
    <td><br><input type="checkbox" name="add1" value="yes" /> Tax Payed</br>
     <input type="checkbox" name="add2"value="yes"  />Technical check passed
     <br> <input type="checkbox"name="add3" value="yes"  /> Does not require investment</</br>
    </td>
  </tr>
  <tr>
      <td><button  type="submit" name="submit">Submit</button></td>
    </tr>

</table>
</form>