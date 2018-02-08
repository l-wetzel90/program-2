<?php include '../view/header.php'; ?>
<?php $_SESSION['incident']['key2'] = filter_input(INPUT_POST,'tecnician_id');?>

<main>
   
    <?php var_dump($incident);?> 
    
    
    <h2>Assign Incident</h2>
    
    <?php if (isset($message)) : ?>
        <p><?php echo $message; ?></p>
        <p><a href="?action=incident_select">Select Another Incident</a></p>
    <?php else: ?>
    
    <form action="." method="post">
        <input type="hidden" name="action" value="assign_incident">
<!--        <input type="hidden" name="incident_id"
                       value="<?php echo htmlspecialchars($incident['incidentID']); ?>">-->
        
        
        <?php foreach ($incident as $inc) : ?> 
        <label>Customer:  </label><label><?php echo htmlspecialchars($inc['firstName'] . ' ' . $inc['lastName']); ?></label><br>
        
        <label>Product:  </label><label><?php echo htmlspecialchars($inc['productCode']); ?></label><br>
        
        <label>Technician:  </label><label name='tech'><?php echo filter_input(INPUT_POST,'technician_name'); ?></label><br>
        
        <?php endforeach; ?> 

        <input type="submit" value="Assign Incident">
    </form>
        
        <?php endif; ?>
<?php var_dump($_SESSION);?>

</main>
<?php include '../view/footer.php'; ?>