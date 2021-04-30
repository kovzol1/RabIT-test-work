<?php
    $title="User list"; //title of the current page
    include("include/top.php");
	$sql = 'SELECT * FROM users Order by id';
	$pdo = $db->prepare($sql);
	$result = $db->query($sql);
?>
   <!--This is the body of the page-->
    <section class="index">
    <h1 class="pagetitle">User list</h1>
    <table class="test">
    <thead class="thead">
    <tr id="theader">
      <th class="tid">UserID</th>
      <th class="tid">User name</th>
    </tr>
    </thead>
    <tbody id="userlist">
    <tr class='tdata'>
          <?php foreach($result as $row) {?>
	      <td><?php echo $row['id']; ?></td>
		  <td><?php echo $row['name']; ?></td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
    </section>
<!--This is the foot of the page -->
<!--<footer>
</footer>-->
</body>
</html>
