<?php
  set_page_title('Create Task List From Template');
  project_tabbed_navigation(PROJECT_TAB_TASKS);
  project_crumbs(array(
    array(lang('tasks'), get_url('task'))
  ));
  add_page_action(lang('add task list'), get_url('task', 'add_list'));

?>

<?php tpl_display(get_template_path('form_errors')) ?>

<form method="post">
  <div>
    <select name="from_id">
    <?php foreach ($templates as $template) { ?>
      <option value="<?php echo $template->getId(); ?>"><?php echo $template->getName(); ?></option>
    <?php } // foreach ?>
    </select>
  </div>

  <div>
    <?php echo label_tag(lang('name'), 'taskListTemplateFormName', true) ?>
    <?php echo text_field('name', '', array('class' => 'long', 'id' => 'name')) ?>
  </div>  
  <input type="hidden" name="new" value="1" />
  <?php echo submit_button(lang('create from template')); ?>

</form>
