<?php

  if ($this->session->flashdata('Login_Admin') == TRUE) { ?>
    <script>
      $(document).ready(function() {
    // Kode SweetAlert Anda di sini
        Swal.fire({
            icon: 'success',
            title: 'Login Berhasil',
            text: 'Anda berhasil login sebagai admin!'
        });
    });

    </script>
  <?php }

  ?>

<style>
  #about{
           position: relative; /* Memastikan posisi relatif */
            z-index: 1; /* Atur nilai z-index */
            background-image: url('<?= base_url('assets/')?>/img/bg3.jpg');
            background-size: cover;
            background-position: center;
            height: 55vh;
            width: 100%;
            
            /* Properti latar belakang */
        }
</style>
<!-- about -->
    <section id="about">
        <div class="container" style="backdrop-filter: blur(5px); height: 55vh; width: 100%; margin-left: 210px">
            <div class="row justify-content-center" style="position: relative; top: 25%;">
                <div>
                    <h2 class="mb-2" style="color: #FFFF; font-size: 40px; font-weight: bold; margin-top: 20; margin-left: 1%;">Selamat Datang Di</h2>
                    <h1 class="mb-2" style=" color: #FFFF; font-size: 55px; font-weight: bold; margin-left: 1%;">Sistem Informasi Analisis Beban Kerja</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- end about -->
    <!-- about -->
    <section id="des" style="background-color: #0766AD ; height: 40vh; width: 84.5%; margin-left: 210px ">
        <div class="container mx-2">
            <div class="row justify-content-center fs-2 text-justify ">
                <div class="col-md-12 my-web">
                    <h1 class="text-center" style="color:#FFFF; font-size: 30px; font-weight:bold; margin-top: 2%;">SIABEKA</h1>
                </div>
                <div class="col-md-5 my-web ">
                    <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga culpa perspiciatis quibusdam ex maxime maiores fugiat adipisci at? Labore quis ea perferendis alias officiis expedita ab, quisquam magnam quas dolore! </p>
                </div>
                <div class="col-md-5 my-web ">
                    <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quisquam autem incidunt odio, doloribus magnam, aliquam mollitia in, enim ullam quasi dignissimos praesentium omnis? Praesentium repellat qui illo magni voluptatem!</p>
                </div>
            </div>
        </div>

    </section>

    <!-- end about -->

</body>
</html>
