<?php 
     require 'includes/head.php';
?>

    <?php 
        require 'includes/nav.php';
    ?>


  
    <main class="flex flex-col gap-3 mt-4 bg-[#f7f7f7]">
        <!-- <?php var_dump($_SESSION['name'])?> -->
        <?php foreach($tasks as $task) : ?>

            <div class="flex justify-between  p-3 border-2 border-green-700 rounded-2xl" id="wrapper">
            <div class="flex flex-col gap-1">
                <h2 class="text-xl font-semibold"><?=$task['title']?></h2>
                <span><?=htmlspecialchars($task['activity'])?></span>
                <span class="text-green-600 font-bold"><?= $task['time']?></span>
            </div>

            <div class="flex flex-col gap-2">
                <a href="edit?id=<?= $task['id']?>"  class="text-blue-700 cursor-pointer"><i class="fa fa-edit" style="font-size:20px"></i></a>

                <button class="text-red-700 cursor-pointer" value=<?=$task['id']?> id="openModal"><i class="fa fa-trash-o" style="font-size:20px"></i></button>
            </div>
        </div>

        <?php endforeach;?>

    </main>
    <!-- <?php 
        require 'includes/footer.php';
    ?> -->
