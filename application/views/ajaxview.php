<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>

<h1>Table Headers</h1>

<table>
  <tr>
    <th>Name</th>
    <th>Username</th>
  </tr>
  <?php foreach($resut as $key=>$data){?>
  <tr id="myTable">
    <td><?php echo $data->username?></td>
    <td><?php echo $data->email?></td>    
  </tr>
  <?php }?>
</table>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    
        $( window ).on("load", function(){
            $( "tr:even" ).css( "background-color", "#bbf" );
            $( "tr:odd" ).css( "background-color", "red" );

});
</script>
</html>
