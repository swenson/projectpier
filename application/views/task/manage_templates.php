<?php
  set_page_title('Delete Template');
  project_tabbed_navigation(PROJECT_TAB_TASKS);
  project_crumbs(array(
    array(lang('tasks'), get_url('task'))
  ));

?>

<?php tpl_display(get_template_path('form_errors')) ?>

<form method="post">
  <div>
    <select name="delete_id">
    <?php foreach ($templates as $template) { ?>
      <option value="<?php echo $template->getId(); ?>"><?php echo $template->getName(); ?></option>
    <?php } // foreach ?>
    </select>
  </div>

  <?php echo submit_button(lang('delete template')); ?>

</form>
