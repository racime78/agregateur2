<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregateur 2</title>
    <link rel="stylesheet" href="/agregateur2/dist/style.css" />
</head>
<body>
    <?php $this->load->view('navbar'); ?>

    <section  class="text-center img-backg  content-center">
        <!-- Contenu de la section -->
    </section>

    <section class="bg-blue-500 height70 pt-8">
        <!-- Contenu de la section -->
    </section>

    <section class="height70 pt-8">
        <?php $this->load->view('slider'); ?>
        
        <h3 class="text-blue-500 text-4xl font-extrabold text-center">Que pense nos utilisateurs ?</h3>
        <?php $this->load->view('testimonial'); ?>
        <?php $this->load->view('footer'); ?>
    </section>  
    <script src="/agregateur2/dist/script.js"></script>
</body>
</html>
