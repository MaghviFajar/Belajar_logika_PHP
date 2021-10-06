<div class="jumbotron ">
    <h1>
        Ini Halaman Blog
    </h1>
    <ul class= "nav nav-pills flex-column">
                        <li class="nav-item">
                            <a class="nav=link active" href="#">Aktif</a>
                        </li>
                        <li <?php if(isset($_GET["page"]))
                        {
                            if(in_array($_GET['page'],['tambah_blog']))
                            {
                              echo 'class="actived"';
                            }
                
                        }?>><a  href="coba.4.php?page=tambah_blog">Tambah Blog</a>
                        
                        <li class="nav-item" <?php if (in_array($_GET['page'],['lihat_blog'])) {
                            echo 'class="actived"';
                        }?>>
                            <a class="nav-link" href="coba.4.php?page=lihat_blog">Lihat Blog</a>
                         </li>
                    <li class="nav-item">
                        <a class="nac-link disabled" href="#">Disabled</a>
                    </li>
    </ul>
</div>