<!-- Record tasks user planned -->
<?php
echo "Hello";
echo $_POST['hour'];
if (!empty($_POST)) {
    // echo "not empty";
    if (isset($_POST['hour']) && isset($_POST['min']) && isset($_POST['newTaskName'])) {
        $hour = escape($_POST['hour']);
        $min = escape($_POST['min']);
        $new_task_name = escape($_POST['newTaskName']);
        echo $hour;
        // currently assume only one user, change later
        $user_id = 1;
        $db->query("INSERT INTO tasks (task_name, created_time, task_type, user_id, done)
        VALUES ({$new_task_name}, NOW(),'NONE', 1, 0)");
        echo $db->error;
    }
}
echo "empty";
?>