<?php
if (isset($_SESSION['message'])) {
    ?>
    <div id="messageBox"
        style="overflow:hidden;position:fixed;top:20%;left:35%;width:500px;height:375px;border:1px solid grey;background-image:url(<?= base_url('uploads/Logo/success.gif') ?>);background-repeat:no-repeat;background-size:100% 100%">
    <center><p class="font-weight-bold h3" id="tex" style="opacity:0;position:relative;top:310px"><?=$_SESSION['message']?></></center>
    </div>
    <script>
        setTimeout(() => {
            tex.style.opacity=1
        }, 500);
        setInterval(() => {
            messageBox.style.opacity=0
        }, 2000);
    </script>
    <?php
}
unset($_SESSION['message']);
?>
<?php
if (isset($_SESSION['errorMessage'])) {
    ?>
    <div id="messageBin"
        style="overflow:hidden;position:fixed;top:20%;left:35%;width:500px;height:375px;border:1px solid grey;background-image:url(<?= base_url('uploads/Logo/failure.webp') ?>);background-repeat:no-repeat;background-size:100% 100%">
    <center><p class="font-weight-bold h3 text-muted" id="tex" style="opacity:0;position:relative;top:310px"><?=$_SESSION['errorMessage']?></></center>
    </div>
    <script>
        setTimeout(() => {
            tex.style.opacity=1
        }, 500);
        setInterval(() => {
            messageBin.style.opacity=0
        }, 2000);
    </script>
    <?php
}
unset($_SESSION['errorMessage']);
?>
</body>

</html>
<script>

</script>