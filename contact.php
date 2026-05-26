<?php require_once '../include/header.php' ?>

    <main class="section">
        <div class="content form">
            <h1 class="form__title">Contact</h1>

            <form class="form__formulario" action="" method="post">
                <label for="">Name</label>
                <input type="text" name="name" placeholder="Your Name">

                <label for="">Email</label>
                <input type="email" name="mail" placeholder="Your Email" id="">

                <label for="">Message</label>
                <textarea name="message" placeholder="Your Message" id="textarea"></textarea>

                <input type="submit" id="submit" value="SEND">
            </form>
        </div>
    </main>

<?php require_once '../include/footer.php' ?>