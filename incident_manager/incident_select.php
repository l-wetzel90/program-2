<?php include '../view/header.php'; ?>
<main>

    <h2>Create the Incident Select Page and CHANGE THIS HEADLINE</h2>
    <p>your list goes here?</p>
    <table>
        <tr>
            <th>Customer ID</th>
            <th>Product ID</th>
            <th>Date Opened</th>
            <th>Title</th>
            <th>Description</th>
            <th>&nbsp;</th>
        </tr>
        <?php foreach ($technicians as $technician) : ?>
        <tr>
            <td><?php echo htmlspecialchars($technician->getFullName()); ?></td>
            <td><?php echo htmlspecialchars($technician->getEmail()); ?></td>
            <td><?php echo htmlspecialchars($technician->getPhone()); ?></td>
            <td><?php echo htmlspecialchars($technician->getPassword()); ?></td>
            <td><form action="." method="post">
                <input type="hidden" name="action"
                       value="incident_show">
                <input type="hidden" name="technician_id"
                       value="<?php echo htmlspecialchars($technician->getID()); ?>">
                <input type="submit" value="Select">
            </form></td>
        </tr>
        <?php endforeach; ?>
    </table>
    
    
    <p><a href="?action=display_customer_get">Make an Incident</a></p>
</main>
<?php include '../view/footer.php'; ?>