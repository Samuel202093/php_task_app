<?php 
        require 'includes/head.php';
?>

    <!-- <?php 
        require 'includes/nav.php';
    ?> -->
   
    <main class="flex flex-col gap-6 bg-[#f7f7f7] border-2y border-green-700y">
        <a href="home" class="absolute top-[3%] left-[3%]">
        <i class="fa fa-arrow-left" style="font-size:20px; color:rgba(0, 0, 0, 0.8)"></i>
        </a>
        <div class="flex flex-row justify-center items-center">
            <h1 class="font-semibold text-2xl font-seriff text-[rgba(0,0,0,0.8)]">Add Note</h1>
        </div>
        <form action="" class="flex flex-col gap-6 w-[100%]" method="POST">
            <div>
                <input type="text" class="w-full rounded-2xl border-[1px]" name="title" id="" placeholder="Enter Title">
                <?php if(isset($errors['title'])): ?>
                    <p class="text-red-700 text-xs mt-2 ml-4"><?= $errors['title'] ?></p>
                <?php endif; ?>
            </div>
                
            <div>
                <input type="text" class="w-full rounded-2xl border-[1px]" name="time" id="" placeholder="Enter Time">
                <?php if(isset($errors['time'])): ?>
                    <p class="text-red-700 text-xs mt-2 ml-4"><?= $errors['time'] ?></p>
                <?php endif; ?>
            </div>
        
            <div>
                <textarea name="activity" class="w-full rounded-2xl border-[1px]" id="" cols="30" rows="15" placeholder="Enter Description"></textarea>
                <?php if(isset($errors['activity'])): ?>
                <p class="text-red-700 text-xs mt-2 ml-4"><?= $errors['activity'] ?></p>
                <?php endif; ?>
            </div>

        
            <button class="flex items-center self-center rounded-xl font-semibold px-4 py-2 bg-green-700 text-white">submit</button>
        </form>
    </main>
    <!-- <?php 
        require '../includes/footer.php';
    ?> -->
