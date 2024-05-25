<?php
class MSD
{
    public function index()
    {
        echo "<center>
        <h2  style='font-size:12vh;margin-top:32vh;font-weight:bolder'>Page Not Found</h2>
        <h1  style='font-size:10vh;margin-top:-8vh;margin-left:7vw;font-weight:bolder'>Redirecting to HomePage in <input style='font-size:10vh;width:10vw;border:none;outline:none;pointer-events: none;' id='ram' type=text value=3></h1>
       
        <center>";
        echo "<script>
        rr();

        function rr() {
            setTimeout(() => {
                console.log('red')
                ram.value =Number(ram.value)-Number(1);
            }, 1000)
            setTimeout(() => {
                console.log('red')
                ram.value =Number(ram.value)-Number(1);
            }, 2000)
            setTimeout(() => {
                console.log('red')
                ram.value =Number(ram.value)-Number(1);
                location.href='http://[::1]/E~Commerce/'
        }, 3000)
    }
        </script>";
    }
}
?>
<!-- <script>
    function riz() {
        while (ram.value != 0) {
            ram.value -= 1;
            setTimeout(() => {
                console.log(1);
            }, 2000);
        }
    }
    riz();
</script> -->