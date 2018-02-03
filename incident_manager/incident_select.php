<?php include '../view/header.php'; ?>
<?php $inci = unassigned_tech()?>
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
        <?php foreach ($inci as $incident) : ?>
        <tr>
            <td><?php echo htmlspecialchars($incident['customer_id']); ?></td>
            <td><?php echo htmlspecialchars($incident['product_code']); ?></td>
            <td><?php echo htmlspecialchars($incident['date_opened']); ?></td>
            <td><?php echo htmlspecialchars($incident['title']); ?></td>
            <td><?php echo htmlspecialchars($incident['description']); ?></td>
            <td><form action="." method="post">
                <input type="hidden" name="action"
                       value="incident_select">
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