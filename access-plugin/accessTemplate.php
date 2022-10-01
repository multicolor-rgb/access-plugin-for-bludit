<div
    class="alert accessplugin"
    data-color="<?php echo $this->getValue('textcolor');?>"
    data-background="<?php echo $this->getValue('backgroundcolor');?>">
    <div class="wrapper">

        <h1><?php echo $this->getValue('title');?></h1>

        <div class="content">
            <?php echo htmlspecialchars_decode($this->getValue('regulation'));?>
        </div>

        <div class="buttons">
            <button class="btn acceptalert"><?php echo $this->getValue('agreebtn');?></button>
            <button class="btn btn-danger decidealert"><?php echo $this->getValue('notagreebtn');?></button>
        </div>

    </div>
</div>

<script>

    if ("<?php echo $this->getValue('showafteraccept');?>" == "no") {

        if (localStorage.acceptInfo == "yes") {
            document.querySelector('.alert').remove();
        };

    }


    if("<?php echo $this->getValue('disablesource');?>"=="yes"){

        document.onkeydown = function(e) {
    if(e.keyCode == 123) {
     return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
     return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
     return false;
    }
    if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
     return false;
    }

    if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)){
     return false;
    }      
 }

    }

</script>
