<?php include '../view/header.php'; ?>


<main>
    <h2>Assign Incident</h2>
    
    <form action="" method="post">
        <input type="hidden" name="action" value="assign_incident">
<!--        <input type="hidden" name="incident_id"
                       value="<?php echo htmlspecialchars($incident['incidentID']); ?>">-->
        
        <label>Customer:  </label><label><?php echo $customer_id; ?></label><br>
        
        <label>Product:  </label><label><?php echo htmlspecialchars($incident['productCode']); ?></label><br>
        
        <label>Technician:  </label><label><?php echo $technician_id; ?></label><br>
        
        

        <input type="submit" value="Assign Incident">
    </form>


</main>
<?php include '../view/footer.php'; ?>