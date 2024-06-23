<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <script>
  const openWindow = () => {
   document.getElementById('open').addEventListener('click', () => {
    const width = 800;
    const height = 600;
    const left = (window.innerWidth - width) / 2;
    const top = (window.innerHeight - height) / 2;
    
    window.open('ref_index.php', '_blank', `width=${width},height=${height},left=${left},top=${top}`);
   });
  } 
  function openWindowApprove(){
    document.getElementById('approve').addEventListener('click', () => {
    const width = 800;
    const height = 600;
    const left = (window.innerWidth - width) / 2;
    const top = (window.innerHeight - height) / 2;
    
    window.open('approve_index.php', '_blank', `width=${width},height=${height},left=${left},top=${top}`);
   });
  }
  window.onload = function(){
    openWindow();
    openWindowApprove();
  }
 </script>
</head>
<body>
  <button id="open">open</button>
  <button id="approve">approve</button>
</body>
</html>