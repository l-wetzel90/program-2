<?php include '../view/header.php'; ?>
<?php $_SESSION['incident']['key2']= filter_input(INPUT_POST, "technician_id");?>

<main>
    <!-- <?php var_dump($_SESSION['incident']);?>
    <?php var_dump($incident);?> -->
    <h2>Assign Incident</h2>
    
    <form action="" method="post">
        <input type="hidden" name="action" value="assign_incident">
<!--        <input type="hidden" name="incident_id"
                       value="<?php echo htmlspecialchars($incident['incidentID']); ?>">-->
        
        
        <?php foreach ($incident as $inc) : ?>
        <label>Customer:  </label><label><?php echo htmlspecialchars($inc['firstName'] . ' ' . $inc['lastName']); ?></label><br>
        
        <label>Product:  </label><label><?php echo htmlspecialchars($inc['productCode']); ?></label><br>
        
        <label>Technician:  </label><label><?php echo filter_input(INPUT_POST,'technician_name'); ?></label><br>
        
        <?php endforeach; ?>

        <input type="submit" value="Assign Incident">
    </form>


</main>
<?php include '../view/footer.php'; ?>