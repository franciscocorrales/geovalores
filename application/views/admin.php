
<?php include ("headeradmin.php") ;?>
<div id="siteframe">
	<div id="content">
            <div class="content-padding">
             <?php 
                            if($this->session->userdata('usuario')== TRUE){ ?>
                           
             <?php } else {?>
                
             <?php } ?>
            </div>			
        </div>
</div>
<style>
    #siteframe {
    background: none repeat scroll 0 0 #f0f0f0;
    min-height: 450px;
</style>

<?php include ("footer.php") ;?>