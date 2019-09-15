<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<style>
.container {
    max-width: 1500px !important
}
</style>
</head>
<body>
<?php //echo base_url();?>

<nav  class="navbar navbar-dark bg-dark" style="height:50px;" >
<li><a href="<?php echo site_url('user/logout');?>"><?php echo $this->lang->line('logout');?></a></li>

</nav>
<div style="height:50px;">
</div>
<div >

    <div style="height:150px; margin:auto; width:50%"><h1 align="center">This is heading 1</h1></div>

</div>







            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card" style="width: 100%;">
                        <img src="<?php echo base_url('images/logo.png');?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="<?php echo site_url('Login/unit1');?>"  class="btn btn-primary">Go somewhere</a>
                        </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card" style="width: 100%;">
                        <img src="<?php echo base_url('images/logo.png');?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a  href="<?php echo site_url('Login/unit2');?>" class="btn btn-primary">Go somewhere</a>
                        </div>
                        </div>
                    </div>


                    <div class="col">
                        <div class="card" style="width: 100%;">
                        <img src="<?php echo base_url('images/logo.png');?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="<?php echo site_url('Login/unit3');?>"  class="btn btn-primary">Go somewhere</a>
                        </div>
                        </div>
                    </div>


                    <div class="col">
                        <div class="card" style="width: 100%;">
                        <img src="<?php echo base_url('images/logo.png');?>"class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a  href="<?php echo site_url('Login/unit4');?>" class="btn btn-primary">Go somewhere</a>
                        </div>
                        </div>
                    </div>
                                            
                </div>
            
            
            </div>
 </body>           