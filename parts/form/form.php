<form action="index.php">
  <select name="part">
    <?php foreach ($dir_names as $option): ?>
  <option value="<?php echo $option; ?>"><?php echo $option; ?></option>
    <?php endforeach; ?>
  </select>
  <button>select</button>
</form>
