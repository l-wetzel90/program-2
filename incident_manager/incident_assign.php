<?php include '../view/header.php'; ?>


<main>
   
    <?php var_dump($incident);?> -->
    
    
    <h2>Assign Incident</h2>
    
    <?php if (isset($message)) : ?>
        <p><?php echo $message; ?></p>
        <p><a href="?action=incident_select">Select Another Incident</a></p>
    <?php else: ?>
    
    <form action="." method="post">
        <input type="hidden" name="action" value="assign_incident">
<!--        <input type="hidden" name="incident_id"
                       value="<?php echo htmlspecialchars($incident['incidentID']); ?>">-->
        
        
        //<?php foreach ($incident as $inc) : ?>
        <label>Customer:  </label><label><?php echo htmlspecialchars($incident['firstName'] . ' ' . $incident['lastName']); ?></label><br>
        
        <label>Product:  </label><label><?php echo htmlspecialchars($incident['productCode']); ?></label><br>
        
        <label>Technician:  </label><label name='tech'><?php echo filter_input(INPUT_POST,'technician_name'); ?></label><br>
        
        //<?php endforeach; ?>

        <input type="submit" value="Assign Incident">
    </form>
        
        <?php endif; ?>


</main>
<?php include '../view/footer.php'; ?>