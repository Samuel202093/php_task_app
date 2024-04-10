<?php 
        require 'includes/head.php';
?>

    <!-- <?php 
        require 'includes/nav.php';
    ?> -->
   
    <main class="flex flex-col gap-6 bg-[#f7f7f7] border-2y border-green-700y">
        <div class="flex flex-row justify-center items-center">
            <h1 class="font-semibold text-2xl font-seriff text-[rgba(0,0,0,0.8)]">Edit Note</h1>
        </div>
        <form action="" class="flex flex-col gap-6" method="POST">
            <input type="text" class="rounded-2xl border-[1px]" name="title" id="" placeholder="Enter Title" value="<?= $task['title'] ?>">
    
            <input type="text" class="rounded-2xl border-[1px]" name="time" id="" value="<?= $task['time']?>">
        
            <textarea name="activity" class="rounded-2xl border-[1px]" id="" cols="30" rows="15" placeholder="Enter Description"><?= $task['activity']?></textarea>
        
            <button class="flex items-center self-center rounded-xl font-semibold px-4 py-2 bg-green-700 text-white">save</button>
        </form>
    </main>
    <!-- <?php 
        require '../includes/footer.php';
    ?> -->
