<form action="index.php">
  <select class="part_selector" name="part">
  <?php foreach ($dir_names as $option): ?>
      <option value="<?php echo $option; ?>"><?php echo $option; ?></option>
  <?php endforeach; ?>
  </select>
  <button>select</button>
</form>
