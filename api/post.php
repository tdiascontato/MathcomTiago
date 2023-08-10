<?php 
    include_once("templates/header.php");

    if(isset($_GET['id'])){
        $postId = $_GET['id'];
        $correntPost;
        foreach($posts as $post){
            if($post['id'] == $postId){
                $correntPost = $post;
            }
        }
    }
?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?=$correntPost['title'] ?></h1>
            <p id="post-description"><?=$correntPost['description']?></p>
            <div class="img-container">
                <img src="<?=$BASE_URL?>/img/<?=$correntPost['img']?>" alt="<?=$correntPost['title']?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate repellat, qui nobis hic quam quibusdam, magnam laudantium laboriosam quisquam deleniti itaque velit molestiae inventore provident temporibus est quaerat tenetur commodi?
            Harum enim voluptas quod quo, commodi fugit aut, laboriosam distinctio assumenda dolorum corporis, consequatur mollitia aliquam. Accusamus qui facere cumque, vero deserunt eum, voluptatibus vel dolores quo iusto, velit aspernatur.
            Aliquid voluptate a ipsam modi recusandae quidem iure rem placeat! Nemo fugiat deserunt quasi sed aliquam fugit, autem totam deleniti quis ea aut. Voluptas commodi nostrum, sit culpa veniam officiis?</p>
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($correntPost['tags'] as $tag):?>
                    <li><a href="#"><?=$tag?></a></li>
                <?php endforeach;?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
            <?php foreach($categories as $category):?>
                    <li><a href="#"><?=$category?></a></li>
            <?php endforeach;?>
            </ul>
        </aside>
    </main>
<?php 
    include_once("templates/footer.php");
?>