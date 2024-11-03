<?php require_once 'navbar.php'?>
<main class="feed">
    <form class="new-post" method="post">
        <img src=".\Complementos\\user-icon.png" alt="Perfil" class="profile-pic" />
        <textarea name="post-content" placeholder="No que você está pensando?"></textarea>
        <button id="Enviar" type="submit">Enviar</button>
    </form>
            
    <div class="posts">
        <?php foreach($posts as $post):?>
            <div class="post">
                <div class="post-info">
                    <img src=".\Complementos\\user-icon.png" alt="Ícone de usuário" class="profile-pic">
                    <h4 style="margin-right:5px"><?php echo $post['name']." :"?></h4>
                    <p><?php echo $post["content"]?></p>
                </div>
                    
                <div class="post-options">
                    <span><img class="icons" src=".\Complementos\\rede-social.png" alt=""><?php echo $post['likes']?></span>
                    <span><img class="icons" src=".\Complementos\\comente.png" alt=""><?php echo $post['comment_quantity']?></span>
                    <span><img class="icons" src=".\Complementos\\calendario.png" alt=""></span>
                    <span>
                        <?php $data = new DateTime($post["publish_date"]);
                            echo $data->format('d-m-Y')
                        ?>
                    </span>
                </div>
                    
            </div>
        <?php endforeach?>
    </div>
</main>
</body>
</html>
