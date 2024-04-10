<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../taskApp/assets/style.css">
    <!-- <link rel="stylesheet" href="../assets/style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <script defer>
        document.addEventListener("DOMContentLoaded", ()=>{
            let modal = document.querySelectorAll('#openModal')
            modal.forEach((element, i) => {
                element.addEventListener('click', (event)=>{
                    let url;
                    let output = element.getAttribute("value")
                     url = "http://localhost/taskApp/home?id=" + encodeURIComponent(output);
                    window.location.href = url;
                })
            })
        })
    
    </script>
</head>
<body class="h-full">
    
<div class="container min-h-[90vh] border-[2px] border-green-700 w-[40%] mx-auto p-3 rounded-2xl translate-y-[1.5rem]">