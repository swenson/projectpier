<?php
  set_page_title('Save As Template');
  project_tabbed_navigation(PROJECT_TAB_TASKS);
  project_crumbs(array(
    array(lang('tasks'), get_url('task')),
    array(lang('save as template'), get_url('task', 'save_as_template'))
  ));

?>

<form method="post">

<?php tpl_display(get_template_path('form_errors')) ?>
  <div>
    <p>Setting from list "<?php echo $task_list->getName(); ?>"</p>
  </div>
  <div>
    <?php echo label_tag(lang('name'), 'taskListTemplateFormName', true) ?>
    <?php echo text_field('name', $task_list->getName(), array('class' => 'long', 'id' => 'name')) ?>
  </div>  
  <input type="hidden" name="new" value="1" />
  <?php echo submit_button(lang('save as template')); ?>

</form>
