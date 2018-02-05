<?php include '../view/header.php'; ?>
<?php $_SESSION['incident']['key1'] = filter_input(INPUT_POST, "incident_id");?>

<main>
    <?php var_dump($_SESSION);?>

    <h1>Technician List</h1>
    

    <!-- display a table of technicians -->
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>
        <?php foreach ($technicians as $technician) : ?>
        <tr>
            <td><?php echo htmlspecialchars($technician->getFullName()); ?></td>
            <td><form action="." method="post">
                <input type="hidden" name="action"
                       value="tech_select">
                <input type="hidden" name="technician_id"
                       value="<?php echo htmlspecialchars($technician->getID()); ?>">
                <input type="hidden" name="technician_name"
                       value="<?php echo htmlspecialchars($technician->getFullName()); ?>">
                <input type="submit" value="Select">
            </form></td>
        </tr>
        <?php endforeach; ?>
    </table>
    

</main>
<?php include '../view/footer.php'; ?>

