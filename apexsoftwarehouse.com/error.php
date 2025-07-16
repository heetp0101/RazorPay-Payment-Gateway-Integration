<?php
$name = $_POST['name'];
echo $name;
?>

<script>
    const data = "<?php echo $name; ?>";
 alert(data);
</script>