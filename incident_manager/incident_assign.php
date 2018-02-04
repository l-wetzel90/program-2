<?php include '../view/header.php'; ?>
<main>
    <h2>Assign Incident</h2>
    <form action="." method="post">
        <input type="hidden" name="action" value="assign_incident">
        <label>Customer:  </label><label><?php $incident['firstName'] . ' ' . $incident['lastName']?></label>
        
        <label>Product:  </label><label><?php $incident['productCode']?></label>
        
        <label>Technician:  </label><label><?php 'technician_id' ?></label>
        
        
        <input type="input" name="email" 
               value="<?php echo htmlspecialchars($email); ?>">&nbsp;
        <input type="submit" value="Assign Incident">
        

</form>
</main>
<?php include '../view/footer.php'; ?>