<?php
    $title="Advertisement list"; //title of the current page
    include("include/top.php");
    $sql = 'SELECT * FROM advertisements Order by id';
	$pdo = $db->prepare($sql);
	$result = $db->query($sql);
?>
   <!--This is the body of the page-->
    <section class="index">
    <h1 class="pagetitle">Advertisements list</h1>
    <table class="test">
    <thead class="thead">
    <tr id="theader">
      <th class="tid">ID</th>
      <th class="tid">User ID</th>
      <th class="tid">Title</th>
    </tr>
    </thead>
    <tbody id="userlist">
    <tr class='tdata'>
          <?php foreach($result as $row) {?>
	      <td><?php echo $row['id']; ?></td>
		  <td><?php echo $row['userid']; ?></td>
		  <td><?php echo $row['title']; ?></td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
    </section>
<?
    include("include/bottom.php");
?>