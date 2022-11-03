<?php 
require_once './inc/header.inc.php';

?>
<main>

<h1>Cathy Derocquencourt</h1>
<p class="pTitle">Développeuse Web/Web mobile</p>
    <div class="lineFlex">
        <div class="line"></div>
    </div>
<div class="container">
    <h3>Qui suis-je ?</h3>
    <div class="describe">
        <div class="img">
            <img class="myImg" src="./img/gojo.png" alt="moi">
        </div>
        <div class="myDescribe">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus veniam adipisci alias quae fuga recusandae nemo odit in. Dolorem atque deleniti porro quae itaque ullam, eius ipsam velit quo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex incidunt, ipsa quas veritatis accusamus odio facilis autem voluptas quasi, illum aperiam voluptate repellendus reprehenderit omnis, nesciunt modi ab ipsam atque.</p>
        </div>
    </div>
    <div class="myProjects">
        <h3>Mes projets</h3>
        <div class="projects">
            <div class="article">
                <img class="imgArticle" src="./img/gojo.png" alt="">
                <p class="pArticle">Mon premier projet effectué en formation consistant à reproduire une maquette pour une évluation</p>
                <button type="button">Lire la suite</button>
            </div>
            <div class="article">
            <img class="imgArticle" src="./img/gojo.png" alt="">
                <p class="pArticle">Mon premier projet effectué en formation consistant à reproduire une maquette pour une évluation</p>
                <button>Lire la suite</button>
            </div>
            <div class="article">
            <img class="imgArticle" src="./img/gojo.png" alt="">
                <p class="pArticle">Mon premier projet effectué en formation consistant à reproduire une maquette pour une évluation</p>
                <button>Lire la suite</button>
            </div>
        </div>
    </div>
    <h3>Contactez-moi !</h3>
    <form action="" method="POST" id="form">
        <div class="form">
            <div class="formWidth">
                <div class="label">
                    <label for="firstname">Prénom :</label>
                    <input class="input" type="text" name="firstname" id="firstname">
                </div>
                <div class="label">
                    <label for="name">Nom :</label>
                    <input class="input" type="text" name="name" id="name">
                </div>
                <div class="label">
                    <label for="mail">Email :</label>
                    <input class="input" type="email" name="mail" id="mail">
                </div>
                <div class="label">
                    <label for="message">Message :</label>
                    <textarea class="input" name="message" id="message" cols="30" rows="10"></textarea>
                </div>
            </div>
        </div>
    </form>
</div>
</main>

<?php 

require_once './inc/footer.inc.php';

?>